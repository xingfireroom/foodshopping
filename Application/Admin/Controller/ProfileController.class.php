<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;

class ProfileController extends AdminController {
    public function index(){
        $this -> assign(title,'个人信息');
        $this -> display();
    }

    //处理修改密码
    public function updataPwd(){
    	$m = M('member');
    	$res = $m -> field('password') -> find($_SESSION['auid']);
    	if ($res['password'] != md5($_POST['oldpwd'])) {
    		echo 0;
    		return;
    	}

    	$new['password'] = md5($_POST['newpwd']);
    	$map['uid'] = array('eq',$_SESSION['auid']);
    	if ($m->where($map)->save($new)) {
    		echo 1;
    		return;
    	}
    	echo 0;
    }
}
