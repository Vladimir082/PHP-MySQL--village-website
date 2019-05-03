<!DOCTYPE>
<?php
session_start();
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
		<div class="content_wrapper"><br>
			<section >
			<h1 align="center">Events Calendar <br><br> January - June 2019</h1><br>
			<h4 align="center">In this section you can find events calendar infromation during January - June 2019.</h4>
			<h4 align="center">There will be available special calendar for the summer events by the end of the April.</h4>
			<h4 align="center">Please make sure that you check events calendar regulary because sometimes happen that we must update information</h4> <br><br>

			<table style="width:90%; margin:auto" bgcolor="#e6ffcc"  >
				<tr>
					<th width="103" align="center" bgcolor="#7DAF6F" >Name of Events</th>
					<th width="73" align="center" bgcolor="#7DAF6F" >Place</th>
					<th width="13" align="center" bgcolor="#7DAF6F" > Month </th>
					<th width="30" align="center" bgcolor="#7DAF6F" > Date </th>
					<th width="5" align="center" bgcolor="#7DAF6F" >Time start</th>
					<th width="6" bgcolor="#7DAF6F" walign="center" >Time finish</th>
					<th width="108" align="center" bgcolor="#7DAF6F" >Book tickets</th>
					<th width="9" align="center" bgcolor="#7DAF6F"> Price </th>
					<th width="230" align="center" bgcolor="#7DAF6F"> Notice </th>


				</tr>
				<tr>
					<td>New Year's Holy Communion</td>
					<td>Village's Church</td>
					<td>January</td>
					<td>01/01/2019</td>
					<td>10:00 am </td>
					<td>12:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td></td>
				</tr>
				<tr>
					<td>Sunday's Service and Holy Communion</td>
					<td>Village's Church</td>
					<td>January</td>
					<td>06/01/2019</td>
					<td>10:00 am </td>
					<td>12:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td>Village Young Musician's Concert</td>
					<td>Village Hall</td>
					<td>January</td>
					<td>23/01/2019</td>
					<td>06:00 pm </td>
					<td>07:00 pm </td>
					<td>no </td>
					<td>£5 </td>
					<td></td>
				</tr>
				<tr>
					<td> Evening Prayer</td>
					<td>Village's Church</td>
					<td>January</td>
					<td>03/02/2019</td>
					<td>06:00 pm </td>
					<td>08:00 pm </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td>Sunday's Service and Holy Communion</td>
					<td>Village's Church</td>
					<td>February</td>
					<td>03/02/2019</td>
					<td>10:00 am </td>
					<td>12:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td>Violins Concert</td>
					<td>Village's Church</td>
					<td>February</td>
					<td>15/02/2019</td>
					<td>06:00 pm </td>
					<td>07:30 pm </td>
					<td>yes at www.violinTickets.co.uk</td>
					<td>£10 </td>
					<td></td>
				</tr>
				<tr>
					<td>Reading society</td>
					<td>Village Hall</td>
					<td>February</td>
					<td>20/01/2019</td>
					<td>18:00 am </td>
					<td>19:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td></td>
				</tr>
				<tr>
					<td>Sunday's Service and Holy Communion</td>
					<td>Village's Church</td>
					<td>March</td>
					<td>03/03/2019</td>
					<td>10:00 am </td>
					<td>12:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td> Evening Prayer</td>
					<td>Village's Church</td>
					<td>March</td>
					<td>03/03/2019</td>
					<td>06:00 pm </td>
					<td>08:00 pm </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td>Village Young Musician's Concert</td>
					<td>Village Hall</td>
					<td>March</td>
					<td>08/03/2019</td>
					<td>06:00 pm </td>
					<td>07:00 pm </td>
					<td>no </td>
					<td>£5 </td>
					<td></td>
				</tr>
				<tr>
					<td>Traditional Folk Concert</td>
					<td>Village Hall</td>
					<td>March</td>
					<td>16/03/2019</td>
					<td>06:00 pm </td>
					<td>08:00 pm </td>
					<td>yes at www.folk-music.co.uk </td>
					<td>£10 </td>
					<td></td>
				</tr>
				<tr>
					<td>Reading society</td>
					<td>Village Hall</td>
					<td>March</td>
					<td>20/03/2019</td>
					<td>18:00 am </td>
					<td>19:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td></td>
				</tr>
				<tr>
					<td>Sunday's Service and Holy Communion</td>
					<td>Village's Church</td>
					<td>April</td>
					<td>07/04/2019</td>
					<td>10:00 am </td>
					<td>12:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td> Evening Prayer</td>
					<td>Village's Church</td>
					<td>April</td>
					<td>07/04/2019</td>
					<td>06:00 pm </td>
					<td>08:00 pm </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td>Good Friday's Service and Holy Communion</td>
					<td>Village's Church</td>
					<td>April</td>
					<td>19/04/2019</td>
					<td>10:00 am </td>
					<td>12:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td>Easter Christian Concert</td>
					<td>Village's Church</td>
					<td>March</td>
					<td>20/04/2019</td>
					<td>05:00 pm </td>
					<td>07:00 pm </td>
					<td>no </td>
					<td>FREE </td>
					<td>Quire sung by the Cathedral Choir </td>
				</tr>
				<tr>
					<td>Easter Sunday's Service and Holy Communion</td>
					<td>Village's Church</td>
					<td>April</td>
					<td>21/04/2019</td>
					<td>09:00 am </td>
					<td>12:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td>The Liturgy of Maundy
					    Eucharist
					    Washing of Feet
					    Stripping of the Sanctuary</td>
				</tr>
				<tr>
					<td>Monday of Holy week Service and Holy Communion</td>
					<td>Village's Church</td>
					<td>April</td>
					<td>21/04/2019</td>
					<td>10:00 am </td>
					<td>12:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td>Quire sung by the Cathedral Choir </td>
				</tr>
				<tr>
					<td>Guitar Concert La Flamenco</td>
					<td>Village Hall</td>
					<td>March</td>
					<td>27/04/2019</td>
					<td>06:00 pm </td>
					<td>08:00 pm </td>
					<td>yes at www.flamenco.co.uk </td>
					<td>£10 </td>
					<td></td>
				</tr>
				<tr>
					<td>Reading society</td>
					<td>Village Hall</td>
					<td>May</td>
					<td>01/05/2019</td>
					<td>18:00 am </td>
					<td>19:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td></td>
				</tr>
				<tr>
					<td>Sunday's Service and Holy Communion</td>
					<td>Village's Church</td>
					<td>May</td>
					<td>05/05/2019</td>
					<td>10:00 am </td>
					<td>12:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td> Evening Prayer</td>
					<td>Village's Church</td>
					<td>May</td>
					<td>05/05/2019</td>
					<td>06:00 pm </td>
					<td>08:00 pm </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td>Celebration festival honoring the Early May</td>
					<td>Main square</td>
					<td>May</td>
					<td>06/06/2019</td>
					<td>9:00 am </td>
					<td>10:00 pm </td>
					<td>yes </td>
					<td>£5 </td>
					<td>Please check detail at www.village.com/may-festival </td>
				</tr>
				<tr>
					<td> Local Walking Activities</td>
					<td>Village Hall to Monument and back</td>
					<td>May</td>
					<td>18/05/2019</td>
					<td>09:00 am </td>
					<td>04:00 pm </td>
					<td>no </td>
					<td>FREE </td>
					<td>It is about 10 miles walking to the monument and back. Enjoy families,friends and good weather. </td>
				</tr>
				<tr>
					<td>Reading society</td>
					<td>Village Hall</td>
					<td>May</td>
					<td>22/05/2019</td>
					<td>18:00 am </td>
					<td>19:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td></td>
				</tr>
				<tr>
					<td>Liverpool Philharmonic Concert</td>
					<td>Main square</td>
					<td>May</td>
					<td>27/06/2019</td>
					<td>18:00 pm </td>
					<td>19:30 pm </td>
					<td>yes </td>
					<td>£5 </td>
					<td>Please check detail at www.village.com/may-concert </td>
				</tr>
				<tr>
					<td>Sunday's Service and Holy Communion</td>
					<td>Village's Church</td>
					<td>June</td>
					<td>02/06/2019</td>
					<td>10:00 am </td>
					<td>12:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td> Evening Prayer</td>
					<td>Village's Church</td>
					<td>May</td>
					<td>02/06/2019</td>
					<td>06:00 pm </td>
					<td>08:00 pm </td>
					<td>no </td>
					<td>FREE </td>
					<td>Running every Sunday this month. </td>
				</tr>
				<tr>
					<td>Reading society</td>
					<td>Village Hall</td>
					<td>June</td>
					<td>05/06/2019</td>
					<td>18:00 am </td>
					<td>19:00 am </td>
					<td>no </td>
					<td>FREE </td>
					<td></td>
				</tr>
				<tr>
					<td> Local Walking Activities</td>
					<td>Village Hall to Mont hill</td>
					<td>June</td>
					<td>08/06/2019</td>
					<td>09:00 am </td>
					<td>04:00 pm </td>
					<td>no </td>
					<td>FREE </td>
					<td>It is about 10 miles walking to the Mont hill and back. Enjoy families,friends and good weather. </td>
				</tr>
				<tr>
					<td>Celebration of Summer Solstice 2019</td>
					<td>Main square,Bank river</td>
					<td>June</td>
					<td>21/06/2019</td>
					<td>18:00 pm </td>
					<td>00:00 pm </td>
					<td>yes </td>
					<td>£10 </td>
					<td>Please check detail at www.village.com/solstice </td>
				</tr>
			</table>
			<br>
			</section>
		</div>

		<div id="footer">
			<h2 style="text-align:center; padding-top: 30px;">&copy; 2018 by Vladimir
			</h2>

		</div>

	</div>
	<!--Main container - end-->
</body>

</html>