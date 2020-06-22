<?php
include_once "init.php";
$title = "All Products";
include_once "admin_header.php";

if(!isset($_SESSION['user']))
    header("location: login.php");

// get all products from database

$sql = "SELECT * FROM products";
$query = mysqli_query($connect, $sql);
?>


<div class="dash_container" style="margin-left:27%;margin-top:3.97%;">
    <?php 
    if($query){
?>
    <table class="table">
        <!-- make the table fit into the dash container by giving it some styles... -->
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th colspan="2">&nbsp;</th>
        </tr>
        <?php 
            while($result = mysqli_fetch_assoc($query)){ 
                extract($result);
            ?>
        <tr>
            <td><?= $name ?></td>
            <td><?= $type ?></td>
            <td><?= $quantity ?></td>
            <td><?= $price  ?></td>
            <td> <img src="<?= 'uploaded_images/'. $image ?>" alt="Product image" 
                        style="height: 100px; width:100px"> </td>
            <td><a class="btn btn-info" href="update_product.php?id=<?= $id ?>">Update</a></td>
            <td><a class="btn btn-danger"  href="delete_product.php?id=<?= $id ?>">Delete</a></td>
        </tr>
            <?php } ?>
    </table>

        <?php } ?>
</div>

