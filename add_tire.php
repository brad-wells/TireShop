<?php
require ('../model/database.php');
require ('../model/edit_tire_db.php');
include('../view/header.php');

$tire_id = filter_input(INPUT_POST, 'tire_id');
$veh_id = filter_input(INPUT_POST, 'veh_id');
$tire_position = filter_input(INPUT_POST,'tire_position');
$tire_code = filter_input(INPUT_POST, 'tire_code');
$tire_name = filter_input(INPUT_POST,'tire_name');
$tire_date_installed = filter_input(INPUT_POST, 'tire_date_installed');
$tire_num_of_repair = filter_input(INPUT_POST,'tire_num_of_repair');


/*echo $tire_id;
echo $veh_id;
echo $tire_position;
echo $tire_code;
echo $tire_name;
echo $tire_date_installed;
echo $tire_num_of_repair;*/


$success = add_tire($tire_id, $veh_id, $tire_position, $tire_code, $tire_name, $tire_date_installed, $tire_num_of_repair);

if($success) {
//    ?><!--<p>Tire Added</p>-->
    <div id="background">
    <div id="edit_form_div" align="center">
        <h1>New Tire:</h1>
        <p>Tire ID:  <?php echo $tire_id;?></p>
        <p>Vehicle ID:  <?php echo $veh_id;?></p>
        <p>Tire Position: <?php echo $tire_position;?></p>
        <p>Tire Code:  <?php echo $tire_code;?></p>
        <p>Tire Name:  <?php echo $tire_name;?></p>
        <p>Date Installed:  <?php echo $tire_date_installed;?></p>
        <p>Number of Repairs:  <?php echo $tire_num_of_repair;?></p>

        <br>
        <button onclick="window.print()">Print Receipt</button>
        <br>
        <br>

        <form action = "../view/view_vehicle_tires.php" method="post" id="back">
            <input type ="hidden" name="veh_id" value="<?php echo $veh_id;?>"/>
            <input type="submit" value="Back to Vehicle Tires">
        </form>
    </div>
    </div>
    <?php
}else
{

}

?>