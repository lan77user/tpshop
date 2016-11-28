<!DOCTYPE html>

 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo $page_title;?></title>
	<link rel="stylesheet" href="__PUBLIC__/Home/style/base.css" type="text/css">
	<link rel="stylesheet" href="__PUBLIC__/Home/style/global.css" type="text/css">
	<link rel="stylesheet" href="__PUBLIC__/Home/style/header.css" type="text/css">
	<link rel="stylesheet" href="__PUBLIC__/Home/style/index.css" type="text/css">
	<link rel="stylesheet" href="__PUBLIC__/Home/style/bottomnav.css" type="text/css">
	<link rel="stylesheet" href="__PUBLIC__/Home/style/footer.css" type="text/css">

	<script type="text/javascript" src="__PUBLIC__/Home/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/Home/js/header.js"></script>
	<script type="text/javascript" src="__PUBLIC__/Home/js/index.js"></script>
        <meta name="keywords" content="<?php echo $page_keywords;?>"/>
        <meta name="description" content="<?php echo $page_description;?>" />
</head>
<body>

<!-- 顶部导航 start -->
	<div class="topnav">
		<div class="topnav_bd w1210 bc">
			<div class="topnav_left">
				
			</div>
			<div class="topnav_right fr">
				<ul>
                                    <li><if condition="null !== $Think.session.username && null !== $Think.session.userid">欢迎您，{$Think.session.username}&nbsp;&nbsp;&nbsp;
                                            <a href="{:U('home/user/logout')}" target="_top" 
                                               onclick="if (confirm('确定要退出吗？')) return true;else return false;">退出</a>
                                            <else/>您好，欢迎来到京西！[<a href="{:U('home/user/login')}">登录</a>]
                                            [<a href="{:U('home/user/register')}">免费注册</a>]</if>
                                    </li>
					<li class="line">|</li>
					<li>我的订单</li>
					<li class="line">|</li>
					<li>客户服务</li>

				</ul>
			</div>
		</div>
	</div>
	<!-- 顶部导航 end -->
	
	<div style="clear:both;"></div>

        {__CONTENT__}
        
        
	<div style="clear:both;"></div>
	<!-- 底部版权 start -->
	<div class="footer w1210 bc mt10">
		<p class="links">
			<a href="">关于我们</a> |
			<a href="">联系我们</a> |
			<a href="">人才招聘</a> |
			<a href="">商家入驻</a> |
			<a href="">千寻网</a> |
			<a href="">奢侈品网</a> |
			<a href="">广告服务</a> |
			<a href="">移动终端</a> |
			<a href="">友情链接</a> |
			<a href="">销售联盟</a> |
			<a href="">京西论坛</a>
		</p>
		<p class="copyright">
			 © 2005-2013 京东网上商城 版权所有，并保留所有权利。  ICP备案证书号:京ICP证070359号 
		</p>
		<p class="auth">
			<a href=""><img src="__PUBLIC__/Home/images/xin.png" alt="" /></a>
			<a href=""><img src="__PUBLIC__/Home/images/kexin.jpg" alt="" /></a>
			<a href=""><img src="__PUBLIC__/Home/images/police.jpg" alt="" /></a>
			<a href=""><img src="__PUBLIC__/Home/images/beian.gif" alt="" /></a>
		</p>
	</div>
        
        </body>
</html>