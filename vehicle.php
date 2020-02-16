<?php

function get_vehicles_for_customer($cust_phone)
{
    global $db;

    $query = "SELECT * FROM vehicle
                WHERE customer_id LIKE '%$cust_phone%'";

    $statement = $db ->prepare($query);
    $statement ->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    return $vehicles;
}

function get_vehicles_for_customer_with_id($customer_id)
{
    global $db;

    $query = "SELECT * FROM vehicle
                WHERE customer_id LIKE '%$customer_id%'";

    $statement = $db ->prepare($query);
    $statement ->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    return $vehicles;
}

function get_vehicle_details($veh_id)
{
    global $db;

    $query = "SELECT * FROM vehicle
				WHERE veh_id LIKE '%$veh_id%' ";

    $statement2 = $db->prepare($query);
    $statement2 ->execute();
    $vehicle = $statement2->fetchAll();
    $statement2->closeCursor();
    return $vehicle;
}

