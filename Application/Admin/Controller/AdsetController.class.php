<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;

class AdsetController extends AdminController {
    public function index(){
        $placeid = $_GET['placeid'];        
        if(!empty($placeid)){
            if($placeid > 5){
                $map['adplace'] = array("gt",5);
            }else{
                $map['adplace'] = array('eq',$placeid);
            }
        }
        
        $search = $_GET['searchval'];
        if(!empty($search)){
            $map['adtitle'] = array("like","%$search%");
            $map['_logic'] = 'AND';
        }

        $advertises = M('advertises');
        $total = $advertises -> where($map) -> count();        
        $pages = new \Think\Page($total,10);
        $limit = $pages ->firstRow.','.$pages->listRows;
        $ads = $advertises -> where($map) ->limit($limit) -> select();
        $set['action'] = "adset";
        $this -> assign(set,$set);
        $this -> assign(ads,$ads);
        $this -> assign("page",$pages->show());
        $this -> assign(title,'广告管理');
        $this -> display();
    }
    
    //添加广告页面
    public function createAd(){
        $this -> assign(title,'添加广告');
        $page['action']['prev'] = "adset";
        $page['title']['current'] = "添加广告";
        $page['title']['prev'] = '广告管理';
        $this -> assign(page,$page);
        $this -> display();
    }
    
    //修改广告页面
    public function editAd(){
        $this -> assign(title,'编辑广告');
        $page['action']['prev'] = "adset";
        $page['title']['current'] = "编辑广告";
        $page['title']['prev'] = '广告管理';
        $this -> assign(page,$page);
        $selectad = M('advertises');
        $adinfo = $selectad->find($_GET['id']);
        $this -> assign(adinfo,$adinfo);
        $this -> display();
    }

    //处理添加广告
    public function insertAd(){
        header("Content-Type:text/html;charset=utf-8");
        $upload = new \Think\Upload();
        $upload -> exts = array('jpg','png','gif');
        $upload -> rootPath = './Public/Uploads/';
        $upinfo = $upload->upload($_FILES);
        if ($upload->getError()) {
            $this->error('图片上传失败！');
            return;
        }
        $picname = $upinfo['adpic']['savepath'].$upinfo['adpic']['savename'];
        $tubname = implode('/th_',explode('/',$picname));
        $tubimg = new \Think\Image();
        $tubimg->open("./Public/Uploads/$picname");
        $tubimg->thumb(150,150);
        if(!$tubimg->save("./Public/Uploads/$tubname")){
            $this->error('图片生成缩略图失败！');
            return;
        }
        $_POST['adpic'] = $picname;
        $_POST['adstarttime'] = timeSets($_POST['adstarttime'],0);
        $_POST['adendtime'] = timeSets($_POST['adendtime'],1);
        $insertad = M('advertises');
        $insertad->create();
        if ($insertad->add()) {
            $this->success("新增成功",U("Admin/Adset/index"));
        }else{
            $this->error('新增失败');
        }
    }
    
    //处理修改广告
    public function updataAd(){
        header("Content-Type:text/html;charset=utf-8");
        $updataad = M('advertises');

        if(!empty($_FILES['adpic']['name'])){
            //删除原图片
            $adinfo = $updataad->find($_POST['adid']);
            $picname = "./Public/Uploads/".$adinfo['adpic'];
            $tubname = "./Public/Uploads/".implode('/th_',explode('/',$adinfo['adpic']));
            unlink($picname);
            unlink($tubname);
            
            //增加新图片
            $upload = new \Think\Upload();
            $upload -> exts = array('jpg','png','gif');
            $upload -> rootPath = './Public/Uploads/';
            $upinfo = $upload->upload($_FILES);
            
            if ($upload->getError()) {
                $this->error('图片上传失败！');
                return;
            }
            
            $picname = $upinfo['adpic']['savepath'].$upinfo['adpic']['savename'];
            $tubname = implode('/th_',explode('/',$picname));
            $tubimg = new \Think\Image();
            $tubimg->open("./Public/Uploads/$picname");
            $tubimg->thumb(150,150);
            
            if(!$tubimg->save("./Public/Uploads/$tubname")){
                $this->error('图片生成缩略图失败！');
                return;
            }
            
            $_POST['adpic'] = $picname;
        }
        
        $_POST['adstarttime'] = timeSets($_POST['adstarttime'],0);
        $_POST['adendtime'] = timeSets($_POST['adendtime'],1);
        $result = $updataad->save($_POST);
        if ($result) {
            $this->success("修改成功",U("Admin/Adset/index"));
        }else{
            $this->error('修改失败');
        }
    }
    
    //处理删除广告
    public function deleteAd(){
//        if(!authCheck('Admin/Adset/deleteAd',session('uid'))){
//            echo 2;
//            return;
//        }
        
        //删除图片
        $deletead = M('advertises');
        $adinfo = $deletead->find($_POST['adid']);
        $picname = "./Public/Uploads/".$adinfo['adpic'];
        $tubname = "./Public/Uploads/".implode('/th_',explode('/',$adinfo['adpic']));
        unlink($picname);
        unlink($tubname);
        if($deletead->delete($_POST['adid'])){
            echo 1;
            return;
        }
        echo 0;
    }
}
