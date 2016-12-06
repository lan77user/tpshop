<layout name="Common/layout"/>
<div class="tab-div">
    <div id="tabbar-div">
        <p>
            <span class="tab-front" id="general-tab">基本信息</span>
            <span class="tab-front" id="general-tab">商品描述</span>
            <span class="tab-front" id="general-tab">会员价格</span>
            <span class="tab-front" id="general-tab">商品属性</span>
            <span class="tab-front" id="general-tab">商品相册</span>
        </p>
    </div>
    <div id="tabbody-div">
        <form enctype="multipart/form-data" action="__SELF__" method="post">
            <table width="90%" id="general-table" align="center">
                <tr>
                    <td class="label">商品名称：</td>
                    <td><input type="text" name="goods_name" value=""size="30" />
                    <span style="color: red;"><?php echo $errorInfo['goods_name']; ?></span></td>
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
                            <foreach name="cat_list" item="val">
                            <option value="<<?php echo $val['cat_id']; ?>>"><{$val.lev|str_repeat='&nbsp;&nbsp;',###}><<?php echo $val['cat_name']; ?>></option>
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
                        <input type="text" name="shop_price" value="" size="20"/>
                        <span style="color: red;"><?php echo $errorInfo['shop_price']; ?></span>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品数量：</td>
                    <td>
                        <input type="text" name="goods_number" size="8" value=""/>
                        <span style="color: red;"><?php echo $errorInfo['goods_number']; ?></span>
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
    <link href="__PUBLIC__/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="__PUBLIC__/umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/umeditor/lang/zh-cn/zh-cn.js"></script>
<script>
UM.getEditor('goods_desc');
</script>