<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropping Customer Table</title>
</head>
<body>
    
<?php
$linebreak = '<br />';

//MySQLi extension
$servername = "localhost";
$username = "root";
$password = "DanieMax2018!";
$dbname = "Customers";

$mysqli = new mysqli("localhost","root","", "Customers");

//checking connection
if($mysqli→connect_errno ) {
    printf("Connect failed: %s<br />", $mysqli→connect_error);
    exit();
 }
 printf('Connected successfully.<br />');

 if ($mysqli→query("Drop Table Customers")) {
    printf("Table Customers dropped successfully.<br />");
 }
 if ($mysqli→errno) {
    printf("Could not drop table: %s<br />", $mysqli→error);
 }
 $mysqli→close();
?>

</body>
</html>