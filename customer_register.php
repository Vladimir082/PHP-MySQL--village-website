<!DOCTYPE>
<?php
session_start();
include( "functions/functions.php" );
include( "includes/db.php" );
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
				<form method="get" action="resluts.php" enctype="multipart/form-data">
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
				<li><a href="checkout.php">My Account</a>
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
					<li><a href="all_products.php">All products</a>
					</li>
				</ul>
			</div>

			<div id="content_area">

				<?php cart(); ?>

				<div id="shopping_cart">
					<span style="float:right; font-size:18px; padding: 5px; line-height:40px; ">
						Welcome Guest! <b style="color:yellow">Shopping cart -</b>
						Total Items: <?php total_items();?> Total Price: <?php total_price();?>
						<a href="cart.php">Go to Cart</a>
					
					
					</span>
				

				</div>
				<form action="customer_register.php" method="post" enctype="multipart/form-data">
					<table align="center" width="750">
						<tr align="center">
							<td colspan="6">
								<h2>Create an Account</h2>
							</td>

						</tr>
						
						<tr>
							<td align="right">Customer Name:</td>
							<td><input type="text" name="c_name" required/>
							</td>
						</tr>
						<tr>
							<td align="right">Customer Surname:</td>
							<td><input type="text" name="c_surname" required/>
							</td>
						</tr>
						<tr>
							<td align="right"> Email:</td>
							<td><input type="text" name="c_email" required/>
							</td>
						</tr>
						<tr>
							<td align="right"> Password</td>
							<td><input type="password" name="c_pass" required/>
							</td>
						</tr>
						<tr>
							<td align="right">Customer Image:</td>
							<td><input type="file" name="c_image" required/>
							</td>
						</tr>
						<tr>
							<td align="right"> Country</td>
							<td>
								<select name="c_country">
									<option>Select a Country</option>
									<option>United Kingdom</option>
									<option>United State of America</option>
									<option>Canada</option>
									<option>France</option>
									<option>Germany</option>
									<option>Netherlands</option>
									<option>Belgium</option>
									<option>Spain</option>
									<option>Italy</option>
									<option>Russia</option>
									<option>Japan</option>
									<option>Australia</option>
									<option>China</option>
									<option>India</option>
									<option>Kuwait</option>
									<option>United Arab Emirates</option>
								</select>
							</td>
						</tr>
						<tr>
							<td align="right"> City</td>
							<td><input type="text" name="c_city" required/>
							</td>
						</tr>
						<tr>
							<td align="right"> Contact Number</td>
							<td><input type="text" name="c_contact" required/>
							</td>
						</tr>
						<tr>
							<td align="right">Post Code</td>
							<td><input type="text" name="c_postcode" required/>
							</td>
						</tr>
						<tr>
							<td align="right"> Address</td>
							<td><input type="text" name="c_address" required/>
							</td>
						</tr>
						<tr align="center">
							<td colspan="6"><input type="submit" name="register" value="Create Account"/>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<!--Content wrapper ends-->
		<div id="footer">
			<h2 style="text-align:center; padding-top: 30px;">&copy; 2018 by Vladimir
			</h2>
		</div>
	</div>
	<!--Main container - end-->
</body>

</html>
<!--//insert customer data to the database-->
<?php

if ( isset( $_POST[ 'register' ] ) ) {

	$ip = getIp();

	$c_name = $_POST[ 'c_name' ];
	$c_surname = $_POST[ 'c_surname' ];
	$c_email = $_POST[ 'c_email' ];
	$c_pass = $_POST[ 'c_pass' ];
	$c_image = $_FILES[ 'c_image' ][ 'name' ];
	$c_image_tmp = $_FILES[ 'c_image' ][ 'tmp_name' ];
	$c_country = $_POST[ 'c_country' ];
	$c_city = $_POST[ 'c_city' ];
	$c_contact = $_POST[ 'c_contact' ];
	$c_postcode = $_POST[ 'c_postcode' ];
	$c_address = $_POST[ 'c_address' ];

	move_uploaded_file( $c_image_tmp,"customer/customer_images/$c_image" );

	$insert_c = "insert into customers (customer_ip,customer_name,customer_surname,customer_email,customer_pass, customer_country,customer_city,customer_contact,customer_address,customer_postcode,customer_image) values ('$ip','$c_name','$c_surname','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_postcode','$c_image')";

	$run_c = mysqli_query( $con, $insert_c );
	
	$sel_cart = "select * from cart where ip_add='$ip'";
	
	$run_cart = mysqli_query($con, $sel_cart);
	
	$check_cart = mysqli_num_rows($run_cart);
	//check if is product in the cart then redirect the customer to right page
	if($check_cart==0){
		$_SESSION['customer_email']=$c_email;
		echo "<script>alert('Account has been created successfully, Thank You!')</script>";
		echo "<script>window.open('cutomer/my_account.php','_self') </script>";
				
	}
	else{
		$_SESSION['customer_email']=$c_email;
		echo "<script>alert('Account has been created successfully, Thank You!')</script>";
		echo "<script>window.open('checkout.php','_self') </script>";
		
	}
}
?>