<?php 
include_once "../admin/init.php";
include 'headerfiles.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Preview</title>
    <link rel="stylesheet" href="cartstyles.css">
</head>
<body>
    <div class="container">
<div class="table-responsive" style="">
<h2 >Preview Orders</h2>
<table class="table table-bordered">

  <tr>
  
  <th>Item Name</th>
  <th>Quantity (Bags)</th>
  <th> UnitPrice (GHC)</th>
  <th>Total Price ( GHC)</th>
  <th width="12%">Customer Id </th>
  <th width="13%">Action</th>
  <th  width="13%"> Order</th>
  </tr>
   <?php
    if(!empty($_SESSION["cart"]) ){
     {
     
      }
      $total=0;

      foreach ($_SESSION["cart"] as $keys => $values) {
      ?>
      <tr>
       
       <td><?php echo $values["item_name"];?></td>
       <td><?php echo $values["item_qty"];?></td>
       <td><?php echo $values["item_price"];?></td>
       <td><?php  echo number_format($values["item_qty"]* $values["item_price"] ,2);?></td>
  
       <!-- we will be using user session id in order to get user name during login -->
       <td> <?= $_SESSION['user']['username'] ?? null; ?></td>
       <td> <a href="cereals.php?action=delete&id=<?php echo  $values["item_id"];?>"><span class="text-danger"><button type="submit" class="btn btn-danger">Remove</button><i class="fas fa-trash-alt"></i> </span></a></td>
        
        <td ><a href="insertdata.php?action=insert&id=<?php echo $values['item_id']; ?>"><button type="submit" class="btn btn-success">Order Now</button></a> </td>
      </tr>
      <?php
      $total=$total + ($values["item_qty"] * $values["item_price"]);
      }
      ?>
      
       <tr>
       <td colspan="3" align="right">Total Price</td>
       <td align="right">GHC <?php echo number_format($total,2);?></td>

       </tr>
      <?php 
    }
   ?>
  
  </table>
  
 <a href="legumescart.php" class="btn btn-secondary">BACK

</a>
 

  </div>

 

</body>
</html>
