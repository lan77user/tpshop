<?php

namespace Admin\Model;
use Think\Model;
/**
 * Description of User
 *
 * @author Administrator
 */
class Manager extends Model{

    protected $tableName = "admin_user";
    
//    protected $_validate =array(
//       array('user_name', 'require', '用户名不能为空'),
//        array('user_name', '', '用户名已存在', 0, 'unique'),
////        ②密码验证
//        array('password', 'require', '密码不能为空'),
////        ⑦验证码验证
//        array('checkcode', 'require', '请输入验证码!'),
//    );
    public function getInfo($username){
        $row = $this->where("user_name='$username'")->select();
        return $row;
    }
    
//    校验用户名和密码
    public function checkNamePwd($name,$pwd){
//        ①判断用户名是否存在
//        ②如果用户名存在，就把传过来的密码比较
//        ③如果两个条件判断都走不进来，就返回空
        $info = $this->where("user_name='$name'")->find();
        if($info){
           
            if($info['password'] == $pwd){
                return $info;
            }
        }
        return null;
    }
}
