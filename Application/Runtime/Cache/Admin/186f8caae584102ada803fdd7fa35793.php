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
            <span id="search_id" class="action-span1"> - 商品列表 </span>
            <div style="clear:both"></div>
        </h1>
        <div class="form-div">
            <form action="/tpshop/index.php/Admin/Goods/goodsList" name="searchForm" method="get">
                <img src="/tpshop/Public/Admin/images/icon_search.gif" width="26" height="22" border="0" alt="search" />
                <!-- 商品名称 -->
                <span>
                    <label style="font-weight: bold; color: black;">商品名称</label>
                    <input value="<?php echo I('get.g_name'); ?>" name="g_name"/>
                </span>
                <!--商品价格-->
                <span name="g_price">
                    <label style="font-weight: bold; color: black;">商品价格</label>
                    从<input value="<?php echo I('get.pmin'); ?>" name="pmin" type="text" style="width: 50px;"/>&nbsp;
                    到&nbsp;&nbsp;<input value="<?php echo I('get.pmax'); ?>" name="pmax" type="text" style="width: 50px;"/>
                </span>
                <span>
                    <!-- 商品推荐 -->
                    &nbsp;&nbsp;
                    <label style="font-weight: bold; color: black;">商品推荐</label>
                    <select name="intro_type" style="width: 111px;">
                        <option value="" checked>全部</option>
                        <option value="is_best">精品</option>
                        <option value="is_new">新品</option>
                        <option value="is_hot">热销</option>
                    </select>
                </span>
                <span>
                    <button type="submit" id="reset">重置</button>
                </span>
                <div>
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                     <span>
                    <!-- 排序 -->
                    <label style="font-weight: bold; color: black;">排列顺序</label>
                    <select name="queue" style="width: 111px;">
                        <option value="goods_id" <?php if(I('get.queue') == 'goods_id') echo 'selected = "selected"'?>>不限</option>
                        <option value="shop_price" <?php if(I('get.queue') == 'shop_price') echo 'selected = "selected"'?>/>价格排序
                        <option value="goods_number" <?php if(I('get.queue') == 'goods_number') echo 'selected = "selected"'?>/>库存排序
                        <option value="last_update" <?php if(I('get.queue') == 'last_update') echo 'selected = "selected"'?>/>最后更新时间
                    </select>
                </span>

                    <!--是否上架-->
                    <span>
                        <label style="font-weight: bold; color: black;">是否上架</label>
                        <input type="radio" name="ios" value="" <?php if (I('get.ios') == '') echo 'checked = "checked"' ?>/>全部
                        <input type="radio" name="ios" value="1" <?php if (I('get.ios') == '1') echo 'checked = "checked"' ?>/>上架
                        <input type="radio" name="ios" value="0" <?php if (I('get.ios') == '0') echo 'checked = "checked"' ?>/>下架
                    </span>
                    <!-- 关键字 -->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <label style="font-weight: bold; color: black;">关 键 字&nbsp;</label>
                    <input type="text" name="keyword" size="15" />
                    <button type="submit">提交</button>
                </div>
            </form>
        </div>

        <!-- 商品列表 -->
        <form method="post" action="" name="listForm" onsubmit="">
            <div class="list-div" id="listDiv">
                <table cellpadding="3" cellspacing="1">
                    <tr>
                        <th>编号</th>
                        <th>商品名称</th>
                        <th>添加时间</th>
                        <th>价格</th>
                        <th>上架</th>
                        <th>精品</th>
                        <th>新品</th>
                        <th>热销</th>
                        <th>商品图片</th>
                        <th>库存</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach ($row as $key => $val): ?>
                        <tr>
                            <td align="center"><<?php echo $val['goods_id']; ?>></td>
                            <td align="center" class="first-cell"><span><?php echo $val['goods_name']; ?></span></td>
                            <td align="center"><span onclick=""><<?php echo $val['add_time']; ?>></span></td>
                            <td align="center"><span><<?php echo $val['shop_price']; ?>></span></td>
                            <td align="center"><img src="<?php if(($val["is_onsale"] == 1)): ?>/tpshop/Public/Admin/images/yes.gif <?php else: ?> /tpshop/Public/Admin/images/no.gif<?php endif; ?>"/></td>
                            <td align="center"><img src="<?php if(($val["is_best"] == 1)): ?>/tpshop/Public/Admin/images/yes.gif <?php else: ?> /tpshop/Public/Admin/images/no.gif<?php endif; ?>"/></td>
                            <td align="center"><img src="<?php if(($val["is_new"] == 1)): ?>/tpshop/Public/Admin/images/yes.gif <?php else: ?> /tpshop/Public/Admin/images/no.gif<?php endif; ?>"/></td>
                            <td align="center"><img src="<?php if(($val["is_hot"] == 1)): ?>/tpshop/Public/Admin/images/yes.gif <?php else: ?> /tpshop/Public/Admin/images/no.gif<?php endif; ?>"/></td>
                            <td align="center"><img src="<?php if(($val["brand_name"] == null)): echo (SITE_URL); $val['goods_img']; else: echo (SITE_URL); ?>Public/Admin/<?php echo $val['goods_img']; endif; ?>" style="width: 40px; height: 45px;"></td>
                            <td align="center"><span><?php echo $val['goods_number']; ?></span></td>
                            <td align="center">
                                <a href="/tpshop/index.php/Admin/Goods/goodsSee?goods_id=<?php echo $val['goods_id']; ?>" target="_blank" title="查看"><img src="/tpshop/Public/Admin/images/icon_view.gif" width="16" height="16" border="0" /></a>
                                <a href="/tpshop/index.php/Admin/Goods/goodsEdit?goods_id=<?php echo $val['goods_id']; ?>" title="编辑"><img src="/tpshop/Public/Admin/images/icon_edit.gif" width="16" height="16" border="0" /></a>
                                <a href="/tpshop/index.php/Admin/Goods/goodsDelete?goods_id=<?php echo $val['goods_id']; ?>" onclick="" title="回收站"><img src="/tpshop/Public/Admin/images/icon_trash.gif" width="16" height="16" border="0" /></a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

                <!-- 分页开始 -->
                <table id="page-table" cellspacing="0">
                    <tr>
                        <td width="80%">&nbsp;</td>
                        <td align="center" nowrap="true">
                            <?php echo $show; ?>
                        </td>
                    </tr>
                </table>
                <!-- 分页结束 -->
            </div>
        </form>

        <div id="footer">
            共执行 7 个查询，用时 0.028849 秒，Gzip 已禁用，内存占用 3.219 MB<br />
            版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
    </body>
</html>