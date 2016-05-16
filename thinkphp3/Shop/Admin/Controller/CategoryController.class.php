<?php
namespace Admin\Controller;
use Think\Controller;

//use Admin\Model\CategoryModel;//实例化自定义模型时要引入此命名空间，相当于require方法
//实例化Model模型使用以下方式，相当于包含文件
use think\Model;

class CategoryController extends Controller {
    //通过AR模式操作
    public function add() {
        //实例化模型
        $category = D('Category');
        //创建数据
        $category->c_name = '通讯卡';
        $category->c_goods = 1;
        $category->c_parent_id = 0;
        //添加数据
        if($category->add()) {
            echo '添加成功';
        }else{
            echo '添加失败';
        }
    }

    //删除操作
    public function del() {
        //实例化模型
        $category = D('Category');
        //创建数据
        $category->id = 20;
        //删除数据
        if($category->delete()) {
            echo '删除成功';
        }else{
            echo '删除失败';
        }
    }
    //修改操作
    public function update() {
        $category = D('Category');
        //创建数据
        $category->c_goods = 0;
        $category->id = 19;
        //修改数据
        if($category->save()) {
            echo '修改成功';
        }else{
            echo '修改失败';
        }
    }
    //查询操作
    public function check() {
        $category = D('Category');
        //创建数据
        $data = $category->getById(8);
        dump($data);
        //查询
    }
}