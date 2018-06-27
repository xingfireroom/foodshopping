<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index(){
		$this -> display();
	}
	public function enter(){
		$user = M("member");
		$uname =$_POST['uname'];
		$pwd = md5($_POST['pwd']);
		//登录的时间
		$logintime['logintime'] = time();
//		//判断用户名和密码是否正确
		$res = $user -> where(array("uname"=>$uname,"password"=>$pwd,"status"=>2)) -> field("uname,password,uid")-> find();
		if($res){
			//将当前登录的时间更新到数据库
			$user -> where(array("uname"=>$uname)) -> save($logintime);
			//将姓名保存在session
			session("uname",$res['uname']);
			session("uid",$res['uid']);
			//$this -> success("登录成功","/index.php/home/index");
			echo 1;
		}else{
			//$this -> error("登录失败");
			echo 0;
		}
	}
	
	 /**
    * 第三方登录
    * @date: 2016-1-24
    * @author: hupeng
    * @param:
    * @return:
    */
    public function otherlogin(){
    	//import('Libs.Util.QQConnect');
    	$appid = '';
    	$scope = '';
    	$callback = '';
    	$qq = new \Org\Util\QQConnect();
    	$qq->login($appid, $callback, $scope);
    }
    /**
    * 获取第三方登录信息
    * @date: 2016-1-24
    * @author: hupeng
    * @param:
    * @return:
    */
    public function auth(){
    	$appid = '';
    	$appkey = '';
    	$callback = ''; //回调地址
    	$qq = new \Org\Util\QQConnect();
    	$info = $qq->callback($appid, $appkey, $callback);
    	$user = $qq->get_user_info($info['token'], $info['openid'], $appid);
    	$_add=array(
    			'uname' =>$user['nickname'],
    			'openid' =>$info['openid'],
    			'regtime' =>time(),
    			'sex' =>$user['gender'] == '女' ? 1 : 2,
    			'password' =>md5('123456'),
    	);
    	$model = M('Memeber');
    	$userinfo = $model->where("openid='{$info['openid']}'")->find();
    	if($userinfo){
    		session('user',$userinfo);
			session("uname",$userinfn['uname']);	
			session("uid",$userinfn['uid']);
    		header("Location:".U('Index/index'));
    	}else{
    		$res = $model->data($_add)->add();
    		if($res){
    			session("uname",$_add['uname']);	
			    session("uid",$res);
    			header("Location:".U('Index/index'));
    		}
    	}
    	
    }
	
	//登录的协议
	public function loginService(){
	   $articles = M("articles");
        $data = $articles->where("aid = 42")->field("atitle,acontent")->find();
        $this -> assign("articles",$data);
        $this -> assign("title","登录");
        $this -> display();
	}
}

?>