<?php
namespace Home\Controller;

class IndexController extends BaseController
{
    public function index()
    {
        $test = M('Tab1');
        $d = $test->select();
        print_r($d);die;
        $this->display('Index/index');
    }

    public function getList()
    {
        $this->display();
    }

    public function detail()
    {
        $this->display('detail');
    }
}