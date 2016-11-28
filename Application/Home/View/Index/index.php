<layout name="Common/layout" />
<!--引入这个页面特有的CSS和js-->

<include file="Common:head" />
<include file="Common:nav" />

    
	<div style="clear:both;"></div>
	
	<!-- 综合区域 start 包括幻灯展示，商城快报 -->
	<div class="colligate w1210 bc mt10">
		<!-- 幻灯区域 start -->
		<div class="slide fl">
			<div class="area">
				<div class="slide_items">
					<ul>
						<li><a href=""><img src="__PUBLIC__/Home/images/index_slide1.jpg" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/index_slide2.jpg" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/index_slide3.jpg" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/index_slide4.jpg" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/index_slide5.jpg" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/index_slide6.jpg" alt="" /></a></li>
					</ul>
				</div>
				<div class="slide_controls">
					<ul>
						<li class="on">1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<li>5</li>
						<li>6</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- 幻灯区域 end-->
	
		<!-- 快报区域 start-->
		<div class="coll_right fl ml10">
			<div class="ad"><a href=""><img src="__PUBLIC__/Home/images/ad.jpg" alt="" /></a></div>
			
			<div class="news mt10">
				<h2><a href="">更多快报&nbsp;></a><strong>网站快报</strong></h2>
				<ul>
					<li class="odd"><a href="">电脑数码双11爆品抢不停</a></li>
					<li><a href="">买茶叶送武夷山旅游大奖</a></li>
					<li class="odd"><a href="">爆款手机最高直降1000</a></li>
					<li><a href="">新鲜褚橙全面包邮开售！</a></li>
					<li class="odd"><a href="">家具家装全场低至3折</a></li>
					<li><a href="">买韩束，志玲邀您看电影</a></li> 
					<li class="odd"><a href="">美的先行惠双11快抢悦</a></li>
					<li><a href="">享生活 疯狂周期购！</a></li>
				</ul>

			</div>
			
			<div class="service mt10">
				<h2>
					<span class="title1 on"><a href="">话费</a></span>
					<span><a href="">旅行</a></span>
					<span><a href="">彩票</a></span>
					<span class="title4"><a href="">游戏</a></span>
				</h2>
				<div class="service_wrap">
					<!-- 话费 start -->
					<div class="fare">
						<form action="">
							<ul>
								<li>
									<label for="">手机号：</label>
									<input type="text" class="txt" placeholder="请输入手机号"/>
									<p class="msg">支持移动、联通、电信</p>
								</li>
								<li>
									<label for="">面值：</label>
									<select name="" id="">
										<option value="">10元</option>
										<option value="">20元</option>
										<option value="">30元</option>
										<option value="">50元</option>
										<option value="" selected>100元</option> 
										<option value="">200元</option>
										<option value="">300元</option>
										<option value="">400元</option>
										<option value="">500元</option>
									</select>
									<strong>98.60-99.60</strong>
								</li>
								<li>
									<label for="">&nbsp;</label>
									<input type="submit" value="点击充值" class="fare_btn" /> <span><a href="">北京青春怒放独家套票</a></span>
								</li>
							</ul>
						</form>
					</div>
					<!-- 话费 start -->
	
					<!-- 旅行 start -->
					<div class="travel none">
						<ul>
							<li>
								<a href=""><img src="__PUBLIC__/Home/images/holiday.jpg" alt="" /></a>
								<a href="" class="button">度假查询</a>
							</li>
							<li>
								<a href=""><img src="__PUBLIC__/Home/images/scenic.jpg" alt="" /></a>
								<a href="" class="button">景点查询</a>
							</li>
						</ul>
					</div>
					<!-- 旅行 end -->
						
					<!-- 彩票 start -->
					<div class="lottery none">
						<p><img src="__PUBLIC__/Home/images/lottery.jpg" alt="" /></p>
					</div>
					<!-- 彩票 end -->

					<!-- 游戏 start -->
					<div class="game none">
						<ul>
							<li><a href=""><img src="__PUBLIC__/Home/images/sanguo.jpg" alt="" /></a></li>
							<li><a href=""><img src="__PUBLIC__/Home/images/taohua.jpg" alt="" /></a></li>
							<li><a href=""><img src="__PUBLIC__/Home/images/wulin.jpg" alt="" /></a></li>
						</ul>
					</div>
					<!-- 游戏 end -->
				</div>
			</div>

		</div>
		<!-- 快报区域 end-->
	</div>
	<!-- -综合区域 end -->
	
	<div style="clear:both;"></div>

	<!-- 导购区域 start -->
	<div class="guide w1210 bc mt15">
		<!-- 导购左边区域 start -->
		<div class="guide_content fl">
			<h2>
				<span class="on">疯狂抢购</span>
				<span>热卖商品</span>
				<span>推荐商品</span>
				<span>新品上架</span>
				<span class="last">猜您喜欢</span>
			</h2>
			
			<div class="guide_wrap">
				<!-- 疯狂抢购 start-->
				<div class="crazy">
					<ul>
						<?php foreach ($crazy as $key => $val):?>
							<li>
								<dl>
									<dt><a href=""><img src="__PUBLIC__/Home/<?php echo $val['goods_img']?>" alt="" /></a></dt>
									<dd><a href=""><?php echo $val['goods_name'];?></a></dd>
									<dd><span>售价：</span> <strong>￥<?php echo $val['shop_price'];?></strong></dd>
								</dl>
							</li>
                                                        <?php endforeach;?>
					</ul>	
				</div>
				<!-- 疯狂抢购 end-->

				<!-- 热卖商品 start -->
				<div class="hot none">
					<ul>
                                            <?php foreach ($hot as $key => $val):?>
						<li>
							<dl>
								<dt><a href=""><img src="__PUBLIC__/Home/<?php echo $val['goods_img']?>" alt="" /></a></dt>
								<dd><a href=""><?php echo $val['goods_name'];?></a></dd>
								<dd><span>售价：</span><strong> ￥<?php echo $val['shop_price'];?></strong></dd>
							</dl>
						</li>
                                                <?php endforeach;?>
					</ul>
				</div>
				<!-- 热卖商品 end -->

				<!-- 推荐商品 atart -->
				<div class="crazy none">
					<ul>
						 <?php foreach ($recommend as $key => $val):?>
						<li>
							<dl>
								<dt><a href=""><img src="__PUBLIC__/Home/<?php echo $val['goods_img']?>" alt="" /></a></dt>
								<dd><a href=""><?php echo $val['goods_name'];?></a></dd>
								<dd><span>售价：</span><strong> ￥<?php echo $val['shop_price'];?></strong></dd>
							</dl>
						</li>
                                                <?php endforeach;?>
					</ul>
				</div>
				<!-- 推荐商品 end -->
			
				<!-- 新品上架 start-->
				<div class="new none">
					<ul>
						<?php foreach ($new as $key => $val):?>
						<li>
							<dl>
								<dt><a href=""><img src="__PUBLIC__/Home/<?php echo $val['goods_img']?>" alt="" /></a></dt>
								<dd><a href=""><?php echo $val['goods_name'];?></a></dd>
								<dd><span>售价：</span><strong> ￥<?php echo $val['shop_price'];?></strong></dd>
							</dl>
						</li>
                                                <?php endforeach;?>
					</ul>
				</div>
				<!-- 新品上架 end-->

				<!-- 猜您喜欢 start -->
				<div class="guess none">
					<ul>
						<?php foreach ($guess as $key => $val):?>
						<li>
							<dl>
								<dt><a href=""><img src="__PUBLIC__/Home/<?php echo $val['goods_img']?>" alt="" /></a></dt>
								<dd><a href=""><?php echo $val['goods_name'];?></a></dd>
								<dd><span>售价：</span><strong> ￥<?php echo $val['shop_price'];?></strong></dd>
							</dl>
						</li>
                                                <?php endforeach;?>
					</ul>
				</div>
				<!-- 猜您喜欢 end -->

			</div>

		</div>
		<!-- 导购左边区域 end -->
		
		<!-- 侧栏 网站首发 start-->
		<div class="sidebar fl ml10">
			<h2><strong>网站首发</strong></h2>
			<div class="sidebar_wrap">
				<dl class="first">
					<dt class="fl"><a href=""><img src="__PUBLIC__/Home/images/viewsonic.jpg" alt="" /></a></dt>
					<dd><strong><a href="">ViewSonic优派N710 </a></strong> <em>首发</em></dd>
					<dd>苹果iphone 5免费送！攀高作为全球智能语音血压计领导品牌，新推出的黑金刚高端智能电子血压计，改变传统测量方式让血压测量迈入一体化时代。</dd>
				</dl>

				<dl>
					<dt class="fr"><a href=""><img src="__PUBLIC__/Home/images/samsung.jpg" alt="" /></a></dt>
					<dd><strong><a href="">Samsung三星Galaxy</a></strong> <em>首发</em></dd>
					<dd>电视百科全书，360°无死角操控，感受智能新体验！双核CPU+双核GPU+MEMC运动防抖，58寸大屏打造全新视听盛宴！</dd>
				</dl>
			</div>
			

		</div>
		<!-- 侧栏 网站首发 end -->
		
	</div>
	<!-- 导购区域 end -->
	
	<div style="clear:both;"></div>

	<!--1F 电脑办公 start -->
	<div class="floor1 floor w1210 bc mt10">
		<!-- 1F 左侧 start -->
		<div class="floor_left fl">
			<!-- 商品分类信息 start-->
			<div class="cate fl">
				<h2>电脑、办公</h2>
				<div class="cate_wrap">
					<ul>
						<li><a href=""><b>.</b>外设产品</a></li>
						<li><a href=""><b>.</b>鼠标</a></li>
						<li><a href=""><b>.</b>笔记本</a></li>
						<li><a href=""><b>.</b>超极本</a></li>
						<li><a href=""><b>.</b>平板电脑</a></li>
						<li><a href=""><b>.</b>主板</a></li>
						<li><a href=""><b>.</b>显卡</a></li>
						<li><a href=""><b>.</b>打印机</a></li>
						<li><a href=""><b>.</b>一体机</a></li>
						<li><a href=""><b>.</b>投影机</a></li>
						<li><a href=""><b>.</b>路由器</a></li>
						<li><a href=""><b>.</b>网卡</a></li>
						<li><a href=""><b>.</b>交换机</a></li>
					</ul>
					<p><a href=""><img src="__PUBLIC__/Home/images/notebook.jpg" alt="" /></a></p>
				</div>
				

			</div>
			<!-- 商品分类信息 end-->

			<!-- 商品列表信息 start-->
			<div class="goodslist fl">
				<h2>
					<span class="on">推荐商品</span>
					<span>电脑整机</span>
					<span>电脑配件</span>
					<span>办公打印</span>
					<span>网络产品</span>
				</h2>
				<div class="goodslist_wrap">
					<div>
						<ul>
                                                    <?php foreach ($crazy as $key => $val):?>
							<li>
								<dl>
									<dt><a href=""><img src="__PUBLIC__/<?php echo $val['goods_img'];?>" alt="" /></a></dt>
									<dd><a href=""><?php echo $val['goods_name'];?></a></dd>
									<dd><span>售价：</span> <strong>￥<?php echo $val['shop_price'];?></strong></dd>
								</dl>
							</li>
                                                        <?php endforeach;?>
						</ul>
					</div>
					
					<div class="none">
						<ul>
							<?php foreach ($computer as $key => $val):?>
							<li>
								<dl>
									<dt><a href=""><img src="__PUBLIC__/<?php echo $val['goods_img'];?>" alt="" /></a></dt>
									<dd><a href=""><?php echo $val['goods_name'];?></a></dd>
									<dd><span>售价：</span> <strong>￥<?php echo $val['shop_price'];?></strong></dd>
								</dl>
							</li>
                                                        <?php endforeach;?>
							
						</ul>
					</div>

					<div class="none">
						<ul>
							<?php foreach ($computerParts as $key => $val):?>
							<li>
								<dl>
									<dt><a href=""><img src="__PUBLIC__/<?php echo $val['goods_img'];?>" alt="" /></a></dt>
									<dd><a href=""><?php echo $val['goods_name'];?></a></dd>
									<dd><span>售价：</span> <strong>￥<?php echo $val['shop_price'];?></strong></dd>
								</dl>
							</li>
                                                        <?php endforeach;?>
						</ul>
					</div>

					<div class="none">
						<ul>
							<?php foreach ($offices as $key => $val):?>
							<li>
								<dl>
									<dt><a href=""><img src="__PUBLIC__/<?php echo $val['goods_img'];?>" alt="" /></a></dt>
									<dd><a href=""><?php echo $val['goods_name'];?></a></dd>
									<dd><span>售价：</span> <strong>￥<?php echo $val['shop_price'];?></strong></dd>
								</dl>
							</li>
                                                        <?php endforeach;?>
						</ul>
					</div>

					<div class="none">
						<ul>
							<?php foreach ($internet as $key => $val):?>
							<li>
								<dl>
									<dt><a href=""><img src="__PUBLIC__/<?php echo $val['goods_img'];?>" alt="" /></a></dt>
									<dd><a href=""><?php echo $val['goods_name'];?></a></dd>
									<dd><span>售价：</span> <strong>￥<?php echo $val['shop_price'];?></strong></dd>
								</dl>
							</li>
                                                        <?php endforeach;?>
						</ul>
					</div>

				</div>
			</div>
			<!-- 商品列表信息 end-->
		</div>
		<!-- 1F 左侧 end -->
		
		<!-- 右侧 start -->
		<div class="sidebar fl ml10">
			<!-- 品牌旗舰店 start -->
			<div class="brand">
				<h2><a href="">更多品牌&nbsp;></a><strong>品牌旗舰店</strong></h2>
				<div class="sidebar_wrap">
					<ul>
						<li><a href=""><img src="__PUBLIC__/Home/images/dell.gif" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/acer.gif" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/fujitsu.jpg" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/hp.jpg" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/lenove.jpg" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/samsung.gif" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/dlink.gif" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/seagate.jpg" alt="" /></a></li>
						<li><a href=""><img src="__PUBLIC__/Home/images/intel.jpg" alt="" /></a></li>
					</ul>
				</div>
			</div>
			<!-- 品牌旗舰店 end -->
			
			<!-- 分类资讯 start -->
			<div class="info mt10">
				<h2><strong>分类资讯</strong></h2>
				<div class="sidebar_wrap">
					<ul>
						<li><a href=""><b>.</b>iphone 5s土豪金大量到货</a></li>
						<li><a href=""><b>.</b>三星note 3低价促销</a></li>
						<li><a href=""><b>.</b>thinkpad x240即将上市</a></li>
						<li><a href=""><b>.</b>双十一来临，众商家血拼</a></li>
					</ul>
				</div>
				
			</div>
			<!-- 分类资讯 end -->
			
			<!-- 广告 start -->
			<div class="ads mt10">
				<a href=""><img src="__PUBLIC__/Home/images/canon.jpg" alt="" /></a>
			</div>
			<!-- 广告 end -->
		</div>
		<!-- 右侧 end -->

	</div>
	<!--1F 电脑办公 start -->

	
	<div style="clear:both;"></div>

<include file="Common:footer"/>