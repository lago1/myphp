<?php
namespace Home\Controller;
use Think\Controller;

class EmptyController extends Controller {
    //定义一个空方法
    public function _empty() {
        $this->display('Public:404');
    }
}