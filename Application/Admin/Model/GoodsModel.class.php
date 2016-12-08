<?php

namespace Admin\Model;
use Think\Model;

class GoodsModel extends Model{
    protected $tableName = "goods";
     protected $patchValidate    =   true;
    protected $_validate = array(
        array('goods_name','require','请填写商品名称！'),
        array('goods_id','number','商品id必须为数字'),
        array('shop_price','require','请填写商品价格！'),
        array('shop_price','currency','商品价格必须为货币类型'),
        array('goods_number','require','请填写商品数量'),
        array('goods_number','number','商品数量必须为数字'),
//        array('goods_sn','number','商品货号必须为数字'),
    );
    
    //钩子方法，获取当前时间，在tp添加数据之前会调用
    //第一个参数，表单中即将要插入到数据库中的数据（一个数组）
    //函数内部想要修改函数外部的变量$data,必须按照引用传递&$data, 不然无法修改
    //除非这是一个对象。因为对象默认是按引用传递的
    //
//    第二个参数没什么用，就存放了当前表中的数据，模型名和表名
    protected function _before_insert(&$data, $options) {
//        获取当前时间并添加插入数据库
        $data['add_time'] = date('Y-m-d H:i:s',time());
        //把post过来的数据使用自定义的html函数进行过滤
//        $data['goods_desc'] = removeXSS($_POST['goods_desc']);
        
    }
    public function getAll() {
        $row = $this->select();
        return $row;
    }
    
    public function getInfoByCondition($condition) {
        $row = $this->where([
            'goods_name' => $condition
        ])->select();
    }
    
    
}
