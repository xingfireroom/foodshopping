<?php
namespace Admin\Controller;
use Think\Controller;
class NavsettingController extends Controller{
        public function index(){
                $user = M("nav");
                $num = $user ->field('count(*) count') -> find();
                $total = $num["count"];
                $page = new \Think\Page($total,10);
                $limit = $page ->firstRow.','.$page->listRows;
                $data = $user->limit($limit)->order('nsort asc')->select();
                $this -> assign("title",'导航');
                $this -> assign("page",$page->show());
                $this -> assign("nav",$data);
                $this -> display();
        }
        //添加导航
        public function insert(){
                $this -> assign("title","添加导航");
                $this -> display();
        }
        //修改导航模板
        public function mod(){
                $nav = M("nav");
                $data = $nav -> where(array("nid"=>$_GET['nid'])) -> find();
                $this -> assign("nav",$data);
                $this -> assign("title","修改导航");
                $this -> display();
        }
        //删除
        public function del(){
        $nid = $_GET["nid"];
        $del = M("nav");
        if($del-> delete($nid)){
            echo 1;
            return;
        }
        echo 0;
}
        //添加导航方法
        public function add(){
                $nnav = M("nav");
                $nname = $_POST['nname'];
                $res = $nnav -> where(array("nname"=>$nname)) -> field("nname") -> select();
                if($res){
                        $this -> error("导航名已存在");
                }else{
                        if($nnav -> create()){
                                $res = $nnav -> add($_POST);
                                if($res){
                                        $this -> success("添加成功","index");
                                }else{
                                        $this -> error("添加失败");
                                }
                        }
                }
        }
        //修改导航方法
        public function update(){
                $nav = M("nav");
                $nid = $_POST["nid"];
                $res = $nav -> where(array("nid"=>$nid)) -> save($_POST);
                if($res){
                        $this -> success("修改成功","index");
                }else{
                        $this -> error("修改失败");
                }
        }
        //搜索方法
        public function search(){
         $nav = M("nav");
        $nname = $_GET['nname'];
        $this->assign('nname',$nname);
        $map['nname'] = array("like","%$nname%"); 
        $num = $nav -> where($map) -> field('count(*) count') -> find();
        $total = $num["count"];
        $page = new \Think\Page($total,10);
        $limit = $page ->firstRow.','.$page->listRows;
        $data = $nav -> where($map) ->limit($limit) -> select();               
        $this -> assign("page",$page->show());
        $this -> assign("nav",$data);
        $this -> assign("title","搜索导航");
        $this -> display('index');
        }
	
}


?>