<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;

class IndexsetController extends AdminController {
    public function index(){
        $this -> assign('title','推荐设置');
        $model = M('floors');
        $floors=$model->table('food_floors f,food_classify c')
                    ->where('f.cid=c.cid')
                    ->field('c.cname,f.frid,f.frsort')
                    ->order('f.frsort')
                    ->select();
        $this -> assign(floors,$floors);
        $this -> display();
    }

    //查询分类
    public function viewClass(){
        $Model = M();
        $sql = "SELECT cid,cname FROM food_classify WHERE parentid = 0 AND not cid in(SELECT cid FROM food_floors) ORDER BY cid asc";
        $data = $Model->query($sql);
        echo json_encode($data);
    }

    //添加图片广告页面
    public function createPic(){
        $this -> assign('title','添加图片');
        $page['action']['prev'] = "indextop";
        $page['title']['current'] = "添加图片";
        $page['title']['prev'] = '推荐设置';
        $this -> assign(page,$page);
        $this -> assign(frid,$_GET['frid']);
        $this -> display();
    }

    //添加文字广告页面
    public function createText(){
        $this -> assign('title','添加文本链接');
        $page['action']['prev'] = "indextop";
        $page['title']['current'] = "添加文本链接";
        $page['title']['prev'] = '推荐设置';
        $this -> assign(page,$page);
        $this -> assign(frid,$_GET['frid']);
        $this -> display();
    }

    //修改图片广告页面
    public function editPic(){
        $this -> assign('title','编辑图片');
        $page['action']['prev'] = "indexset";
        $page['title']['current'] = "编辑图片";
        $page['title']['prev'] = '首页设置';
        $this -> assign(page,$page);
        $selectad = M('floorads');
        $adinfo = $selectad->find($_GET['id']);
        $this -> assign(adinfo,$adinfo);
        $this -> display();
    }

    //修改文字广告页面
    public function editText(){
        $this -> assign('title','编辑文本链接');
        $page['action']['prev'] = "indexset";
        $page['title']['current'] = "编辑文本链接";
        $page['title']['prev'] = '首页设置';
        $this -> assign(page,$page);
        $selectad = M('floortext');
        $adinfo = $selectad->find($_GET['id']);
        $this -> assign(adinfo,$adinfo);
        $this -> display();
    }

    //ajax加载图片广告数据
    public function loadData(){
        $map['frid'] = array('eq',$_POST['frid']);
        if (!empty($_POST['fadplace'])) {
            $map['fadplace'] = array('eq',$_POST['fadplace']);
            $map['_logic'] = 'AND';
        }
        $floorads = M('floorads');
        $ads = $floorads -> where($map)  -> order('fadid desc') ->select();
        $this -> assign(ads,$ads);
        $this -> display();
    }

    //Ajax加载文字广告数据
    public function loadText(){
        $map['frid'] = array('eq',$_POST['frid']);
        $floortext = M('floortext');
        $ads = $floortext -> where($map) -> order('ftid desc') ->select();
        $this -> assign(ads,$ads);
        $this -> display();
    }

    //ajax添加推荐
    public function addFloor(){
//        if(!authCheck('Admin/Indexset/addFloor',session('uid'))){
//            echo 2;
//            return;
//        }
        $addfloor = M('floors');
        $addfloor->create($_POST);
        if ($addfloor->add()) {
            echo 1;
        }
    }

    //ajax修改推荐
    public function modifyFloor(){
//        if(!authCheck('Admin/Indexset/modifyFloor',session('uid'))){
//            echo 2;
//            return;
//        }
        if($_POST['cid'] == ''){
            unset($_POST['cid']);
        }
        $updatafloor = M('floors');
        $map['frid'] = array('eq',$_POST['frid']);
        $res = $updatafloor-> where($map) ->save($_POST);
        if ($res) {
            echo 1;
            return;
        }
        echo 0;
    }

    //ajax删除推荐
    public function deleteFloor(){
//        if(!authCheck('Admin/Indexset/deleteFloor',session('uid'))){
//            echo 2;
//            return;
//        }

        //查询密码
        $mem = M('member');
        $user = $mem -> find($_SESSION['uid']);
        if (md5($_POST['adminpwd']) != $user['password']) {
            echo 9;
            return;
        }
        
        //删除数据
        $dftext = M('floortext');
        $map['frid'] = array('eq',$_POST['frid']);
        $res = $dftext-> where($map) -> delete();
        $dfads = M('floorads');
        $res = $dfads-> where($map) -> delete();
        $dfloor = M('floors');
        $res = $dfloor-> where($map) -> delete();
        if ($res) {
            echo 1;
            return;
        }
        echo 0;
    }

    //处理添加广告
    public function insertAd(){
        header("Content-Type:text/html;charset=utf-8");
        if ($_POST['adtype'] == 'pic') {
            $upload = new \Think\Upload();
            $upload -> exts = array('jpg','png','gif');
            $upload -> rootPath = './Public/Uploads/';
            $upinfo = $upload->upload($_FILES);
            if ($upload->getError()) {
                $this->error('图片上传失败！');
                return;
            }
            $picname = $upinfo['fadpic']['savepath'].$upinfo['fadpic']['savename'];
            $tubname = implode('/th_',explode('/',$picname));
            $tubimg = new \Think\Image();
            $tubimg->open("./Public/Uploads/$picname");
            $tubimg->thumb(150,150);
            if(!$tubimg->save("./Public/Uploads/$tubname")){
                $this->error('图片生成缩略图失败！');
                return;
            }
            $_POST['fadpic'] = $picname;
            $_POST['fadstarttime'] = timeSets($_POST['fadstarttime'],0);
            $_POST['fadendtime'] = timeSets($_POST['fadendtime'],1);
            $insertad = M('floorads');
        }else if($_POST['adtype'] == 'text'){
            $insertad = M('floortext');
        }else{
            $this->error('新增失败');
            return;
        }
        unset($_POST['adtype']);

        $insertad->create();
        if ($insertad->add()) {
            $this->success('添加成功',U('Admin/Indexset/index'));
        }else{
            $this->error('新增失败');
        }
    }
    
    //处理修改广告
    public function editAd(){
        if ($_POST['adtype'] == 'pic') {
            $editad = M('floorads');
            if(!empty($_FILES['fadpic']['name'])){
                //删除原图片
                $adinfo = $editad->find($_POST['fadid']);
                $picname = "./Public/Uploads/".$adinfo['fadpic'];
                $tubname = "./Public/Uploads/".implode('/th_',explode('/',$adinfo['fadpic']));
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
                
                $picname = $upinfo['fadpic']['savepath'].$upinfo['fadpic']['savename'];
                $tubname = implode('/th_',explode('/',$picname));
                $tubimg = new \Think\Image();
                $tubimg->open("./Public/Uploads/$picname");
                $tubimg->thumb(150,150);
                
                if(!$tubimg->save("./Public/Uploads/$tubname")){
                    $this->error('图片生成缩略图失败！');
                    return;
                }
                
                $_POST['fadpic'] = $picname;
            }
            
            $_POST['fadstarttime'] = timeSets($_POST['fadstarttime'],0);
            $_POST['fadendtime'] = timeSets($_POST['fadendtime'],1);
            $frid = $editad->find($_POST['fadid']);
        }else if($_POST['adtype'] == 'text'){
            $editad = M('floortext');
            $frid = $editad->find($_POST['ftid']);
        }else{
            $this->error('修改失败');
            return;
        }
        unset($_POST['adtype']);

        $result = $editad->save($_POST);
        if ($result) {
            $this->success('修改成功',U('Admin/Indexset/index'));
        }else{
            $this->error('修改失败');
        }
    }
    
    //处理删除广告
    public function deleteAd(){
//        if(!authCheck('Admin/Indexset/deleteAd',session('uid'))){
//            echo 2;
//            return;
//        }
        if ($_POST['adtype'] == 'pic') {
            //删除图片
            $deletead = M('floorads');
            $adinfo = $deletead->find($_POST['fadid']);
            $picname = "./Public/Uploads/".$adinfo['fadpic'];
            $tubname = "./Public/Uploads/".implode('/th_',explode('/',$adinfo['fadpic']));
            unlink($picname);
            unlink($tubname);
        }else if($_POST['adtype'] == 'text'){
            $deletead = M('floortext');
        }

        if($deletead->delete($_POST['fadid'])){
            echo 1;
            return;
        }
        echo 0;
    }
}
