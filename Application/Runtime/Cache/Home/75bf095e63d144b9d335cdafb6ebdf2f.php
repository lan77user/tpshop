<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="/tpshop/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/tpshop/Public/Home/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="/tpshop/Public/Home/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="/tpshop/Public/Home/js/move-top.js"></script>
<script type="text/javascript" src="/tpshop/Public/Home/js/easing.js"></script>
<script type="text/javascript" src="/tpshop/Public/Home/js/startstop-slider.js"></script>
</head>
<body>
    <div class="cart-thead">
			<div class="column t-checkbox">
				<div class="cart-checkbox">
					<input checked="checked" id="toggle-checkboxes_up" name="toggle-checkboxes" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_allCheck" type="checkbox">
					<label class="checked" for="">勾选全部商品</label>
				</div>
				全选
			</div>
			<div class="column t-goods">商品</div>
			<div class="column t-props"></div>
			<div class="column t-price">单价(元)</div>
			<div class="column t-quantity">数量</div>
			<div class="column t-sum">小计(元)</div>
			<div class="column t-action">操作</div>
		</div>

<div id="cart-list">
				<input id="allSkuIds" value="2211430,1879150,2142561" type="hidden">
	<input id="outSkus" value="" type="hidden">
	<input id="isLogin" value="0" type="hidden">
	<input id="isNoSearchStockState" value="0" type="hidden">
	<input id="isNoDD" value="0" type="hidden">
	<input id="isNoCoupon" value="0" type="hidden">
	<input id="isFavoriteDowngrade" value="0" type="hidden">
	<input id="isUnmarketDowngrade" value="1" type="hidden">
	<input id="isPriceNoticeDowngrade" value="0" type="hidden">
	<input id="isNoZYCoupon" value="0" type="hidden">
	<input id="isNoVenderFreight" value="0" type="hidden">
	<input id="isNoDeliveryService" value="0" type="hidden">
	<input id="isNoSamReplace" value="0" type="hidden">
	<input id="hiddenLocationId" type="hidden">
	<input id="hiddenLocation" type="hidden">
	<input id="ids" value="2211430,1879150,2142561" type="hidden">
	<input id="isNgsdg" value="0" type="hidden">
	<input id="isMiscdg" value="0" type="hidden">
	<!-- 修改数量之前的值 -->
	<input id="changeBeforeValue" value="" type="hidden">
	<input id="changeBeforeId" value="" type="hidden">
	<input value="1" id="checkedCartState" type="hidden">
	<input value="" id="venderIds" type="hidden">
	<input value="2211430_748_1,1879150_12394_1,2142561_749_1" id="zySkuCid" type="hidden">
	<input value="8888" id="venderFreightIds" type="hidden">
	<input value="7900.00" id="venderTotals" type="hidden">
	<input value="0" id="uclass" type="hidden">
							<div class="cart-item-list" id="cart-item-list-01">
				<div class="cart-tbody" id="vender_8888">
	<div class="shop">
		<div class="cart-checkbox">
						<input checked="checked" name="checkShop" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_shop" type="checkbox">
			<label for="">勾选店铺内全部商品</label>
					</div>
		<span class="shop-txt">
												<a class="shop-name self-shop-name" href="javascript:;" id="venderId_8888" clstag="clickcart|keycount|xincart|cart_shopNameJD">京东自营</a>
									</span>
		 			 <div class="shop-extra-r" id="shop-extra-r_8888" checkedskuids="2211430,1879150,2142561" totalprice="7900.00" venderfreight="6.00" freeshippingprice="99.00" venderid="8888" freightpattern="1" venderfreighttype="1">钻石会员满￥79.00免运费，其他会员满￥99.00免运费<span class="tips-icon omu-tips" data-tips="部分超重超大商品运费单独收取，不在本功能范围内，准确运费以结算页为准"></span></div>
		 	</div>
	<div class="item-list">
				 <!-- 满赠 -->
						<!-- 满赠 -->
		<div class="item-give item-full " id="product_promo_193369127">
					<input value="meet-give" type="hidden">
				<div class="item-header">
			<div class="f-txt">
													<a href="http://sale.jd.com/act/ZTPEGHRhsa01.html" clstag="clickcart|keycount|xincart|cart_huodong_link" target="_blank">
																								<span class="full-icon">换购<b></b></span>
																								活动商品已购满39.90元
																												，可加价换购商品1件
												&gt;</a>
						<a class="trade-btn btn-1 ml20" href="javascript:void(0);" id="select-gift_193369127" clstag="clickcart|keycount|xincart|cart_huanGou">换购商品</a>
																		<a href="javascript:void(0);" id="coudan_promo_193369127" clstag="clickcart|keycount|xincart|cart_couDan" class="ftx-05">&nbsp;去凑单&nbsp;&gt;</a>
							</div>
			<div class="f-price">
				<strong>3790.00</strong>
							</div>
		</div>
		
		<!--已选赠品展示开始-->
				<!--已选赠品展示结束-->
		
							<!-- 单品-->
			<div class=" item-last item-item item-selected  " id="product_2211430">
		<div class="item-form">
			<div class="cell p-checkbox">
				<div class="cart-checkbox">
					 <!-- 满赠 -->
						<input p-type="2211430_13" manfanzeng="1" name="checkItem" value="2211430_13_193369127" checked="checked" class="jdcheckbox" data-bind="cbid" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="" class="checked">勾选商品</label>
					<span class="line-circle"></span>
				</div>
			</div>
			<div class="cell p-goods">
				<div class="goods-item">
					<div class="p-img">
						<a href="//item.jd.com/2211430.html" target="_blank" class="J_zyyhq_2211430"><img alt="戴森(Dyson) 加湿器 除菌 原装进口 AM10白银" clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t1948/5/1665031008/54332/e914083d/566e1820N6636eedd.jpg"></a>
					</div>
					<div class="item-msg">
						<div class="p-name">
							<a clstag="clickcart|keycount|xincart|cart_sku_name" href="//item.jd.com/2211430.html" target="_blank">戴森(Dyson) 加湿器 除菌 原装进口 AM10白银</a>
						</div>
						<div class="p-extend">
							<span class="promise" _giftcard="giftcard_2211430">
							</span>
							<!-- 满赠 -->
																						<span class="promise" _yanbao="yanbao_2211430_193369127">
								<!--<i class="jd-service-icon"></i>
								<a href="#none" class="ftx-03 jd-service" clstag="clickcart|keycount|xincart|cart_fuWu" data-tips="购买京东服务">购买京东服务</a>-->
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="cell p-props p-props-new">
									<div class="props-txt" title="新增白银色！">颜色：新增白银色！</div>
											</div>
			<div class="cell p-price">
									<strong>3790.00</strong>
																												<a class="sales-promotion" href="#none" clstag="clickcart|keycount|xincart|cart_youHui" data-tips="促销优惠">
						促销优惠<b></b>
					</a>
					<div id="sales-promotion_2211430" class="promotion-tips">
						<div class="promotion-tit">促销信息<b></b></div>
						<div class="promotion-cont">
							<ul>
                			                				                			                				                			                					                				<!-- 满赠 -->
									<li><input multipromotion="0" name="radioPromotion_2211430" value="8888_193369127_2211430_13_193369127" title="满19.90、29.90、39.90可换购商品" checked="checked" type="radio">满19.90、29.90、39.90可换购商品</li>
	                    			                    			                			                					                				<!-- 满赠 -->
									<li><input multipromotion="0" name="radioPromotion_2211430" value="8888_-300_2211430_13_193369127" title="不使用活动优惠" type="radio">不使用活动优惠</li>
	                    			                    			                										</ul>
							<div class="op-btns ac mt20">
								<a href="#none" class="btn-1 select-promotion" clstag="clickcart|keycount|xincart|cart_youHuiChange">确定</a>
								<a href="#none" class="btn-9 ml10 del cancel-promotion">取消</a>
							</div>
						</div>
					</div>
																	                	            										                            				</div>
			<div class="cell p-quantity">
				 <!-- 满赠 -->
					<div class="quantity-form" promoid="193369127">
						<a href="javascript:void(0);" clstag="clickcart|keycount|xincart|cart_num_down" class="decrement disabled" id="decrement_8888_2211430_1_13_193369127">-</a>
						<input autocomplete="off" class="itxt" value="1" id="changeQuantity_8888_2211430_1_13_0_193369127" minnum="1" type="text">
						<a href="javascript:void(0);" clstag="clickcart|keycount|xincart|cart_num_up" class="increment" id="increment_8888_2211430_1_13_0_193369127">+</a>
					</div>
								<div class="ac ftx-03 quantity-txt" _stock="stock_2211430">有货</div>
			</div>
			<div class="cell p-sum">
									<strong>3790.00</strong>
										            	            			</div>
			<div class="cell p-ops">
				 <!-- 满赠 -->
					<a id="remove_8888_2211430_13_193369127" clstag="clickcart|keycount|xincart|cart_sku_del" data-name="戴森(Dyson) 加湿器 除菌 原装进口 AM10白..." data-more="removed_3790.00_1" class="cart-remove" href="javascript:void(0);">删除</a>
											<a href="javascript:void(0);" class="cart-follow" id="follow_8888_2211430_13_193369127" clstag="clickcart|keycount|xincart|cart_sku_guanzhu">移到我的关注</a>
																	</div>
		</div>
		<div class="item-extra">
									<!-- 落地配服务 -->
															<div class="unmarket-items" _unmarket="unmarket_2211430" data="737;738;748;2211430;0"></div>
					</div>
		<div class="item-line"></div>
	</div>
																					<input id="select-skus_promo_193369127" value="2211430" type="hidden">
				<!--满赠赠品弹层开始-->
		<div class="gift-box" id="gift_box_193369127" style="display: none;">
			<div class="gift-arr"></div>
			<input id="gift_num_193369127" value="1" type="hidden">
        	<div class="gift-mt">
				可换购最多1件，已选<em class="num">0</em>件
				<strong class="close">X</strong>
			</div>
        	<div class="gift-goods">
				            		<!--<div class="gift-tit">
            			<h3>满<span class="ftx-01">39.90</span>可换购（还差 <span class="ftx-01">39.90</span>）</h3>
            			<div class="extra-r">
            				<a href="//www.jd.com" class="ftx-05">继续购物</a>
            			</div>
            		</div>-->
																			<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="2472665" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/2472665.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t3187/300/243094449/125887/f78f8f90/57ad37fdN833badf1.jpg" alt="奔腾（POVOS)毛球修剪器 PW310 直插式充电毛球器">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/2472665.html" target="_blank" title="奔腾（POVOS)毛球修剪器 PW310 直插式充电毛球器">
                						奔腾（POVOS)毛球修剪器 PW310 直插式充电...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥19.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="1980856" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/1980856.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t1783/54/1990015552/89239/9831337b/56206d85Ne1e5556f.jpg" alt="超人（SID）毛球修剪器 SR7811 毛球器充电式电动剃绒器去毛球机除毛器（粉红色）">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/1980856.html" target="_blank" title="超人（SID）毛球修剪器 SR7811 毛球器充电式电动剃绒器去毛球机除毛器（粉红色）">
                						超人（SID）毛球修剪器 SR7811 毛球器充电...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥19.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="2652746" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/2652746.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t2347/152/2440834809/63885/76d22689/57079042N9154a077.jpg" alt="清华同方 TF-8324 四位1.5米总控转换器/插座/插排/插线板">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/2652746.html" target="_blank" title="清华同方 TF-8324 四位1.5米总控转换器/插座/插排/插线板">
                						清华同方 TF-8324 四位1.5米总控转换器/插...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥19.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="3324323" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/3324323.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t3238/92/3830515537/198044/28f17a4e/57f9a82dNf32f9e68.jpg" alt="康夫（Kangfu）KF-SV311 充电式 电动剃绒器 衣物去毛球机">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/3324323.html" target="_blank" title="康夫（Kangfu）KF-SV311 充电式 电动剃绒器 衣物去毛球机">
                						康夫（Kangfu）KF-SV311 充电式 电动剃绒器...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥29.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="2092217" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/2092217.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t3112/39/1512938838/188910/ca49e70c/57cfbae5Nb2421a27.jpg" alt="志高（CHIGO）烘鞋器干鞋器烤鞋器暖鞋器ZG-HX01白色">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/2092217.html" target="_blank" title="志高（CHIGO）烘鞋器干鞋器烤鞋器暖鞋器ZG-HX01白色">
                						志高（CHIGO）烘鞋器干鞋器烤鞋器暖鞋器ZG-...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥29.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="1558438" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/1558438.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t2152/300/2420754531/67584/d7403456/5703e3ffNbd23a8be.jpg" alt="QIC TM2A4U 4USB插线板 2孔位1.5米插座 插排/排插/接线板/拖线板 5V4A苹果三星小米手机充电">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/1558438.html" target="_blank" title="QIC TM2A4U 4USB插线板 2孔位1.5米插座 插排/排插/接线板/拖线板 5V4A苹果三星小米手机充电">
                						QIC TM2A4U 4USB插线板 2孔位1.5米插座 插...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥29.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="1795806" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/1795806.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t2020/273/1600630340/55493/ee45b71b/565ff3ccN061c0e0b.jpg" alt="美的（Midea）A1C44L1.8-A5 插座插排插线板 1.8米8孔位总控">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/1795806.html" target="_blank" title="美的（Midea）A1C44L1.8-A5 插座插排插线板 1.8米8孔位总控">
                						美的（Midea）A1C44L1.8-A5 插座插排插线板...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥29.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="962756" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/962756.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t2233/240/2842864595/17345/989e7cb2/56f377a5N6aa3e231.jpg" alt="鸿雁（HONYAR）ZDP81G8/D/2.5 8位总控全长2.5米 电源插座/插排/接线板">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/962756.html" target="_blank" title="鸿雁（HONYAR）ZDP81G8/D/2.5 8位总控全长2.5米 电源插座/插排/接线板">
                						鸿雁（HONYAR）ZDP81G8/D/2.5 8位总控全长2...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥29.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="108743" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/108743.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t3019/6/1568375342/175278/4b945bfa/57c7d5e1Ne274a3e8.jpg" alt="超人（SID）毛球修剪器 SR2850 充电式剃去毛球器电动剃绒器 去毛球机（玫瑰粉）">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/108743.html" target="_blank" title="超人（SID）毛球修剪器 SR2850 充电式剃去毛球器电动剃绒器 去毛球机（玫瑰粉）">
                						超人（SID）毛球修剪器 SR2850 充电式剃去...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥29.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="2290586" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/2290586.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t3616/144/695226663/175396/c71f7c17/581198ddNf8d70fe1.jpg" alt="飞利浦（PHILIPS）SPS3421C/93 升级新结构4位1.8米插座 独立开关+隐藏式指示灯 插排插线板/接线板/拖线板">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/2290586.html" target="_blank" title="飞利浦（PHILIPS）SPS3421C/93 升级新结构4位1.8米插座 独立开关+隐藏式指示灯 插排插线板/接线板/拖线板">
                						飞利浦（PHILIPS）SPS3421C/93 升级新结构4...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥29.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="1703031" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/1703031.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t1654/70/472700203/191003/8c984a72/55a61f37N8dffe10a.jpg" alt="纽曼（Newsmy）L56 数码收音机播放器 红色 收音机MP3老人迷你小音响插卡音箱便携式随身听 校园广播">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/1703031.html" target="_blank" title="纽曼（Newsmy）L56 数码收音机播放器 红色 收音机MP3老人迷你小音响插卡音箱便携式随身听 校园广播">
                						纽曼（Newsmy）L56 数码收音机播放器 红色 ...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥39.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="1611460" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/1611460.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t2200/32/1399421882/184525/96f465b2/56a19482Nfa293615.jpg" alt="华光（HG）挂烫机 QH0160便携式手持蒸汽挂烫机（粉色）">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/1611460.html" target="_blank" title="华光（HG）挂烫机 QH0160便携式手持蒸汽挂烫机（粉色）">
                						华光（HG）挂烫机 QH0160便携式手持蒸汽挂...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥39.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="2291495" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/2291495.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t3334/283/709002948/208980/34af8bcc/58119c59Na857e8d7.jpg" alt="飞利浦（PHILIPS）SPS3821D/93 升级新结构8位1.8米插座 总控开关 指示灯 插排插线板/接线板/拖线板">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/2291495.html" target="_blank" title="飞利浦（PHILIPS）SPS3821D/93 升级新结构8位1.8米插座 总控开关 指示灯 插排插线板/接线板/拖线板">
                						飞利浦（PHILIPS）SPS3821D/93 升级新结构8...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥39.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="297439" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/297439.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t2194/331/762046612/190295/567c444b/5628b114N05634c14.jpg" alt="飞科（FLYCO）毛球修剪器 FR5211 充电式剃去毛球器">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/297439.html" target="_blank" title="飞科（FLYCO）毛球修剪器 FR5211 充电式剃去毛球器">
                						飞科（FLYCO）毛球修剪器 FR5211 充电式剃...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥39.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
											<div class="item-gift">
                			<div class="p-checkbox">
                				<div class="cart-checkbox ">
																			<input id="491972" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="">勾选商品</label>
									                				</div>
                			</div>
                			<div class="p-img">
                				<a href="//item.jd.com/491972.html" target="_blank">
																			<img clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_g13/M07/00/10/rBEhVFNluq8IAAAAAADsesFAgSkAAMzRwKnkZkAAOyS907.jpg" alt="公牛（BULL）GN-206 6位3米 超功率保护 总控开关 插座/插排/插线板">
																	</a>
                			</div>
                			<div class="p-msg">
                				<div class="p-name">
                					<a href="//item.jd.com/491972.html" target="_blank" title="公牛（BULL）GN-206 6位3米 超功率保护 总控开关 插座/插排/插线板">
                						公牛（BULL）GN-206 6位3米 超功率保护 总...
                					</a>
                					<span class="num">×1</span>
                				</div>
                				<div class="p-price">
                					<strong>
                						<em>￥39.90</em>
                					</strong>
									                				</div>
                			</div>
                		</div>
									        		
        	</div>
        
        	<div class="op-btns ac">
									<a href="#none" class="btn-1 select-gift" clstag="clickcart|keycount|xincart|cart_huanGouSet">确定</a>
					<a href="#none" class="btn-9 ml10 del cancel-gift">取消</a>
				        	</div>
        </div>
		<!--满赠赠品弹层结束-->
	</div>					<!--单品-->
			<!-- 单品-->
			<div class="item-single  item-item item-selected  " id="product_1879150">
		<div class="item-form">
			<div class="cell p-checkbox">
				<div class="cart-checkbox">
					<!--单品-->
						<input p-type="1879150_1" name="checkItem" value="1879150_1" checked="checked" data-bind="cbid" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="" class="checked">勾选商品</label>
					<span class="line-circle"></span>
				</div>
			</div>
			<div class="cell p-goods">
				<div class="goods-item">
					<div class="p-img">
						<a href="//item.jd.com/1879150.html" target="_blank" class="J_zyyhq_1879150"><img alt="科沃斯（Ecovacs）地宝魔钻(BFD-wwt) 扫地机器人家用吸尘器全自动智能拖地机" clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t2464/95/1765031460/193349/bc39a1e6/56726e5cNee347097.jpg"></a>
					</div>
					<div class="item-msg">
						<div class="p-name">
							<a clstag="clickcart|keycount|xincart|cart_sku_name" href="//item.jd.com/1879150.html" target="_blank">科沃斯（Ecovacs）地宝魔钻(BFD-wwt) 扫地机器人家用吸尘器全自动智能拖地机</a>
						</div>
						<div class="p-extend">
							<span class="promise" _giftcard="giftcard_1879150">
							</span>
																					<span class="promise" _yanbao="yanbao_1879150_">
								<!--<i class="jd-service-icon"></i>
								<a href="#none" class="ftx-03 jd-service" clstag="clickcart|keycount|xincart|cart_fuWu" data-tips="购买京东服务">购买京东服务</a>-->
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="cell p-props p-props-new">
									<div class="props-txt" title="魔钻 千帕吸力 高颜值">颜色：魔钻 千帕吸力 高颜值</div>
											</div>
			<div class="cell p-price">
									<strong>1111.00</strong>
																																			                	            										                            				</div>
			<div class="cell p-quantity">
				<!--单品-->
					<div class="quantity-form">
						<a href="javascript:void(0);" clstag="clickcart|keycount|xincart|cart_num_down" class="decrement disabled" id="decrement_8888_1879150_1_1">-</a>
						<input autocomplete="off" class="itxt" value="1" id="changeQuantity_8888_1879150_1_1_0" minnum="1" type="text">
						<a href="javascript:void(0);" clstag="clickcart|keycount|xincart|cart_num_up" class="increment" id="increment_8888_1879150_1_1_0">+</a>
					</div>
								<div class="ac ftx-03 quantity-txt" _stock="stock_1879150">有货</div>
			</div>
			<div class="cell p-sum">
									<strong>1111.00</strong>
										            	            			</div>
			<div class="cell p-ops">
				<!--单品-->
					<a id="remove_8888_1879150_1" clstag="clickcart|keycount|xincart|cart_sku_del" data-name="科沃斯（Ecovacs）地宝魔钻(BFD-wwt) 扫地..." data-more="removed_1111.00_1" class="cart-remove" href="javascript:void(0);">删除</a>
											<a href="javascript:void(0);" class="cart-follow" id="follow_8888_1879150_1" clstag="clickcart|keycount|xincart|cart_sku_guanzhu">移到我的关注</a>
																	</div>
		</div>
		<div class="item-extra">
									<!-- 落地配服务 -->
															<div class="unmarket-items" _unmarket="unmarket_1879150" data="737;738;12394;1879150;1477963096355"></div>
					</div>
		<div class="item-line"></div>
	</div>
					<!--单品-->
			<!-- 单品-->
			<div class="item-single  item-item item-selected  " id="product_2142561">
		<div class="item-form">
			<div class="cell p-checkbox">
				<div class="cart-checkbox">
					<!--单品-->
						<input p-type="2142561_1" name="checkItem" value="2142561_1" checked="checked" data-bind="cbid" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku" type="checkbox">
										<label for="" class="checked">勾选商品</label>
					<span class="line-circle"></span>
				</div>
			</div>
			<div class="cell p-goods">
				<div class="goods-item">
					<div class="p-img">
						<a href="//item.jd.com/2142561.html" target="_blank" class="J_zyyhq_2142561"><img alt="飞利浦（PHILIPS）空气净化器3000系列高端款KJ360F-C06(AC3256)除甲醛" clstag="clickcart|keycount|xincart|cart_sku_pic" src="//img10.360buyimg.com/cms/s80x80_jfs/t2179/357/1089807318/45792/f25bc063/5645aa5fNf5b72534.jpg"></a>
					</div>
					<div class="item-msg">
						<div class="p-name">
							<a clstag="clickcart|keycount|xincart|cart_sku_name" href="//item.jd.com/2142561.html" target="_blank">飞利浦（PHILIPS）空气净化器3000系列高端款KJ360F-C06(AC3256)除甲醛</a>
						</div>
						<div class="p-extend">
							<span class="promise" _giftcard="giftcard_2142561">
							</span>
																					<span class="promise" _yanbao="yanbao_2142561_">
								<!--<i class="jd-service-icon"></i>
								<a href="#none" class="ftx-03 jd-service" clstag="clickcart|keycount|xincart|cart_fuWu" data-tips="购买京东服务">购买京东服务</a>-->
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="cell p-props p-props-new">
									<div class="props-txt" title="升级数字显示AC3256-400立方米/h">颜色：升级数字显示AC3256-400立方米/h</div>
											</div>
			<div class="cell p-price">
									<strong>2999.00</strong>
																																			                	            										                            				</div>
			<div class="cell p-quantity">
				<!--单品-->
					<div class="quantity-form">
						<a href="javascript:void(0);" clstag="clickcart|keycount|xincart|cart_num_down" class="decrement disabled" id="decrement_8888_2142561_1_1">-</a>
						<input autocomplete="off" class="itxt" value="1" id="changeQuantity_8888_2142561_1_1_0" minnum="1" type="text">
						<a href="javascript:void(0);" clstag="clickcart|keycount|xincart|cart_num_up" class="increment" id="increment_8888_2142561_1_1_0">+</a>
					</div>
								<div class="ac ftx-03 quantity-txt" _stock="stock_2142561">有货</div>
			</div>
			<div class="cell p-sum">
									<strong>2999.00</strong>
										            	            			</div>
			<div class="cell p-ops">
				<!--单品-->
					<a id="remove_8888_2142561_1" clstag="clickcart|keycount|xincart|cart_sku_del" data-name="飞利浦（PHILIPS）空气净化器3000系列高端..." data-more="removed_2999.00_1" class="cart-remove" href="javascript:void(0);">删除</a>
											<a href="javascript:void(0);" class="cart-follow" id="follow_8888_2142561_1" clstag="clickcart|keycount|xincart|cart_sku_guanzhu">移到我的关注</a>
																	</div>
		</div>
		<div class="item-extra">
									<!-- 落地配服务 -->
															<div class="unmarket-items" _unmarket="unmarket_2142561" data="737;738;749;2142561;1477963089941"></div>
					</div>
		<div class="item-line"></div>
	</div>
				</div>
</div>
			</div>
					</div>


<div id="cart-floatbar">
	<div class="ui-ceilinglamp-1" style="width: 990px; height: 52px;"><div class="cart-toolbar" style="width: 988px; height: 50px;">
		<div class="toolbar-wrap">
			<div class="selected-item-list hide" style="display: none;">
			</div>
			<div class="options-box">
				<div class="select-all">
					<div class="cart-checkbox">
						<input checked="checked" id="toggle-checkboxes_down" name="toggle-checkboxes" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_allCheckDown" type="checkbox">
						<label class="checked" for="">勾选全部商品</label>
					</div>
					全选
				</div>
				<div class="operation">
					<a href="#none" clstag="clickcart|keycount|xincart|cart_somesku_del" class="remove-batch">删除选中的商品</a>
											<a href="#none" class="follow-batch" clstag="clickcart|keycount|xincart|cart_somesku_guanzhu">移到我的关注</a>
																<a class="J_clr_nosale" href="#none" clstag="pageclick|keycount|201508251|23">清除下柜商品</a>
									</div>
				<div class="clr"></div>
				<div class="toolbar-right">
					<div class="normal">
						<div class="comm-right">
							<div class="btn-area">
								<a href="javascript:void(0);" onclick="return false;" clstag="clickcart|keycount|xincart|cart_gotoOrder" class="submit-btn" data-bind="1">
								去结算<b></b></a>
								<!-- <a href="javascript:void(0);" class="submit-btn submit-btn-disabled">
								去结算<b></b></a> -->
							</div>
							<div class="price-sum">
								<div>
									<span class="txt txt-new">总价：</span>
									<span class="price sumPrice"><em>￥7900.00</em></span>
									<b class="ml5 price-tips"></b>
									<div class="price-tipsbox" style="display: none; left: 159.85px;">
										<div class="ui-tips-main">不含运费及送装服务费</div>
										<span class="price-tipsbox-arrow"></span>
									</div>
									<br>
									<span class="txt">已节省：</span>
									<span class="price totalRePrice">-￥0.00</span>
								</div>
							</div>
							<div class="amount-sum">
								已选择<em>3</em>件商品<b class="up" clstag="clickcart|keycount|xincart|cart_thumbnailOpen"></b>
							</div>
							<div class="clr"></div>
						</div>
					</div>
					<div class="combine" style="display: none;">
						<div class="comm-right">
							<div class="btn-area">
								<a href="javascript:void(0);" onclick="return false;" clstag="clickcart|keycount|xincart|cart_gotoOrderOut" class="jdInt-submit-btn">
								去全球购结算<b></b></a>
								<a href="javascript:void(0);" onclick="return false;" clstag="clickcart|keycount|xincart|cart_gotoOrder" class="common-submit-btn">
								去京东结算<b></b></a>
							</div>
							<div class="price-sum">
								<div>
									<span class="txt txt-new">总价：</span>
									<span class="price sumPrice"><em>￥7900.00</em></span>
									<b class="ml5 price-tips"></b>
									<div class="price-tipsbox" style="display: none; left: 159.85px;">
										<div class="ui-tips-main">不含运费及送装服务费</div>
										<span class="price-tipsbox-arrow"></span>
									</div>
									<br>
									<span class="txt">已节省：</span>
									<span class="price totalRePrice">-￥0.00</span>
								</div>
							</div>
							<div class="amount-sum">
								已选择<em>3</em>件商品<b class="up"></b>
							</div>
							<div class="clr"></div>
						</div>
						<div class="clr"></div>
					</div>
				</div>
				
			</div>
		</div>
	</div></div>
</div>