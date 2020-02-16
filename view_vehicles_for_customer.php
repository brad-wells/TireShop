<?php


?>
    <div id="background">

    <div align="center" id="display">

    <h3>Customer Info:</h3>


    <table>
        <tr>

            <th>Customer ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
        </tr>
        <tr>

            <?php foreach($customer as $c) :?>
                <td id="id">	<?php echo $c['customer_id'];?></td>
                <td id="name">	<?php echo $c['customer_f_name']; ?></td>
                <td id="name">	<?php echo $c['customer_l_name']; ?></td>
                <td id="info">  <?php echo $c['cust_phone'];?></td>
                <td id="info">	<?php echo $c['cust_email'];?></td>



            <?php endforeach; ?>



        </tr>


    </table>




    <h3>  <?php  foreach ($customer as $c):
        echo $c['customer_f_name'];
        endforeach; ?>'s Vehicles:</h3>
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
<?php	 foreach($vehicles as $cv) : ?>
    <td id="veh"> <?php echo $cv['veh_id'];?></td>
    <td id="veh"> <?php echo $cv['veh_vin'];?></td>
    <td id="veh"> <?php echo $cv['veh_mileage'];?></td>
    <td id="veh"> <?php echo $cv['veh_year'];?></td>
    <td id="veh"> <?php echo $cv['veh_model'];?></td>
    <td id="veh"> <?php echo $cv['veh_make'];?></td>
    <td><form action="../view/view_vehicle.php" method="post">
            <input type="hidden" name="veh_id"
                   value="<?php echo $cv['veh_id'];?>">
            <input type="submit" value="view">
        </form></td>
    </tr>
    <tr>




<?php endforeach; ?>
