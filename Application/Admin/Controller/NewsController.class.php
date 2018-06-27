<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class NewsController extends AdminController{
	public function index(){
		$articleclasses = M("News");
		$num = $articleclasses ->field('count(*) count') -> find();
		$total = $num["count"];
		$page = new \Think\Page($total,8);
		$limit = $page ->firstRow.','.$page->listRows;
		$data = $articleclasses->limit($limit)->order("times desc")->select();

		$this -> assign("page",$page->show());               
		$this -> assign("article",$data);
		$this -> assign("title",'新闻管理');
		$this -> display();
	}
	//添加分类
        public function add(){
                    $articleclasses = M("News");
                    $acname = $_POST['title'];
                    $res = $articleclasses -> where(array("title"=>$acname)) -> field("title") -> select();
                    if($res){
                            $this -> error("新闻已存在");
                    }else{
                        $_POST['times']=time();
                        if($articleclasses->create()){
                            $res = $articleclasses -> add();
                                if($res){
                                    $this -> success("添加成功","index");
                                }else{
                                    $this -> error("添加失败");
                            }
                        } 
                    } 
        }
     //修改时调用此方法
    public function mod(){
        $articleclasses = M("News");
        $data = $articleclasses ->where(array("id"=>$_GET['id']))->find();
        $this -> assign("title",'修改新闻内容');
        $this -> assign("data",$data);
        $this -> display();
    }
    //修改文章分类
    public function update(){
    	$articleclasses = M("News");
    	if($articleclasses -> where(array("id"=>$_POST['id']))->save($_POST)){
    		$this->success('更新成功','index');
    	}else{
    		$this -> error('更新失败');
    	}
    }
    //搜索方法
    public function search(){
            $articleclasses = M("News");
            $acname = $_GET['acname'];
            $this->assign('acname',$acname);
            $map['title'] = array("like","%$acname%");
            $num = $articleclasses -> where($map) -> field('count(*) count') -> find();
            $total = $num["count"];
            $page = new \Think\Page($total,8);
            $limit = $page ->firstRow.','.$page->listRows;
            $data = $articleclasses -> where($map) ->limit($limit) -> select();               
            $this -> assign("page",$page->show());
            $this -> assign("article",$data);
            $this -> assign("title","搜索新闻");
            $this -> display('index'); 
    }
    //删除
    public function del(){
    	$acid = $_GET["id"];
    	$del = M("News");
    	if($del-> delete($acid)){
            echo 1;
            return;
        }
        echo 0;
    }
    public function insert(){
        $this -> assign("title","添加新闻");
        $this ->display();
    }
}



?>