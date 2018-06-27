<?php
namespace Home\Controller;
use Think\Controller;
class FindpwdController extends Controller{
	public function index(){
	$this -> assign("title","找回密码");
	$this -> display();
	}

	public function select(){
		$user = M("member");
		$uname = $_POST["uname"];
		$email2 = $_POST['email'];
		$res = $user -> where(array("uname"=>$uname,"email"=>$email2))-> find();
		if($res){	
		$email = $email2;  //邮件地址
		$title = '您的密码';  //标题
		$content = uniqid();  //邮件内容
		SendMail($email,$title,$content); //直接调用发送即可
		$pwd['password'] = md5($content);
		$data = $user->where(array("uname"=>$uname))->save($pwd);
		if($data){
			$this -> assign("title","找回密码");
			$this -> display();
			}
		}else{
			$this -> redirect("/home/findpwd");
		}
	}
	/*public function update(){
		$user = M("member");
		$uname = $_POST["uname"];
		$pwd['password'] = md5($_POST['password']);
		$data = $user->where(array("uname"=>$uname))->save($pwd);
		if($data){
			echo 1;
		}else{
			echo 0;
		}
	}*/
}

?>