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
<style>
    body {
    color: #58666e;
    line-height: 1.7em;
    font-size: 13px;
    font-family: 'Roboto',sans-serif;
}
    .login-form {
    width: 360px;
    padding-top: 100px;
    margin: 0px auto;
    text-shadow: none;
}

    .login-form form {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 3px;
}

.login-form form .top {
    border-bottom: 1px solid #ddd;
    text-align: center;
    padding: 30px 0;
}

.login-form form .top h1 {
    color: #37363E;
    font-size: 30px;
    font-family: 'Montserrat',sans-serif;
    font-weight: bold;
    margin-top: -14px;

    .login-form form .top h1, .login-form form .top h4 {
    margin: 0;
}
    .login-form form .top {
    text-align: center;
}
.login-form {
    text-shadow: none;
}
.login-form form .top h4 {
    font-weight: normal;
    color: #76757B;
    font-size: 15px;
}
.login-form form .top h4 {
    margin: 0;
}

.login-form form .form-area {
    padding: 40px;
}
.login-form form .form-area .group {
    position: relative;
    margin-bottom: 20px;
}
.login-form form .form-area .form-control {
    padding-left: 38px;
    height: 40px;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
button, input, optgroup, select, textarea {
    margin: 0;
    font: inherit;
    color: inherit;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
    .login-form form .form-area .fa {
    position: absolute;
    top: 11px;
    left: 13px;
    font-size: 16px;
    color: #C3C3C3;
}
    .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    transform: translate(0, 0);
}
.fa-user::before {
    content: "\f007";
}
.login-form form .form-area .fa {
    font-size: 16px;
    color: #C3C3C3;
}
 .login-form form .form-area .group {
    position: relative;
    margin-bottom: 20px;
 }
 </style>

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


 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="col_1_of_3 span_1_of_3">
					<h3>Who We Are</h3>
					<img src="/tpshop/Public/Home/images/about_img.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<h3>Our History</h3>
				 <div class="history-desc">
					<div class="year"><p>1998 -</p></div>
					<p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				 <div class="clear"></div>
				</div>
				 <div class="history-desc">
					<div class="year"><p>2001 -</p></div>
					<p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
				 <div class="clear"></div>
				</div>
				 <div class="history-desc">
					<div class="year"><p>2006 -</p></div>
					<p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				 <div class="clear"></div>
				</div>
				 <div class="history-desc">
					<div class="year"><p>2010 -</p></div>
					<p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				 <div class="clear"></div>
				</div>
				<div class="history-desc">
					<div class="year"><p>2013 -</p></div>
					<p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
				 <div class="clear"></div>
				</div>
			</div>
				<div class="col_1_of_3 span_1_of_3">
					<h3>Opportunities</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				    <div class="list">
					     <ul>
					     	<li><a href="#">Text of the printing</a></li>
					     	<li><a href="#">Lorem Ipsum has been the standard</a></li>
					     	<li><a href="#">Dummy text ever since the 1500s</a></li>
					     	<li><a href="#">Unknown printer took a galley</a></li>
					     	<li><a href="#">Led it to make a type specimen</a></li>
					     	<li><a href="#">Not only five centuries</a></li>
					     	<li><a href="#">Electronic typesetting</a></li>
					     	<li><a href="#">Unchanged. It was popularised</a></li>
					     	<li><a href="#">Sheets containing Lorem Ipsume</a></li>
					     </ul>
					 </div>
					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
			</div>			
    </div>
 </div>
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

 

<script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>