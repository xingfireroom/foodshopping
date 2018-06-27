<?php
namespace Home\Controller;
use Think\Controller;
class ReviewController extends Controller {
	public function index(){
		$list = M('goods');
		$list1 = M('ordersdetails');
		// 查出商品的gid
		$ddata = $list1->field('gid')->find($_GET['id']);
		// 根据gid查出商品的一些信息
		$gdata = $list->field('gid,gname,gpic')->where('gid='.$ddata['gid'].'')->find();
		$gdata['gpic'] = explode(',', $gdata['gpic'])[0];
		// 实例化评价表
		$list2 = M('goodsreview');
		// 计算一共有多少个
		$total = $list2->field('integral')->where(array('gid'=>$gdata['gid']))->select();
		$sum = 0;
		$sum1 = 0;
		// 计算评价的等级
		foreach ($total as $value) {
			$sum +=5;
			$sum1 += $value['integral'];
		}
		// 将等级发送前台
		$nums  = ($sum1/$sum)*100;
		$this->assign('nums',$nums);
		$this->assign('did',$_GET['id']);
		$this->assign('data',$gdata);
		//基本配置
		$web = D("WebConfig");
		$webdata = $web -> web();
		$this -> assign("web",$webdata);
		$this->display();
	}
	public function submitComment(){
		// 读取登陆用户的uid
		$_POST['uid'] = session('uid');
		$list = M('goodsreview');
		if ($list->add($_POST)) {
			$list1 = M('member');
			$list2 = M('ordersdetails');
			$list2->where($_GET)->save(array('ostate'=>6));
			$scores = $list1->field('scores')->where('uid='.$_POST['uid'].'')->find();
			$list1->where('uid='.$_POST['uid'].'')->save(array('scores'=>($scores['scores']+10)));
		} else {
			$this->error('评论失败！');
		}
		
	}
}
?>