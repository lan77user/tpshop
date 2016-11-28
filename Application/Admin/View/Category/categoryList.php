<layout name="Common/layout"/>
       
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
                                <a href="<?php echo U('edit?id='.$val['cat_id'])?>">修改</a>
                                <a onclick="if(confirm('确定要删除吗?')) return true; else return false;"
                                   href="<?php echo U('delete?id='.$val['cat_id']);?>" onclick="" title="删除">删除</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </form>
