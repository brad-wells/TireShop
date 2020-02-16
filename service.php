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

$veh_id = filter_input(INPUT_POST,'veh_id');
$tire_id = filter_input(INPUT_POST,'tire_id');


/*$tires = get_tires_for_vehicle($veh_id);*/

//?><!--<p>tire id:</p>--><?php //echo $tire_id;
//$tires = get_tires_for_vehicle($veh_id);


$tire = get_tire_details($tire_id);

?>
<div id="background">
<div align="center" id="display">
<div id="edit_form_div" align="center">
    <form action="../actions/edit_tire.php" method="post" id="edit_form">
    <?php foreach ($tire as $t): ?>
        <label id="yellow">tire id: <?php echo $t['tire_id']; ?></label>
        <label id="yellow">tire veh: <?php echo $t['tire_veh']; ?></label>
        <h1 id="yellow">Tire Position:
        <?php echo $t['tire_position'];?></h1>
        <label id="yellow">Tire Size:</label>
        <input type="text"  placeholder="R160F44" name="tire_code" value="<?php echo $t['tire_code'];?>" required/>

        <label id="yellow">Tire Name:</label>
        <input type="text" name="tire_name"
               value="<?php echo $t['tire_name'];?>" required/>

        <label id="yellow">Install Date:</label>
        <input type="date" name="tire_date_installed"
               value="<?php echo $t['tire_date_installed'];?>" required/>

        <label id="yellow">Times Serviced:</label>
        <input type="number" name="tire_num_of_repair"
               value="<?php echo $t['tire_num_of_repair'];?>" required/>

        <input type="hidden" name="tire_id" value="<?php echo $t['tire_id'];?>" required/>
        <input type="hidden" name="tire_position" value="<?php echo $t['tire_position'];?>" required/>
        <input type ="hidden" name="tire_veh" value="<?php echo $t['tire_veh'];?>" required/>


        <input type="submit" value="submit">
    <?php endforeach;?>
    </form>
</div>

    </div>
</div>
