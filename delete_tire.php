<?php
require ('../model/database.php');
require('../model/edit_tire_db.php');

$tire_id = filter_input(INPUT_POST, 'tire_id');
$veh_id = filter_input(INPUT_POST, 'veh_id');
/*echo $veh_id;
echo $tire_id;*/
$statement9 = delete_tire($tire_id);

if($statement9)
{
    include('../view/view_vehicle_tires.php');
//    ?><!--<P>delted tire: </P>--><?php //echo $tire_id;

}