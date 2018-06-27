<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;

class IndexController extends AdminController {
    public function index(){
        $this -> assign(title,'控制台');
        $this -> display();
    }
}
