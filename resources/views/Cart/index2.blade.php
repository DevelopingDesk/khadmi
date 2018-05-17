
<!DOCTYPE html>

<html dir="ltr" lang="en">
<!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
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
        <script src="catalog/view/theme/theme560/js/common.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>


    <!--custom script-->
        <script src="catalog/view/theme/theme560/js/device.min.js" type="text/javascript"></script>
  
        </a>
    </div>
        <link href="catalog/view/theme/theme560/stylesheet/stylesheet.css" rel="stylesheet">
</head>
<body class="checkout-cart">
<p id="gl_path" class="hidden">theme560</p>

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
                            <a href="{{route('check.out')}}" title="Checkout"><i
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
		<li><a href="{{route('cart.index')}}"><i class="fa fa-home"></i></a></li>
		<li><a href="{{route('cart.index')}}">Shopping Cart</a></li>
	  </ul>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Minimum order amount for Microblading PenTools is 4!	<button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
    <div class="row"><aside id="column-left" class="col-sm-3 ">
    <div class="box account info">
	<div class="box-heading">
		<h3>Account</h3>
	</div>
	<div class="box-content">
		<ul>
						<li><a href="http://phlashtools.com/index.php?route=account/login" >Login</a></li>
			<li><a href="http://phlashtools.com/index.php?route=account/register" >Register</a></li>
			<li><a href="http://phlashtools.com/index.php?route=account/forgotten" >Forgotten Password</a></li>
						<li><a href="http://phlashtools.com/index.php?route=account/account" >My Account</a></li>
						<li><a href="http://phlashtools.com/index.php?route=account/address" >Address Books</a></li>
			<li><a href="http://phlashtools.com/index.php?route=account/wishlist" >Wish List</a> </li>
			<li><a href="http://phlashtools.com/index.php?route=account/order" >Order History</a> </li>
			<li><a href="http://phlashtools.com/index.php?route=account/download" >Downloads</a></li>
			<li><a href="http://phlashtools.com/index.php?route=account/reward" >Reward Points</a></li>
			<li><a href="http://phlashtools.com/index.php?route=account/return" >Returns</a></li>
			<li><a href="http://phlashtools.com/index.php?route=account/transaction" >Transactions</a> </li>
			<li><a href="http://phlashtools.com/index.php?route=account/newsletter" >Newsletter</a></li>
			<li><a href="http://phlashtools.com/index.php?route=account/recurring" >Recurring payments</a></li>
					</ul>
	</div>
</div>

  </aside>
				<div id="content" class="col-sm-9">	  <h1>Shopping Cart				&nbsp;(0.00kg)
			  </h1>
	  <form class="shoping_cart" action="" method="post" enctype="multipart/form-data">
		<div class="table-responsive">
		<table class="table table-boarder">
                    <thead>
                        <tr>
                            <th>SL No.</th> 
                            
                            <th>Size</th>
                            <th>Quantity</th>
                        
                            <th>Update</th>
                            <th>Remove</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                            
                        </tr>

                    </thead>
                    <tbody>
                       <?php foreach(Cart::content() as $row) :?>

                        <tr class="rem1">
                        <td class="invert"><?php echo $row->id?></td>
                        
                        <td class="invert"> <?php echo ($row->options->has('size') ? $row->options->size : ''); ?></td>
                     <form method="post" action="{{route('Cart.update',$row->rowId)}}">
                   {{csrf_field()}}
                        <td class="invert">
                             <div class="quantity"> 
                                 <input type="number" min="1" name="qty" value="<?php echo $row->qty; ?>" class="form-control" required>

                            </div>
                        </td>

                        <td class="invert"><button  class="btn btn-primary"><i class="fa fa-refresh"></i></button></td>
                        </form>
<td class="invert">
                               <form method="post" action="{{route('Cart.remove',$row->rowId)}}">
                {{csrf_field()}}
                            <button  class="btn btn-success "><i class="fa fa-refresh"></i></button>
</form>
                        </td>
                        <td class="invert"><?php echo Cart::subtotal(); ?></td>
                        <td class="invert"><?php echo Cart::subtotal(); ?></td>
                        
                    </tr>
                    
                    
<?php endforeach;?>
                </tbody></table>
		</div>
	  </form>
	  	  <br />
	 
	  <div class="buttons">
		<div class="pull-left"><a href="{{route('welcome')}}" class="btn btn-default">Continue Shopping</a></div>
		<div class="pull-right"><a href="{{route('check.out')}}" class="btn btn-primary">Checkout</a></div>
	  </div>
	  </div>
	</div>
</div>
<script>
		document.getElementById('cart-q').onkeypress = function(e) {

  e = e || event;

  if (e.ctrlKey || e.altKey || e.metaKey) return;

  var chr = getChar(e);

  if (chr == null) return;

  if (chr < '0' || chr > '9') {
    return false;
  }

}

function getChar(event) {
  if (event.which == null) {
    if (event.keyCode < 32) return null;
    return String.fromCharCode(event.keyCode) // IE
  }

  if (event.which!=0 && event.charCode!=0) {
    if (event.which < 32) return null;
    return String.fromCharCode(event.which)   
  }

  return null; 
}
</script>
@include('Partials.footer')
<script src="catalog/view/theme/theme560/js/livesearch.js" type="text/javascript"></script>
<script src="catalog/view/theme/theme560/js/script.js" type="text/javascript"></script>
</div>

</body></html> 