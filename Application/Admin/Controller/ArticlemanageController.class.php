<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class ArticleManageController extends AdminController{
	public function index(){
		//文章管理的表
		$articles = M("articles");
                    $num = $articles ->field('count(*) count') -> find();   
		$total = $num["count"];
		$page = new \Think\Page($total,10);
		$limit = $page ->firstRow.','.$page->listRows;
                    $list = M();
                    //多表查询语句
                    $data = $list ->table("food_articles ar,food_articleclasses ac")->where('ar.pacid = ac.acid')->field('ar.*,ac.acname')->limit($limit)->select();
		$this -> assign("page",$page->show());
		$this -> assign("articlemanage",$data);
		$this -> assign("title","文章管理");
		$this -> display();
	}
	public function insert(){
		$articleclasses = M("articleclasses");
		$data = $articleclasses -> field("acid,acname") -> select();
		$this -> assign("articleclasses",$data);
		$this -> assign("title","添加文章");
		$this -> display();
	}
	//添加文章
	public function add(){
		$articles = M("articles");
		$atitle = $_POST['atitle'];
		$_POST['atime'] = time();
		$res = $articles -> where(array("atitle"=>$atitle))
			-> field("atitle") -> select();
		if($res){
			$this -> error("文章标题已存在");
		}else{
			if($articles->create()){
				$res = $articles -> add();
				if($res){
					$this -> success("添加成功","index");
				}else{
					$this -> error("添加失败");
				}
			} 
		}
	}
	//删除
    public function del(){
    	$aid = $_GET["aid"];
    	$del = M("articles");
    	if($del-> delete($aid)){
            echo 1;
            return;
        }
        echo 0;
    }
      //修改时调用此方法
    public function mod(){
        $articles = M("articles");
        $data = $articles ->where(array("aid"=>$_GET['aid']))->find(); 
        $articleclasses = M("articleclasses");
        $classdata = $articleclasses -> field("acname,acid") -> select();
        $this -> assign("articleclasses",$classdata);
        $this -> assign("title",'修改文章');
        $this -> assign("articlemanage",$data);
        $this -> display();
    }
    //修改文章内容
    public function update(){
    	$articles = M("articles");
		$where['aid']=$_POST['aid'];
		$ret=$articles-> where($where)->save($_POST);
    	if($ret){
    		$this->success('更新成功','index');
    	}else{
    		$this -> error('更新失败');
    	}
    }
      //搜索方法
    public function search(){
            $articles = M("articles");
            $atitle = $_GET['atitle'];
			$this->assign('atitle',$atitle);
            $map = array("like","%$atitle%");
            //搜索符合条件的总条数   
            $num = $articles -> where("atitle $map[0] '$map[1]'") -> field('count(*) count') -> find();
            $total = $num["count"];
            $page = new \Think\Page($total,10);
            $limit = $page ->firstRow.','.$page->listRows;
            //取出符合条件的每页显示的个数
            $data = $articles -> where("atitle $map[0] '$map[1]'") ->limit($limit) -> select(); 
            $list = M();
            //多表查询语句
            $data1 = $list ->table("food_articles ar,food_articleclasses ac")->where("ar.atitle $map[0] '$map[1]' and ar.pacid=ac.acid")->field('ar.*,ac.acname')->limit($limit)->select();
            $this -> assign("page",$page->show());
            $this -> assign("articlemanage",$data1);
            $this -> assign("title","搜索文章");
            $this -> display('index'); 
    }
}



?>