<?php
include('../model/database.php');
include('../model/vehicle.php');
include('../model/tire.php');
include('../view/header.php');
/*session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: /assignments/asg05_Again/login.html");
    exit();
}*/


    $veh_id = filter_input(INPUT_POST, 'veh_id');

    $tires = get_tires_for_vehicle($veh_id);

?>
<div id="background">

    <div align="center" id="display">
        <h1 id="yellow">Tires for Vehicle <?php echo $veh_id;?></h1>


<table>
	<tr>
        <th>ID</th>
		<th>Position</th>
		<th>Size</th>
		<th>Name</th>
		<th>Install Date</th>
		<th>Times Serviced</th>
	</tr>

    <tr>
        <?php foreach($tires as $tire) : ?>
        <td id="tire"> <?php echo $tire['tire_id'];?></td>
        <td id="tire"> <?php echo $tire['tire_position'];?></td>
        <td id="tire"> <?php echo $tire['tire_code'];?></td>
        <td id="tire"> <?php echo $tire['tire_name'];?></td>
        <td id="tire"> <?php echo $tire['tire_date_installed'];?></td>
        <td id="tire"> <?php echo $tire['tire_num_of_repair'];?></td>

        <td><form action="/portfolio/asg05/view/service.php" method="post">
                <input type="hidden" name="tire_id"
                       value="<?php  echo $tire['tire_id'];?>">

                <input type="hidden" name="veh_id"
                       value="<?php echo $veh_id?>">



                <input type="submit" value="Edit">
            </form></td>

        <td><form action="../actions/delete_tire.php" method="post">
                <input type="hidden" name="tire_id"
                       value="<?php echo $tire['tire_id'];?>">

                <input type="hidden" name="veh_id"
                       value="<?php echo $veh_id;?>">

                <input type="submit" value="Delete">
            </form></td>

    </tr>
    <tr>
        <?php endforeach; ?>







    </tr>

</table>


    </div>

    <p>
    <form action="/portfolio/asg05/view/add_tire_form.php" method="post">
        <input type="hidden" name="veh_id"
               value="<?php echo $veh_id;?>">

        <input type="hidden" name="tire_id"
               value="<?php echo $tire['tire_id'];?>">
        <input type="submit" value="Add"/>
    </form>
    </p>

<!--    <p>
    <form action = "/assignments/asg05_Again/view/view_vehicles_for_customer.php" method="post" id="back">
        <input type ="hidden" name="veh_id" value="<?php /*echo $veh_id;*/?>"/>
        <input type="submit" value="Back to Vehicle Tires">
    </form>
    </p>-->

    <a href="/portfolio/asg05/index.php" id="newSearch" >New Search</a>
</div>

