<?php
namespace Home\Controller;
use Think\Controller;
class ShowCartController extends Controller{
	public function index(){
		// 读取当前登陆用户
		$uid = session('uid');
		// 定义空数组变量用来保存购物车前台遍历数组
		$cartdata = array();
		if ($uid) {
			$login = 1;
			// 实例化空的购物车表
			$list = M('shoppingcart');
			// 判断session中有没有数据
			if ($_SESSION['cart']) {
				// session中有数据，将数据库和session中的数据结合作为最终的数据
				foreach ($_SESSION['cart'] as $k => $vo) {
					// 判断数据库中是否存在session中的数据，有而结合
					$data1 = $list->where(array('gid'=>$k,'uid'=>$uid))->find();
					if ($data1) {
						// 存在修改
						$list->where(array('gid'=>$k,'uid'=>$uid))->save(array('nums'=>($vo['nums']+$data1['nums'])));
					} else {
						// 构造用户id为变量，以便存入数据库
						$vo['uid']=$uid;
						// 增加数据，保存不存在的数据到数据库
						$list->add($vo);
					}
				}
				unset($_SESSION['cart']);
			} 
			// 这里是处理完session后整合数据，发往前台
			// 实例化空的model类
			$list1 = M();
			// 多表查询
			$cartdata = $list1->table('food_goods g,food_shoppingcart s')->field('s.gid,g.gpic,g.gname,g.goldprice,s.nums,s.price gprice')->where('s.uid='.$uid.' and s.gid=g.gid')->select();
			// 重新构造gpic字段，取一张图片地址出来
			foreach ($cartdata as $key => $value) {
				$cartdata[$key]['gpic'] = explode(',', $value['gpic']);
			}
		}else{
			// 没有用登陆的购物车
			$list = M('goods');
			if ($_SESSION['cart']) {
				foreach ($_SESSION['cart'] as $key => $value) {
					$goodscart = $list->field('gid,gpic,gname,goldprice,gprice')->find($key);
					$goodscart['gpic'] = explode(',', $goodscart['gpic']);
					$goodscart['gprice'] = $value['price'];
					$goodscart['nums'] = $value['nums'];
					$cartdata[] = $goodscart;
				}
			} 
		}
		// 发送到前台
		$this->assign('cartdata',$cartdata);
		$this->assign('login',$login);
		$this->assign('title','购物车');
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this->display();
	}
	/**
	*购物车数量修改
	*/
	public function cartNums(){
		$uid= session('uid');
		$id = $_POST['gid'];
		if (empty($uid)) {
			$_SESSION['cart'][$id]['nums']=$_POST['nums'];
			echo 1;
			return;
		} else {
			// 实例化用户表的对象
			$cart = M('shoppingcart');
			// 查询登陆用户的信息
			if($cart->where(array('uid'=>$uid,'gid'=>$_POST['gid']))->save(array('nums'=>$_POST['nums']))){
				echo 1;
				return;
			}
		}
		echo 0;
	}
	/**
	*购物车删除
	*/
	public function delCart(){
		$uid = session('uid');
		$gid = $_POST['gid'];
		if (empty($uid)) {
			unset($_SESSION['cart'][$gid]);
			echo 1;
			return;
		} else {
			$del = M('shoppingcart');
			$result = $del->where(array('gid'=>$gid,'uid'=>$uid))->delete();
			if ($result) {
				echo 2;
				return;
			}
		}
		echo 0;		
	}
	/**
	*清空购物车
	*/
	public function clearCart(){
		$uid= session('uid');
		if (empty($uid)) {
			unset($_SESSION['cart']);
			echo 1;
			return;
		} else {
			unset($_SESSION['cart']);
			$clear = M('shoppingcart');
			$result = $clear->where(array('uid'=>$uid))->delete();
			if ($result) {
				echo 2;
				return;
			}
		}
		echo 0;		
	}
	/**
	*却结算按钮判断
	*/
	public function checkButton(){
		if (session('uid')) {
			echo 1;
			return;
		}
		echo 0;	
	}
	/**
	*
	*暂存收藏夹
	*/
	public function goodsCollection(){
		$uid = session('uid');
		// 实例化要操作的收藏夹表
		$collectlist = M('goodscollection');
		if ($uid) {
			$_GET['uid']=$uid;
			if ($collectlist->where($_GET)->find()) {
				$this->error('该商品已经收藏……');	
			} else {
				if ($collectlist->add($_GET)) {
					$this->error('收藏成功！');	
				} else {
					$this->error('收藏失败！');	
				}
			}
		} else {
			$this->error(' 请先登录！');
		}	
	}

	/**
	*
	*网页顶部显示的购物车
	*/
	public function viewNums(){
		$car = $this -> viewCart();
		$num = 0;
		foreach ($car as $key => $value) {
			$num += $value['nums'];
		}
		echo $num;
	}

	public function viewInfo(){
		$total=0;
		$info = $this -> viewCart();
		if ($info[0]['nums']>0) {
			$num = 0;
			foreach ($info as $key => $value) {
				$price = $value['nums']*$value['goldprice'];
				$total += $price;
				$num += $value['nums'];
			}
			$info['total'] = $num;
			$info['totalprice'] = $total;
			$this -> assign('info',$info);
			//网站配置的公共函数
			$web = D("WebConfig");
	        	$webdata = $web -> web();
	        	$this -> assign("web",$webdata);
			$this -> display('Index/shopcar');
		}else{
			echo 0;
		}		
	}

	public function viewCart(){
		// 读取当前登陆用户
		$uid = session('uid');
		// 定义空数组变量用来保存购物车前台遍历数组
		$cartdata = array();
		if ($uid) {
			$login = 1;
			// 实例化空的购物车表
			$list = M('shoppingcart');
			// 判断session中有没有数据
			if ($_SESSION['cart']) {
				// session中有数据，将数据库和session中的数据结合作为最终的数据
				foreach ($_SESSION['cart'] as $k => $vo) {
					// 判断数据库中是否存在session中的数据，有而结合
					$data1 = $list->where(array('gid'=>$k,'uid'=>$uid))->find();
					if ($data1) {
						// 存在修改
						$list->where(array('gid'=>$k,'uid'=>$uid))->save(array('nums'=>($vo['nums']+$data1['nums'])));
					} else {
						// 构造用户id为变量，以便存入数据库
						$vo['uid']=$uid;
						// 增加数据，保存不存在的数据到数据库
						$list->add($vo);
					}
				}
				unset($_SESSION['cart']);
			} 
			// 这里是处理完session后整合数据，发往前台
			// 实例化空的model类
			$list1 = M();
			// 多表查询
			$cartdata = $list1->table('food_goods g,food_shoppingcart s')->field('s.gid,g.gpic,g.gname,g.goldprice,s.nums,s.price gprice')->where('s.uid='.$uid.' and s.gid=g.gid')->select();
			// 重新构造gpic字段，取一张图片地址出来
			foreach ($cartdata as $key => $value) {
				$cartdata[$key]['gpic'] = explode(',', $value['gpic']);
			}
		}else{
			// 没有用登陆的购物车
			$list = M('goods');
			if ($_SESSION['cart']) {
				foreach ($_SESSION['cart'] as $key => $value) {
					$goodscart = $list->field('gid,gpic,gname,goldprice,gprice')->find($key);
					$goodscart['gpic'] = explode(',', $goodscart['gpic']);
					$goodscart['gprice'] = $value['price'];
					$goodscart['nums'] = $value['nums'];
					$cartdata[] = $goodscart;
				}
			}
		}
		return $cartdata;
	}
}

