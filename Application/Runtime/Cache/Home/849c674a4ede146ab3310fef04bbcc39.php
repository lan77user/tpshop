<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>主页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="/tpshop/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="/tpshop/Public/Home/css/slider.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="/tpshop/Public/Home/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="/tpshop/Public/Home/js/move-top.js"></script>
<script type="text/javascript" src="/tpshop/Public/Home/js/easing.js"></script>
<script type="text/javascript" src="/tpshop/Public/Home/js/startstop-slider.js"></script>

</head>

<body>
    
    <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></p>
			</div>
			<div class="account_desc">
				<ul>
					<li><a href="<?php echo U('home/user/register');?>">注册</a></li>
					<li><a href="<?php echo U('home/user/login');?>">登录</a></li>
					<li><a href="<?php echo U('home/user/logout');?>">退出</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="/tpshop/Public/Home/images/logo.png" alt=""></a>
			</div>
			  <div class="cart">
			  	   <p>欢迎来到线上超市! <span>购物车：</span></p><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   	<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
					</ul></div><p></p>
			  </div>
			  <script type="text/javascript">  
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
                    <div class="clear"></div>
                 </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="index.html">Home</a></li>
			    	<li><a href="about.html">About</a></li>
			    	<li><a href="news.html">News</a></li>
			    	<li><a href="contact.html">Contact</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form>
	     			<input value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" type="text"><input value="" type="submit">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	</div>	 
    </div>



<div class="login-form">
    <form action="index.html">
        <div class="top">
            <h1>注册</h1>
            <h4>现在加入吧!</h4>
        </div>


        <div class="form-area">
            <div class="group">
                <label>用户名</label>
                <input class="form-control" placeholder="Username" type="text" >
                <i class="fa fa-user"></i>
            </div>
            <div class="group">
                <input class="form-control" placeholder="E-mail" type="text">
                <i class="fa fa-envelope-o"></i>
            </div>
            <div class="group">
                <input class="form-control" placeholder="Password" type="password">
                <i class="fa fa-key"></i>
            </div>
            <div class="group">
                <input class="form-control" placeholder="Password again" type="password">
                <i class="fa fa-key"></i>
            </div>
            <button type="submit" class="btn btn-default btn-block">立即注册</button>
        </div>


    </form>

    <div class="footer-links row">
        <div class="col-xs-6"><a href="<?php echo U('home/user/login');?>"><i class="fa fa-sign-in"></i> 登录</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> 忘记密码</a></div>
</div>
    
    <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="">About Us</a></li>
						<li><a href="">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="">Sign In</a></li>
							<li><a href="index.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="/tpshop/Public/Home/images/facebook.png" alt=""></a></li>
							      <li><a href="#" target="_blank"><img src="/tpshop/Public/Home/images/twitter.png" alt=""></a></li>
							      <li><a href="#" target="_blank"><img src="/tpshop/Public/Home/images/skype.png" alt=""> </a></li>
							      <li><a href="#" target="_blank"> <img src="/tpshop/Public/Home/images/dribbble.png" alt=""></a></li>
							      <li><a href="#" target="_blank"> <img src="/tpshop/Public/Home/images/linkedin.png" alt=""></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>			
        </div>
        <div class="copy_right">
				<p>Copyright © 2014.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">网页模板</a></p>
		   </div>
    </div>
</body>
</html>