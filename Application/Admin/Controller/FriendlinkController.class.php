<?php
namespace Admin\Controller;
use Think\Controller;
class FriendlinkController extends Controller{
	public function index(){
		$firend = M("friendlink");
		$num = $firend ->field('count(*) count') -> find();
		$total = $num["count"];
		$page = new \Think\Page($total,10);
		$limit = $page ->firstRow.','.$page->listRows;
		$data = $firend->limit($limit)->order("fsort asc")->select(); 
		$this -> assign("page",$page->show());               
		$this -> assign("friend",$data);
		$this -> assign("title",'友情链接');
		$this -> display();
	}
	//添加的页面方法
	public function insert(){
		$this -> assign("title",'添加友情链接');
		$this -> display();
	}
	//修改的方法
	public function mod(){
		$friend = M("friendlink");
		$data = $friend -> where(array("fid"=>$_GET['fid'])) -> find();
		$this -> assign("friendlink",$data);
		$this -> assign("title",'修改友情链接');
		$this -> display();
	}
	//删除
	public function del(){
		$fid = $_GET["fid"];
		$del = M("friendlink");
		$pic = $del -> field("flogo") -> find($fid);
          	//将图片的地址用‘/’分隔成数组再用/f将数组连接成字符串 
          $thimg = implode('/f_',explode('/',$pic['flogo']));
          $rootpath = './Public/FriendUploads/';
           //将原来的图片从文件夹中删除
          unlink($rootpath.$thimg);
          unlink($rootpath.$pic['flogo']);
		if($del-> delete($fid)){
            echo 1;
            return;
        }
        echo 0;
	}
	public function add(){
		$friend = M("friendlink");
		//将添加的友情链接设置时间
		$_POST["ftime"] = time();
		//判断是否有重名的友情链接
		$fname = $_POST['fname'];
		$res = $friend -> where(array("fname"=>$fname)) -> field("fname") -> select();
		if($res){
			$this -> error("友情链接名已存在");
		}else{
			//实例化文件上传类
			$upload = new \Think\Upload();
			//设置文件上传大小
			$upload->maxSize = 3145728;
			//类型
			$upload->exts = array('jpg', 'gif', 'png', 'jpg');
			//图片保存的路径
			$upload->rootPath = './Public/FriendUploads/';
			//调用上传文件类中的upload方法
          		$info = $upload -> upload();
          		//判断是否调用成功
          		if($info){
          			//实例化缩略图
          			$image = new \Think\Image();
          			//组合文件名
          			$flogo = $info['flogo']["savepath"].$info['flogo']['savename'];
          			//打开
          			$image -> open($upload->rootPath.$flogo);
          			//将路径用f_链接
          			$thumbpath = $upload ->rootPath.$info['flogo']['savepath'].'f_'.$info['flogo']['savename'];
          			//保存缩略图并设置大小
          			$image -> thumb(50,50) -> save($thumbpath);
          			//将组合的图片地址放到post中
          			$_POST['flogo'] = $flogo;
          			if($friend -> create()) {
						$res = $friend->add($_POST);
					}
					if($res){
						$this -> success("添加成功","index");
					}else {
						$this->error("添加失败");
					}
				}else{
						$this -> error("请上传logo");
				}
        }
			
	}
	public function update(){
		//选择数据库表
		$friend = M("friendlink");
		//从mod中得到要修改的fid
		$fid = $_POST['fid'];
		//判断是否有文件上传
		if(!$_FILES["flogo"]["error"]){
			//实例化文件上传类
			$upload = new \Think\Upload();
			//设置文件上传大小
			$upload->maxSize = 3145728;
			//类型
			$upload->exts = array('jpg', 'gif', 'png', 'jpg');
			//图片保存的路径
			$upload->rootPath = './Public/FriendUploads/';
			//调用上传文件类中的upload方法
          		$info = $upload -> upload();
          		if($info){
          			//实例化缩略图
          			$image = new \Think\Image();
          			//组合文件名
          			$flogo = $info['flogo']["savepath"].$info['flogo']['savename'];
          			//打开
          			$image -> open($upload->rootPath.$flogo);
          			//将路径用f_链接
          			$thumbpath = $upload ->rootPath.$info['flogo']['savepath'].'f_'.$info['flogo']['savename'];
          			//保存缩略图并设置大小
          			$image -> thumb(50,50) -> save($thumbpath);
          			//将组合的图片地址放到post中
          			$_POST['flogo'] = $flogo;
          			//从数据库中查到要修改的图片
          			$pic = $friend -> field("flogo") -> find($fid);
          			//将图片的地址已‘/’分隔成数组再用/f将数组连接成字符串 
                    $thimg = implode('/f_',explode('/',$pic['flogo']));
                    $rootpath = './Public/FriendUploads/';
                    //将原来的图片从文件夹中删除
                    unlink($rootpath.$thimg);
                    unlink($rootpath.$pic['flogo']);

		}else{
                 $this -> error('生成缩略图失败');
            }
	}
	 //将修改的数据保存到数据库
         if($friend->save($_POST)){
            $this->success('更新成功','index');
        }else{
            $this -> error('更新失败');
        }
        
    }
    //搜索方法
    public function search(){
		$friend = M("friendlink");
		$fname = $_GET['fname'];
		$this->assign('fname',$fname);
		$map['fname'] = array("like","%$fname%"); 
		$num = $friend -> where($map) -> field('count(*) count') -> find();
		$total = $num["count"];
		$page = new \Think\Page($total,10);
		$limit = $page ->firstRow.','.$page->listRows;
		$data = $friend -> where($map) ->limit($limit) -> select();               
		$this -> assign("page",$page->show());
		$this -> assign("friend",$data);
		$this -> assign("title","搜索友情链接");
		$this -> display('index'); 
    }
}




?>