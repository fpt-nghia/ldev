@extends('user.layout.main')

@section('content')
<section class="main-content">
	<div class="row">
		<div class="span12">
			<div class="row">
				<div class="span12">
					<h4 class="title">
						<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
						<span class="pull-right">
							<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
						</span>
					</h4>

					<div id="myCarousel" class="myCarousel carousel slide">
						<div class="carousel-inner">
							<div class="active item">
								<ul class="thumbnails">
									<?php foreach ($products as $product): ?>
									 <li class="span3">
										 <div class="product-box">
											 <span class="sale_tag"></span>
											 <a href="<?php echo url("product_detail/". $product->id); ?>"><img alt="" src="<?php echo url('uploads/' . $product->image); ?>"></a><br/>
											 <a href="<?php echo url("product_detail/". $product->id); ?>" class="title"><?php echo $product->name; ?></a><br/>
											 <a href="#" class="category">Phasellus consequat</a>
											 <p class="price"><?php echo $product->price; ?>円</p>
										 </div>
									 </li>
									<?php endforeach; ?>
								</ul>
							</div>
							<div class="item">
								<ul class="thumbnails">
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail"><img src="themes/images/ladies/5.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">Know exactly</a><br/>
											<a href="products" class="category">Quis nostrud</a>-->
											<p class="price">￥250,000+税</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail"><img src="themes/images/ladies/6.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">Ut wisi enim ad</a><br/>
											<a href="products" class="category">Commodo consequat</a>-->
											<p class="price">￥280,000+税</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail"><img src="themes/images/ladies/7.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">You think water</a><br/>
											<a href="products" class="category">World once</a>-->
											<p class="price">￥300,000+税</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail"><img src="themes/images/ladies/8.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">Quis nostrud exerci</a><br/>
											<a href="products" class="category">Quis nostrud</a>-->
											<p class="price">￥320,000+税</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="span12">
					<h4 class="title">
						<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
						<span class="pull-right">
							<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
						</span>
					</h4>
					<div id="myCarousel-2" class="myCarousel carousel slide">
						<div class="carousel-inner">
							<div class="active item">
								<ul class="thumbnails">
									<li class="span3">
										<div class="product-box">
											<span class="sale_tag"></span>
											<p><a href="product_detail"><img src="themes/images/cloth/bootstrap-women-ware2.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">Ut wisi enim ad</a><br/>
											<a href="products" class="category">Commodo consequat</a>-->
											<p class="price">￥300,000+税</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail"><img src="themes/images/cloth/bootstrap-women-ware1.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">Quis nostrud exerci tation</a><br/>
											<a href="products" class="category">Quis nostrud</a>-->
											<p class="price">￥400,000+税</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail"><img src="themes/images/cloth/bootstrap-women-ware6.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">Know exactly turned</a><br/>
											<a href="products" class="category">Quis nostrud</a>-->
											<p class="price">￥420,000+税</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail"><img src="themes/images/cloth/bootstrap-women-ware5.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">You think fast</a><br/>
											<a href="products" class="category">World once</a>-->
											<p class="price">￥220,000+税</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="item">
								<ul class="thumbnails">
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail"><img src="themes/images/cloth/bootstrap-women-ware4.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">Know exactly</a><br/>
											<a href="products" class="category">Quis nostrud</a>-->
											<p class="price">￥230,000+税</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail"><img src="themes/images/cloth/bootstrap-women-ware3.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">Ut wisi enim ad</a><br/>
											<a href="products" class="category">Commodo consequat</a>-->
											<p class="price">￥240,000+税</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail"><img src="themes/images/cloth/bootstrap-women-ware2.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">You think water</a><br/>
											<a href="products" class="category">World once</a>-->
											<p class="price">￥280,000+税</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail"><img src="themes/images/cloth/bootstrap-women-ware1.jpg" alt="" /></a></p>
											<!--<a href="product_detail" class="title">Quis nostrud exerci</a><br/>
											<a href="products" class="category">Quis nostrud</a>-->
											<p class="price">￥390,000+税</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row feature_box">
				<div class="span4">
					<div class="service">
						<div class="responsive">
							<img src="themes/images/feature_img_2.png" alt="" />
							<h4>MODERN <strong>DESIGN</strong></h4>
							<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="service">
						<div class="customize">
							<img src="themes/images/feature_img_1.png" alt="" />
							<h4>FREE <strong>SHIPPING</strong></h4>
							<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="service">
						<div class="support">
							<img src="themes/images/feature_img_3.png" alt="" />
							<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
							<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop
