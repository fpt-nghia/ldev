@extends('user.layout.main')

@section('content')
	<section class="main-content">				
		<div class="row">						
			<div class="span9">
				<div class="row">
					<div class="span4">
						<a href="<?php echo url("uploads/".$product->image) ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?php echo url("uploads/".$product->image) ?>" ></a>												
						<ul class="thumbnails small">								
							<li class="span1">
								<a href="<?php echo url("uploads/".$product->image) ?>" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<?php echo url("uploads/".$product->image) ?>" alt=""></a>
							</li>								
							<li class="span1">
								<a href="<?php echo url("themes/images/ladies/3.jpg") ?>" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="themes/images/ladies/3.jpg" alt=""></a>
							</li>													
							<li class="span1">
								<a href="<?php echo url("themes/images/ladies/4.jpg") ?>" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="themes/images/ladies/4.jpg" alt=""></a>
							</li>
							<li class="span1">
								<a href="<?php echo url("themes/images/ladies/5.jpg") ?>" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="themes/images/ladies/5.jpg" alt=""></a>
							</li>
						</ul>
					</div>
					<div class="span5">
						<address>
							<strong>Name</strong> <br>
							<?php echo $product->name; ?> <br>
							<strong>婚約指輪</strong> <br>
							<span><?php echo $product->description; ?> </span><br>
							<strong>素材:</strong> <span><?php echo $product->material; ?></span><br>
							<strong>石:</strong> <span><?php echo $product->type; ?></span><br>
							<strong>太さ:</strong> <span><?php echo $product->size; ?></span><br>		
                            <strong>品番:</strong> <span><?php echo $product->code; ?></span><br>							
						</address>									
						<h4><strong>価格: ￥<?php echo $product->price; ?>+税</strong></h4>
					</div>
					<div class="span5">
						<form class="form-inline" action="{{ url('/add-cart') }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
							<!--<label class="checkbox">
								<input type="checkbox" value=""> Option one is this and that
							</label>
							<br/>
							<label class="checkbox">
							  <input type="checkbox" value=""> Be sure to include why it's great
							</label>-->
							<p>&nbsp;</p>
							<label>Qty:</label>
							<input type="text" class="span1" required name="qty">
							<button class="btn btn-inverse" type="submit">Add to cart</button>
						</form>
					</div>							
				</div>
				<div class="row">
				<!--
					<div class="span9">
						<ul class="nav nav-tabs" id="myTab">
							<li class="active"><a href="#home">Description</a></li>
							<li class=""><a href="#profile">Additional Information</a></li>
						</ul>							 
						<div class="tab-content">
							<div class="tab-pane active" id="home">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</div>
							<div class="tab-pane" id="profile">
								<table class="table table-striped shop_attributes">	
									<tbody>
										<tr class="">
											<th>Size</th>
											<td>Large, Medium, Small, X-Large</td>
										</tr>		
										<tr class="alt">
											<th>Colour</th>
											<td>Orange, Yellow</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>							
					</div>			-->			
					<div class="span9">	
						<br>
						<h4 class="title">
							<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
							<span class="pull-right">
								<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
							</span>
						</h4>
						<div id="myCarousel-1" class="carousel slide">
							<div class="carousel-inner">
								<div class="active item">
									<ul class="thumbnails listing-products">
										<li class="span3">
											<div class="product-box">
												<span class="sale_tag"></span>												
												<a href="product_detail"><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
												<!--<a href="product_detail" class="title">Wuam ultrices rutrum</a><br/>
												<a href="#" class="category">Suspendisse aliquet</a>-->
												<p class="price">￥280,000+税</p>
											</div>
										</li>
										<li class="span3">
											<div class="product-box">
												<span class="sale_tag"></span>												
												<a href="product_detail"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
												<!--<a href="product_detail" class="title">Fusce id molestie massa</a><br/>
												<a href="#" class="category">Phasellus consequat</a>-->
												<p class="price">￥250,000+税</p>
											</div>
										</li>       
										<li class="span3">
											<div class="product-box">												
												<a href="product_detail"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
												<!--<a href="product_detail" class="title">Praesent tempor sem</a><br/>
												<a href="#" class="category">Erat gravida</a>-->
												<p class="price">￥260,000+税</p>
											</div>
										</li>												
									</ul>
								</div>
								<div class="item">
									<ul class="thumbnails listing-products">
										<li class="span3">
											<div class="product-box">
												<span class="sale_tag"></span>												
												<a href="product_detail"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
												<!--<a href="product_detail" class="title">Fusce id molestie massa</a><br/>
												<a href="#" class="category">Phasellus consequat</a>-->
												<p class="price">￥190,000+税</p>
											</div>
										</li>       
										<li class="span3">
											<div class="product-box">												
												<a href="product_detail"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
												<!--<a href="product_detail">Praesent tempor sem</a><br/>
												<a href="#" class="category">Erat gravida</a>-->
												<p class="price">￥210,000+税</p>
											</div>
										</li>
										<li class="span3">
											<div class="product-box">
												<span class="sale_tag"></span>												
												<a href="product_detail"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
												<!--<a href="product_detail" class="title">Wuam ultrices rutrum</a><br/>
												<a href="#" class="category">Suspendisse aliquet</a>-->
												<p class="price">￥250,000+税</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="span3 col">
				<div class="block">	
					<ul class="nav nav-list">
						<li class="nav-header">SUB CATEGORIES</li>
						<li><a href="products">Nullam semper elementum</a></li>
						<li class="active"><a href="products">Phasellus ultricies</a></li>
						<li><a href="products">Donec laoreet dui</a></li>
						<li><a href="products">Nullam semper elementum</a></li>
						<li><a href="products">Phasellus ultricies</a></li>
						<li><a href="products">Donec laoreet dui</a></li>
					</ul>
					<br/>
					<ul class="nav nav-list below">
						<li class="nav-header">MANUFACTURES</li>
						<li><a href="products">Adidas</a></li>
						<li><a href="products">Nike</a></li>
						<li><a href="products">Dunlop</a></li>
						<li><a href="products">Yamaha</a></li>
					</ul>
				</div>
				<div class="block">
					<h4 class="title">
						<span class="pull-left"><span class="text">Randomize</span></span>
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
											<a href="product_detail"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
											<!--<a href="product_detail" class="title">Fusce id molestie massa</a><br/>
											<a href="#" class="category">Suspendisse aliquet</a>-->
											<p class="price">$261</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="item">
								<ul class="thumbnails listing-products">
									<li class="span3">
										<div class="product-box">												
											<a href="product_detail"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
											<!--<a href="product_detail" class="title">Tempor sem sodales</a><br/>
											<a href="#" class="category">Urna nec lectus mollis</a>-->
											<p class="price">$134</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="block">								
					<h4 class="title"><strong>Best</strong> Seller</h4>								
					<ul class="small-product">
						<li>
							<a href="#" title="Praesent tempor sem sodales">
								<img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
							</a>
							<a href="#">Praesent tempor sem</a>
						</li>
						<li>
							<a href="#" title="Luctus quam ultrices rutrum">
								<img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
							</a>
							<a href="#">Luctus quam ultrices rutrum</a>
						</li>
						<li>
							<a href="#" title="Fusce id molestie massa">
								<img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
							</a>
							<a href="#">Fusce id molestie massa</a>
						</li>   
					</ul>
				</div>
			</div>
		</div>
	</section>			
@stop