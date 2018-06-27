<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;

class AccesslistController extends AdminController {
    public function index(){
        $search = $_GET['searchval'];
        if(!empty($search)){
            $map['_string'] = "(name like '%$search%') OR (title like '%$search%')";
        }
        $list = D('RuleView');
        $total = $list->count();
        $page = new \Think\Page($total,10);
        $data = $list -> limit($page->firstRow.','.$page->listRows) -> where($map) -> order("id asc") -> select();
        $this -> assign('page',$page->show());
        $this -> assign('data',$data);
        $this -> assign(title,'权限管理');
        $this -> display();
    }

    //添加权限页面
    public function addAccess(){
        $this -> assign(title,'添加权限');
        $page['action']['prev'] = "accesslist";
        $page['title']['current'] = "添加权限";
        $page['title']['prev'] = '权限管理';
        $modu = M('modules');
        $data = $modu -> select();
       // var_dump($data);
        $this -> assign(data,$data);
        $this -> assign(page,$page);
        $this -> display();
    }
    
    //添加修改页面
    public function modifyAccess(){
        $this -> assign(title,'编辑权限');
        $page['action']['prev'] = "accesslist";
        $page['title']['current'] = "编辑权限";
        $page['title']['prev'] = '权限管理';
        $rules = D('RuleView');
        $data = $rules -> where('rule.id = '.$_GET['id']) ->find();
        $modu = M('modules');
        $classes = $modu -> select(); 
        $this -> assign(classes,$classes);  
        $this -> assign(data,$data);
        $this -> assign(page,$page);
        $this -> display();
    }

    //处理添加权限
    public function insertAccess(){
        $insert = M('auth_rule');
        $_POST['condition'] = $_POST['condition'] == ''?'':$_POST['condition'];
        if ($insert -> add($_POST)){
            $this->redirect("Admin/Accesslist/index");
        }else{
            $this->error('Add error...');
        }
    }

    //处理修改权限
    public function updataAccess(){
        $updata = M('auth_rule');
        $_POST['condition'] = $_POST['condition'] == ''?'':$_POST['condition'];
        if($updata -> save($_POST)) {
            $this->redirect("Admin/Accesslist/index");
        }else{
            $this->error('MOdify error...');
        }          
    }

    //处理删除权限
    public function deleteAccess(){
        if(!authCheck('Admin/Accesslist/deleteAccess',session('uid'))){
            echo 2;
            return;
        }

        $delrule = M('auth_rule');
        if ($delrule -> delete($_POST['id'])) {
            echo 1;
            return;
        }
        echo 0;
    }

    //更新权限状态
    public function accessState(){
        if(!authCheck('Admin/Accesslist/accessState',session('uid'))){
            echo 2;
            return;
        }

        $state = M('auth_rule');
        $map['id'] = $_POST['id'];
        $oldstate = $state -> where($map) ->field('status') -> find($_POST['id']);
        $newstate['status'] = $oldstate['status'] == 1?0:1;
        if ($state->where($map)->save($newstate)) {
            echo 1;
            return;
        }
        echo 0;
    }
}
