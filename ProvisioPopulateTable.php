<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POPULATING CUSTOMER TABLE</title>
</head>
<body>
<?php

//MySQLi extension
$servername = "localhost";
$username = "root";
$password = "DanieMax2018!";
$dbname = "Customers";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if($mysqli→connect_errno ) {
  printf("Connect failed: %s<br />", $mysqli→connect_error);
  exit();
}

printf('Connected successfully.<br />');

if(! get_magic_quotes_gpc() ) {

  $customer_id = addslashes ($_POST['customer_id ']);
  $reservation_id = addslashes ($_POST['reservation_id']);
    } else {
  $customer_id = $_POST['customer_id'];
  $reservation_id = $_POST['reservation_id'];
    }
    {
  $first_name = addslashes ($_POST['first_name']);
  $last_name = addslashes ($_POST['last_name']);
      } else {
  $first_name = $_POST['last_name'];
  $last_name = $_POST['last_name'];
    }
    {
  $email = addslashes ($_POST['email']);
  $address_id = addslashes ($_POST['address_id']);
      } else {
  $email = $_POST['email'];
  $address_id = $_POST['address_id'];
    }
    $create_date = $_POST['create_date'];
    $last_update= $_POST['last_update'];

    $sql = "INSERT INTO Customers.new_table ".
    "(customer_id,reservation_id, first_name, last_name, email, address_id, create_date, last_update) "."VALUES ".
    "(customer_id,reservation_id, first_name, last_name, email, address_id, create_date, last_update) ";

    if ($mysqli→query($sql)) {
      printf("Record inserted successfully.<br />");
   }
   if ($mysqli→errno) {
      printf("Could not insert record into table: %s<br />", $mysqli→error);
   }
   $mysqli→close();
} else {
  ?>
<form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Customer ID</td>
               <td><input name = "customer_id" type = "text" id = "customer_id"></td>
            </tr>         
            <tr>
                <td width = "250">Reservation ID</td>
                <td><input name = "reservation_id" type = "text" id = "reservation_id"></td>
           </tr>         
           <tr>
                <td width = "250">First Name</td>
                <td><input name = "first_name" type = "text" id = "first_name"></td>
           </tr> 
           <tr>
           <td width = "250">Last Name</td>
           <td><input name = "last_name" type = "text" id = "last_name"></td>
           </tr> 
           <tr>
           <td width = "250">Email</td>
           <td><input name = "email" type = "text" id = "email"></td>
           </tr>
           <tr>
           <td width = "250">Address</td>
           <td><input name = "address_id" type = "text" id = "address_id"></td>
           </tr>    
           <tr>
           <td width = "250">Date Created</td>
           <td><input name = "create_date" type = "text" id = "create_date"></td>
           </tr>
           <tr>
           <td width = "250"> </td>
           <td></td>
        </tr>         
        <tr>
           <td width = "250"> </td>
           <td><input name = "add" type = "submit" id = "add"  value = "Add Tutorial"></td>
        </tr>
     </table>
  </form>       
<?php
}
?>
</body>
</html>