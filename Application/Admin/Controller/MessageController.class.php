<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class MessageController extends AdminController{
	public function index(){
		$articleclasses = M("Message m");
		$num = $articleclasses ->field('count(*) count')
            ->join('food_member u on u.uid=m.mid','inner')-> find();
		$total = $num["count"];
		$page = new \Think\Page($total,8);
		$limit = $page ->firstRow.','.$page->listRows;
		$data = $articleclasses->field('m.*,u.uname,u.truename,u.sex')
            ->join('food_member u on u.uid=m.mid','inner')
            ->limit($limit)->order("m.times desc")->select();

		$this -> assign("page",$page->show());

		$this -> assign("article",$data);
		$this -> assign("title",'留言管理');
		$this -> display();
	}
     //修改时调用此方法
    public function mod(){
        $articleclasses = M("Message");
        $data = $articleclasses ->where(array("id"=>$_GET['id']))->find();
        $this -> assign("title",'回复留言');
        $this -> assign("data",$data);
        $this -> display();
    }
    //回复留言
    public function update(){
    	$articleclasses = M("Message");
        $_POST['an_times']=time();
    	if($articleclasses -> where(array("id"=>$_POST['id']))->save($_POST)){
    		$this->success('回复成功','index');
    	}else{
    		$this -> error('回复失败');
    	}
    }
    //删除
    public function del(){
    	$acid = $_GET["id"];
    	$del = M("Message");
    	if($del-> delete($acid)){
            echo 1;
            return;
        }
        echo 0;
    }
}
?>