<?php

function get_customer_id_from_phone($cust_phone)
{
    global $db;

    $query = "SELECT DISTINCT customer_id FROM customer
                WHERE cust_phone LIKE '%$cust_phone%'";
    $statement = $db ->prepare($query);
    $statement ->execute();
    $customer_id = $statement->fetch();
    $statement->closeCursor();
    return $customer_id;
}

function get_customer_from_phone($cust_phone)
{
    global $db;

    $query = "SELECT * FROM customer
                WHERE cust_phone LIKE '%$cust_phone%'";
    $statement2 = $db ->prepare($query);
    $statement2 ->execute();
    $customer_id = $statement2->fetchAll();
    $statement2->closeCursor();
    return $customer_id;
}

function get_customer_f_name_from_id($customer_id)
{
    global $db;

    $query = "SELECT DISTINCT customer_f_name FROM customer
                WHERE customer_id LIKE '%$customer_id%'";
    $statement3 = $db ->prepare($query);
    $statement3 ->execute();
    $cust_id = $statement3->fetch();
    $statement3->closeCursor();
    return $cust_id;
}
