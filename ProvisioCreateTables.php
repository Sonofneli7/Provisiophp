<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>
    
<?php
$linebreak = '<br />';

//MySQLi extension
$servername = "localhost";
$username = "root";
$password = "DanieMax2018!";
$dbname = "Customers";

$conn = new mysqli("localhost","root","", "Customer");

// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql code to create table
$sql = "CREATE TABLE Customers.new_table(
    costumer_id INT(2)  PRIMARY KEY, 
    reservation_id VARCHAR(45)
    first_name VARCHAR(45) NOT NULL,
    last_name VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL,
    address_id VARCHAR(45) NOT NULL,
    create_date VARCHAR(45) NOT NULL,
    last_update VARCHAR(45) NOT NULL,
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table employees created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>

</body>
</html>