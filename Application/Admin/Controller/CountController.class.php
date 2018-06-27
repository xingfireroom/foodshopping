<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 19:41
 */
namespace Admin\Controller;
use Think\Controller;
class CountController extends Controller{
    public function count(){
        //商品分类
        $cateArr=M('Classify')->where("parentid != 0")->select();
        $this->assign('cateArr',$cateArr);
        $cid=I('get.cid','');
        $this->assign('cid',$cid);
        if($cid!=''){
            $where['cid']=$cid;
            $oneArr=M('Classify')->where($where)->find();
            unset($where);
            $where['g.gclassification']=$cid;
        }

        $time=I('get.time','');
        $times=I('get.times','');
        $this->assign('time',$time);
        $this->assign('times',$times);
        if($time!='' && $times!=''){
            $where['o.otime']=array(array('egt',$time),array('elt',$times));
        }
        $goodsup = M('Ordersdetails os');
        // 连贯操作查询数据条数，利用find()遍历出来的是一维数组。select遍历的二维数组。
        $datatotal = $goodsup->field('count(*) count')
            ->join('food_orders o on o.oid=os.oid','inner')
            ->join('food_member m on o.uid=m.uid','inner')
            ->join('food_goods g on g.gid=os.gid','inner')
            ->join('food_classify c on  c.cid=g.gclassification','inner')
            ->where($where)->find();

        // 计算满足条件的数据总数
        $totalnums = $datatotal['count'];
        // 实例化分页类
        $pages = new \Think\Page($totalnums,10);
        // 获取分页的条件
        $limit = $pages->firstRow.','.$pages->listRows;
        // 连贯操作查询数据
        $goodupdata = $goodsup
            ->field('os.gnums,o.onumber,g.gname,c.cname,os.gprice,m.uname,o.otime,os.ostate')
            ->join('food_orders o on o.oid=os.oid','inner')
            ->join('food_member m on o.uid=m.uid','inner')
            ->join('food_goods g on g.gid=os.gid','inner')
            ->join('food_classify c on c.cid=g.gclassification','inner')
            ->where($where)->order('o.oid desc')->limit($limit)->select();
        $num=0;
        $money=0;
        foreach($goodupdata as $k=>$v){
            $num+=$v['gnums'];
            $money+=$v['gprice'];
        }
        $this->assign('num',$num);
        $this->assign('money',$money);
        $this->assign('title','统计管理');
        $this->assign('goodupdata',$goodupdata);
        $this->assign('page',$pages->show());
        $this->display();
    }
    public function dao(){
        $where=array();
        $cid=I('get.cid','');
        if($cid!=''){
            $where['g.gclassification']=$cid;
        }
        $time=I('get.time','');
        $times=I('get.times','');
        if($time!='' && $times!=''){
            $where['o.otime']=array(array('egt',$time),array('elt',$times));
        }

        //设置编码为utf-8
        header('content-type:text/html;charset=utf-8');
        //导出的Excel表格的名字
        $xlsName  = "销售列表";
        //导出的Excel表格的表头
        $xlsCell  = array(
            array('onumber','编号'),
            array('gname','商品名称'),
            array('cname','商品类别'),
            array('gprice','价格'),
            array('uname','顾客账号'),
            array('otime','下单时间'),
            array('ostate','商品状态'),
        );
        //依据搜索条件，在数据库中搜索数据
        $goodsup = M('Ordersdetails os');
        $xlsData = $goodsup
            ->field('os.gnums,o.onumber,g.gname,c.cname,os.gprice,m.uname,o.otime,os.ostate')
            ->join('food_orders o on o.oid=os.oid','inner')
            ->join('food_member m on o.uid=m.uid','inner')
            ->join('food_goods g on g.gid=os.gid','inner')
            ->join('food_classify c on c.cid=g.gclassification','inner')
            ->where($where)->order('o.oid desc')->select();
        $num=0;
        $money=0;
        foreach($xlsData as $k=>$v){
            $num+=$v['gnums'];
            $money+=$v['gprice'];
        }
        //向Excel表格中添加的数据

        foreach ($xlsData as $k => $v)
        {
            $xlsData[$k]['gprice']="￥".$v['gprice'];
            switch ($xlsData[$k]['ostate']) {
                case 0:
                    $xlsData[$k]['ostate']='取消';
                    break;
                case 1:
                    $xlsData[$k]['ostate']='未发货';
                    break;
                case 2:
                    $xlsData[$k]['ostate']='已发货';
                    break;
                case 3:
                    $xlsData[$k]['ostate']='换货';
                    break;
                case 4:
                    $xlsData[$k]['ostate']='换货';
                    break;
                case 5:
                    $xlsData[$k]['ostate']='完成';
                    break;
                case 6:
                    $xlsData[$k]['ostate']='完成';
                    break;
            }
        }

        $all=array(
            'onumber'=>'总销量：',
            'gname'=>$num.'件',
            'cname'=>'总销售额:',
            'gprice'=>$money.'元',
            'uname'=>'',
            'otime'=>'',
            'ostate'=>'',
        );
        array_push($xlsData,$all);
        exportExcel($xlsName,$xlsCell,$xlsData);
    }

}