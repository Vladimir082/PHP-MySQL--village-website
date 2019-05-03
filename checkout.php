<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");

?>

<html>

<head>
	<title> My online website</title>
	<link rel="stylesheet" href="styles/style.css" media="all"/>
</head>

<body>
	<!--Main container - start-->
	<div class="main_wrapper">

		<!--Header - start-->
		<div class="header_wrapper">
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/>
					<input type="submit" name="search" value="Search"/>
				</form>

		</div>
			<a href="home.php"><img id="logo" src="images/erb_logo.png"/></a>
				

		</div>
		<!--Header - end-->

		<!--Navigation bar - start-->
		<div class="menubar">

			<ul id="menu">
				<li><a href="home.php">Home</a>
				</li>
				<li><a href="council.php">Council</a>
				</li>
				<li><a href="history.php">History</a>
				</li>
				<li><a href="events.php">Events</a>
				</li>
				<li><a href="index.php">Local Products</a>
				</li>
				<li><a href="tourist_info.php">Tourist Info</a>
				</li>
				<li><a href="contact_us.php">Contact us</a>
				</li>
				<li><a href="customer/my_account.php">My Account</a>
				</li>
				<li><a href="checkout.php">Sign Up</a>
				</li>
			</ul>

			
		</div>

		<!--Navigation bar - end-->

		<!--Content wrapper - start-->
		<div class="content_wrapper">
			<div id="sidebar">
				<div id="sidebar_title"> Categories</div>
				<ul id="cats">
					<?php getCats();?>
				</ul>
			
			<ul id="all_products"> 
				<li><a href="all_products.php">All products</a></li>
		    </ul>
			</div>

			<div id="content_area">
				
				<?php cart(); ?>
				
				<div id="shopping_cart">
					<span style="float:right; font-size:16px; padding: 5px; line-height:40px; ">
						
						<?php
						if(isset($_SESSION['customer_email'])){
							echo "<b>Welcome:</b>" . $_SESSION['customer_email']."<b style = 'color:yellow'>Your</b>";
						}
						else {
							echo"<b>Welcome Guest:</b>";
							
						}
						
						?>
																	
						<b style="color:yellow">Shopping cart -</b>
						Total Items: <?php total_items();?> Total Price: <?php total_price();?>
						<a href="cart.php">Go to Cart</a>
					
					
					</span>
				
				</div>
				
				
				<div id="products_box" >
					<br><br>
				<?php
					if(!isset($_SESSION['customer_email'])){
						include("customer_login.php");
					}
					else{
						include("payment.php");
					}
					
					
				?>
					
				</div>
			</div>

		</div>


		<div id="footer">
			<h2 style="text-align:center; padding-top: 30px;">&copy; 2018 by Vladimir
			</h2>
			
		</div>

	</div>
	<!--Main container - end-->
</body>

</html>