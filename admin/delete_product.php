<?php
include_once "init.php";

if(trim($_GET['id']) != '')
{
    $id = trim($_GET['id']);
    $sql = "DELETE FROM products WHERE id = '$id'";
    mysqli_query($connect, $sql);
    header("location: all_products.php");
}else {
    header("location: dash.php");
}