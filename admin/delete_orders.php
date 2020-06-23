<?php
include_once "init.php";

if(trim($_GET['id']) != '')
{
    $id = trim($_GET['id']);
    $sql = "DELETE FROM orders_t WHERE id = '$id'";
    mysqli_query($connect, $sql);
    header("location: delete_orders.php");
}else {
    header("location: dash.php");
}