<?php
include_once "init.php";
$title = "Orders";
include_once "admin_header.php";

if(!isset($_SESSION['user']))
    header("location: login.php");

// get orders from database

?>


<div class="dash_container" style="margin-left:27%;margin-top:3.97%;">
<!-- <table class="table"> -->
  <?php
// Attempt select query execution
$sql = "SELECT * FROM orders_t";
if($result = mysqli_query($connect, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-md table-bordered' >";
            echo "<tr class='bg-success'>";
                echo "<th width=4%>id</th>";
                echo "<th width=13%>Customer Id</th>";
                echo "<th width=13%>Name</th>";
                echo "<th width=10%>Quantity</th>";
                echo "<th width=10%>Unit Price</th>";
                echo "<th width=10%>Total Price</th>";
                // echo "<th width=1%>Delete</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td >" . $row['id'] . "</td>";
                echo "<td>" . $row['customerId'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['unitPrice'] . "</td>";
                echo "<td>" . $row['totalPrice'] . "</td>";
               echo ' <td><a class="btn btn-danger" href="delete_orders.php?id=<?= $id ?>">Delete</a></td>';
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo  "No Orders yet!!!";
    }
}
?>
</div>
<!-- </div> -->

