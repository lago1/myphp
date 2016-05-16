<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
     /*   //创建模型，实现对产品的调用
        $goods = M('Goods');    //初始化goods模型
        //调用select方法实现数据的调用
        $data = $goods->select();
        //分配数据到视图中
        $this->assign('data',$data);
        //调用display方法进行数据显示输出
        $this->display('index');
     */
        $this->display();
    }
    public function test() {
        //1.普通变量
        $str = 'hello thinkphp';
        $this->assign('str',$str);
        //2.数组变量
        $person = array(
            'name'=>'lisi',
            'age'=>23
        );
     //   $this->assign('person',$person);
        //特殊用法
        $this->assign($person);

        //3.对象变量
        $obj = new \stdClass();
        $obj->name = 'wangwu';
        $obj->age = 25;

        $this->assign('obj',$obj);

        //显示数据
        $this->display();
    }
}