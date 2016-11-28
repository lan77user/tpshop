<?php

//无线分类的模型

namespace Home\Model;

use Think\Model;

class CategoryModel extends Model {

    protected $tableName = "category";
    protected $insertFields = array('brand_name', 'site_url');
    protected $updateFields = array('id', 'brand_name', 'site_url');
    protected $_validate = array(
        array('brand_name', 'require', '品牌名称不能为空', 1, 'regex', 3),
    );

//
////    第一种删除方法，先找子id，全部放进一个数组里面，分隔这个数组一个个递归删
//    protected function _before_delete($options) {
//        //先找出所有子分类的id
//        $children = $this->getChildren($options['where']['cat_id']);
//        //如果有子分类，就通过，分隔这个$children数组，并且删除这些子分类
//        if ($children) {
//            $children = implode(',', $children);
////      删除这些子分类，这里必须使用父类模型删除，因为如果使用$this->delete那么在delete之前又会
//// 调用$this->_before_delete这样就死循环了。这样使用父类在删除之前，会调用父类模型里面的
//// _before_delete，这样不是死循环了！！！
//            $model = new \Think\Model();
//            $model->table('__CATEGORY__')->delete($children);
//        }
//    }
//    第二种删除方法：修改$option,把所有子分类的id也加进来，这样tp会一起删除掉
    protected function _before_delete(&$option) {
        $children = $this->getChildren($option['where']['cat_id']);
        $children[] = $option['where']['cat_id'];
        var_dump($children);
        die();
        $option['where']['cat_id'] = array(
            0 => 'IN',
            1 => implode(',', $children),
        );
    }

//    找一个所有子分类的id
    public function getChildren($catId) {
//        取出所有分类
        $data = $this->select();

//        递归从所有分类中挑出子分类的id
        return $this->_getChildren($data, $catId, TRUE);
    }

    /**
     * 递归从数据中找子分类
     * @param type $data
     * @param type $catId
     */
    private function _getChildren($data, $catId, $isClear = false) {

//        定义一个静态数组，在这个数组里面保存找到的子分类的id。
//        静态数组的特点就是这里面的值会一直存在，一直都有。所以你上一次调用生成的值都会在这里
        static $_ret = array();

//        传递参数，清空数组，这样可以不被上一次查询的东西影响。默认设置为false
        if ($isClear) {
            $_ret = array();
        }
//        循环所有的分类找子分类
        foreach ($data as $key => $val) {
            if ($val['parent_id'] == $catId) {
                $_ret[] = $val['cat_id'];
//                再找这个$v的子分类
                $this->_getChildren($data, $val['cat_id']);
            }
        }
        return $_ret;
    }

//    获取树形结构的数据
    public function getTree() {
        $data = $this->select();
        return $this->_getTree($data);
    }

    private function _getTree($data, $parent_id = 0, $level = 0) {
        static $_ret = array();
        foreach ($data as $key => $val) {
//            一开始默认是0，所以是顶级分类
            if ($val['parent_id'] == $parent_id) {
//                标记这个分类是第几级的
                $val['level'] = $level;
                $_ret[] = $val;

//                找子分类
                $this->_getTree($data, $val['cat_id'], $level + 1);
            }
        }
        return $_ret;
    }

    /**
     * 获取导航条上的数目
     */
    public function getNavData() {
        $all = $this->select();
        $ret = array();
        //循环所有的分类，挑出顶级分类.如果parent_id = 0，那么就是顶级分类
        foreach ($all as $k0 => $v0) {
            if ($v0['parent_id'] == 0) {

//                循环所有一级分类，找出所有二级分类
                foreach ($all as $k1 => $v1) {
                    if ($v1['parent_id'] == $v0['cat_id']) {

//                        循环所有二级分类，找出所有三级分类
                        foreach ($all as $k2 => $v2) {
                            if ($v2['parent_id'] == $v1['cat_id']) {
                                $v1['children'][] = $v2;
                            }
                        }
                        $v0['children'][] = $v1;
                    }
                }
//            var_dump($v0);


                $ret[] = $v0;
            }
        }return $ret;
    }

}
