<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
        //显示广告
        $m = M('advertises');
        $time = time();
        $map['adstarttime'] = array('lt',$time);
        $map['adendtime'] = array('gt',$time);
        $map['_logic'] = 'and';
        $res = $m -> where($map) ->field("adtitle,adpic,adurl,adplace") ->order("adplace asc") ->select();
        foreach ($res as $value) {
            $indexad[$value['adplace']][] = $value;
        }

        //显示推荐
        $c = D('ClassView');
        $f = M('floors');
        $s = D('GoodsSearch');
        $picad = M('floorads');
        $textad = M('floortext');
        $floors = $f -> table("food_floors f,food_classify c") -> where("f.cid = c.cid") -> field("frid,cname,c.cid cid") -> order('f.frsort asc,f.frid asc')->select();
        foreach ($floors as $key => $value) {
            $maps['frid'] = array('eq',$value['frid']);
            $fads = $picad -> where($maps) -> field("fadtitle,fadpic,fadurl,fadplace") -> select();
            foreach ($fads as $v) {
                $floors[$key]['picad'][$v['fadplace']][] = $v;
            }
            $floors[$key]['textad'] = $textad -> where($maps) -> field("ftext,fturl") -> select();
            $floors[$key]['hottab'] = $c -> childClass($value['cid']);
            
            //遍历推荐商品
            $s -> cid = $value['cid'];
            $s -> sort = 1;
            $s -> limit = ' LIMIT 0,4';
            $goods = $s -> select();
            foreach ($goods as $k => $vo) {
                $pics = explode(',', $vo['gpic']);
                $goods[$k]['gpic'] = $pics[0];
            }
            $floors[$key]['goods'] = $goods;
        }
        $this -> assign('indexad',$indexad);
        $this -> assign('floors',$floors);
        //友情链接
        $friendlink = M("friendlink");
        $data = $friendlink -> select();
        $this -> assign("friend",$data);
        //基本配置
        $web = D("WebConfig");
        $webdata = $web -> web();
        $this -> assign("web",$webdata);
        //热销榜
        $hot=M('Goods')->where("issale=1")->limit('4')->order('gsellnums desc')->select();
        foreach ($hot as $key => $value) {
            $pics = explode(',', $value['gpic']);
            $hot[$key]['gpic'] = $pics[0];
        }
        $this->assign('hot',$hot);
        $this -> display();
    }

   //显示选项卡
    public function floorTab(){
        $data['cid'] = I('cid');
        $s = D('GoodsSearch');
        $s -> cid = $data['cid'];
        $s -> sort = 1;
        $s -> limit = " LIMIT 0,5";
        $goods = $s -> select();
        foreach ($goods as $key => $value) {
            $pics = explode(',', $value['gpic']);
            $goods[$key]['gpic'] = $pics[0];
        }
        $this -> assign('goods',$goods);
        $this -> assign('data',$data);
        $this -> display();
    }

    public function viewCate(){        
        //首页分类
        $c = D('ClassView');
        $allclass = $c -> childClass(0);
        foreach ($allclass as $key => $value) {
            $allclass[$key]['child'] = $c -> allChild($value['cid']);
        }
        $this -> assign('allclass',$allclass);
        $this -> display();
    }
    //显示分类列表
    public function catalogue(){
        $data['cid'] = I('cid');

        //所有子分类
        $c = D('ClassView');
        $allclass = $c -> childClass($data['cid']);
        foreach ($allclass as $key => $value) {
            $allclass[$key]['child'] = $c -> childEnd($value['cid']);
        }

        //品牌信息
        $brand = $c->childBrand($data['cid']);

        //当前分类信息
        $class = $c -> findClass($data['cid']);
        $data['cname'] = $class['cname'];

        $this -> assign('brand',$brand);
        $this -> assign('cate',$allclass);
        $this -> assign('data',$data);
        $this -> display();
    }

    //登录状态
    public function loginStatus(){
        if ($_SESSION['uid']) {
            echo $_SESSION['uid'];
        }else{
            echo 0;
        }
    }

    //退出登录方法
    public function exitLogin(){
        session(null);
        $this -> redirect("index");
    }
    //导航
    public function nav(){
        $nav = M("nav");
        $data = $nav -> order("nsort asc")->select();
        echo json_encode($data);
    }
}
