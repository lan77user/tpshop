<layout name="Common/layout"/>
<div class="form-div">
    <form action="" name="searchForm">
    <img src="__PUBLIC__/Admin/images/icon_search.gif" width="26" height="22" border="0" alt="search" />
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
                    <a href="<{$val.site_url}>" target="_brank"></a>
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
