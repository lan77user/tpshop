<?php
//商品分类控制器
namespace Admin\Controller;
use Think\Controller;
use Home\Model\CategoryModel;
class CategoryController extends Controller{

//    商品列表页
    public function CategorylistAction(){
         $CategoryModel = new CategoryModel();
        
//        设置页面信息
        $data = $CategoryModel->getTree();
//        var_dump($data);
//        die();
        $this->assign(array(
            'data' => $data,
            'page_name' => '分类列表',
            'page_right' => '添加新分类',
        ));
        
        $this->display();
        
    }
    
//    删除一个分类，它下面的所有自分类都要一起删除
    public function DeleteAction(){
        $catId = I('get.id');
        $CategoryModel = new CategoryModel();
        if(false !== $CategoryModel->delete($catId)) {
            $this->success('删除成功', U('categorylist'));
        }else {
            $this->error('删除失败！原因：'.$CategoryModel->getError());
        }
    }
    
    public function CategoryAddAction(){
        $CategoryAdd = new CategoryModel();
        if($CategoryAdd->create(I('post.'),1)) {
        }
    }
    
}
