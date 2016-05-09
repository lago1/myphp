<?php
namespace Admin\Controller;
use Think\Controller;

class PublicController extends Controller {
    //定义登录界面
    public function login() {
        $this->display('login');
    }
    //登录检测
    public function checklogin() {
        //接收用户信息
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            //判断用户名密码是否正确
            if($username == 'admin' && $password == 'admin123') {
                //登录成功
                $this->success('登录成功','index',3);
            }else{
                //登录失败
                $this->error('登录失败','login',3);
            }
        }
    }

    //index方法
    public function index() {
        echo '后台首页';
    }
    //定义test方法
    public function test() {
        $person = array(
            'name' => 'Tom',
            'age' => 13,
            'address' => '广东省广州市'
        );
        $this->assign('person',$person);
        $this->display('test');
    }
}