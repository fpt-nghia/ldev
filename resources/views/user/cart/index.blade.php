@extends('user.layout.main')

@section('content')
	<section class="main-content">				
		<div class="row">
			<div class="span9">					
				<h4 class="title"><span class="text"><strong>カート</span></h4>
				<table class="table table-striped">
					<thead>
						<tr>
							<!-- <th>削除</th> -->
							<th>商品</th>
							<!--<th>Product Name</th>-->
							<th>個数</th>
							<!--<th>Unit Price</th>-->
							<th>小計（税込）</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($products as $product): ?>
						<tr>
							<!-- <td><input type="checkbox" value="option1"></td> -->
							<td><a href="<?php echo url("product_detail/". $product->id); ?>"><img height="250" width="250"alt="" src="<?php echo url("uploads/".$product->image) ?>"></a></td>
							<!--<td>Fusce id molestie massa</td>-->
							<!-- <td><input type="text" placeholder="1" class="input-mini"></td> -->
							<td><?php echo $product->qty ?></td>
							<td><?php echo $product->price ?>0円（税込）</td>
						</tr>	
						<?php endforeach; ?>  
					</tbody>
				</table>
				<!--<h4>What would you like to do next?</h4>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
				<label class="radio">
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
					Use Coupon Code
				</label>
				<label class="radio">
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					Estimate Shipping &amp; Taxes
				</label>
				<hr>
				<p class="cart-total right">
					<strong>Sub-Total</strong>:	$100.00<br>
					<strong>Eco Tax (-2.00)</strong>: $2.00<br>
					<strong>VAT (17.5%)</strong>: $17.50<br>
					<strong>Total</strong>: $119.50<br>
				</p>-->
			
				
				<hr/>
				<p class="buttons center">				
					<button class="btn" type="button">カートを更新</button>
					<button class="btn" type="button">ショッピングを続ける</button>
					<button class="btn btn-inverse" type="submit" id="checkout">チェックアウト</button>
				</p>					
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
											<a href="product_detail"><img height="100" width="100" alt="" src="themes/images/ladies/2.jpg"></a><br/>
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
											<a href="product_detail"><img height="100" width="100" alt="" src="themes/images/ladies/4.jpg"></a><br/>
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
			</div>
		</div>
	</section>			
@stop