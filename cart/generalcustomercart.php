<?php 
session_start();
include 'headerfiles.php';



if (isset($_POST['check'])) {
     $_SESSION["fname"]=$_POST["fname"];
     $_SESSION["region"]=  $_POST["region"];
     $_SESSION["address"]= $_POST["address"];
     $_SESSION["tel"]=$_POST["tel"];
     $_SESSION["email"]=$_POST["email"];
     $_SESSION["gps"]=$_POST["gps"];
}
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
  
       <td> <a href="generalcustomer.php?action=delete&id=<?php echo  $values["item_id"];?>"><span class="text-danger"><button type="submit" class="btn btn-danger">Remove</button><i class="fas fa-trash-alt"></i> </span></a></td>
        
        <td ><a href="insertgeneraldata.php?action=insert&id=<?php echo $values['item_id']; ?>"><button type="submit"  class="btn btn-success">Order Now</button></a> </td>
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
 <a href="generalcustomer.php">
 
  <input type="submit" value="Back To Cart" class="btn btn-secondary"></a><br><br><br>

 <form  action="generalcustomercart.php" method="post" id="getme">
 <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Fill The Form Below:</h4>
  <p>Please FIll in your Details before clicking on the Order Now button</p>
  <hr>
  <p class="mb-0"> If you don't Fill the form, your order won't be successful.</p>
</div>
 
  <div class="row">
    <div class="col">
      <input type="text" name="fname" class="form-control" placeholder="Fullname name" required >
    </div>
    <div class="col">
      <input type="text" name="region" class="form-control" placeholder="Region" required>
    </div>
    <div class="col">
      <input type="text" name="address" class="form-control" placeholder="House Address">
    </div>
  </div><br><br>
  <div class="row">
    <div class="col">
      <input type="text" name="tel" class="form-control" placeholder="telephone number">
    </div>
    <div class="col">
      <input type="email" name="email" class="form-control" placeholder="Email Address">
    </div>
    <div class="col">
      <input type="text" name="gps" class="form-control" placeholder="GPS Address "><br>
  
    </div>
   
  </div>
  <input type="submit" value="Add Details" name="check" class="btn btn-outline-info btn-sm btn-block">
</form>
  </div>
</body>
</html>
