<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ECSHOP 管理中心 - <?php echo $page_name;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/tpshop/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
        <link href="/tpshop/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>
            <span class="action-span"><a href="<?php echo U('admin/Goods/goodsAdd');?>"><?php echo $page_right;?></a></span>
            <span class="action-span1"><a href="<?php echo U('admin/Index/index');?>">ECSHOP 管理中心</a></span>
            <span id="search_id" class="action-span1"> - <?php echo $page_name;?> </span>
            <div style="clear:both"></div>
        </h1>
        
<div class="tab-div">
    <div id="tabbar-div">
        <p>
            <span class="tab-front" id="general-tab">通用信息</span>
        </p>
    </div>
    <div id="tabbody-div">
        <form enctype="multipart/form-data" action="/tpshop/index.php/admin/Goods/goodsAdd.html" method="post">
            <table width="90%" id="general-table" align="center">
                <tr>
                    <td class="label">商品名称：</td>
                    <td><input type="text" name="goods_name" value=""size="30" />
                    <span style="color: red;"><?php echo ($errorInfo["goods_name"]); ?></span></td>
                </tr>
                <tr>
                    <td class="label">商品货号： </td>
                    <td>
                        <input type="text" name="goods_sn" value="" size="20"/>
                        <span id="goods_sn_notice"></span><br />
                        <span class="notice-span"id="noticeGoodsSN">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品分类：</td>
                    <td>
                        <select name="cat_id">
                            <option value="0">请选择...</option>
                            <?php if(is_array($cat_list)): foreach($cat_list as $key=>$val): ?><option value="<<?php echo ($val["cat_id"]); ?>>"><<?php echo (str_repeat('&nbsp;&nbsp;',$val["lev"])); ?>><<?php echo ($val["cat_name"]); ?>></option><?php endforeach; endif; ?>
                        </select>
                        <span class="require-field">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品品牌：</td>
                    <td>
                        <select name="brand_id">
                            <option value="0">请选择...</option>
                           <?php foreach ($row as $key => $val):?>
                            <option value="<<?php echo ($val["brand_id"]); ?>>"><<?php echo ($val["brand_name"]); ?>></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="label">本店售价：</td>
                    <td>
                        <input type="text" name="shop_price" value="" size="20"/>
                        <span style="color: red;"><?php echo ($errorInfo["shop_price"]); ?></span>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品数量：</td>
                    <td>
                        <input type="text" name="goods_number" size="8" value=""/>
                        <span style="color: red;"><?php echo ($errorInfo["goods_number"]); ?></span>
                    </td>
                </tr>
                <tr>
                    <td class="label">是否上架：</td>
                    <td>
                        <input type="radio" name="is_onsale" value="1"/> 是
                        <input type="radio" name="is_onsale" value="0"/> 否
                    </td>
                </tr>
                <tr>
                    <td class="label">加入推荐：</td>
                    <td>
                        <input type="checkbox" name="is_best" value="1" /> 精品 
                        <input type="checkbox" name="is_new" value="1" /> 新品 
                        <input type="checkbox" name="is_hot" value="1" /> 热销
                    </td>
                </tr>
                <tr>
                    <td class="label">添加时间：</td>
                    <td>
                        <input type="text" name="add" size="5" value=""/>
                    </td>
                </tr>
                <tr>
                    <td class="label">市场售价：</td>
                    <td>
                        <input type="text" name="market_price" value="0" size="20" />
                    </td>
                </tr>
                <tr>
                    <td class="label">商品关键词：</td>
                    <td>
                        <input type="text" name="keywords" value="" size="40" /> 用空格分隔
                    </td>
                </tr>
                <tr>
                    <td class="label">商品图片：</td>
                    <td>
                        <input type="file" name="goods_img" size="35" />
                    </td>
                </tr>
                <tr>
                    <td class="label">商品简单描述：</td>
                    <td>
                        <textarea id="goods_desc" name="goods_desc" cols="75" rows="30"></textarea>
                    </td>
                </tr>
            </table>
            <div class="button-div">
                <button type="submit" name="add">确定</button>
                <button type="submit" name="reset">重置</button>
                <!--<input type="submit" value=" 确定 " class="button"/>-->
                <!--<input type="reset" value=" 重置 " class="button" />-->
            </div>
        </form>
    </div>
</div>


<!--导入在线编辑器-->
    <link href="/tpshop/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/tpshop/Public/umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/tpshop/Public/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/tpshop/Public/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="/tpshop/Public/umeditor/lang/zh-cn/zh-cn.js"></script>
<script>
UM.getEditor('goods_desc');
</script>
        
        
        <div id="footer">
            共执行 7 个查询，用时 0.028849 秒，Gzip 已禁用，内存占用 3.219 MB<br />
            版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
    </body>
</html>