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
          echo '<script>window.location="cereal.php"</script>';
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
        echo '<script>window.location="cereal.php" </script>';
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

      <!-- css files -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="../fontawesome/css/all.min.css">
      <link rel="stylesheet" href="../css/style.css">

      <title>ZIGRI | CEREALS </title>
  </head>
  <body>
    <div class="index_container">

        <!-- menus  -->
        <?php include_once '../menu.php' ; ?>

      <div class="p_container">

        <div class="breadcrumb">
          <a href="../index.php">home&nbsp;/&nbsp;</a>
          <a href="cereal.php">cereals</a>
        </div>


        <!-- cart symbol -->
        <?php
            if(!empty($_SESSION["cart"])) {
                $cart_count = count(array_keys($_SESSION["cart"]));

        ?>
            <form action="cart.php" method="post" id="nameform">
          
              <input type="hidden" name="iqty" id="" class="form-control" value="1">
              <input type="hidden" name="iname"  class="form-control" value="<?php echo $row["name"];?>">
              <input type="hidden" name="iprice"  class="form-control" value="<?php echo $row["price"];?>">
              <a href="cart.php" form="nameform" name="proceed" class="pro">
                <i class="fas fa-cart-plus fa-4x"></i><?php echo $cart_count;?>
              </a>

            </form>

        <?php
            }

          $query="SELECT * FROM `cereals_t`";
          $result=mysqli_query($connect,$query);
          if($result){
          while ($row=mysqli_fetch_assoc($result)) {

        ?>

          <div class="box">

              <form action="cereal.php?action=add&id=<?php echo $row['id']; ?>" method="post" class="p_form">

                <div class="col-md-4">

                  <img src="<?php echo $row["image"];?>" class="">

                    <div class="p_info">
                      <h3><?php echo $row["name"];?></h3>
                        <input type="hidden" name="hidden_name" id="" value="<?php echo $row["name"];?>">
                      
                      <h5>
                        <span>ghc</span>
                        <input type="text" name="hidden_price" id="" value="<?php echo $row["price"];?>">
                      </h5>
                      <input type="text" name="qty" id="" value="1" class="qty">
                      <br>
                      <input type="submit" value="Add To Cart"  name="add_to_cart">
                    </div>
                </div>

              </form>
          </div>

        <?php 
              }
          }
        ?>

      </div>
    </div>

    <?php include_once '../footer.php'; ?>
    



    <!-- js files -->
    <script src="js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
    <script src="js/popper.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="js/main.js" charset="utf-8"></script>
  </body>
</html>