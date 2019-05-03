<?php
$con = mysqli_connect("localhost","root","","ecommercevillage");

//error function to show if is not DB connect
if (mysqli_connect_errno()){
	echo "The connection was not established: ".mysqli_connect_error(); 
}
// detecting and getting user ip address to identify user
function getIp() {
	
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
 //creating shopping cart 
function cart (){
	
	if(isset($_GET['add_cart'])){
		global $con;
		$ip = getIp();
		$pro_id = $_GET['add_cart'];
		$check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id'";
		$run_check = mysqli_query($con, $check_pro);
		//check and not allowed to add the same products twice
		if(mysqli_num_rows($run_check)>0){
			echo"";
		}
		else{
			$insert_pro = "insert into cart (p_id,ip_add,qty) values('$pro_id','$ip','1')";
			$run_pro = mysqli_query($con, $insert_pro);
			echo "<script>window.open('index.php','_self') </script>";
		}
	}
}
//getting the total added items
function total_items(){
	
	if(isset($_GET['add_cart'])){
		global $con;
		$ip = getIp();
		$get_items = "select * from cart where ip_add='$ip'";
		$run_items = mysqli_query($con,$get_items);
		$count_items = mysqli_num_rows($run_items);
	}
		else {
			global $con;
			$ip = getIp();
		    $get_items = "select * from cart where ip_add='$ip'";
		    $run_items = mysqli_query($con,$get_items);
		    $count_items = mysqli_num_rows($run_items);
			
		}
		echo $count_items;
		
	}
//Getting the total price of the items in the cart
function total_price(){
	
	$total = 0;
	global $con;
	$ip = getIp();
	$sel_price = "select * from cart where ip_add='$ip'";
	$run_price = mysqli_query($con, $sel_price);
	
	// take the product_id from product table
	while($p_price=mysqli_fetch_array($run_price)){
		$pro_id = $p_price['p_id'];
		$pro_price = "select * from products where product_id='$pro_id'";
		$run_pro_price = mysqli_query($con,$pro_price);
		
		//take the product price from product table
		while ($pp_price = mysqli_fetch_array($run_pro_price)){
			
			$product_price = array ($pp_price['product_price']);
			$values = array_sum($product_price);
			$total +=$values;
			
		}
	}
	echo "£" . $total;
}

//getting the categories from database
function getCats(){
	
	global $con;
	$get_cats = "select * from categories";
	
	$run_cats = mysqli_query($con, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)){
		$cat_id = $row_cats['category_id'];
		$cat_title = $row_cats['category_title'];
		
		echo"<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
		
		
	}
	
}
//getting products from database by categories
function getCatPro(){
	
	if(isset($_GET['cat'])){
		
		$cat_id = $_GET['cat'];
		
	
	global $con;
	$get_cat_pro = "select * from products where product_category='$cat_id'";
	$run_cat_pro = mysqli_query($con, $get_cat_pro);
	$count_cats = mysqli_num_rows($run_cat_pro);
		
	if($count_cats==0){
		echo"<h2 style='padding:20px;'>No products where found in this category!</h2>";
	}
	while($row_cat_pro = mysqli_fetch_array($run_cat_pro)){
		
	$pro_id = $row_cat_pro['product_id'];
	$pro_category = $row_cat_pro['product_category'];
	$pro_title = $row_cat_pro['product_title'];
	$pro_price = $row_cat_pro['product_price'];
	$pro_image = $row_cat_pro['product_image'];
		
		echo"
		      <div id = 'product_grid'>
			  <h3>$pro_title</h3>
			  <img src='admin_area/product_images/$pro_image' width='160' height ='150'/>
			  
			  <p><b>Price: £ $pro_price</b></p>
			  <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
			 
			  <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
		      </div>
		
		";
		
	}
	}
	}
// getting products from categories and display in the product page
function getPro(){
	
	if(!isset($_GET['cat'])){
		
	global $con;
	//display randomly 9products on the main page
	$get_pro = "select * from products order by RAND() LIMIT 0,9";
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		
	$pro_id = $row_pro['product_id'];
	$pro_category = $row_pro['product_category'];
	$pro_title = $row_pro['product_title'];
	$pro_price = $row_pro['product_price'];
	$pro_image = $row_pro['product_image'];
		
		echo"
		      <div id = 'product_grid'>
			  <h3>$pro_title</h3>
			  <img src='admin_area/product_images/$pro_image' width='160' height ='150'/>
			  
			  <p><b>Price: £ $pro_price </b></p>
			  <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
			 
			  <a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
		      </div>
		";
		
	}
	}
	}




?>