<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;

class GrouplistController extends AdminController {
    public function index(){
        $search = $_GET['searchval'];
        if(!empty($search)){
            $map['title'] = array('like',"%$search%");
        }
        $list = M('auth_group');
        $rule = M('auth_rule');
        $total = $list -> where($map) ->count();
        $page = new \Think\Page($total,10);
        $data = $list -> limit($page->firstRow.','.$page->listRows) 
                      -> where($map) 
                      -> order("id asc") 
                      -> select();
        foreach ($data as $key => $value) {
            $rules = $rule -> where("id in({$value['rules']})") -> field('title') -> select();
            $rulename = '';
            foreach ($rules as $vo) {
                $rulename .=  $vo['title'].',';
            }
            $data[$key]['rules'] = trim("$rulename",",");
        }
        $this -> assign('page',$page->show());
        $this -> assign('data',$data);
        $this -> assign(title,'角色管理');
        $this -> display();
    }

    //添加角色页面
    public function addGroup(){
        $this -> assign(title,'添加角色');
        $page['action']['prev'] = "grouplist";
        $page['title']['current'] = "添加角色";
        $page['title']['prev'] = '角色管理';
        $modu = M('modules');
        $rule = M('auth_rule');
        $data = $modu -> select();
        foreach ($data as $value) {
            $mid = $value['id'];
            $rules = $rule -> where("mid={$mid}") -> field("id,title") ->select();
            $ruleall[$mid] = $rules;
        }
        $this -> assign(rule,$ruleall);
        $this -> assign(data,$data);
        $this -> assign(page,$page);
        $this -> display();
    }
    
    //修改角色页面
    public function modifyGroup(){
        $this -> assign(title,'编辑角色');
        $page['action']['prev'] = "accesslist";
        $page['title']['current'] = "编辑角色";
        $page['title']['prev'] = '角色管理';
        $modu = M('modules');
        $rule = M('auth_rule');
        $group = M('auth_group');
        $groupinfo = $group -> where("id = {$_GET['id']}") -> field('rules,title,description,status') -> find();
        $rulearr = explode(',', $groupinfo['rules']);
        $data = $modu -> select();
        foreach ($data as $value) {
            $mid = $value['id'];
            $rules = $rule -> where("mid=$mid") -> field("id,title") ->select();
            foreach ($rules as $k => $v) {
                if (in_array($v['id'], $rulearr)) {
                    $rules[$k]['ischeck'] = 1;
                }
            }
            $ruleall[$mid] = $rules;
        }
        $this -> assign(group,$groupinfo);
        $this -> assign(rule,$ruleall);  
        $this -> assign(data,$data);
        $this -> assign(page,$page);
        $this -> display();
    }

    //处理添加角色
    public function insertGroup(){
        $insert = M('auth_group');
        $_POST['rules'] = implode(',', $_POST['rule']);
        unset($_POST['rule']);
        if ($insert -> add($_POST)){
            $this->redirect('Admin/Grouplist/index');
        }else{
            $this->error('Add error...');
        }
    }

    //处理修改角色
    public function updataGroup(){
        $updata = M('auth_group');

        $_POST['rules'] = implode(',', $_POST['rule']);
        foreach ($_POST['rule'] as $key => $value) {
            $_POST['rules'] .= $value.',';
        }
        $_POST['rules'] = trim($_POST['rules'],',');
        unset($_POST['rule']);
        if($updata -> save($_POST)) {
            $this->redirect('Admin/Grouplist/index');
        }else{
            $this->error('MOdify error...');
        }          
    }

    //处理删除角色
    public function deleteGroup(){
//        if(!authCheck('Admin/Grouplist/deleteGroup',session('uid'))){
//            echo 2;
//            return;
//        }
        $delgroup = M('auth_group');
        if ($delgroup -> delete($_POST['id'])) {
            $delrule = M('auth_group_access');
            $map['group_id'] = array('eq',$_POST['id']);
            $delrule -> where($map) -> delete();
            echo 1;
            return;
        }
        echo 0;
    }

    //更新角色状态
    public function groupState(){
//        if(!authCheck('Admin/Grouplist/groupState',session('uid'))){
//            echo 2;
//            return;
//        }
        $state = M('auth_group');
        $map['id'] = $_POST['id'];
        $oldstate = $state -> where($map) ->field('status') -> find($_POST['id']);
        $newstate['status'] = $oldstate['status'] == 1?0:1;
        if ($state->where($map)->save($newstate)) {
            echo 1;
            return;
        }
        echo 0;
    }

    //成员管理页面
    public function groupMem(){
        $page['action']['prev'] = "accesslist";
        $page['title']['current'] = "成员管理";
        $page['title']['prev'] = '角色管理';
        $m = D('GroupMemView');
        $map['group_id'] = array('eq',$_GET['id']);
        $data = $m -> where($map) -> select();
        $g = M('auth_group');
        $gtitle = $g -> where("id = {$_GET['id']}") -> field('title') -> find();
        $this -> assign(gtitle,$gtitle['title']);
        $this -> assign(data,$data);
        $this -> assign(page,$page);
        $this -> assign(title,'成员管理');
        $this -> display();
    }

    //添加成员页面
    public function addMem(){
        $this -> assign(title,'添加成员');
        $page['action']['prev'] = "grouplist/groupmem";
        $page['title']['current'] = "添加成员";
        $page['title']['prev'] = '成员管理';
        $g = M("auth_group");
        $ginfo = $g -> field('title') -> find($_GET['id']);
        $this -> assign(gtitle,$ginfo['title']);
        $this -> assign(page,$page);
        $this -> display();
    }

    //处理添加成员
    public function insertMem(){
        $mem = M('member');
        $map['uname'] = array('eq',$_POST['uname']);
        $user = $mem -> where($map) -> field('uid') -> find();
		//dump($_POST['uname']);
        if ($user) {
            unset($_POST['uname']);
            $_POST['uid'] = $user['uid'];
            $gmem = M('auth_group_access');
            if ($gmem->add($_POST)) {
                $this->redirect('/Admin/Grouplist/groupMem/id/'.$_POST['group_id']);
            }else{
                $this->error('Add User error...');
            }
        }else{
            $this->error('没有此用户，请先添加！');
        }
    }

    //处理删除成员
    public function deleteMem(){
//        if(!authCheck('Admin/Grouplist/deleteMem',session('uid'))){
//            echo 2;
//            return;
//        }
        $delg = M("auth_group_access");
        $map['uid'] = array('eq',$_POST['uid']);
        $map['group_id'] = array('eq',$_POST['group_id']);
        $map['_logic'] = 'and';
        if($delg -> where($map) -> delete()){
            echo 1;
            return;
        }
        echo 0;
    }
}
