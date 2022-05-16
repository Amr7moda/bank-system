<?php
$conn = mysqli_connect('localhost', 'root', '', 'bank');

if ($conn === false) {
    echo mysqli_connect_error();
    die();
}


$name = $_POST['name'];
$cname = $_POST['cname'];
$amount = $_POST['amount'];



$sql = "INSERT INTO transactions ( NAME, CUSTOMER_NAME , BALANCE)
VALUES ('$name','$cname','$amount')";

$result = mysqli_query($conn, $sql);

$balance = "UPDATE `customers` 
SET `current_balance` = `current_balance` + ". (int)$amount ." 
WHERE name = '$cname' ";


$result = mysqli_query($conn, $balance);

  header('location: customrs.php')
?>