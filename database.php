

<?php
$host_name = 'db786692373.hosting-data.io';
$database = 'db786692373';
$user_name = 'dbo786692373';
$password = 'Assignment5!';
$db = null;

try {
    $db = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
	
?>