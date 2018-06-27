<?php
namespace Home\Controller;
use Think\Controller;
class ServiceController extends Controller{
	public function index(){
		$title = array("首页","服务中心");
		$this -> assign('title','服务中心');
		$this ->assign("service",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//催办订单
	public function urge(){
		$title = array("首页","服务中心","催办订单");
		$this -> assign('title','服务中心');
		$this ->assign("service",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//修改订单
	public function AmendIndent(){
		$title = array("首页","服务中心","修改订单");
		$this -> assign('title','服务中心');
		$this -> assign("amend",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	public function Favorable(){
		$title = array("首页","服务中心","取消订单");
		$this -> assign('title','服务中心');
		$this -> assign("favorable",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
}


?>