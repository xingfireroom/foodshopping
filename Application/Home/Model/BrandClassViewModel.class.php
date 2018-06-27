<?php
namespace Home\Model;
use Think\Model\ViewModel;
class BrandClassViewModel extends ViewModel{
	public $viewFields = array(
			'brand' => array('_table'=>'food_brand','bname','brandpic','firstchar','bid'),
			'btoc' => array('_table'=>'food_brandtoclass','_on'=>'btoc.bid=brand.bid'),
		);
}