<?php
require('../model/database.php');
require('../model/edit_tire_db.php');
require('../model/add_tire_db.php');
include('header.php');

/*session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: /assignments/asg05_Again/login.html");
    exit();
}*/




$veh_id = filter_input(INPUT_POST, 'veh_id');
$tire_id = filter_input(INPUT_POST,'tire_id');

$random = rand(0,999);


/*echo $random;
echo $tire_id;
echo $veh_id;*/
?>
<div id="background">
    <div align="center" id="display">
    <div id="edit_form_div" align="center">

    <form action="../actions/add_tire.php" method="post"
          id="add_form">

        <label>Tire id: </label>
        <input type="number" name="tire_id"
               value="<?php echo $random;?>" required/>

        <input type="hidden" name="veh_id"
               value="<?php echo $veh_id;?>" required/>
<!--        <input type="hidden" name="tire_id"
               value="<?php /*echo $tire_id*/?>">-->

        <label>Tire Position:</label>
<!--            --><?php //echo $tire_veh; ?><!--</label>-->
<select name="tire_position">
    <?php /*foreach ($tires as $tire) :*/?>
    <option value="FR">FR</option>
    <option value="FL">FL</option>
    <option value="RR">RR</option>
    <option value="RL">RL</option>


    <!--           <option value="<?php /*echo $tire['tire_position'];*/?>">
               <?php /*echo $tire['tire_position'];*/?>
           </option>-->

    <!--           --><?php //endforeach; ?>
</select >


<label>Tire Name:</label>
<?php $tires = tire_names();?>
<select name ="tire_name">
    <?php foreach ($tires as $tire): ?>
        <option value="<?php echo$tire['tire_name'];?>">
            <?php echo $tire['tire_name'];?>
        </option>
    <?php endforeach;;?>


</select>

<label>Tire Code:</label>
<input id="tire_text" name="tire_code" type="text" placeholder="R160F44" required/>

<label>Install Date: </label>
<input id="tire_text" name="tire_date_installed" type="date" required/>
<input type ="hidden" name="tire_num_of_repair" value=0 />

<input type="submit" value="submit">
</form>
</div>
</div>
</div>
