<?php
include('../model/database.php');
include('../model/vehicle.php');
include('../model/customer.php');
include('../view/header.php');

/*session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: /portfolio/asg05/login.html");
    exit();
}*/

$veh_id = filter_input(INPUT_POST,'veh_id');


$vehicle = get_vehicle_details($veh_id);


?>
    <div id="background">

    <div align="center" id="display">

    <h1 id="yellow">Edit  <?php  foreach ($vehicle as $v):
    $i = 0;


            $c = $v['customer_id'];
            $cust_f_name = get_customer_f_name_from_id($c);

                foreach ($cust_f_name as $cust):
                    while ( $i < 1) {
                        echo $cust;
                        $i = 1;
                    };
                endforeach;



        endforeach; ?>'s Vehicle</h1>



    <table>

    <tr>
        <th>ID</th>
        <th>Vin</th>
        <th>Mileage</th>
        <th>Year</th>
        <th>Model</th>
        <th>Make</th>
        <!--<th>FL</th>
        <th>FR</th>
        <th>RL</th>
        <th>RR</th>-->

    </tr>

    <tr>
<?php










foreach($vehicle as $cv) : ?>
    <td id="veh"> <?php echo $cv['veh_id'];?></td>
    <td id="veh"> <?php echo $cv['veh_vin'];?></td>
    <td id="veh"> <?php echo $cv['veh_mileage'];?></td>
    <td id="veh"> <?php echo $cv['veh_year'];?></td>
    <td id="veh"> <?php echo $cv['veh_model'];?></td>
    <td id="veh"> <?php echo $cv['veh_make'];?></td>
    <td><form action="../view/view_vehicle_tires.php" method="post">
            <input type="hidden" name="veh_id"
                   value="<?php echo $cv['veh_id'];?>">
            <input id="small" type="submit" value="Edit Tires">
        </form></td>
    </tr>
    <tr>




<?php endforeach; ?>
