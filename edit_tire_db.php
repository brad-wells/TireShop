<?php

function edit_tire($tire_id, $tire_veh, $tire_pos, $tire_code, $tire_name, $tire_date, $tire_num_of_repair)
{
    global $db;
    $query = 'DELETE FROM tire
              WHERE tire_id = :tire_id';

    $statement9 = $db->prepare($query);
    $statement9->bindValue(':tire_id',$tire_id);
    $statement9->execute();
    $statement9->closeCursor();

    $query99 = 'INSERT INTO tire
        (tire_id,tire_veh,tire_position,tire_code,tire_name,tire_date_installed, tire_num_of_repair)
        VALUES
        (:tire_id,:tire_vehicle, :tire_pos,:tire_code,:tire_name,:tire_date,:tire_num_of_repair)';

    $statement = $db->prepare($query99);

    $statement->bindValue(':tire_id',$tire_id);
    $statement->bindValue(':tire_vehicle',$tire_veh);
    $statement->bindValue(':tire_pos',$tire_pos);
    $statement->bindValue(':tire_code',$tire_code);
    $statement->bindValue(':tire_name',$tire_name);
    $statement->bindValue(':tire_date',$tire_date);
    $statement->bindValue(':tire_num_of_repair',$tire_num_of_repair);


    $success = $statement->execute();
    $statement->closeCursor();
    return $success;
}

function add_tire($tire_id, $veh_id, $tire_position, $tire_code, $tire_name, $tire_date_installed, $tire_num_of_repair)
{
    global $db;
    $query2 = 'INSERT INTO tire
        (tire_id,tire_veh,tire_position,tire_code,tire_name,tire_date_installed, tire_num_of_repair)
        VALUES
        (:tire_id,:tire_vehicle, :tire_pos,:tire_code,:tire_name,:tire_date,:tire_num_of_repair)';

    $statement = $db->prepare($query2);

    $statement->bindValue(':tire_id',$tire_id);
    $statement->bindValue(':tire_vehicle',$veh_id);
    $statement->bindValue(':tire_pos',$tire_position);
    $statement->bindValue(':tire_code',$tire_code);
    $statement->bindValue(':tire_name',$tire_name);
    $statement->bindValue(':tire_date',$tire_date_installed);
    $statement->bindValue(':tire_num_of_repair',$tire_num_of_repair);


    $success = $statement->execute();
    $statement->closeCursor();
    return $success;
}

function delete_tire($tire_id)
{
    global $db;
    $query = 'DELETE FROM tire
              WHERE tire_id = :tire_id';

    $statement9 = $db->prepare($query);
    $statement9->bindValue(':tire_id',$tire_id);
    $success9 = $statement9->execute();
    $statement9->closeCursor();
    return $success9;
}