<?php 
   /**
      * 权限验证
      * @param rule string|array  需要验证的规则列表,支持逗号分隔的权限规则或索引数组
      * @param uid  int           认证用户的id
      * @param string mode        执行check的模式
      * @param relation string    如果为 'or' 表示满足任一条规则即通过验证;如果为 'and'则表示需满足所有规则才能通过验证
      * @return boolean           通过验证返回true;失败返回false
     */
    function authCheck($rule,$uid,$type=1, $mode='url', $relation='or'){
        //超级管理员跳过验证
        $auth=new \Think\Auth();
        //获取当前uid所在的角色组id

        if(in_array($uid, C('ADMINISTRATOR'))){
            return true;
        }else{
            return $auth->check($rule,$uid,$type,$mode,$relation)?true:false;
        }
    }

    /**
      * 取得指定时间戳在当天的开始时间戳或结束时间戳
      * @param time int         指定的时间戳
      * @param state  int       0：获取当天开始时间戳  1：获取当天最后时间戳
      * @return times int       返回结果 时间戳
      * @return author          aifece  244154198@qq.com
     */
    function timeSets($time,$state=0){
        $time = explode('-', $time);
        if ($state == 0) {
            $times = mktime(0,0,0,$time[1],$time[2],$time[0]);
        }else{
            $times = mktime(23,59,59,$time[1],$time[2],$time[0]);
        }
        return $times;
    }

    /**
      * 出去多维数组重复值
      * @param array  array     多维数组
      * @return newarr array    去除重复值后 新的数组
      * @return author          aifece  244154198@qq.com
     */
    function arr_unique($array){
        $newarr = array();
        foreach($array as $key=>$v){
            if(!in_array($v, $newarr)){
              $newarr[$key]=$v;
            }
        }
        return $newarr;
    }

    /**
      * 获取品牌的第一个字母
      * @param str  string      字符串
      * @return str             返回一个大写字母
      * @return author          aifece  244154198@qq.com
     */
    function getFirstChar($str){
        $firstchar_ord=ord(strtoupper($str{0}));
        if (($firstchar_ord>=65 and $firstchar_ord<=91)or($firstchar_ord>=48 and $firstchar_ord<=57)) 
            return $str{0}; 
        $s=iconv("UTF-8","gb2312", $str); 
        $asc=ord($s{0})*256+ord($s{1})-65536; 
        if($asc>=-20319 and $asc<=-20284)
            return "A"; 
        if($asc>=-20283 and $asc<=-19776)
            return "B"; 
        if($asc>=-19775 and $asc<=-19219)
            return "C"; 
        if($asc>=-19218 and $asc<=-18711)
            return "D"; 
        if($asc>=-18710 and $asc<=-18527)
            return "E"; 
        if($asc>=-18526 and $asc<=-18240)
            return "F"; 
        if($asc>=-18239 and $asc<=-17923)
            return "G"; 
        if($asc>=-17922 and $asc<=-17418)
            return "H"; 
        if($asc>=-17417 and $asc<=-16475)
            return "J"; 
        if($asc>=-16474 and $asc<=-16213)
            return "K"; 
        if($asc>=-16212 and $asc<=-15641)
            return "L"; 
        if($asc>=-15640 and $asc<=-15166)
            return "M"; 
        if($asc>=-15165 and $asc<=-14923)
            return "N"; 
        if($asc>=-14922 and $asc<=-14915)
            return "O"; 
        if($asc>=-14914 and $asc<=-14631)
            return "P"; 
        if($asc>=-14630 and $asc<=-14150)
            return "Q"; 
        if($asc>=-14149 and $asc<=-14091)
            return "R"; 
        if($asc>=-14090 and $asc<=-13319)
            return "S"; 
        if($asc>=-13318 and $asc<=-12839)
            return "T"; 
        if($asc>=-12838 and $asc<=-12557)
            return "W"; 
        if($asc>=-12556 and $asc<=-11848)
            return "X"; 
        if($asc>=-11847 and $asc<=-11056)
            return "Y"; 
        if($asc>=-11055 and $asc<=-10247)
            return "Z"; 
        return null; 
    } 
    
    
    //支付方式
    
    function paytype($type){
    	$str='';
    	switch ($type){
    		case 0:$str='未支付';break;
    		case 1:$str='微信支付';break;
    		case 2:$str='支付宝支付';break;
    		case 3:$str='货到付款';break;
    	}
    	return $str;
    }
function exportExcel($xlsName,$expCellName,$expTableData){

    $fileName = $xlsName.date('_YmdHis');//or $xlsTitle 文件名称可根据自己情况设定
    $cellNum = count($expCellName);//得到表头的长度
    $dataNum = count($expTableData);//得到内容的长度
    vendor("PHPExcel.PHPExcel");//引入EXCEL类包
    $objPHPExcel = new \PHPExcel();//实例化类
    $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');
    $objPHPExcel->getActiveSheet(0)->mergeCells('A1:'.$cellName[$cellNum-1].'1');//合并单元格
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1',$fileName.'商品销售表'); //输入标题
    $objPHPExcel->setActiveSheetIndex(0)->getStyle ( 'A1' )->getAlignment ()->setHorizontal ( \PHPExcel_Style_Alignment::HORIZONTAL_CENTER );  // 设置单元格水平对齐格式
    $objPHPExcel->setActiveSheetIndex(0)->getStyle ( 'A1' )->getAlignment ()->setVertical ( \PHPExcel_Style_Alignment::VERTICAL_CENTER );		// 设置单元格垂直对齐格式

    //输出标题栏
    for($i=0;$i<$cellNum;$i++){
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i].'2', $expCellName[$i][1]);
    }
    //输出内容栏
    for($i=0;$i<$dataNum;$i++){
        for($j=0;$j<$cellNum;$j++){
            $objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j].($i+3), $expTableData[$i][$expCellName[$j][0]]);
        }
    }
    //导出
    header('pragma:public');
    header('Content-type:application/vnd.ms-excel;charset=utf-8;name="'.$fileName.'.xls"');
    header("Content-Disposition:attachment;filename=$fileName.xls");
    $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save('php://output');
    exit;
}
    
    
    
    
    
    
    
    
    
    
    
    
