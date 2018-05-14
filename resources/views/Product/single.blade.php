
<!DOCTYPE html>

<html dir="ltr" lang="en">
<!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curved Tip Tweezers</title>
    <base href="http://phlashtools.com/"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link href="http://phlashtools.com/image/catalog/favicon.png" rel="icon"/>
    
    <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


    <link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="catalog/view/theme/theme560/stylesheet/magnificent.css" rel="stylesheet">
    <link href="catalog/view/theme/theme560/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
    <link href="catalog/view/theme/theme560/stylesheet/photoswipe.css" rel="stylesheet">
    <link href="catalog/view/theme/theme560/js/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="catalog/view/theme/theme560/stylesheet/material-design.css" rel="stylesheet">
            <link href="catalog/view/javascript/jquery/magnific/magnific-popup.css" type="text/css" rel="stylesheet"
              media="screen"/>
            <link href="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet"
              media="screen"/>
        <script src="catalog/view/theme/theme560/js/common.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>


    <!--custom script-->
                        <script src="catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js" type="text/javascript"></script>
                                <script src="catalog/view/javascript/jquery/datetimepicker/moment.js" type="text/javascript"></script>
                                <script src="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
                <script src="catalog/view/theme/theme560/js/device.min.js" type="text/javascript"></script>
    
        <link href="catalog/view/theme/theme560/stylesheet/stylesheet.css" rel="stylesheet">
</head>
<body class="product-product-57">

<!-- swipe menu -->

<div id="page">
   
    <header class="header">
        <div class="top_panel">
            <div class="container">

                <nav id="" class="nav">
                    <ul class="list-inline">
                        <li class="second">
                            <a href="{{route('welcome')}}">
                                Homes
                            </a>
                        </li>
                        <li>
                            <a href="/" id="wishlist-total"
                               title="Wish List (0)"><i
                                    class="fa fa-heart"></i> <span>Wish List (0)</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="/" title="My Account"
                               class="dropdown-toggle"
                               data-toggle="dropdown"><i class="fa fa-user"></i>
                                <span>My Account</span>
                                <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                                                    <li>
                                        <a href="">Register</a>
                                    </li>
                                    <li>
                                        <a href="">Login</a>
                                    </li>
                                                            </ul>
                        </li>
                       
                        <li>
                            <a href="{{route('cart.index')}}" title="Checkout"><i
                                    class="fa fa-share"></i> <span>Checkout</span></a>
                        </li>
                    </ul>
                </nav>
                <div id="search" class="search">
  <input type="text" name="search" value="" placeholder="Search"  />
  <button type="button" class="button-search"></button>
</div>                <div class="box-currency">

</div>
            </div>
        </div>

        <div class="menu-wrap">
            <div class="container">
                <div id="logo" class="logo">
                                            <a href="/">
                                                
<img src="{{asset('txtlogo.png')}}" height="50px" width="200px" alt="khadmi impex" style="margin-top: 8px" />

                                            </a>
                                    </div>
                                    
                                    
                <div class="box-cart">
<div class="cart">
    <form method="get" action="{{route('cart.index')}}">
                                        
  <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="dropdown-toggle">
    
    <span  class="cart-total2">0</span> </button>
</form>
  
</div>
</div>
@include('Partials.navbar')



                            </div>
        </div>

                    
               
              

    </header>


<div class="container">
	<ul class="breadcrumb">
					<li><a href="/"><i class="fa fa-home"></i></a></li>
				
			</ul>

	<div class="row">
	
	
	<div id="content" class="col-sm-12 product_page">		<div class="row product-content-columns">
			
			<!-- Content left -->
			<div class="col-sm-5 col-lg-7 product_page-left">				
				<!-- product image -->
				<div id="default_gallery" class="product-gallery">
															<div class="image-thumb">
						<ul id="image-additional" class="image-additional">

														<li>
								<a href="#" data-image="{{asset($product->image)}}">
									<img src="{{asset($product->image)}}" alt=""/>
								</a>
							</li>
														
						</ul>
					</div>
															<div id="product-image" class="product-image">

						<div class="magnificent-wrap">
							<div class="magnificent" data-magnificent="product-image">
								<div class="polaroid">
									<div class="inner">
										<img src="{{asset($product->image)}}"/>
									</div>
								</div>
							</div>
						</div>

						<div class="magnificent-viewport-wrap">
							<div data-magnificent-viewport="product-image">
								<div class="inner">
									<img src="{{asset($product->image)}}"/>
								</div>
							</div>
						</div>

						<script class="source">
							$(function () {
								$('#product-image [data-magnificent]').magnificent();
							});
						</script>
					</div>
														</div>
		
				
		
								<script type="text/javascript">
					jQuery(document).ready(function(){
					var myPhotoSwipe = $("#gallery a").photoSwipe({ enableMouseWheel: false , enableKeyboard: false, captionAndToolbarAutoHideDelay:0 });
					});
				</script>
				<div id="full_gallery">
					<ul id="gallery">
						<li><a href="" data-something="something" data-another-thing="anotherthing"><img src="http://phlashtools.com/image/cache/catalog/Products/Curved Tweezer/PLT-101-800x800.png" title="Curved Tip Tweezers" alt="Curved Tip Tweezers" /></a></li>											</ul>			
				</div>
								
			</div>

			<!-- Content right -->
			<div class="col-sm-7 col-lg-5 product_page-right">
				<div class="general_info product-info">

					<h1 class="product-title">{{$product->name}}</h1>
					
					<!-- Prodyuct rating status -->
					<div class="rating-section product-rating-status">
												<div class="rating">
																					<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																					&nbsp;
							&nbsp;
							<a onclick="document.getElementById('tab-review').scrollIntoView();">0 reviews</a> / <a onclick="document.getElementById('tab-review').scrollIntoView();">Write a review</a>
						</div>
											</div>

										<div class="price-section">
						<span class="price-new"></span>
												<span class="price-new">${{$product->price}}</span>
																		<div class="reward-block">
																				</div>
					</div>
					
					<ul class="list-unstyled product-section">
												<li>Product Code: <span>ki#{{$product->id}}</span></li>
												<li>Availability: <span>2-3 Days</span></li>
					</ul>
				</div>
				
				<div id="product">

					<!-- Product options -->
					<div class="product-options form-horizontal">
													<h3>Available Options</h3>
																																<div class="form-group required">
										<label class="control-label col-sm-4">Available Colors</label>
										<div id="input-option272" class="col-sm-8">
																					</div>
									</div>
																																																																																										</div>

					<!-- product reccurings -->
					<div class="product-reccurings">
											</div>
				
					<!-- Add to cart form -->
                    <form action="{{route('Cart.edit',$product->id)}}" method="get">
                        
                 
					<div class="form-group form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-4" for="input-quantity">Qty</label>
							<div class="col-sm-2">
								<input type="text" name="quantity" value="4" size="2" id="input-quantity" class="form-control" />
							</div>
						</div>
						
						<a href="{{route('Cart.edit',$product->id)}}">
						<button type="button"  data-loading-text="Loading..." class="product-btn-add">
                            <i class="material-design-shopping231"></i>
                            Add to Cart                        </button></a>
					</div>
   </form>
					<ul class="product-buttons">
						<li><button class="product-btn" onclick="wishlist.add('57');"><i class="material-design-favorite22"></i></button></li>
						<li><button type="button" class="product-btn" onclick="compare.add('57');"><i class="material-design-shuffle24"></i></button></li>
					</ul>					

										<!-- Product tags -->
					<div class="product-tags">
						Tags:																					<a href="">{{$product->name}}</a>
																		</div>
										<div class="product-share">
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like" ></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> 
					<!-- AddThis Button END --> 
					</div>

											<div class="alert alert-info"><i class="fa fa-info-circle"></i> This product has a minimum quantity of 4</div>
									</div>

			</div>
		</div>
		
		<!-- Product description -->
		<div id="tab-description" class="product-desc product-section">
			<h3 class="product-section_title">Description</h3>
			<p><span style="font-weight: bold;">Payment</span><br></p><p>1.<span class="Apple-tab-span" style="white-space:pre">	</span>We accept Payment via PayPal (we are PayPal verified) WesternUnion and Bank Transfer.</p><p><br></p><p><span style="font-weight: bold;">Shipping</span></p><p>1.<span class="Apple-tab-span" style="white-space:pre">	</span>Shipping is by Normal Pakistan Registered Air Mail Services. You should receive item within 15-20 days. Email us if not receive items after 20 working days. Can be provide tracking Number and tracking website is www.ep.gov.pk&nbsp;</p><p>2.<span class="Apple-tab-span" style="white-space:pre">	</span>We strive to ship within same day of receiving payment during normal shipping hours. Our shipping days are Monday thru Friday 9am-4pm.</p><p>3.<span class="Apple-tab-span" style="white-space:pre">	</span>If shipping lands on a Holiday, we will ship on the following business day.&nbsp;</p><p>4.<span class="Apple-tab-span" style="white-space:pre">	</span>We ONLY deliver to the confirmed address on your account. Please make the correct changes before proceeding with the purchase. We are not responsible for delivering to unconfirmed or wrong addresses. &nbsp;</p><p>5. &nbsp;We currently are shipping Worldwide for certain items. Please contact us with any questions before purchasing. &nbsp; &nbsp; &nbsp;</p><p>6. &nbsp;We also provide First Class International or Priority International shipping which can take anywhere from 1 to 5 weeks for delivery depending on customs.</p><p>&nbsp;</p><p><span style="font-weight: bold;">Returns</span></p><p>1.<span class="Apple-tab-span" style="white-space:pre">	</span>Due to the nature of the products, no returns are allowed on opened or used products for sanitary reasons.</p><p>2.<span class="Apple-tab-span" style="white-space:pre">	</span>Please do your research and ask any questions before purchase.</p><p>3.<span class="Apple-tab-span" style="white-space:pre">	</span>For defective products, please notify us within 3 days of receiving the products.</p><p>4.<span class="Apple-tab-span" style="white-space:pre">	</span>We will replace the defective product.&nbsp;</p><p>5.<span class="Apple-tab-span" style="white-space:pre">	</span>Return shipping cost will be the sole responsibility of the buyer.&nbsp;</p><p><br></p><p><span style="font-weight: bold;">Care &amp; Instructions</span></p><p>1.<span class="Apple-tab-span" style="white-space:pre">	</span>Our eyelash extension products are recommended for professional use only. &nbsp;We are not liable for the misuse of the products that are purchased from our store.&nbsp;</p><p>2.<span class="Apple-tab-span" style="white-space:pre">	</span>Keep out of reach of children. &nbsp;</p><p>Serious buyers only. We work very hard to provide great products and service. We strive for positive feedback. Please contact us with any questions or concerns before leaving any neutral or negative feedback. Thank you for your patronage.</p>			<div class="clearfix"></div>
		</div>

		
		<!-- Product reviews -->
					
		<div id="tab-review" class="product-reviews product-section">
			<h3 class="product-section_title">Reviews (0)</h3>
			<form class="form-horizontal">
				
				<!-- Reviews list -->
				<div id="review"></div>
				
				<!-- Review form -->
				<div class="review-form-title">
					<h3 class="product-section_title" id="reviews_form_title">Write a review</h3>
				</div>
				<div class="product-review-form" id="reviews_form">
											<div class="form-group required">
							<label class="control-label col-sm-3" for="input-name">Your Name</label>
							<div class="col-sm-9">
								<input type="text" name="name" value="" id="input-name" class="form-control" />
							</div>
						</div>
						<div class="form-group required">
							<label class="control-label col-sm-3" for="input-review">Your Review</label>
							<div class="col-sm-9">						
								<textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
								<div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
							</div>
						</div>
						<div class="form-group required">
							<label class="control-label col-sm-3">Rating</label>
							<div class="col-sm-9">
								&nbsp;&nbsp;&nbsp; Bad&nbsp;
								<input type="radio" name="rating" value="1" />
								&nbsp;
								<input type="radio" name="rating" value="2" />
								&nbsp;
								<input type="radio" name="rating" value="3" />
								&nbsp;
								<input type="radio" name="rating" value="4" />
								&nbsp;
								<input type="radio" name="rating" value="5" />
								&nbsp;Good							</div>
						</div>
						<div class="form-group required">
							<label class="control-label col-sm-3" for="input-captcha">Enter the code in the box below</label>
							<div class="col-sm-9" >
								<input type="text" name="captcha" value="" id="input-captcha" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3"> 
								<img src="index.php?route=tool/captcha" alt="" id="captcha" /> 
								<div class="pull-right">
									<button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
								</div>
							</div>

						</div>

									</div>
			</form>
		</div>
		
		
		</div>
	</div>
</div>




 

@include('Partials.footer')
<script src="catalog/view/theme/theme560/js/livesearch.js" type="text/javascript"></script>
<script src="catalog/view/theme/theme560/js/script.js" type="text/javascript"></script>
</div>

</body></html>
