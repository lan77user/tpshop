<?php

namespace Admin\Controller;

use Think\Controller;
use Admin\Model\GoodsModel;
use Think\Upload;   //使用upload上传类
use Think\Image;
//use Tools\Page;   //自定义分页工具类
use Think\Page;
use Home\Model\CategoryModel;

class GoodsController extends Controller {

    public function goodsListAction() {

//        使用系统自带的分页工具类
        $GoodsModel = new GoodsModel();
        
        /********************搜索******************/
      
        $where = array();  //拼装一个空的where条件
        //搜索商品名称
        $g_name = I('get.g_name');
        if($g_name) {
            $where['goods_name'] = array('like', "%$g_name%");    //where goods_name like %$g_name%
        }
        
//        //搜索商品价格
        $pmin = I('get.pmin');
        $pmax = I('get.pmax');
        if($pmin && $pmax) {
            $where['shop_price'] = array('between',array($pmin, $pmax));  //where shop_price between $pmin and $pmax
        }else if($pmin) {
            $where['shop_price'] = array('egt', $pmin);     //where shop_price >= $pmin
        }else if($pmax) {
            $where['shop_price'] = array('lt',$pmax);   //where shop_price <=$pmax
        }
        
//        //搜索商品品牌
        $g_brand = I('get.g_brand');
        if($g_brand) {
            $where['brand_name'] = array('like', "%$g_brand%");    //where goods_name like %$g_name%
        }
        
//        是否上架
        $ios = I('get.ios');
        if($ios) {
            $where['is_on_sale'] = array('eq',$ios);    //where is_on_sale = $ios
        }
//        
//         //搜索关键字
//        $keyword = I('get.keyword');
//        if($keyword) {
//            $where['brand_name'] = array('like', "%$g_brand%");
//        }
        
//        排列顺序
        $queue = I('get.queue') ? I('get.queue') : 'goods_id';
        
//        /******************分页效果*************************/
//        获取你想要获得的信息的总条数,可以用where条件进行相应的限制
        $count = $GoodsModel->count();
        $page_obj = new Page($count, 8);
        $page_obj->setConfig('prev', '上一页');
        $page_obj->setConfig('next', '下一页');
//       将分页对象展示出来，掉用show方法
        $show = $page_obj->show();
        
//        分页
//       $sql = "select * from ecs_goods order by goods_id desc ".$page_obj->limit;
      
        $row = $GoodsModel->where($where) ->limit($page_obj->firstRow.','.$page_obj->listRows)->order("'$queue' desc")->select();
        $this->assign(array(
            'row' => $row,
            'show' => $show,
            'page_title' => "商品列表",
        )); // 赋值数据集，和分页输出Show
        
        
        $this->display();

        
        
////        使用自己定义的分页工具类
////var_dump(get_defined_constants(true)); 
//        var_dump($_SERVER);
//        $GoodsModel = new GoodsModel();
//
////        创建分页信息
////        ①获得总记录数目
//        $count = $GoodsModel->count();
////        ②实例化分页类对象
//        $page_obj = new Page($count,8);
//        
////      ③自定义sql查询语句，因为不能用select()，select会把所有都获取，不能分页
//        $sql = "select * from ecs_goods order by goods_id desc ".$page_obj->limit;
//        $row = $GoodsModel->query($sql);
////        ④获得页码列表
//        $show = $page_obj->fpage();
//        
//        var_dump($_GET);
//        
//        
////        $row = $GoodsModel->order('goods_id desc')->select();
//        $this->assign("show", $show);
//        $this->assign("row", $row);
//        return $this->display();
    }

//    添加商品。未完善，重置按钮没有完成
    public function goodsAddAction() {

        $GoodsAdd = new GoodsModel;
        if (!empty($_POST)) {
//            处理附件图片,制作缩略图
            if ($_FILES['goods_img']['error'] < 4) {
                $config = array(
                    'rootPath' => './Public/Upload/', //设置保存路径
                );
                $up = new Upload($config);
//                uploadOne方法执行成功后会把附件在服务器上的名字和路径等相关信息给我们返回
                $row = $up->uploadOne($_FILES['goods_img']);
//                var_dump($up->getError());   //打印错误信息
//                dump($row);  //打印上传成功后的信息
                $bigimg = $up->rootPath . $row['savepath'] . $row['savename'];   //大图路径名
                $smallimg = $up->rootPath . $row['savepath'] . 'small_' . $row['savename'];  //小图路径名
//                对上传的图片制作缩略图
                $img = new \Think\Image();
                $img->open($bigimg);    //打开被处理的图片
                $img->thumb(100, 100);  //制作缩略图，传入你要的缩略图的高度（默认是等比例缩放）
                $img->save($smallimg);  //保存缩略图到服务器里面
//                把上传好的附件路径文件名存储到数据库里面
                $_POST['goods_img'] = ltrim($bigimg, './');
                $_POST['goods_thumb'] = ltrim($smallimg, './');
            }
//         
            $post = $_POST;
            $checkInfo = $GoodsAdd->create();

//            情况①验证成功后，情况②没有验证成功
            if ($checkInfo) {
                $row = $GoodsAdd->add($post);
                if ($row) {
                    $this->redirect("goodsList", "", 3, "商品添加成功,3秒后去商品列表");
                } else {
                    $this->redirect("goodsAdd", "", 3, "添加商品失败，3秒后返回添加页面");
                }
            } else {
                $this->assign("errorInfo", $GoodsAdd->getError());
            }
        }
        
        $this->assign([
           'page_name' => '添加新商品',
            'page_right' => '商品列表'
        ]);
        return $this->display();
    }


//    商品品牌
    public function brandListAction() {
        $this->assign([
            'page_name' => "商品品牌",
            'page_right' => '添加品牌'
        ]);
        return $this->display();
    }

    public function goodsTrashAction() {
        return $this->display();
    }

//    查看商品
    public function goodsSeeAction() {
        
    }

//    编辑商品
    public function goodsEditAction() {
        $goods_id = I("get.goods_id");

//     如果提交了数据，就把他写入数据库
        if (!empty($_POST)) {

//            处理附件图片,制作缩略图
            if ($_FILES['goods_img']['error'] < 4) {
                $config = array(
                    'rootPath' => './Public/Upload/', //设置保存路径
                );
                $up = new Upload($config);
//                uploadOne方法执行成功后会把附件在服务器上的名字和路径等相关信息给我们返回
                $row = $up->uploadOne($_FILES['goods_img']);
//                var_dump($up->getError());   //打印错误信息
//                dump($row);  //打印上传成功后的信息
                $bigimg = $up->rootPath . $row['save_path'] . $row['savename'];   //大图路径名
                $smallimg = $up->rootPath . $row['save_path'] . 'small_' . $row['savename'];  //小图路径名
//                对上传的图片制作缩略图
                $img = new \Think\Image();
                $img->open($bigimg);    //打开被处理的图片
                $img->thumb(100, 100);  //制作缩略图，传入你要的缩略图的高度（默认是等比例缩放）
                $img->save($smallimg);  //保存缩略图到服务器里面
//                把上传好的附件路径文件名存储到数据库里面
                $_POST['goods_img'] = $bigimg;
            }

            var_dump($_POST);
            $post = $_POST;
            $Goods = new GoodsModel();
            $row = $Goods->where("goods_id = '$goods_id'")->save($post);
            if ($row) {
                $this->redirect("goodslist", "", 3, "修改商品成功！");
            } else {
                return false;
            }
        }

        $GoodsInfo = new GoodsModel;
        $row = $GoodsInfo->where("goods_id = '$goods_id'")->find();
        $this->assign([
            'row' => $row,
            'page_name' => '编辑商品',
            'page_right' => '商品列表',
        ]);
        return $this->display();
    }

//    删除商品,未完善，没有确认删除信息,没有把删除后的东西放进回收站
    public function goodsDeleteAction() {
        $goods_id = I("get.goods_id");
        $goodsModel = new GoodsModel();
        $delete = $goodsModel->where("goods_id = '$goods_id'")->delete();
        $this->redirect("goodsList");
    }

}
