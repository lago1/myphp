<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //创建模型，实现对产品的调用
        $goods = M('Goods');    //初始化goods模型
        //调用select方法实现数据的调用
        $data = $goods->select();
        //分配数据到视图中
        $this->assign('data',$data);
        //调用display方法进行数据显示输出
        $this->display('index');
    }
}