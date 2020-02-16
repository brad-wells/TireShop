<?php

function tire_names()
{
    global $db;

    $query = "SELECT DISTINCT tire_name  FROM tire";

    $statement4 = $db->prepare($query);
    $statement4 ->execute();
    $tire_name = $statement4->fetchAll();
    $statement4->closeCursor();
    return $tire_name;
}

