<?php 
namespace Admin\Controller;
use Admin\Controller\AdminController;
class ReviewManageController extends AdminController {
	public function index(){
		// 计算总条数用于分页
		$total = M('goodsreview')->field('count(*) count')->find();
		$totalnums = $total['count'];
		$pages = new \Think\Page($totalnums,10);
		// 获取分页的条件
		$limit = $pages->firstRow.','.$pages->listRows;
		// 声明一个空类用来操作多表查询
		$list = M();
		$reviewdata = $list->table('food_member m,food_goods g,food_goodsreview r')->field('r.rid,m.uname,g.gname,r.integral,r.content')->where('r.uid=m.uid and r.gid=g.gid')->limit($limit)->select();
		$this->assign('title','评论管理');
		$this->assign('page',$pages->show());
		$this->assign('reviewdata',$reviewdata);
		$this->display();
	}
	/**
	*删除评价
	*/
	public function delReview(){
		$list = M('goodsreview');
		if ($list->delete($_GET)) {
			
		} else {
			$this->success('删除成功！');
			// $this->error('删除失败！');
		}
	}
}
 ?>