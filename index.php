<?php
session_start();

include 'view/header.php';
//include('view/phone_search.php');

if(!isset($_SESSION['user_id']))
{
    header("Location: /portfolio/asg05/login.html");
    exit();
}


include('view/phone_search.php');
?>


<!--<!doctype html>
<html>
<main>

	<form action="/assignments/asg05_Again/model/get_vehicles_for_customer.php" method="post">
	
	  <div id="search">
	    <label id="blue">Search:</label>
		<input type="text" id="searchbox" name="phone" placeholder="Search by Phone Number" required/>


	  <div id="search_button">
		<label>&nbsp;</label>
		<input type="submit" id="rotate" value=&#9906>
	  </div>


	   </div>
	</form>


   <div id="front_page">
        <p>Search for a user above <br>using their phone number.</p>

    </div>
</main>



</html>-->