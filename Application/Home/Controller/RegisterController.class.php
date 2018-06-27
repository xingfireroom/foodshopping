<?php
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller {
    public function index(){
        $this -> display();
    }
    //验证码
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->entry();
    }
    //验证用户名和邮箱是否存在
    public function finduser(){
	$user = M("member");
	$uname = $_POST['uname'];
	$res = $user -> where(array("uname"=>$uname))->field("uname")->find();
	if($res){
		echo 1;
	}else{
		echo 0;
	}
    }
    //判断邮箱是否存在
    public function findemail(){
            $user = M("member");
            $email = $_POST['email'];
            $resemail = $user -> where(array("email"=>$email))->field("email")->find();
            if($resemail){
                    echo 1;
                }else{
                    echo 0;
                }
    }
    //验证验证码
    public function code($code,$id=''){
    	$code = $_POST['code'];
           $verify = new \Think\Verify();
    	if($verify->check($code, $id)){
		echo 1;
    	}else{
		echo 0;
        }
    }
    //注册验证
    public function insert(){
        $user = M("member");
        $data['password'] = md5($_POST['pwd']);
        $data['uname'] = $_POST['uname'];
        $data['regtime'] = time();
        $data['logintime'] = time();
        $res=$user->add($data);
        if($res){
            session("uname",$_POST['uname']);
            session("uid",$res);
            $this->success('注册成功',U('Home/Index/index'));
//	            $this -> redirect("/home/index/index");
        }else{
            $this -> error("注册失败");
        }

    }
    //注册协议
    public function regAgreement(){
        $articles = M("articles");
        $data = $articles->where("aid = 43")->field("atitle,acontent")->find();
        $this -> assign("articles",$data);
        $this -> assign("title","注册");
        $this -> display();
    }
}
