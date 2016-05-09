<?php
namespace Home\Controller;
use Think\Controller;

class GoodsController extends Controller {
    //定义_empty空操作
    public function _empty($name) {
        echo "select * from sh_goods where id =" . $name;
    }
    //定义list方法，调用所有数据
    public function lists() {
        echo '产品列表';
    }
}