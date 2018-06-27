<?php
namespace Home\Controller;
use Think\Controller;
class CenterController extends Controller{
	public function index(){
		//查询用户表
		$uid = session("uid");
		$user = M("member");
		$member = $user -> where(array("uname"=>session("uname"))) -> find();
		//查询会员等级表 将用户的等级 作为等级表的条件
		$memlevel = M("memlevel");
		if ($member['level']) {
			$level = $memlevel -> where(array("llevel"=>$member['level'])) -> find();
		}
		
		$this -> assign("member",$member);
		$this -> assign("memlevel",$level);
		$title = array("首页","个人中心");
		// 近期订单取5条
		$datalist = M();
		$order_data = $datalist->table('food_orders o,food_ordersdetails d')->field('d.id,o.onumber,o.otime,o.deliveryaddress,d.gprice,d.gnums,d.ostate')->where("o.oid=d.oid and uid=".$uid)->order('o.otime desc,o.onumber desc')->limit(5)->select();
		foreach ($order_data as $key => $value) {
			$order_data[$key]['deliveryaddress'] = explode('consignee', $value['deliveryaddress'])[1];
		}
		// 近期收藏取5条
		$collection_data = $datalist->table('food_goods g,food_goodscollection c')->field('c.id,g.gid,g.gnum,g.gname,g.goldprice')->where('c.gid=g.gid and c.uid='.$uid)->limit(5)->select();
		$this -> assign('title','个人中心');
		$this->assign('orderdata',$order_data);
		$this->assign('collectiondata',$collection_data);
		$this ->assign("bread",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//我的订单
	public function indent(){
		$uid = session("uid");
		// 近期订单取5条
		$datalist = M();
		// 计算总条数
		$total =$datalist->table('food_orders o,food_ordersdetails d')->field('count(*) count')->where("o.oid=d.oid and o.uid=".$uid)->find();
		$totalnums = $total['count'];
		// 实例化分页类
		$pages = new \Think\Page($totalnums,10);
		// 获取分页的条件
		$limit = $pages->firstRow.','.$pages->listRows;
		$order_data = $datalist->table('food_orders o,food_ordersdetails d')->field('d.id,o.onumber,o.otime,o.deliveryaddress,d.gprice,d.gnums,d.ostate')->where("o.oid=d.oid and o.uid=".$uid)->order('o.otime desc,o.onumber desc')->limit($limit)->select();
		foreach ($order_data as $key => $value) {
			$order_data[$key]['deliveryaddress'] = explode('consignee', $value['deliveryaddress'])[1];
		}
		$this->assign('page',$pages->show());
		$this->assign('orderdata',$order_data);
		$data = array("首页","个人中心","我的订单");
		$this -> assign('title','个人中心');
		$this -> assign("bread",$data);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//我的收藏页面
	public function collect(){
		$uid = session('uid');
		// 近期订单取5条
		$datalist = M();
		// 近期收藏取5条
		$collection_data = $datalist->table('food_goods g,food_goodscollection c')->field('c.id,g.gnum,g.gname,g.goldprice')->where('c.gid=g.gid and c.uid='.$uid)->limit(5)->select();
		$this->assign('collectiondata',$collection_data);
		$data = array("首页","个人中心","我的收藏");
		$this -> assign('title','个人中心');
		$this -> assign("bread",$data);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//我的留言
	public function scores(){
		$data = array("首页","个人中心","我的留言");
		$this -> assign('title','我的留言');
		$this -> assign("bread",$data);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		//留言
		$mid=session('uid');
		$where['mid']=$mid;
		$arr=M('Message')->where($where)->select();
		$this->assign('data',$arr);
		$this -> display();
	}
	//留言
	public function balance(){
		if(IS_POST){
			$data['mid']=session('uid');
			$data['message']=I('post.message');
			$data['times']=time();
			if(I('post.message')==''){
				echo "<script>";
				echo "alert('留言失败,留言内容不能为空');";
				echo "location.href = '/food/index.php/Home/Center/balance';";
				echo "</script>";
				exit();
			}
			$ret=M('Message')->add($data);
			if($ret){
				echo "<script>";
				echo "alert('留言成功');";
				echo "location.href = '/food/index.php/Home/Center/scores';";
				echo "</script>";
				exit();
			}else{
				echo "<script>";
				echo "alert('留言失败');";
				echo "location.href = '/food/index.php/Home/Center/balance';";
				echo "</script>";
				exit();
			}
		}else{
			$data = array("首页","个人中心","留言");
			$this -> assign('title','留言');
			$this -> assign("bread",$data);
			//网站配置的公共函数
			$web = D("WebConfig");
			$webdata = $web -> web();
			$this -> assign("web",$webdata);
			$this -> display();
		}
	}
	//新闻
	public function news(){
		$data = array("首页","信息管理","新闻中心");
		$this -> assign('title','新闻中心');
		$this -> assign("bread",$data);
		//网站配置的公共函数
		$web = D("WebConfig");
		$webdata = $web -> web();
		$this -> assign("web",$webdata);
		//新闻
		$arr=M('News')->select();
		$this->assign('data',$arr);
		$this -> display();
	}
	//新闻
	public function zhao(){
		$data = array("首页","信息管理","招聘中心");
		$this -> assign('title','招聘中心');
		$this -> assign("bread",$data);
		//网站配置的公共函数
		$web = D("WebConfig");
		$webdata = $web -> web();
		$this -> assign("web",$webdata);
		//新闻
		$arr=M('Zhao')->select();
		$this->assign('data',$arr);
		$this -> display();
	}
	//个人资料data
	public function data(){
		//要获取session中的uname值
		//通过uname字段去数据库中查找
		$user = M("member");
		$userdata = $user -> where(array("uname"=>session("uname"))) -> find();
		$this -> assign("member",$userdata);
		$data = array("首页","个人中心","个人资料");
		$this -> assign('title','个人中心');
		$this -> assign("bread",$data);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//收货信息
	public function delivery(){
		// 读取当前登陆用户
		$uid = session('uid');
		// 收货地址显示
		$address = M('deliveryaddress');
		$adddata = $address->field('addid,tagging,address,zipcode,consignee,mphone,phone,state')->where(array('uid'=>$uid))->order('addid desc')->select();
		$data = array("首页","个人中心","收货信息");
		$this -> assign('title','个人中心');
		$this->assign('adddata',$adddata);
		$this -> assign("bread",$data);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	/**
	*
	*增加收货地址
	*/
	public function addAddress(){
		// 读取当前登陆用户
		$uid = session('uid');
		$address = M('deliveryaddress');
		// 添加用户id到post数组中
		$_POST['uid'] = $uid;
		if ($_POST['addid']) {
			if ($_POST['state']) {
				// 当条件成立是该数据被指定为了默认地址，需要改变所有地址的状态
				$address->where(array('state'=>1,'uid'=>$uid))->save(array('state'=>0));
			}
			$address->save($_POST);
		} else {
			unset($_POST['statedata']);
			if ($_POST['state']) {
				// 当条件成立是该数据被指定为了默认地址，需要改变所有地址的状态
				$address->where(array('state'=>1,'uid'=>$uid))->save(array('state'=>0));
			}
			// 添加数据，返回添加数据的id
			$address->add($_POST);
		}
	}
	/**
	*
	*删除收货地址
	*/
	public function delAddress(){
		// 实例化地址表
		$del = M('deliveryaddress');
		// 删除收货地址
		$del->where($_GET)->delete();
		$this->redirect('index.php/home/Center/delivery');
	}
	/**
	*
	*修改收货地址
	*/
	public function updateAddress(){
		// 实例化地址表
		$update = M('deliveryaddress');
		// 删除收货地址
		$addressdata = $update->find($_POST['addid']);
		echo json_encode($addressdata);
	}
	//站内信
	public function instation(){
		$data = array("首页","个人中心","站内信");
		$this -> assign("bread",$data);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//将用户填写的真实姓名，性别插入数据表中
	public function insert(){
		$member = M("member");
		//可以得到session中的uname
		$uname = $_POST['uname'];
		$res = $member->where(array("uname"=>$uname)) -> save($_POST);
		if($res){
			$this -> success("修改成功");
		}else{
			$this -> error("修改失败");
		}
	}
	// 取消订单
	public function cancelOrder(){
		$detailslist = M('ordersdetails');
		$_GET['ostate'] = 0;
		if ($detailslist->save($_GET)) {
			$this->redirect('index.php/home/Center/indent');
		} else {
			$this->error('取消订单失败！');
		}
	}
	//换货
	public function changeOrder(){
		$detailslist = M('ordersdetails');
		$_GET['ostate'] = 3;
		if ($detailslist->save($_GET)) {
			$this->redirect('index.php/home/Center/indent');
		} else {
			$this->error('取消订单失败！');
		}
	}
	//退货
	public function returnOrder(){
		$detailslist = M('ordersdetails');
		$_GET['ostate'] = 4;
		if ($detailslist->save($_GET)) {
			$this->redirect('index.php/home/Center/indent');
		} else {
			$this->error('取消订单失败！');
		}
	}

	// 删除收藏
	public function delCollection(){
		$detailslist = M('goodscollection');
		if ($detailslist->delete($_GET['id'])) {
			$this->redirect('index.php/home/Center/collect');
		} else {
			$this->error('删除收藏失败！');
		}
	}
	// 确认收货
	public function confirmOrder(){
		$detailslist = M('ordersdetails');
		$_GET['ostate'] = 5;
		if ($detailslist->save($_GET)) {
			$this->redirect('index.php/home/Center/indent');
		} else {
			$this->error('确认收货失败！');
		}
	}
}


?>