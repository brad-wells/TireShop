<?php

session_start();

$valid = false;

if(isset($_POST['user_name']))
{
    $user_name = $_POST['user_name'];

    if($user_name == "user")
    {
        if(isset($_POST['password']))
        {
            $password = $_POST['password'];
            if($password =='passme')
            {
                $valid = true;
                $_SESSION['user_id'] = $user_name;
            }
        }
    }
}

if (!$valid)
{
    header("location: login.html");
    exit();
}
else
{
    header("Location: index.php");
}