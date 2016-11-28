<?php

namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
use Think\Verify;

class UserController extends Controller{

    public function RegisterAction() {
//        两个逻辑：展示信息，收集信息
        $user = new UserModel();
        
//        如果用户提交了数据，才进一步对这些数据经行验证
        if(!empty($_POST)) {
            
//            把提交过来的数据进行自动验证
            $shuju = $user ->create();  //返回实在数据的时候才进行添加
            
//        验证提交的验证码是否正确，如果不正确就把错误信息返回视图的验证码框后面
            $very = new Verify();
            $checkright = $very->check($_POST['checkcode']);
            if(!$checkright) {
                $shuju = !$shuju; //如果验证码错误，就必须不让向数据库添加，$shuju = false
                $this->assign("checkInfo","验证码错误");
            }
            
            if($shuju){
            if($user->add($shuju)) {
//   验证一些复选框，里面的内容打印出来是数组时，就必须要先转换成字符串
//  $shuju['user_hobby'] = implode(',', $shuju['user_hobby'])  
                $this->redirect("user/login","",2,"注册成功，2秒后跳到登录页面");
            }
        }else {
//            var_dump($user->getError());  //输出验证错误信息
            $this->assign("errorInfo",$user->getError());   //把错误信息展示到input框后面
        }
        
        }
        $this->display();
        
    }
    
//    设置验证码，很简单
    public function verifyImgAction() {
        $config = [
            'imageH' => 45,
            'imageW' => 130,
            'fontSize' => 17,
            'length' => 4,
            'fontttf' => '4.ttf',
        ];
        $very = new Verify($config);
        $very->entry();  //输出验证码
    }
    
    
//    登录
    public function LoginAction() {
        
//            var_dump($_POST);
        if(!empty($_POST)) {
            $username = $_POST['username'];
            $password = $_POST['password'];
//            先验证提交的验证码是否正确
            $verify = new Verify();
            $checkright = $verify->check($_POST['checkcode']);
            var_dump($checkright);
            
            
//            如果验证码正确，就进一步验证用户名和密码
            if($checkright == TRUE){
                $user = new UserModel();
                $info = $user->checkNamePwd($username, $password);
                if($info) {
//                   持久化用户名和id的session信息，页面跳转到首页
                    session("userid",$info['user_id']);
                    session("username",$info['user_name']);
                    $this->redirect("index/index");
                }else {
                    $userError = "用户名或密码错误！";
                }
            }else{
                $verifyError = "验证码错误!";
            }
        
        }
//            else{
//            $userError = "请输入用户名和密码！";
//            $verifyError = "请输入验证码！";
//        }
        $this->assign("userError",$userError);
        $this->assign("verifyError",$verifyError);
        $this->display();
    }
    
    
//    退出
    public function LogoutAction() {
        session(null);
        $this->redirect('home/index/index');
    }
}
