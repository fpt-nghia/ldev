@extends('user.layout.main')

@section('content')
	<section class="main-content">
		<div class="row">
			<div class="span9">
				<ul class="thumbnails listing-products">
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
				<hr>
				<div class="text-center"><div class="pagination">{!! $products->links() !!}</div></div>
			</div>
			<div class="span3 col">
				<div class="block">
					<ul class="nav nav-list">
						<li class="nav-header">店舗案内</li>
						<li><a href="products">東京</a></li>
						<li><a href="active"><a href="products">関東</a></li>
						<li><a href="products">北海道・東北</a></li>
						<li><a href="products">中部・北陸</a></li>
						<li><a href="products">近畿</a></li>
						<li><a href="products">中国・四国</a></li>
						<li><a href="products">九州・沖縄</a></li>
					</ul>
					<br/>
					<ul class="nav nav-list below">
						<li class="nav-header">ブライダルサービス</li>
						<li><a href="products">おふたりに寄り添いつづける永久保証</a></li>
						<li><a href="products">世界にたったひとつのブライダルリング</a></li>
						<li><a href="products">喜びの瞬間を演出するブライダルアイテム</a></li>

					</ul>
				</div>
				<div class="block">
					<h4 class="title">
						<span class="pull-left"><span class="text">ほしい物リスト</span></span>
						<span class="pull-right">
							<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
						</span>
					</h4>
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
							<div class="active item">
								<ul class="thumbnails listing-products">
									<li class="span3">
										<div class="product-box">
											<span class="sale_tag"></span>
											<img alt="" src="themes/images/ladies/1.jpg"><br/>
											<a href="product_detail" class="title">Fusce id molestie massa</a><br/>
											<a href="#" class="category">Suspendisse aliquet</a>
											<p class="price">$261</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="item">
								<ul class="thumbnails listing-products">
									<li class="span3">
										<div class="product-box">
											<img alt="" src="themes/images/ladies/2.jpg"><br/>
											<a href="product_detail" class="title">Tempor sem sodales</a><br/>
											<a href="#" class="category">Urna nec lectus mollis</a>
											<p class="price">$134</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="block">
					<h4 class="title"><strong>セール</h4>
					<ul class="small-product">
						<li>
							<a href="#" title="Praesent tempor sem sodales">
								<img src="themes/images/ladies/3.jpg" alt="Praesent tempor sem sodales">
							</a>
							<a href="#">Praesent tempor sem</a>
						</li>
						<li>
							<a href="#" title="Luctus quam ultrices rutrum">
								<img src="themes/images/ladies/4.jpg" alt="Luctus quam ultrices rutrum">
							</a>
							<a href="#">Luctus quam ultrices rutrum</a>
						</li>
						<li>
							<a href="#" title="Fusce id molestie massa">
								<img src="themes/images/ladies/5.jpg" alt="Fusce id molestie massa">
							</a>
							<a href="#">Fusce id molestie massa</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
@stop
