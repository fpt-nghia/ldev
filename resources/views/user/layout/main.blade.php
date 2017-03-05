<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?php echo url("bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">      
		<link href="<?php echo url("bootstrap/css/bootstrap-responsive.min.css"); ?>" rel="stylesheet">		
		<link href="<?php echo url("themes/css/bootstrappage.css"); ?> rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="<?php echo url("themes/css/flexslider.css"); ?>" rel="stylesheet"/>
		<link href="<?php echo url("themes/css/main.css"); ?>" rel="stylesheet"/>

		<!-- scripts -->
		<script src="<?php echo url("themes/js/jquery-1.7.2.min.js"); ?>"></script>
		<script src="<?php echo url("bootstrap/js/bootstrap.min.js"); ?>"></script>				
		<script src="<?php echo url("themes/js/superfish.js"); ?>"></script>	
		<script src="<?php echo url("themes/js/jquery.scrolltotop.js"); ?>"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="themes/js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="4°C">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">アカウント</a></li>
							<li><a href="cart">カート</a></li>
							<li><a href="checkout">商品検索</a></li>		
							<?php if (Auth::check()) : ?>
								<li><a href="<?php echo url("logout"); ?>">ログアウト</a></li>
							<?php else : ?>
								<li><a href="<?php echo url("register"); ?>">ログイン</a></li>
							<?php endif; ?>		
										
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index" class="logo pull-left"><img src="<?php echo url("themes/images/logo.png"); ?>" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products">4°Cの話</a>		
								<ul>
									<li><a href="./products">ブランド4°C誕生</a></li>									
									<li><a href="./products">4°Cの由来</a></li>
																		
								</ul>
							</li>															
							<li><a href="./products">4°Cの約束</a>		
								<ul>
									<li><a href="./products">ストーリー</a></li>									
									<li><a href="./products">４℃ダイヤモンド</a></li>
									<li><a href="./products">デザイン</a></li>									
									<li><a href="./products">クオリティ</a></li>
									<li><a href="./products">永久保証</a></li>
									<li><a href="./products">４℃ピュアプラチナ</a></li>									
								</ul>
							</li>
							<li><a href="./products">婚約指輪</a>
								<ul>									
									<li><a href="./products">婚約指輪一覧</a></li>
									<li><a href="./products">４℃アクアニティ</a></li>
									<li><a href="./products">ディズニーコレクション</a></li>
								</ul>
							</li>							
							<li><a href="./products">結婚指輪</a>
							　　　　<ul>									
									<li><a href="./products">結婚指輪一覧</a></li>
									<li><a href="./products">４℃アクアニティ</a></li>
									<li><a href="./products">ディズニーコレクション</a></li>
								</ul>
							</li>	
							<li><a href="./products">セール</a></li>
							<li><a href="./products">お問い合わせ</a></li>
						</ul>
					</nav>
				</div>
			</section>				
			<section class="header_text sub">
			<img class="pageBanner" src="<?php echo url("themes/images/pageBanner.jpg"); ?>" alt="New products" >
				<h4><span>ショッピングカート</span></h4>
			</section>				
			@yield('content')									
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>アイテムを探す</h4>
						<ul class="nav">
							<li><a href="./index">ホームページ</a></li>  
							<li><a href="./about">会社概要</a></li>
							<li><a href="./contact">お問い合わせ</a></li>
							<li><a href="./cart">カート</a></li>
							<li><a href="./register">ログイン</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>アカウント</h4>
						<ul class="nav">
							<li><a href="#">アカウント</a></li>
							<li><a href="#">注文履歴</a></li>
							<li><a href="#">お支払いについて</a></li>
							<li><a href="#">ニュースレター</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="<?php echo url("themes/images/logo.png"); ?>" class="site_logo" alt=""></p>
						<p>お客さんに寄りそって大切なリング選びをお手伝いさせていただきます。</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
			
				<span>このサイトは4°Cが運営しています。</span>
			</section>
		</div>
		<script src="<?php echo url("themes/js/common.js"); ?>"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout";
				})
			});
		</script>		
    </body>
</html>