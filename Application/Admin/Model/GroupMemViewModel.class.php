<?php
    namespace Admin\Model;
    use Think\Model\ViewModel;
    class GroupMemViewModel extends ViewModel{
        public $viewFields=array(
                                 'member' => array('_table'=>'food_member','uid'=>'memid','uname'),
                                 'groups' => array('_table'=>'food_auth_group_access','group_id','uid','_on'=>'groups.uid=member.uid'),
                                 );
    }