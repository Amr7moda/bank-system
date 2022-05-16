<?php

$conn = mysqli_connect('localhost','root','','bank');

$query_transactions = "SELECT * from transactions";
$result_transactions = mysqli_query($conn, $query_transactions);

$query_customers = "SELECT * from customers";
$result_customers = mysqli_query($conn, $query_customers);


if ($conn === false){
    echo mysqli_connect_error();
    die();
}

?>