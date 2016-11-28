<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ECSHOP 管理中心 - 商品列表 </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/tpshop/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
        <link href="/tpshop/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>
            <span class="action-span"><a href="<?php echo U('admin/Goods/goodsAdd');?>">添加新商品</a></span>
            <span class="action-span1"><a href="<?php echo U('admin/Index/index');?>">ECSHOP 管理中心</a></span>
            <span id="search_id" class="action-span1"> - 商品分类列表 </span>
            <div style="clear:both"></div>
        </h1>
       
        <!-- 商品分类列表 -->
        <form method="post" action="" name="listForm" onsubmit="">
            <div class="list-div" id="listDiv">
                <table cellpadding="3" cellspacing="1">
                    <tr>
                        <th>分类名称</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach ($data as $key => $val): ?>
                    <tr class="tron">
                        <td align="left"><?php echo str_repeat('-', 10*$val['level']) . $val['cat_name']?></td>
                        <td align="center">
                                <a href="<?php echo U('edit?id='.$val['id']);?>">修改</a>
                                <a onclick="if(confirm('确定要删除吗?')) return true; else return false;"
                                   href="/tpshop/index.php/Admin/Goods/goodsDelete?goods_id=<?php echo ($val["goods_id"]); ?>" onclick="" title="删除">删除</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </form>