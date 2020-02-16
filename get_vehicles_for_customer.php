<?php
require ('database.php');
require('vehicle.php');
require ('tire.php');
require ('customer.php');
include('../view/header.php');


/*session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: /homepages/7/d767466955/htdocs/myWebsite/portfolio/portfolio/asg05/login.html");
    exit();
}*/

$cust_phone = filter_input(INPUT_POST, 'phone');
//echo $cust_phone;
$customer_id = get_customer_id_from_phone($cust_phone);


if($customer_id == false || $customer_id == null)
{
    ?>



    <div id="alert">
        <p>Enter a valid phone number!</p>
    </div>

    <?php
    include('../view/phone_search.php');
}

/*if($cust_phone == null || $cust_phone == false)
{



}*/
//else {




    if($customer_id)
    {
        foreach ($customer_id as $cid):
            {
                //echo $customer_id['customer_id'];
                $customer = get_customer_from_phone($cust_phone);
            }
        endforeach;

        $vehicles = get_vehicles_for_customer_with_id($customer_id['customer_id']);


        include('../view/view_vehicles_for_customer.php');
 //   }
  //  else{
 //       include('../index.php');
  //  }

}