<?php
namespace Admin\Controller;
use Think\Controller;
class MemlevelController extends Controller{
		//会员等级首页
		public function index(){
		$memlevel = M("memlevel");
		$num = $memlevel ->field('count(*) count') -> find();
		$total = $num["count"];
		$page = new \Think\Page($total,10);
		$limit = $page ->firstRow.','.$page->listRows;
		$data = $memlevel->limit($limit)->order("llevel asc")->select(); 
		$this -> assign("page",$page->show());               
		$this -> assign("memlevel",$data);
		$this -> assign("title",'会员等级');
		$this -> display();
	}
	//添加等级页面
	public function insert(){
		$this -> assign("title",'添加会员等级');
		$this -> display();
	}
	//添加的方法
	public function add(){
		$memlevel = M("memlevel");
		//判断是否有重名的等级名称
		$lname = $_POST['lname'];
		$res = $memlevel -> where(array("lname"=>$lname)) -> field("lname") -> select();
		if($res){
			$this -> error("等级名称已存在");
		}else{
			//实例化文件上传类
			$upload = new \Think\Upload();
			//设置文件上传大小
			$upload->maxSize = 3145728;
			//类型
			$upload->exts = array('jpg', 'gif', 'png', 'jpg');
			//图片保存的路径
			$upload->rootPath = './Public/MemlevelUploads/';
			//调用上传文件类中的upload方法
			$info = $upload -> upload();
			//判断是否调用成功
			if($info){
				//实例化缩略图
				$image = new \Think\Image();
				//组合文件名
				$licon = $info['licon']["savepath"].$info['licon']['savename'];
				//打开
				$image -> open($upload->rootPath.$licon);
				//将路径用l_链接
				$thumbpath = $upload ->rootPath.$info['licon']['savepath'].'l_'.$info['licon']['savename'];
				//保存缩略图并设置大小
				$image -> thumb(20,20) -> save($thumbpath);
				//将组合的图片地址放到post中
				$_POST['licon'] = $licon;
				if($memlevel -> create()) {
					$res = $memlevel->add($_POST);
				}
				if($res){
					$this -> success("添加成功","index");
				}else {
					$this->error("添加失败");
				}
			}else{
				$this->error('图片上传失败');
			}
		}
	}
	//修改的页面
		public function mod(){
		$memlevel= M("memlevel");
		$data = $memlevel -> where(array("lid"=>$_GET['lid'])) -> find();
		$this -> assign("memlevel",$data);
		$this -> assign("title",'修改会员等级');
		$this -> display();
	}
	//修改方法
	public function update(){
		//选择数据库表
		$memlevel = M("memlevel");
		//从mod中得到要修改的lid
		$lid = $_POST['lid'];
		//判断是否有文件上传
		if(!$_FILES["licon"]["error"]){
			//实例化文件上传类
			$upload = new \Think\Upload();
			//设置文件上传大小
			$upload->maxSize = 3145728;
			//类型
			$upload->exts = array('jpg', 'gif', 'png', 'jpg');
			//图片保存的路径
			$upload->rootPath = './Public/MemlevelUploads/';
			//调用上传文件类中的upload方法
          		$info = $upload -> upload();
          		if($info){
          			//实例化缩略图
          			$image = new \Think\Image();
          			//组合文件名
          			$licon = $info['licon']["savepath"].$info['licon']['savename'];
          			//打开
          			$image -> open($upload->rootPath.$licon);
          			//将路径用l_链接
          			$thumbpath = $upload ->rootPath.$info['licon']['savepath'].'l_'.$info['licon']['savename'];
          			//保存缩略图并设置大小
          			$image -> thumb(20,20) -> save($thumbpath);
          			//将组合的图片地址放到post中
          			$_POST['licon'] = $licon;
          			//从数据库中查到要修改的图片
          			$pic = $memlevel -> field("licon") -> find($lid);
          			//将图片的地址已‘/’分隔成数组再用/l将数组连接成字符串 
                    $thimg = implode('/l_',explode('/',$pic['licon']));
                    $rootpath = './Public/MemlevelUploads/';
                    //将原来的图片从文件夹中删除
                    unlink($rootpath.$thimg);
                    unlink($rootpath.$pic['licon']);

		}else{
                 $this -> error('生成缩略图失败');
            }
	}
	 //将修改的数据保存到数据库
		$ret=$memlevel->save($_POST);
         if($ret){
            $this->success('更新成功','index');
        }else{
            $this -> error('更新失败');
        }
        
    }
    //删除
	public function del(){
		$lid = $_GET["lid"];
		$del = M("memlevel");
		$pic = $del -> field("licon") -> find($lid);
          	//将图片的地址用‘/’分隔成数组再用/l将数组连接成字符串 
          $thimg = implode('/l_',explode('/',$pic['licon']));
          $rootpath = './Public/MemlevelUploads/';
           //将原来的图片从文件夹中删除
          unlink($rootpath.$thimg);
          unlink($rootpath.$pic['licon']);
		if($del-> delete($lid)){
            echo 1;
            return;
        }
        echo 0;
	}
	//搜索时调用此方法
	public function search(){
		$memlevel = M("memlevel");
		$lname = $_GET['lname'];
		$this->assign('lname',$lname);
		$map['lname'] = array("like","%$lname%");
		$num = $memlevel -> where($map) -> field('count(*) count') -> find();
		$total = $num["count"];
		$page = new \Think\Page($total,10);
		$limit = $page ->firstRow.','.$page->listRows;
		$data = $memlevel -> where($map) ->limit($limit) -> select();
		$this -> assign("page",$page->show());
		$this -> assign("memlevel",$data);
		$this -> assign("title",'会员等级');
		$this -> display('index');
	}
}



?>