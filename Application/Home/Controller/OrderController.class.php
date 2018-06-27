<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller{
	public function index(){
		// 读取当前登陆用户
		$uid = session('uid');
		//分配用户积分
		$this->point=M('Member')->where('uid='.$uid)->getField('scores');
		// 实例化空的model类
		$list = M();
		// 多表查询
		$cartdata = $list->table('food_goods g,food_shoppingcart s')->field('s.cartid,g.gpic,g.gname,g.goldprice,s.nums,s.price gprice')->where('s.uid='.$uid.' and s.gid=g.gid')->select();
		// 重新构造gpic字段，取一张图片地址出来
		foreach ($cartdata as $key => $value) {
			$cartdata[$key]['gpic'] = explode(',', $value['gpic'])[0];
		}
		// 收货地址显示
		$address = M('deliveryaddress');
		$adddata = $address->field('addid,tagging,address,zipcode,consignee,mphone,phone,state')->where(array('uid'=>$uid))->select();
		$adddata_s = $address->field('addid,tagging,address,zipcode,consignee,mphone,phone,state')->where(array('uid'=>$uid,'state'=>1))->find();
		$this->assign('adddata',$adddata);
		$this->assign('adddata_s',$adddata_s);
		// 发送到前台
		$this->assign('cartdata',$cartdata);
		$this->assign('title','商城网-确认订单');
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this->display();
	}
	/**
	*
	*增加收货地址
	*/
	public function addAddress(){
		// 读取当前登陆用户
		$uid = session('uid');
		// 添加用户id到post数组中
		$_POST['uid'] = $uid;
		$_POST['state'] = 1;
		$mod['state'] = 0;
		// 实例化地址表
		$address = M('deliveryaddress');
		$address->where(array('uid'=>$uid))->save($mod);
		// 添加数据，返回添加数据的id
		$id = $address->add($_POST);
		if($id){
			echo $id;
		}else{
			echo 0;
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
		if ($del->where($_POST)->delete()) {
			echo 1;
		} else {
			echo 0;
		}
	}
	/**
	*
	*修改默认地址
	*/
	public function updateState(){
		// 读取当前登陆用户
		$uid = session('uid');
		// 添加用户id到post数组中
		$_POST['uid'] = $uid;
		$_POST['state'] = 1;
		$mod['state'] = 0;
		// 实例化地址表
		$address = M('deliveryaddress');
		$address->where(array('uid'=>$uid))->save($mod);
		// xiugai 数据，返回添加数据的id
		$address->save($_POST);
	}
	/**
	*
	*生成订单
	*/
	public function ordersSubmit(){
		//dump($_POST);
		$paytype=$_POST['paytype'];
		unset($_POST['paytype']);
		if (!$_POST['total']) {
			echo 0;
			return;
		}
		// 读取当前登陆用户
		$uid = session('uid');
		// 实例化操作数据库，收货地址
		$addlist = M('deliveryaddress');
		$add_data = $addlist->field('address,zipcode,consignee,mphone,phone')->where(array('uid'=>$uid,'state'=>1))->find();
		// 拼接需要保存的收货地址
		$address = implode('', explode('-',$add_data['address'])).' consignee'.$add_data['consignee'].'consignee '.$add_data['mphone'].' '.$add_data['phone'];
		// 重新构造post用于保存至订单表
		$_POST['onumber'] = date('YmdHis',time()).rand(10,99);//订单号
		$_POST['uid'] = $uid;//收货人id
		$_POST['otime'] = date('Y-m-d',time());//订单时间
		$_POST['deliveryaddress'] = $address;//订单收货人地址
		
		// 实例化订单表
		$orderlist = M('orders');
		// 插入数据，返回插入数据的订单号
		$oid = $orderlist->add($_POST);
		if ($oid) {
			// 实例化购物车表读取，该用户在购物车表用的所有数据
			$cartlist = M('shoppingcart');
			$cart_data = $cartlist->where(array('uid'=>$uid))->select();
			// 遍历读出来的数据
			// 定义一个数组，保存订单标的id，用来关联订单号，到订单详情表
			$map['oid'] = $oid;
			// 定义空数组用来保存订单详情表的插入状态
			$mark = [];
			// 实例化订单表详情表
			$detailslist = M('ordersdetails');
			foreach ($cart_data as $value) {
				// 读取购物车中的数据，存入订单详情表
				$map['gid'] = $value['gid'];
				$map['gprice'] = $value['price'];
				$map['gnums'] = $value['nums'];
				// 将数据插入订单详情表，并将状态及id号存入mark变量
				$mark[] = $detailslist->add($map);
			}
			// 插入订单详情表数据后，判断状态，合格清空购物车表，失败删除刚才已经插入的数据，不操作购物车表
			if (in_array('0', $mark)) {
				// 循环插入数据不成功则清除插入的部分数据
			 	$detailslist->where(array('oid'=>$oid))->delete();
			 	echo 0;
			 	return;
			 } else {
			 	// 订单详情表操作成功，则清空购物车
			 	$cartlist->where(array('uid'=>$uid))->delete();
			 	echo $oid;
			 	
			 	
			 }
		}
	}
	/**
	*
	*订单生成成功提示
	*/
	public function confirmPay(){

		// 实例化订单表
		$orderslist = M('orders');
		// 跟句get传参的oid获取订单信息
		$orders_data = $orderslist->field('onumber,total')->where($_GET['oid'])->find();
		if ($orders_data) {
			//支付
			if($_GET['paytype']==1){//微信支付
				$this->assign('orders',$orders_data);
				$this->assign('title','订单完成');
				$web = D("WebConfig");
				$webdata = $web -> web();
				$this -> assign("web",$webdata);
				$this->wxpay($orders_data['onumber'],'意象图文网络工作室',$orders_dataT['total']);//微信
			}elseif ($_GET['paytype']==2){//支付宝支付
				alipay($orders_data['onumber'],'意象图文网络工作室',$orders_data['total']);  //支付宝
			}elseif($_GET['paytype']==3){//货到付款
				$orderinfo['paymethod'] =3;
				$orderslist->where($_GET['oid'])->save($orderinfo);
				//
				$this->assign('orders',$orders_data);
				$this->assign('title','订单完成');
				$web = D("WebConfig");
				$webdata = $web -> web();
				$this -> assign("web",$webdata);
			}
			//网站配置的公共函数
			
			$this->display();
		}else{
			// 用正确跳转，实现错误问题
			$this->success('查无此订单', '/index.php/home/index/index');
		}
		
	}
	
	public function wxpay($orderno,$body,$total_fee){
	
		Vendor("Pay.WxPay.WxPayPubHelper");
		//使用统一支付接口
		$unifiedOrder = new \UnifiedOrder_pub();
	
		$unifiedOrder->setParameter("body",$body);//商品描述
		//自定义订单号，此处仅作举例
		$timeStamp = time();
		//           \WxPayConf_pub::
		$out_trade_no =$orderno;
		//  $this->out_trade_no=$out_trade_no;
		$unifiedOrder->setParameter("out_trade_no","$out_trade_no");//商户订单号
		$unifiedOrder->setParameter("total_fee",1);//总金额
		$unifiedOrder->setParameter("notify_url",\WxPayConf_pub::NOTIFY_URL);//通知地址
		$unifiedOrder->setParameter("trade_type","NATIVE");//交易类型
	
	
		//获取统一支付接口结果
		$unifiedOrderResult = $unifiedOrder->getResult();
	
		// dump($unifiedOrderResult);
	
		//商户根据实际情况设置相应的处理流程
		if ($unifiedOrderResult["return_code"] == "FAIL")
		{
			//商户自行增加处理流程
//			echo "通信出错：".$unifiedOrderResult['return_msg']."<br>";
		}
		elseif($unifiedOrderResult["result_code"] == "FAIL")
		{
			//商户自行增加处理流程
			echo "错误代码：".$unifiedOrderResult['err_code']."<br>";
			echo "错误代码描述：".$unifiedOrderResult['err_code_des']."<br>";
		}
		elseif($unifiedOrderResult["code_url"] != NULL)
		{
			//从统一支付接口获取到code_url
			$this->code_url = $unifiedOrderResult["code_url"];
			//商户自行增加处理流程
			//......
		}
	}
	
	
	public function notify(){//微信支付notify
	
		Vendor("Pay.WxPay.WxPayPubHelper");
	
		//使用通用通知接口
		$notify = new \Notify_pub();
	
		//存储微信的回调
		$xml = $GLOBALS['HTTP_RAW_POST_DATA'];
		$notify->saveData($xml);
	
		//验证签名，并回应微信。
		//对后台通知交互时，如果微信收到商户的应答不是成功或超时，微信认为通知失败，
		//微信会通过一定的策略（如30分钟共8次）定期重新发起通知，
		//尽可能提高通知的成功率，但微信不保证通知最终能成功。
		if($notify->checkSign() == FALSE){
			$notify->setReturnParameter("return_code","FAIL");//返回状态码
			$notify->setReturnParameter("return_msg","签名失败");//返回信息
		}else{
			$notify->setReturnParameter("return_code","SUCCESS");//设置返回码
		}
		$returnXml = $notify->returnXml();
		echo $returnXml;
	
		//==商户根据实际情况设置相应的处理流程，此处仅作举例=======
	
		//以log文件形式记录回调信息
	
		//写入payment_log逻辑，加到数据库
	
		if($notify->checkSign() == TRUE)
		{
			
				
			if ($notify->data["return_code"] == "FAIL") {
	
				$data['status'] = 1; //'通信出错'
			}
			elseif($notify->data["result_code"] == "FAIL"){
	
				$data['status'] = 2; //'业务出错'
	
			}
			else{
	
				$data['status'] = 3; //'支付成功'
	
				$ordermodule = M('Order');
				$orderinfo['paymethod'] = 1;
				$map['out_trade_no'] = $notify->data['out_trade_no'];
				$ordermodule->where($map)->save($orderinfo);//更新支付方式
	
			}
				
			
			//商户自行增加处理流程,
			//例如：更新订单状态
			//例如：数据库操作
			//例如：推送支付完成信息
		}
	
	}
	
	//支付宝即时到帐页面跳转同步通知页面
	public function returnurl(){
		$data=returnurl();
		if($data){
		     	$ordermodule = M('Order');
				$orderinfo['paymethod'] =2;
				$map['out_trade_no'] = $data['out_trade_no'];
				$ordermodule->where($map)->save($orderinfo);//更新支付方式
				
				redirect('/Order/confirmPay/typepay/2', 5, '页面跳转中...');
		}
	}
	
	//支付宝即时到帐服务器异步通知页面方法
	public function notifyurl(){
		$data=notifyurl();
		if($data){
			    $ordermodule = M('Order');
				$orderinfo['paymethod'] = 2;
				$map['out_trade_no'] = $data['out_trade_no'];;
				$ordermodule->where($map)->save($orderinfo);//更新支付方式
		}
	}
	
}
?>