
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

                <nav id="top-links" class="nav">
                    <ul class="list-inline">
                        <li class="first">
                            <a href="/"><i
                                    class="fa fa-home"></i><span>Home</span>
                            </a>
                        </li>
                      
                       
                        <li>
                            <a href="{{route('contact.us')}}" title="Shopping Cart"><i
                                    class="fa fa-shopping-cart"></i> <span>Contact us</span>
                            </a>
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
	
	<form method="post" action="{{route('order.submit')}}">
			{{csrf_field()}}
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="col-md-6">
						<input type="text" placeholder="username" name="name" class="form-control">
					</div>

					<div class="col-md-6">
						<input type="text" placeholder="E-mail" name="email"  class="form-control">
					</div>

					<div class="col-md-6">
						<input type="text" placeholder="address" required="" name="address" class="form-control" />
					</div>

					<div class="col-md-6">
						
				<input type="text"  placeholder="Country" name="country" class="form-control" />
					</div>
					<div class="col-md-6">
				<input type="text" placeholder="phone" name="phone" class="form-control"/>
						
					</div>
					<div class="col-md-6">
						<button class="btn btn-primary">Order</button>
					</div>
					<div class="col-md-6">
						
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
