<?php
namespace Admin\Controller;
use Think\Controller;
class OrdermanageController extends Controller{
	/**
	*
	*显示所有订单
	*/
	public function index(){
		// 实例化所要操纵做的数据表
		// 订单表,用于分页操作
		$orderslist = M("orders");
		// 遍历出来的是一维数组。select遍历的二维数组。
		$datatotal = $orderslist->field('count(*) count')->find();
		// 计算满足条件的数据总数
		$totalnums = $datatotal['count'];
		// 实例化分页类
		$pages = new \Think\Page($totalnums,3);
		// 获取分页的条件
		$limit = $pages->firstRow.','.$pages->listRows;
		// 空model类
		$list = M();
		// 订单详情表
		$detailslist = M("ordersdetails");
		// 全部订单
		// 查询订单信息
		$orders_data = $list->table('food_member m,food_orders o')
			->field('o.oid,o.onumber,o.otime,o.total,o.paymethod,m.uname,o.deliveryaddress')
			->where("o.uid=m.uid")
			->limit($limit)->select();
		// 得打发往前台的中间数据，订单详情表
		foreach ($orders_data as $v) {
			$details_data[] = $list->table('food_ordersdetails d,food_goods g')->field('g.gpic,g.gname,d.gprice,d.gnums,d.ostate')->where('d.oid='.$v['oid'].' and d.gid=g.gid')->select();
		}
		// 构造gpic
		foreach ($details_data as $k => $vo) {
			foreach ($vo as $k1=> $vo1) {
				$details_data[$k][$k1]['gpic'] = explode(',', $vo1['gpic'])[0];
			}
		}
		// 分配订单信息知道前台
		$this->assign('title','订单管理');
		$this->assign('page',$pages->show());
		$this->assign('orders',$orders_data);
		$this->assign('details',$details_data);

		$this->assign('active',1);
		$this->display();
	}
	/**
	*
	*显示未发货订单
	*/
	public function nonDelivery(){
		// 实例化所要操纵做的数据表
		// 订单表详情表,用于分页操作
		$detailslist = M("ordersdetails");
		// 遍历出来的是一维数组。select遍历的二维数组。
		$datatotal = $detailslist->field('count(*) count')->where('ostate=1')->find();
		// 计算满足条件的数据总数
		$totalnums = $datatotal['count'];
		// 实例化分页类
		$pages = new \Think\Page($totalnums,10);
		// 获取分页的条件
		$limit = $pages->firstRow.','.$pages->listRows;
		// 空model类
		$list = M();
		// 订单详情表
		$deliver_data = $list->table('food_orders o,food_ordersdetails d,food_goods g')->field('g.gpic,o.onumber,g.gname,d.gprice,d.gnums,d.ostate,d.id')->where('d.oid=o.oid and d.gid=g.gid and d.ostate=1')->limit($limit)->select();
		foreach ($deliver_data as $key => $value) {
			$deliver_data[$key]['gpic'] = explode(',', $value['gpic'])[0];
		}
		// 全部订单
		// 查询订单信息
		$this->assign('page',$pages->show());
		$this->assign('deliver',$deliver_data);
		$this->assign('active',2);
		$this->display("index");
	}
	// 已发货
	public function deliverGoods(){
		// 实例化所要操纵做的数据表
		// 订单表详情表,用于分页操作
		$detailslist = M("ordersdetails");
		// 遍历出来的是一维数组。select遍历的二维数组。
		$datatotal = $detailslist->field('count(*) count')->where('ostate=2')->find();
		// 计算满足条件的数据总数
		$totalnums = $datatotal['count'];
		// 实例化分页类
		$pages = new \Think\Page($totalnums,10);
		// 获取分页的条件
		$limit = $pages->firstRow.','.$pages->listRows;
		// 空model类
		$list = M();
		// 订单详情表
		$deliver_data = $list->table('food_orders o,food_ordersdetails d,food_goods g')->field('g.gpic,o.onumber,g.gname,d.gprice,d.gnums,d.ostate,d.id')->where('d.oid=o.oid and d.gid=g.gid and d.ostate=2')->limit($limit)->select();
		foreach ($deliver_data as $key => $value) {
			$deliver_data[$key]['gpic'] = explode(',', $value['gpic'])[0];
		}
		// 全部订单
		// 查询订单信息
		$this->assign('page',$pages->show());
		$this->assign('deliver',$deliver_data);
		$this->assign('active',3);
		$this->display("index");
	}
	// 换货
	public function returnGoods(){
		// 实例化所要操纵做的数据表
		// 订单表详情表,用于分页操作
		$detailslist = M("ordersdetails");
		// 遍历出来的是一维数组。select遍历的二维数组。
		$datatotal = $detailslist->field('count(*) count')
			->where('ostate=3 or ostate=4')->find();
		// 计算满足条件的数据总数
		$totalnums = $datatotal['count'];
		// 实例化分页类
		$pages = new \Think\Page($totalnums,10);
		// 获取分页的条件
		$limit = $pages->firstRow.','.$pages->listRows;
		// 空model类
		$list = M();
		// 订单详情表
		$deliver_data = $list->table('food_orders o,food_ordersdetails d,food_goods g')->field('g.gpic,o.onumber,g.gname,d.gprice,d.gnums,d.ostate,d.id')->where('d.oid=o.oid and d.gid=g.gid and (d.ostate=3 or d.ostate=4)')->limit($limit)->select();
		foreach ($deliver_data as $key => $value) {
			$deliver_data[$key]['gpic'] = explode(',', $value['gpic'])[0];
		}
		// 全部订单
		// 查询订单信息
		$this->assign('page',$pages->show());
		$this->assign('deliver',$deliver_data);
		$this->assign('active',4);
		$this->display("index");
	}
	// 交易完成
	public function completeDeal(){
		// 实例化所要操纵做的数据表
		// 订单表详情表,用于分页操作
		$detailslist = M("ordersdetails");
		// 遍历出来的是一维数组。select遍历的二维数组。
		$datatotal = $detailslist->field('count(*) count')->where('ostate=5 or ostate=6')->find();
		// 计算满足条件的数据总数
		$totalnums = $datatotal['count'];
		// 实例化分页类
		$pages = new \Think\Page($totalnums,10);
		// 获取分页的条件
		$limit = $pages->firstRow.','.$pages->listRows;
		// 空model类
		$list = M();
		// 订单详情表
		$deliver_data = $list->table('food_orders o,food_ordersdetails d,food_goods g')->field('g.gpic,o.onumber,g.gname,d.gprice,d.gnums,d.ostate,d.id')->where('d.oid=o.oid and d.gid=g.gid and (d.ostate=5 or d.ostate=6)')->limit($limit)->select();
		foreach ($deliver_data as $key => $value) {
			$deliver_data[$key]['gpic'] = explode(',', $value['gpic'])[0];
		}
		// 全部订单
		// 查询订单信息
		$this->assign('page',$pages->show());
		$this->assign('deliver',$deliver_data);
		$this->assign('active',5);
		$this->display("index");
	}
	// 交易取消
	public function cancleDeal(){
		// 实例化所要操纵做的数据表
		// 订单表详情表,用于分页操作
		$detailslist = M("ordersdetails");
		// 遍历出来的是一维数组。select遍历的二维数组。
		$datatotal = $detailslist->field('count(*) count')->where('ostate=0')->find();
		// 计算满足条件的数据总数
		$totalnums = $datatotal['count'];
		// 实例化分页类
		$pages = new \Think\Page($totalnums,10);
		// 获取分页的条件
		$limit = $pages->firstRow.','.$pages->listRows;
		// 空model类
		$list = M();
		// 订单详情表
		$deliver_data = $list->table('food_orders o,food_ordersdetails d,food_goods g')->field('g.gpic,o.onumber,g.gname,d.gprice,d.gnums,d.ostate,d.id')->where('d.oid=o.oid and d.gid=g.gid and d.ostate=0')->limit($limit)->select();
		foreach ($deliver_data as $key => $value) {
			$deliver_data[$key]['gpic'] = explode(',', $value['gpic'])[0];
		}
		// 全部订单
		// 查询订单信息
		$this->assign('page',$pages->show());
		$this->assign('deliver',$deliver_data);
		$this->assign('active',6);
		$this->display("index");
	}
	// 订单修改，发货，重新发货
	public function orderState(){
		// 实例化所要操纵做的数据表
		// 订单表详情表,用于修改订单状态
		$detailslist = M("ordersdetails");
		if ($_GET['jump']) {
			unset($_GET['jump']);
			$jump = 'nonDelivery';
			// 修改商品数量，即销量，修改商品的gsellnums字段
			$giddata = $detailslist->field('gid,gnums')->find($_GET['id']);
			// 实例化商品表
			$goodlist = M('goods');
			// 数量增长
			$data['gsellnums'] = array('exp','gsellnums+'.$giddata['gnums']);
			// 修改商品表的销售数量字段
 			$goodlist->where('gid='.$giddata['gid'])->save($data);
			// 修改商品的数量
		} else {
			unset($_GET['jump']);
			$jump = 'returnGoods';
		}
		$detailslist->save($_GET);
		$this->success('操作成功',U('Admin/Ordermanage/'.$jump));
	}
//	public function search(){
//		// 实例化所要操纵做的数据表
//		// 订单表,用于分页操作
//		$orderslist = M("orders");
//		$map['onumber'] = array('like','%'.$_GET['uname'].'%');
//		$this->assign('uname',$_GET['uname']);
//		// 遍历出来的是一维数组。select遍历的二维数组。
//		$datatotal = $orderslist->field('count(*) count')->where($map)->find();
//		// 计算满足条件的数据总数
//		$totalnums = $datatotal['count'];
//		// 实例化分页类
//		$pages = new \Think\Page($totalnums,3);
//		// 获取分页的条件
//		$limit = $pages->firstRow.','.$pages->listRows;
//		// 空model类
//		$list = M();
//		// 订单详情表
//		$detailslist = M("ordersdetails");
//		// 全部订单
//		// 查询订单信息
//		$orders_data = $list->table('sx_member m,sx_orders o')->field('o.oid,o.onumber,o.otime,o.total,m.uname,o.deliveryaddress')->where('o.uid=m.uid and (o.onumber like %'.$_GET['uname'].'%)')->limit($limit)->select();
//		// 得打发往前台的中间数据，订单详情表
//		foreach ($orders_data as $v) {
//			$details_data[] = $list->table('sx_ordersdetails d,sx_goods g')->field('g.gpic,g.gname,d.gprice,d.gnums,d.ostate')->where('d.oid='.$v['oid'].' and d.gid=g.gid')->select();
//		}
//		// 构造gpic
//		foreach ($details_data as $k => $vo) {
//			foreach ($vo as $k1=> $vo1) {
//				$details_data[$k][$k1]['gpic'] = explode(',', $vo1['gpic'])[0];
//			}
//		}
//		// 分配订单信息知道前台
//		$this->assign('page',$pages->show());
//		$this->assign('orders',$orders_data);
//		$this->assign('details',$details_data);
//		$this->assign('active',1);
//		$this->display('index');
//	}
}



















