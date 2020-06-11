<?php
include 'connect.php';
include 'headerfiles.php';

if (isset($_POST['add_to_cart'])) {
  if (isset($_SESSION["cart"])) {
    $item_array_id=array_column($_SESSION["cart"],"item_id");

    if(!in_array($_GET["id"],$item_array_id)){
      $count=count($_SESSION["cart"]);
      $item_array=array(
        'item_id'  =>$_GET["id"],
        'item_name'  =>$_POST["hidden_name"],
        'item_qty'  =>$_POST["qty"],
        'item_price'  =>$_POST["hidden_price"]

      );
      $_SESSION["cart"][$count]=$item_array;
      
    }
    else{
          echo '<script>alert("Item has been added already")</script>';        
          echo '<script>window.location="vegcart.php"</script>';
    }
    
  }
  else{
    $item_array=array(
      'item_id'  =>$_GET["id"],
      'item_name'  =>$_POST["hidden_name"],
      'item_qty'  =>$_POST["qty"],
      'item_price'  =>$_POST["hidden_price"]
    );
     $_SESSION["cart"][0]=$item_array;
  }
 
}
if (isset($_GET["action"])) {
  if ($_GET["action"]=="delete") {
    foreach ($_SESSION["cart"] as $keys => $values) {

      if ($values["item_id"]== $_GET["id"]) {
        unset($_SESSION["cart"][$keys]);
        echo '<script>alert("item Removed")</script>';
        echo '<script>window.location="vegcart.php" </script>';
      }
    }
  }
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>
   <link rel="stylesheet" href="cartstyles.css">
</head>
<body>
    <br/>
    <div class="container" style="">
      <h3 align="center">Zigri Shopping Cart</h3><br/>
      <h4 align="center">vegetables Page</h4><br/>
      <?php
if(!empty($_SESSION["cart"])) {
$cart_count = count(array_keys($_SESSION["cart"]));

?>
  <form action="cart.php" method="post" id="nameform">
        
        <input type="hidden" name="iqty" id="" class="form-control" value="1">
        <input type="hidden" name="iname"  class="form-control" value="<?php echo $row["name"];?>">
        <input type="hidden" name="iprice"  class="form-control" value="<?php echo $row["price"];?>">
        <a href="cart.php" form="nameform" name="proceed" class="pro"><i class="fas fa-cart-plus fa-4x">
        
        </i><?php echo $cart_count;?></a><br>
        </form>
     
      <?php
}
   $query="SELECT * FROM `vegetables_t`";
   $result=mysqli_query($connect,$query);
    if($result){
        while ($row=mysqli_fetch_assoc($result)) {
          ?>
         
      <div class="col-md-4" style="float:right;margin-top:5px;">
     
          <form  method="post" action="legumescart.php?action=add & id=<?php echo $row["id"];?>" >
        <div id="databasevalues" clas="col-xs-7 col-sm-6 col-lg-8">
        <img src="<?php echo $row["image"];?>" class="image-fluid"/>
        <h4 class="text-info"> <?php echo $row["name"];?></h4>
       
        <h4 class="text-danger"> <?php echo "GHC ".$row["price"];?></h4>
        <h4 class="text-danger" style="font-size:12px;"> <?php echo "Available quantity = ". $row["quantity"] ." Bags";?></h4>
        <input type="text" name="qty" id="" class="form-control" value="1">
        <input type="hidden" name="hidden_name"  class="form-control" value="<?php echo $row["name"];?>">
        <input type="hidden" name="hidden_price"  class="form-control" value="<?php echo $row["price"];?>">
        <input type="submit" value="Add To Cart"  name="add_to_cart" style="margin-top:5px;" class="btn btn-success">
      
        </div>
        </form>

      
      </div>
          <?php
        }
    }
   ?>

<div style="clear:both"></div>
<br/>

</div>

</div>
<br/>
</body>
</html>