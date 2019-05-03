<!DOCTYPE>
<?php
include( "functions/functions.php" );

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
			<img id="logo" src="images/erb_logo.png"/>

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
			</div>


			<div id="content_area">
				<div id="shopping_cart">
					<span style="float:right; font-size:18px; padding: 5px; line-height:40px; ">
						Welcome Guest!<b style="color:yellow">Shopping cart -</b>
						Total Items -Total Price:
						<a href="cart.php">Go to Cart</a>
					
					
					</span>
				

				</div>
				<div id="products_box">

					<?php
					if ( isset( $_GET[ 'pro_id' ] ) ) {

						$product_id = $_GET[ 'pro_id' ];

						$get_pro = "select * from products where product_id ='$product_id'";

						$run_pro = mysqli_query( $con, $get_pro );

						while ( $row_pro = mysqli_fetch_array( $run_pro ) ) {

							$pro_id = $row_pro[ 'product_id' ];
							$pro_title = $row_pro[ 'product_title' ];
							$pro_price = $row_pro[ 'product_price' ];
							$pro_image = $row_pro[ 'product_image' ];
							$pro_description = $row_pro[ 'product_description' ];

							echo "
		      <div id = 'single_product'>
			  <h3>$pro_title</h3>
			  <img src='admin_area/product_images/$pro_image' style='align=center' width='400' height ='300'/>
			  
			  <p><b> £ $pro_price</b></p>
			  
			  <p style='align=center'>$pro_description</p>
			  <a href='index.php' style='float:left;'>Go Back</a>
			 
			  <a href='index.php?pro-id=$pro_id'><button style='float:right'>Add to Cart</button></a>
		      </div>
			  ";
                	}
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