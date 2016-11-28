<?php

namespace Home\Model;
use Think\Model;
class GoodsModel extends Model{
    protected $tableName = "goods";
    
    public function getDetails($condition,$limit = 5) {
        $row = $this->where([
            $condition => 1
        ])->limit($limit)->select();
        return $row;
    }
    
    public function getType($condition,$limit = 8) {
        $row = $this->where([
            'goods_type' => $condition
        ])->limit($limit)->select();
        return $row;
    }
}
