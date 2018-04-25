<?php
include('functions.php');
?>
<!DOCTYPE html>
 <html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RG Fitness</title>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="icon" href="images\RG_Fitness_logo.jpg" type="image/jpg" sizes="16x16">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<!-- Logo -->
	<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
				<?php include 'header.php';?>
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(images/drinking.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Shop</h1>
							<p>Please have a look through our range of sporting goods.</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->

		<!--Shop Features-->
		<div id="wrap">
			<div id="columns" class="columns_4">
				<figure>
					<img src="images/resistance.jpg" alt="Resistance Bands" height="300" width="153.48">
					<h3>Resistance Bands</h3>
					<span class="price">£8.00</span>
					<br></br>
					<!-- Button Shopping Cart -->
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="business" value="enda.grimes@hotmail.co.uk">
					<input type="hidden" name="lc" value="GB">
					<input type="hidden" name="item_name" value="Resistance Bands">
					<input type="hidden" name="amount" value="8.00">
					<input type="hidden" name="currency_code" value="GBP">
					<input type="hidden" name="button_subtype" value="products">
					<input type="hidden" name="shipping" value="0.00">
					<input type="hidden" name="add" value="1">
					<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
					<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ResistanceBands">
					View Product
					</button>
				</figure>

				<figure>
					<img src="images/whey.jpeg" alt="Whey Protein" height="300" width="153.48">
					<h3>Whey Protein</h3>
					<span class="price">£25.00</span>
					<br></br>
					<!-- Button Shopping Cart -->
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="business" value="enda.grimes@hotmail.co.uk">
					<input type="hidden" name="lc" value="GB">
					<input type="hidden" name="item_name" value="Whey Protein">
					<input type="hidden" name="amount" value="25.00">
					<input type="hidden" name="currency_code" value="GBP">
					<input type="hidden" name="button_subtype" value="products">
					<input type="hidden" name="shipping" value="0.00">
					<input type="hidden" name="add" value="1">
					<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
					<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">						<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#WheyProtein">
					View Product
					</button>
				</figure>

				<figure>
					<img src="images/reebok.jpg" alt="Whey Protein" height="300" width="153.48">
					<h3>Boxing Gloves</h3>
					<span class="price">£23.00</span>
					<br></br>
					<!-- Button Shopping Cart -->
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="business" value="enda.grimes@hotmail.co.uk">
					<input type="hidden" name="lc" value="GB">
					<input type="hidden" name="item_name" value="Boxing Gloves">
					<input type="hidden" name="amount" value="23.00">
					<input type="hidden" name="currency_code" value="GBP">
					<input type="hidden" name="button_subtype" value="products">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="shipping" value="0.00">
					<input type="hidden" name="add" value="1">
					<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
					<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#BoxingGloves">
					View Product
					</button>
				</figure>

				<figure>
					<img src="images/jersey.jpg" alt="JERSEY" height="300" width="153.48">
					<h3>RG Fitness Jerseys</h3>
					<span class="price">£30.00</span>
					<br></br>
					<!-- Button Shopping Cart -->
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="business" value="enda.grimes@hotmail.co.uk">
					<input type="hidden" name="lc" value="GB">
					<input type="hidden" name="item_name" value="RG Fitness Jersey">
					<input type="hidden" name="amount" value="30.00">
					<input type="hidden" name="currency_code" value="GBP">
					<input type="hidden" name="button_subtype" value="products">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="shipping" value="0.00">
					<input type="hidden" name="add" value="1">
					<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
					<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Jersey">
					View Product
					</button>
				</figure>

				<figure>
					<img src="images/bag.jpg" alt="Gym Bag" height="300" width="153.48">
					<h3>Gym Bag</h3>
					<span class="price">£20.00</span>
					<br></br>
					<!-- Button Shopping Cart -->
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="business" value="enda.grimes@hotmail.co.uk">
					<input type="hidden" name="lc" value="GB">
					<input type="hidden" name="item_name" value="Gym Bag">
					<input type="hidden" name="amount" value="20.00">
					<input type="hidden" name="currency_code" value="GBP">
					<input type="hidden" name="button_subtype" value="products">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="shipping" value="0.00">
					<input type="hidden" name="add" value="1">
					<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
					<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#GymBag">
					View Product
					</button>
				</figure>

				<figure>
					<img src="images/waterbottle.jpg" alt="Water Bottle" height="300" width="153.48">
					<h3>Water Bottle</h3>
					<span class="price">£5.00</span>
					<br></br>
					<!-- Button Shopping Cart -->
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="business" value="enda.grimes@hotmail.co.uk">
					<input type="hidden" name="lc" value="GB">
					<input type="hidden" name="item_name" value="Water Bottle">
					<input type="hidden" name="amount" value="5.00">
					<input type="hidden" name="currency_code" value="GBP">
					<input type="hidden" name="button_subtype" value="products">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="shipping" value="0.00">
					<input type="hidden" name="add" value="1">
					<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
					<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#WaterBottle">
					View Product
					</button>
				</figure>

				<figure>
					<img src="images/rope.jpg" alt="Skipping Rope" height="300" width="153.48">
					<h3>Skipping Rope</h3>
					<span class="price">£10.00</span>
					<br></br>
					<!-- Button Shopping Cart -->
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="business" value="enda.grimes@hotmail.co.uk">
					<input type="hidden" name="lc" value="GB">
					<input type="hidden" name="item_name" value="Skipping Rope">
					<input type="hidden" name="amount" value="10.00">
					<input type="hidden" name="currency_code" value="GBP">
					<input type="hidden" name="button_subtype" value="products">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="shipping" value="0.00">
					<input type="hidden" name="add" value="1">
					<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
					<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SkippingRope">
					View Product
					</button>
				</figure>

				<figure>
					<img src="images/yoga.jpg" alt="Yoga Mat" height="300" width="153.48">
					<h3>Yoga Mat</h3>
					<span class="price">£15.00</span>
					<br></br>
					<!-- Button Shopping Cart -->
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="business" value="enda.grimes@hotmail.co.uk">
					<input type="hidden" name="lc" value="GB">
					<input type="hidden" name="item_name" value="Yoga Mat">
					<input type="hidden" name="amount" value="15.00">
					<input type="hidden" name="currency_code" value="GBP">
					<input type="hidden" name="button_subtype" value="products">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="shipping" value="0.00">
					<input type="hidden" name="add" value="1">
					<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
					<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#YogaMat">
					View Product
					</button>
				</figure>

				<figure>
					<img src="images/gymball.jpg" alt="Gym Ball" height="300" width="153.48">
					<h3>Gym Ball</h3>
					<span class="price">£10.00</span>
					<br></br>
					<!-- Button Shopping Cart -->
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="business" value="enda.grimes@hotmail.co.uk">
					<input type="hidden" name="lc" value="GB">
					<input type="hidden" name="item_name" value="Gym Ball">
					<input type="hidden" name="amount" value="10.00">
					<input type="hidden" name="currency_code" value="GBP">
					<input type="hidden" name="button_subtype" value="products">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="shipping" value="0.00">
					<input type="hidden" name="add" value="1">
					<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
					<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#GymBall">
					View Product
					</button>
			</figure>
			</div>


<!-- Resistance Bands Modal -->
<div class="modal fade" id="ResistanceBands" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Resistance Bands</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>A resistance band is an elastic band used for strength training. They are also commonly used in physical therapy, specifically
			by convalescents of muscular injuries, including cardiac rehab patients to allow slow rebuilding of strength. </P>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Whey Protein Modal -->
<div class="modal fade" id="WheyProtein" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Whey Protein</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Whey protein is a mixture of globular proteins isolated from whey, the liquid material created as a by-product of cheese production.
			Whey protein is commonly marketed as a dietary supplement, and various health claims have been attributed to it in the alternative medicine community. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Boxing Glove Modal -->
<div class="modal fade" id="BoxingGloves" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Boxing Gloves</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>A heavily padded mitten worn in boxing. Great for working up a sweat in the gym and great if you're interested in the boxercise class. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Jersey Modal -->
<div class="modal fade" id="Jersey" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">RG Fitness Jersey</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>This is the current design of our new jerseys that are going on sale soon. Please get in contact with us and let us know what you think.</p>
		<img src="images/jersey.jpg" alt="Gym Ball" height="300" width="400">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Gym Bag Modal -->
<div class="modal fade" id="GymBag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Gym Bag</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>The Gym Bag is perfect for your sports gear, featuring a zipped main section with added accessory pocket to the side,
			finished of dual carry handles and adjustable shoulder strap. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Water Bottle Modal -->
<div class="modal fade" id="WaterBottle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Water Bottle</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>This water bottle also has a sports lid, allowing you to stay hydrated without interrupting your training. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Skipping Rope Modal -->
<div class="modal fade" id="SkippingRope" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Skipping Rope</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>This skipping rope has been designed with a 9ft nylon rope that is ideal for fitness and speed training.
			This skipping rope also comes with slimline moulded plastic handles for ease of use. </P>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Yoga Mat Modal -->
<div class="modal fade" id="YogaMat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Yoga Mat</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>The fold out mat allows you to perform your exercises in comfort and wherever and whenever you want to.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Gym Ball Modal -->
<div class="modal fade" id="GymBall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Gym Ball</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>This Gym Ball comes complete with a pump and 12 step by step exercises to help improve overall fitness. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




		</div>
		</div>


		<?php include 'footer.php';?>


	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
