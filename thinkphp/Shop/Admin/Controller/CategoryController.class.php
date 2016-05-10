<?php
namespace Admin\Controller;
use Think\Controller;

//use Admin\Model\CategoryModel;//实例化自定义模型时要引入此命名空间，相当于require方法
//实例化Model模型使用以下方式，相当于包含文件
use think\Model;

class CategoryController extends Controller {
    public function test() {
        //实例化模型
        $category = D('Category');
        dump($category);
    }

    //添加方法
    public function add() {
        //实例化模型对象
        $category = M('Category');
        //增加数据
        $data = array(
            'id'=>17,
            'c_name'=>'电信充值卡',
            'c_goods'=>1
        );
        $category->add($data);
    }
    //删除方法
    public function del() {
        $category = M('Category');
        //通过delete方法删除数据
        $category->delete(16);
    }
    //更新方法
    public function update() {
        $category = M('Category');
        //修改的参数，数组（要提供主键ID）
        $data = array(
            'id'=>16,
            'c_goods'=>1
        );
        //调用save方法修改
        $category->save($data);
    }
    //读取方法
    public function read() {
        //读取数据库模型
        $category = D('Category');
        //读取一条信息
        $row = $category->find(16);
        dump($row);
        //读取多条信息
        $data = $category->select();
        dump($data);
    }
}