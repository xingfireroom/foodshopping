<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;

class CouponmanageController extends AdminController {
    public function index(){
        $search = $_GET['searchval'];
        if(!empty($search)){
            $map['bname'] = array("like","%$search%");
        }
        
        $viewcoupong = M('coupongroups');
        $viewclass = M('classify');
        $num = $viewcoupong -> where($map) -> field('count(*) count') -> find();
        $total = $num["count"];
        
        $pages = new \Think\Page($total,10);
        $limit = $pages ->firstRow.','.$pages->listRows;
        $data = $viewcoupong -> where($map)
                             -> limit($limit)
                             -> field("cgid,cid,cgname,cgspend,cgreduce,cgstarttime,cgendtime,cgnums,cgprefix,cgstate")
                             -> order("cgendtime desc")
                             -> select();
        foreach ($data as $key => $value) {
            $viewcid['cid'] = array('eq',$value['cid']);
            $classall = $viewclass -> where($viewcid) -> field('cname') ->find();
            if ($value['cid'] == 0) {
                $cname = '全场通用';
            }else{
                $cname = $classall['cname']."专场";
            }            
            $data[$key]['cname'] = $cname;
        }
        $this -> assign(data,$data);
        $this -> assign(title,'优惠券管理');
        $this -> assign(page,$pages->show());
        $this -> display();
    }
    
    //优惠券详情页面
    public function coupons(){
        $this -> assign(title,'优惠券');
        $page['action']['prev'] = "Couponmanage";
        $page['title']['current'] = "优惠券";
        $page['title']['prev'] = '优惠券管理';
        $couponname = "coupons_".$_GET['id'];
        $viewcoupon = M($couponname);
        $viewmember = M("member");

        if(!empty($_GET['cpstate'])){
            $cpstate = $_GET['cpstate'];
        }else{
            $cpstate = 0;
        }
        
        $num = $viewcoupon -> where("cpstate = ".$cpstate) -> field('count(*) count') -> find();
        $total = $num["count"];        
        $pages = new \Think\Page($total,10);
        $limit = $pages ->firstRow.','.$pages->listRows;

        $data = $viewcoupon -> table("food_". $couponname." c,food_coupongroups g")
                            -> where("c.cgid = g.cgid AND c.cpstate = ".$cpstate)
                            -> limit($limit)
                            -> field("c.cpid,c.cpcode,c.cpstate,c.uid,c.cgid,g.cgname,g.cgspend,g.cgreduce,g.cgstarttime,g.cgendtime")
                            -> select();
        foreach ($data as $key => $value) {
            $uname = '';
            if ($value['uid']) {
                $mapp['uid'] = array('eq',$value['uid']);                
                $members = $viewmember -> where($mapp) -> field('uname') -> find();
                $uname = $members['uname'];                
            }
            $data[$key]['uname'] = $uname;
        }
        $this -> assign(data,$data);
        $this -> assign(page,$page);
        $this -> assign(pages,$pages->show());
        $this -> display();
    }

    //添加优惠券页面
    public function addCoupon(){
        $this -> assign(title,'添加优惠券');
        $page['action']['prev'] = "Couponmanage";
        $page['title']['current'] = "添加优惠券";
        $page['title']['prev'] = '优惠券管理';
        $classes = M('classify');
        $data = $classes -> where('parentid = 0') -> field('cid,cname') -> select();
        $this -> assign(data,$data);
        $this -> assign(page,$page);
        $this -> display();
    }
    
    //修改优惠券页面
    public function modifyCoupon(){
        $this -> assign(title,'编辑优惠券');
        $page['action']['prev'] = "Couponmanage";
        $page['title']['current'] = "编辑优惠券";
        $page['title']['prev'] = '优惠券管理';

        //查询分类
        $classes = M('classify');
        $classinfo = $classes -> where('parentid = 0') -> field('cid,cname') -> select();

        //查询优惠券
        $viewcoupong = M('coupongroups');
        $map['cgid'] = array('eq',$_GET['id']);
        $data = $viewcoupong -> where($map)
                             -> field("cgid,cid,cgname,cgspend,cgreduce,cgstarttime,cgendtime,cgnums,cgprefix,cgstate")
                             -> find();
        $this -> assign(classinfo,$classinfo);
        $this -> assign(data,$data);
        $this -> display();
    }

    //处理添加优惠券
    public function insertCoupon(){
        $insert = M('coupongroups');
        $_POST['cgprefix'] = strtoupper($_POST['cgprefix']);
        $_POST['cgstarttime'] = timeSets($_POST['cgstarttime'],0);
        $_POST['cgendtime'] = timeSets($_POST['cgendtime'],1);
        $insert->create($_POST);
        if ($inid = $insert -> add()){
            $this->createTable($inid,$_POST['cgnums'],$_POST['cgprefix']);
            $this->redirect('/admin/Couponmanage', 0, 'Add success...');
        }else{
            $this->error('Add error...');
        }
    }

    //处理优惠券修改
    public function updataCoupon(){
        $updata = M('coupongroups');
        $where['cgid'] = array('eq',$_POST['cgid']);
        if($updata -> where($where) -> save($_POST)) {
            $this->redirect('Admin/Couponmanage/index');
        }else{
            $this->error('MOdify error...');
        }
    }

    //处理优惠券删除
    public function deleteCoupon(){
//        if(!authCheck('Admin/Couponmanage/deleteCoupon',session('uid'))){
//            echo 2;
//            return;
//        }
        $delcoupon = M('coupongroups');
        if ($delcoupon -> delete($_POST['cgid'])) {
            $delsql = "DROP TABLE food_coupons_{$_POST['cgid']}";
            $delcoupon -> query($delsql);
            echo 1;
            return;
        }
        echo 0;
    }

    //更新优惠券状态
    public function couponState(){
//        if(!authCheck('Admin/Couponmanage/couponState',session('uid'))){
//            echo 2;
//            return;
//        }
        
        $state = M('coupongroups');
        $map['cgid'] = array('eq',$_POST['cgid']);
        $oldstate = $state -> field('cgstate') -> find($_POST['cgid']);

        if ($oldstate['cgstate'] == 1) {
            $newstate['cgstate'] = 0;
        }else{
            $newstate['cgstate'] = 1;
        }

        if ($state->where($map)->save($newstate)) {
            echo 1;
            return;
        }
        echo 0;
    }

    //生成新的优惠券表
    private function createTable($id,$num,$prefix=''){
        $tablename = "coupons_".$id;
        $create = M('coupongroups');
        $res = $create->query("CREATE TABLE IF NOT EXISTS food_".$tablename." (
                            `cpid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
                            `cgid` mediumint(8) unsigned NOT NULL,
                            `uid` mediumint(8),                            
                            `cpcode` char(24) NOT NULL,
                            `cpstate` tinyint(1) NOT NULL DEFAULT '0',
                            PRIMARY KEY (`cpid`)
                            ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");

        $addcoupons = M($tablename);
        for ($i=0; $i < $num; $i++) {
            $coupon['cpcode'] = $prefix.uniqid();
            $coupon['cpcode'] = strtoupper($coupon['cpcode']);
            $coupon['cgid'] = $id;
            $addcoupons -> add($coupon);
        }
    }
}
