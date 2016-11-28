
		<!-- 导航条部分 start -->
		<div class="nav w1210 bc mt10">
			<!--  商品分类部分 start-->
			<div class="category fl <?php if($show_nav == 0) echo 'cat1'; ?>"> <!-- 非首页，需要添加cat1类 -->
				<div class="cat_hd <?php if($show_nav == 0) echo 'off'; ?>">  <!-- 注意，首页在此div上只需要添加cat_hd类，非首页，默认收缩分类时添加上off类，鼠标滑过时展开菜单则将off类换成on类 -->
					<h2>全部商品分类</h2>
					<em></em>
				</div>
                            <div class="cat_bd <?php if($show_nav == 0) echo 'none'; ?>">
					<?php foreach ($nav as $k0 => $v0):?>
					<div class="cat item1">
						<h3><a href="">{$v0.cat_name}</a> <b></b></h3>
						<div class="cat_detail">
                                                    <?php foreach ($v0['children'] as $k1 => $v1):?>
							<dl class="dl_1st">
								<dt><a href="">{$v1.cat_name}</a></dt>
                                                                <?php foreach ($v1['children'] as $k2 => $v2):?>
								<dd>
									<a href="">{$v2.cat_name}</a>						
								</dd>
                                                                <?php endforeach;?>
							</dl>
                                                    <?php endforeach;?>
						</div>
					</div>
					<?php endforeach;?>
                                

				</div>
                            
			</div>
			<!--  商品分类部分 end--> 

			<div class="navitems fl">
				<ul class="fl">
					<li class="current"><a href="{:U('index/index')}">首页</a></li>
					<li><a href="">电脑频道</a></li>
					<li><a href="">家用电器</a></li>
					<li><a href="">品牌大全</a></li>
					<li><a href="">团购</a></li>
					<li><a href="">积分商城</a></li>
					<li><a href="">夺宝奇兵</a></li>
				</ul>
				<div class="right_corner fl"></div>
			</div>
		</div>
		<!-- 导航条部分 end -->
	</div>
	<!-- 头部 end-->
	