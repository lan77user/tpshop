<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\GoodsModel;
use Home\Model\CategoryModel;

class IndexController extends Controller {
    
    public function IndexAction(){
        $GoodsModel = new GoodsModel();
        
        $hot = $GoodsModel->getDetails("is_hot");
        $crazy = $GoodsModel->getDetails('is_crazy');
        $recommend = $GoodsModel->getDetails('is_recommend');
        $new = $GoodsModel->getDetails('is_new');
        $guess = $GoodsModel->getDetails('is_guess');
        
        $computer = $GoodsModel->getType('computer');
        $computerParts = $GoodsModel->getType('computer_parts');
        $offices = $GoodsModel->getType('offices');
        $internet = $GoodsModel->getType('internet');
        
       $CategoryModel = new CategoryModel();
       $nav = $CategoryModel->getNavData();
        
        $this->assign([
           'hot' => $hot,
            'crazy' => $crazy,
            'recommend' => $recommend,
            'new' => $new,
            'guess' => $guess,
            'computer' => $computer,
            'computerParts' => $computerParts,
            'offices' => $offices,
            'internet' => $internet,
            'nav' => $nav,
            'page_title' => "京西首页",
            'show_nav' => 1,
            'page_keywords' => '这里是我的首页啊，自己写的商城项目啊，这样可以被百度搜出来，这就叫做SEO搜索引擎优化',
            'page_description' => '随便写写的，练练手，听说这样上传上去会犯法，因为这是个假商城哈哈哈'
            
        ]);
         
        $this->display();
    }
    
 
    public function AboutAction() {
        $this->display();
    }
    public function NewsAction() {
        $this->display();
    }
    public function ContactAction() {
        $this->display();
    }
    
    public function PreviewAction(){
        $id = I("get.id");
        $GoodsModel = new \Home\Model\GoodsModel();
        $result = $GoodsModel -> select();
//        var_dump($result);
        $this->assign("result",$result);
        $this->display();
    }
    
    
}