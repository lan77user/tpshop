<layout name="Common/layout"/>
<div class="tab-div">
    <div id="tabbar-div">
        <p>
            <span class="tab-front" id="general-tab">通用信息</span>
        </p>
    </div>
    <div id="tabbody-div">
        <form  action="__SELF__" method="post">
            <table width="90%" id="general-table" align="center">
                <tr>
                    <td class="label">分类名称：</td>
                    <td><input type="text" name="goods_name" value=""size="30" />
                    <span style="color: red;"><?php echo $errorInfo['goods_name']; ?></span></td>
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

