<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer ID Query</title>
</head>
<body>
<?php

 //MySQLi extension
  // Create connection
  $mysqli = new mysqli("local host", "root", "Daniemax2018!", "Costumers");
// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. "
                          .$mysqli->connect_error);
}

$sql = "SELECT * FROM Customers";
$rs= mysqli_query($conn,$sql);

if ($res = $mysqli->query($sql)) {
    if ($res->num_rows > 0) {

        echo "<table>";
        echo "<tr>";
        echo "<th>Costumerid</th>";
        echo "<th>Firstname</th>";
        echo "<th>Lastname</th>";
        echo "<th>Email</th>";
        echo "<th>Address</th>";
        echo "<th>Datecreated</th>";
        echo "<th>Lastupdated</th>";

        echo "</tr>";
        while ($row = $res->fetch_array()) 
        {
            echo "<tr>";
            echo "<td>".$row['Costumerid']."</td>";
            echo "<td>".$row['Firsttname']."</td>";
            echo "<td>".$row['Lasttname']."</td>"
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Address']."</td>";
            echo "<td>".$row['Datecreated']."</td>";
            echo "<td>".$row['lastupdated']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        $res->free();
    }
    else {
        echo "No matching records are found.";
    }
}
else {
    echo "ERROR: Could not able to execute $sql. "
                                             .$mysqli->error;
}
$mysqli->close();
?>

</body>
</html>
      
        

