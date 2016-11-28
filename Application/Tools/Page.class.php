<?php

//Tools名称与上级目录名臣刚一直，该类文件在做自动加载的时候，Tools名称会转换为目录
//的一部分，进而include引入当前类文件
namespace Tools;

class Page {

    private $total;  //数据表中总记录数
    private $listRows;  //每页显示行数
    private $limit;
    private $uri;
    private $pageNum;//页数
    private $config = array('header' => "个记录","prev" => "上一页","next" => "下一页",
        "first" => "首页","last" => "尾页");
    private $listNum = 8;  //限制页码列表数目
    private $page;


    public function __construct($total, $listRows = 10, $pa = "") {
        $this->total = $total;
        $this->listRows = $listRows;
        $this->uri = $this->getUri($pa);
        $this->page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $this->pageNum = ceil($this->total / $this->listRows);
        $this->limit = $this->setLimit();
    }
    
    private function setLimit(){
        return "Limit " . ($this->page - 1) * $this->listRows . ", {$this->listRows}";
    }
    
    private function getUri($pa) {
//        自己写的获取地址
    $url = $_SERVER["REQUEST_SCHEME"] . "://" .  $_SERVER["HTTP_HOST"] . __ACTION__;
        return $url;
    }
    
    
//    视频封装的getUri方法，不会用
//    private function getUri($pa) {
//        $url = $_SERVER["REQUEST_URI"] . (strpos($_SERVER["REQUEST_URI"], '?') ? '' : "?") . $pa;
//        $parse = parse_url($url);
//        if(isset($parse["query"])){
//            parse_str($parse['query'], $params);
//            unset($params["page"]);
//            $url = $parse['path'] . '?' . http_build_query($params);
//        }
//    }

        public function __get($args) {
        if($args == "limit") {
            return $this->limit;
        }else {
            return null;
        }
    }
    
    /**
     * 当前页从第几条开始的。比如30条数据，每页7条。那么最后一页就是第29条开始
     * @return int
     */
    private function start() {
        if($this->total == 0) {
            return 0;
        }  else {
            return ($this->page - 1) * $this->listRows + 1;
        }
    }
    
    /**
     * 当前页在第几条结束的。比如最后一页从29开始，30条结束
     * @return type
     */
    private function end(){
        return min($this->page * $this->listRows, $this->total);
    }
    
    /**
     * 首页超链接
     */
    private function first() {
        $html = "";
        if($this->page == 1){
            $html.='';
        }else{
            $html.="&nbsp;&nbsp;<a href='{$this->uri}&page=1'>{$this->config['first']}</a>&nbsp;&nbsp;";
            
        }
        return $html;
    }
    
    /**
     * 上一页超链接
     */
    private function prev() {
        $html = "";
        if($this->page == 1){
            $html.='';
        }else {
            $html.="&nbsp;&nbsp;<a href='{$this->uri}&page=" . ($this->page - 1) . "'>{$this->config["prev"]}</a>&nbsp;&nbsp;";
        }
        return $html;
    }
    
    /**
     * 具体有多少页码的超链接.8/2 = 4就是除了当前页，左边有4个，右边有4个
     * 1 2 3 4 <5> 6 7 8 9
     */
    private function pageList(){
        $linkPage = "";
        
        $inum = floor($this->listNum  / 2);
        
        //循环出当前页前面的页数，并添加超链接
        for($i = $inum; $i >= 1; $i --) {
            $page = $this->page - $i;
            
            if($page < 1)
                continue;
            
            $linkPage.="&nbsp;<a href='{$this->uri}&page={$page}'>{$page}</a>&nbsp;";
        }
    }
    
    /**
     * 下一页的超链接就是当前页+1 $this->page + 1
     * @return string
     */
    private function next(){
        $html = "";
        if($this->page == $this->pageNum){
            $html.='';
        }  else {
            $html.="&nbsp;&nbsp;<a href='{$this->uri}&page=" . ($this->page + 1) . "'>{$this->config["next"]}</a>&nbsp;&nbsp;";
        }
        return $html;
    }
    
    /**
     * 尾页超链接就是总页数
     * @return string
     */
    private function last(){
        $html = "";
        if($this->page == $this->pageNum) {
            $html.="";
        }else {
//            var_dump($this->uri);
            $html.="&nbsp;&nbsp;<a href='{$this->uri}&page=" . ($this->pageNum) . "'>{$this->config["last"]}</a>&nbsp;&nbsp;";
        }
        return $html;
    }
    
    private function goPage(){
        return '&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>' . $this->pageNum . ')?' . $this->pageNum . ':this.value;location=\'' . $this->uri . 
                '&page=\'+page+\'\'}" value="' . $this->page . '" style="width:25px"><input type="buutton" value="GO"'
                . 'onclick="javascript:var page=(this.previousSibling.value>' . $this->pageNum . ')?' . $this->pageNum
                . ':this.previousSibling.value;location=\'' . $this->uri . '&page=\'+page+\'\'">&nbsp;&nbsp';
    }
    
    public function fpage($display = array(0, 1, 2, 3, 4, 5, 6, 7, 8)) {
//        var_dump($this->total);
        $html[0] = "&nbsp;&nbsp;共有<b>{$this->total}</b>{$this->config["header"]}&nbsp;&nbsp;";
        $html[1] = "&nbsp;&nbsp;每页显示<b>{$this->listRows}</b>条，本页<b>{$this->start()}-{$this->end()}</b>条&nbsp;&nbsp;";
        $html[1] = "&nbsp;&nbsp;每页显示<b>" . ($this->end() - $this->start() + 1) . "</b>条，本页<b>{$this->start()}-{$this->end()}</b>条&nbsp;&nbsp;";
        $html[2] = "&nbsp;&nbsp;<b>{$this->page}/{$this->pageNum}</b>页&nbsp;&nbsp;";
        $html[3] = $this->first();
        $html[4] = $this->prev();
        $html[5] = $this->pageList();
        $html[6] = $this->next();
        $html[7] = $this->last();
        $fpage = '';
        foreach ($display as $index) {
            $fpage.=$html[$index];
        }
        return $fpage;
    }
    
    
    
}
