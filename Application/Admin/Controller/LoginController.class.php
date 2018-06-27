<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
	//echo md5('admin');die;
        $this -> display();
    }
    
    //处理用户登录
    public function checkLogin(){
    	$login['uname'] = I('username');
    	$login['password'] = I('userpwd','','md5');
    	$login['_logic'] = "AND";
        $login['status']=1;
    	$m = M('Member');
    	$user = $m -> where($login) -> field('uid,uname') -> find();
    	if ($user) {
    		$_SESSION['auid'] = $user['uid'];
            $_SESSION['auname'] = $user['uname'];
    		$this->redirect('Admin/Index/index');
    	}else{
    		$this->error("账号或密码错误，登录失败！");
    	}
    }

    //处理用户登出
    public function loginOut(){
        unset($_SESSION['auid']);
        unset($_SESSION['auname']);
        $this->redirect('Admin/Login/index');
    }
}
