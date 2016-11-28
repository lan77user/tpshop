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
            <span class="action-span"><a href="__MUDULE__/"><?php echo $page_right;?></a></span>
            <span class="action-span1"><a href="<?php echo U('admin/Index/index');?>">ECSHOP 管理中心</a></span>
            <span id="search_id" class="action-span1"> - <?php echo $page_name;?> </span>
            <div style="clear:both"></div>
        </h1>
        
<div class="form-div">
    <form action="" name="searchForm">
    <img src="/tpshop/Public/Admin/images/icon_search.gif" width="26" height="22" border="0" alt="search" />
    <input type="text" name="brand_name" size="15" />
    <input type="submit" value=" 搜索 " class="button" />
    </form>
</div>
<form method="post" action="" name="listForm">
    <div class="list-div" id="listDiv">
        <table cellpadding="3" cellspacing="1">
            <tr>
                <th>品牌名称</th>
                <th>品牌网址</th>
                <th>品牌描述</th>
                <th>排序</th>
                <th>是否显示</th>
                <th>操作</th>
            </tr>
            <tr>
                <td class="first-cell">
                    <span style="float:right"><a href="" target="_brank"><img src="" width="16" height="16" border="0" alt="品牌LOGO" /></a></span>
                    <span></span>
                </td>
                <td align="center">
                    <a href="<<?php echo ($val["site_url"]); ?>>" target="_brank"></a>
                </td>
                <td align="center">公司网站：</td>
                <td align="center"><span></span></td>
                <td align="center"><img src="" /></td>
                <td align="center">
                <a href="#" title="编辑">编辑</a> |
                <a href="#" title="编辑">移除</a> 
                </td>
            </tr>
            <tr>
                <td align="right" nowrap="true" colspan="6">
                    <div id="turn-page">
                        总计 <span id="totalRecords">11</span>
                        个记录分为 <span id="totalPages">1</span>
                        页当前第 <span id="pageCurrent">1</span>
                        页，每页 <input type='text' size='3' id='pageSize' value="15" />
                        <span id="page-link">
                            <a href="#">第一页</a>
                            <a href="#">上一页</a>
                            <a href="#">下一页</a>
                            <a href="#">最末页</a>
                            <select id="gotoPage">
                                <option value='1'>1</option>
                            </select>
                        </span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</form>

        
        
        <div id="footer">
            共执行 7 个查询，用时 0.028849 秒，Gzip 已禁用，内存占用 3.219 MB<br />
            版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
    </body>
</html>