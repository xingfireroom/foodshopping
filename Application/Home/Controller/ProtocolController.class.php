<?php
namespace Home\Controller;
use Think\Controller;
class ProtocolController extends Controller{
	public function index(){
		$title = array("首页","协议中心");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//登录协议
	public function login(){
		$articles = M("articles");
        	$data = $articles->where("aid = 42")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","登录协议");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//注册协议
	public function register(){
		$articles = M("articles");
        	$data = $articles->where("aid = 43")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","注册协议");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//售前相关
	public function presales(){
		$articles = M("articles");
        	$data = $articles->where("aid = 22")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","售前相关");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//交易相关
	public function  transaction(){
		$articles = M("articles");
        	$data = $articles->where("aid = 23")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","交易相关");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//物流相关
	public function  logistics(){
		$articles = M("articles");
        	$data = $articles->where("aid = 24")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","物流相关");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//售后相关
	public function after(){
		$articles = M("articles");
        	$data = $articles->where("aid = 25")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","售后相关");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//沟通相关
	public function communication(){
		$articles = M("articles");
        	$data = $articles->where("aid = 26")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","沟通相关");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//积分介绍
	public function integral(){
		$articles = M("articles");
        	$data = $articles->where("aid = 27")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","积分介绍");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//余额介绍
	public function balance(){
		$articles = M("articles");
        	$data = $articles->where("aid = 28")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","余额介绍");
		$this ->assign("protocol",$title);
		$this -> display();
	}
	//会员介绍
	public function member(){
		$articles = M("articles");
        	$data = $articles->where("aid = 29")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","会员介绍");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//评论规则
	public function comment(){
		$articles = M("articles");
        	$data = $articles->where("aid = 30")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","评论规则");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//优惠劵介绍
	public function favorable(){
		$articles = M("articles");
        	$data = $articles->where("aid = 31")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","优惠劵介绍");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//订单说明
	public function indent(){
		$articles = M("articles");
        	$data = $articles->where("aid = 32")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","订单说明");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//条款承诺
	public function clause(){
		$articles = M("articles");
        	$data = $articles->where("aid = 33")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","条款说明");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//货到付款
	public function payment(){
		$articles = M("articles");
        	$data = $articles->where("aid = 34")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","货到付款");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//在线支付
	public function  line(){
		$articles = M("articles");
        	$data = $articles->where("aid = 35")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","在线支付");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//发票说明
	public function  bill(){
		$articles = M("articles");
        	$data = $articles->where("aid = 36")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","发票说明");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//商城快递
	public function yixun(){
		$articles = M("articles");
        	$data = $articles->where("aid = 37")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","商城快递");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//普通快递
	public function common(){
		$articles = M("articles");
        	$data = $articles->where("aid = 38")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","普通快递");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//邮政EMS
	public function EMS(){
		$articles = M("articles");
        	$data = $articles->where("aid = 39")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","邮政EMS");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//用户条款
	public function user(){
		$articles = M("articles");
        	$data = $articles->where("aid = 40")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","用户条款");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}
	//阳光行动
	public function sun(){
		$articles = M("articles");
        	$data = $articles->where("aid = 41")->field("atitle,acontent")->find();
        	$this -> assign("articles",$data);
		$title = array("首页","协议中心","阳光行动");
		$this ->assign("protocol",$title);
		//网站配置的公共函数
		$web = D("WebConfig");
        	$webdata = $web -> web();
        	$this -> assign("web",$webdata);
		$this -> display();
	}

}


?>