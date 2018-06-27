<?php
namespace Admin\Controller;
use Think\Controller;
class WebsettingController extends Controller {
    public function index(){
      //选择webconfig表
        $webconfig = M("webconfig");
        //查询wid为2的一条语句
        $data = $webconfig ->where("wid=2") -> find();
        //分配网站标题
        $this -> assign("title","基本配置");
        //将查到的数据分配给模板
        $this -> assign("data",$data);
        //调用模板
        $this -> display();
    }

    //修改数据方法
    public function update(){
          //选择数据表
          $webconfig = M("webconfig");
          //得到从模板中传过来的wid
          $wid = $_POST['wid'];
          //判断是否上传了图片
          if(!$_FILES['wlogo']['error']){
          //实例化上传文件的类
          $upload = new \Think\Upload();
          //选择上传文件的大小
          $upload->maxSize = 3145728 ;
          //选择上传文件的类型
          $upload->exts = array('jpg', 'gif', 'png', 'jpg');
          //将上传的图片存放在指定文件夹下
          $upload->rootPath = './Public/Uploads/';
          //调用上传文件类中的upload方法
          $info = $upload -> upload();
          //判断调用是否成功
              if($info){
                //实例化缩略图类
                    $image = new \Think\Image();
                    $wlogo = $info['wlogo']["savepath"].$info['wlogo']['savename'];
                    $image -> open($upload->rootPath.$wlogo);
                    $thumbpath = $upload ->rootPath.$info['wlogo']['savepath'].'w_'.$info['wlogo']['savename'];
                    $image -> thumb(50,50) -> save($thumbpath);
                    //得到要存入数据库中的地址
                    $_POST['wlogo'] = $wlogo;
                    //查询出原来的图片
                    $pic = $webconfig->field('wlogo')->find($wid);
                    //将图片的地址已‘/’分隔成数组再用/w将数组连接成字符串 
                    $thimg = implode('/w_',explode('/',$pic['wlogo']));
                    $rootpath = './Public/Uploads/';
                    //删除文件夹中的图片和缩略图
                    unlink($rootpath.$thimg);
                    unlink($rootpath.$pic['wlogo']);
  
            }else{
                 $this -> error('生成缩略图失败');
            }
     }

          //将修改的数据保存到数据库
         if($webconfig->save($_POST)){
            $this->success('更新成功','index');
        }else{
            $this -> error('更新失败');
        }
        
    }
  }
?>