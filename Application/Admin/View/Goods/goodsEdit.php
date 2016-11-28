<layout name="Common/layout"/>
<div class="tab-div">
    <div id="tabbar-div">
        <p>
            <span class="tab-front" id="general-tab">通用信息</span>
        </p>
    </div>
    <div id="tabbody-div">
        <form enctype="multipart/form-data" action="{:U('admin/goods/goodslist')}" method="post">
            <table width="90%" id="general-table" align="center">
                <tr>
                    
                    <td class="label">商品名称：</td>
                    <td><input type="text" name="goods_name" value="<?php echo $row['goods_name']; ?>"size="30"/>
                    <span class="require-field">*</span></td>
                </tr>
                <tr>
                    <td class="label">商品货号： </td>
                    <td>
                        <input type="text" name="goods_sn" value="<?php echo $row['goods_sn']; ?>" size="20"/>
                        <span id="goods_sn_notice"></span><br />
                        <span class="notice-span"id="noticeGoodsSN">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品分类：</td>
                    <td>
                        <select name="cat_id">
                            <option value="0">请选择...</option>
                            <foreach name="cat_list" item="val">
                            <option value="<?php echo $row['cat_id']; ?>"><{$val.lev|str_repeat='&nbsp;&nbsp;',###; ?>><<?php echo $val['cat_name']; ?>></option>
                            </foreach>
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
                            <option value="<<?php echo $val['brand_id']; ?>>"><<?php echo $val['brand_name']; ?>></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="label">本店售价：</td>
                    <td>
                        <input type="text" name="shop_price" value="<?php echo $row['shop_price']; ?>" size="20"/>
                        <span class="require-field">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品数量：</td>
                    <td>
                        <input type="text" name="goods_number" size="8" value="<?php echo $row['goods_number']; ?>"/>
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
                    <td class="label">推荐排序：</td>
                    <td>
                        <input type="text" name="sort_order" size="5" value="100"/>
                    </td>
                </tr>
                <tr>
                    <td class="label">市场售价：</td>
                    <td>
                        <input type="text" name="market_price" value="<?php echo $row['market_price']; ?>" size="20" />
                    </td>
                </tr>
                <tr>
                    <td class="label">商品关键词：</td>
                    <td>
                        <input type="text" name="keywords" value="<?php echo $row['keywords']; ?>" size="40" /> 用空格分隔
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
                        <textarea name="goods_brief" cols="40" rows="3"></textarea>
                    </td>
                </tr>
            </table>
            <div class="button-div">
                <input type="submit" value=" 确定 " class="button"/>
                <input type="reset" value=" 重置 " class="button" />
            </div>
        </form>
    </div>
</div>

<div id="footer">
共执行 9 个查询，用时 0.025161 秒，Gzip 已禁用，内存占用 3.258 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>