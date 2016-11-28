<?php

namespace Admin\Controller;

use Think\Controller;
use Admin\Model\Manager;
use Think\Verify;
use Admin\Model\Role;
use Admin\Model\Power;

class IndexController extends Controller {

    public function IndexAction() {
//        var_dump($_SESSION);
        if($_SESSION == null){
            $this->redirect("index/login");
        }
        return $this->display();
    }

    public function TopAction() {
        return $this->display();
    }

    public function MainAction() {
        return $this->display();
    }

//    通过用户角色，分配不同的权限
    public function MenuAction() {
//        根据管理员获得其角色，进而获得角色对应的权限
        $admin_id = session("admin_id");
//        var_dump($admin_id);
        $manager_info = D("Admin_user")->find($admin_id);
//        var_dump($manager_info);
//        die();
        $role_id = $manager_info['role_id'];
//        ②根据$role_id获得本身记录信息
        $role_info = D("Role")->find($role_id);
        $role_power_list = $role_info['role_power_list'];
//        ③根据$role_power_list获得用户权限信息
//        (1)父级权限  
        $power_info_father = D("Power")->where("power_level = 0 and power_id in ($role_power_list)")->select();
//        (2)子级权限
        $power_info_son = D("Power")->where("power_level = 1 and power_id in ($role_power_list)")->select();
        
        $this->assign("power_info_father",$power_info_father);
        $this->assign("power_info_son",$power_info_son);
        return $this->display();
    }

    
//    后台管理员登录
    public function LoginAction() {
        
        if (!empty($_POST)) {
            
//           ①获取输入框传递的用户名密码
            $name = $_POST['username'];
            $pwd = $_POST['password'];
            $verify = new Verify();  //new一个验证码对象，这样调用里面的验证方法
            
//            ②如果验证码正确，就验证用户名密码，否则输出验证码错误
            if ($verify->check($_POST['captcha'])) {
                //③验证码正确，进行用户名和密码校验
                $admin = new Manager();
                $info = $admin->checkNamePwd($name, $pwd);

//     ④查询用户信息，如果有，能够判断成功，就保存session到数据库，否则输出用户名或密码错误
                if ($info) {
//                    session持久化信息，页面跳转到后台
                    session('admin_id',$info['user_id'],3600*24);
                    session('admin_name',$info['user_name'],3600*24);
                    $this->redirect("index/index");
                }else {
                    $userError = "用户名或密码错误";
                }
            }else {
                $verifyError = "验证码错误!";
            }
        }
        $this->assign("userError",$userError);
        $this->assign("verifyError", $verifyError);
        return $this->display();
    }

    
//    创建验证码，验证码的图片资源src就是这个方法
    public function VerifyImgAction() {
        $config = [
            'imageH' => 80,
            'imageW' => 200,
            'frontSize' => 100,
            'length' => 4,
            'fontttf' => '4.ttf',
        ];
        $verify = new Verify($config);
        $verify->entry();
    }
    
    public function logoutAction(){
        $_SESSION == null;
        $this->redirect("admin/index/login");
    }

//    public function MenuAction() {
//        return $this->display();
//    }
}
