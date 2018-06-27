<?php
namespace Home\Model;
use Think\Model\ViewModel;
class BrandClassViewModel extends ViewModel{
	public $viewFields = array(
			'brand' => array('_table'=>'sx_brand','bname','brandpic','firstchar','bid'),
			'btoc' => array('_table'=>'sx_brandtoclass','_on'=>'btoc.bid=brand.bid'),
		);
}