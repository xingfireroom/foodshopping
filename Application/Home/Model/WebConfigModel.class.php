<?php
namespace Home\Model;
use Think\Model;
class WebConfigModel extends Model{
	public function web(){
		$web = M("webconfig");
        return $webdata = $web ->where("wid = 2") -> find();
	}
}