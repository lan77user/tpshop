<?php

namespace Home\Model;

use Think\Model;

/**
 * Description of UserModel
 *
 * @author Administrator
 */
class UserModel extends Model {

    protected $tableName = "users";
    protected $patchValidate = true;
//    表单自动验证定义规则
    protected $_validate = array(
//        array(字段，验证规则，错误信息，验证条件，附加规则，验证时间)
//        ①用户名验证
        array('user_name', 'require', '用户名不能为空'),
        array('user_name', '', '用户名已存在', 0, 'unique'),
//        ②密码验证
        array('password', 'require', '密码不能为空'),
        array('password', '6,18', '密码必须在6-18位', 0, 'length'),
////        ③确认密码不能为空，并且要和密码一致
        array('password2', 'require', '确认密码不能为空'),
        array('password2', 'password', '确认密码必须一致', 0, 'confirm'),
//        ④邮箱验证,必须为邮箱格式
        array('user_qq', 'number', 'qq号码必须为纯数字'),
        array('user_qq', '5,12', 'qq号码长度为5-12之间', 0, 'length'),
//        ⑤学历下拉框验证
        array('xueli', '2,5', '学历必须选择一项', 0, 'between'),
//        ⑥爱好复选框验证，必须选择两项以上，使用callback函数来验证
        array('hobby', 'check_hobby', '爱好必须选择两项以上', 0, 'callback'),
//        ⑦验证码验证
        array('checkcode', 'require', '请输入验证码!'),
    );

//    参数$arg代表被验证项目的value值
    public function check_hobby($arg) {
        if (count($arg) < 2) {
            return false;  //这样就直接验证错误了
        }
        return true;
    }

    public function checkInfo($post) {
        $username = $post['username'];
        $password = $post['password'];
//        1.先从数据库找到有没有这个人的信息，如果没有就登录失败
//        2.如果有这个人的信息，就检查密码是否一致，如果密码不一致也是登录失败
        $row = $this->where("user_name = '$username'")->find();
//        var_dump($row);
//        die();
        if($row) {
//            密码不存在，返回错误2
            if($password != $row['password']){
                return 2;
            }
        }
//        row都不存在，就是用户信息不存在，返回错误3
        else{
            return 3;
        }
        return true;
    }
    
    public function checkNamePwd($name,$pwd){
        $info = $this->where("user_name='$name'")->find();
        if($info){
            if($info['password'] === $pwd){
                return $info;
            }
        }
            return NULL;
    }

}
