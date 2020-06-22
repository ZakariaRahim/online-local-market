

       <?php 
session_start();
$connect=mysqli_connect("localhost","root","", "produce");
 


if (isset($_GET["action"])) {
    if ($_GET["action"]=="insert") {
     
      foreach ($_SESSION["cart"] as $keys => $values) {
  
        if ($values["item_id"]== $_GET["id"]) {
          $name=$values['item_name'];
          $qty=$values['item_qty'];
          $price=$values['item_price'];
          $totalprice=number_format($values["item_qty"]* $values["item_price"] ,2);
          $fullname=$_SESSION['fname'];
          $region=$_SESSION['region'];
          $address=$_SESSION['address'];
          $tel=$_SESSION['tel'];
          $email=$_SESSION['email'];
          $gps=$_SESSION['gps'];
        
          $slq1=" INSERT INTO `general_orders_t`( `Fullname`, `Rigion`, `Address`, `Tel`, `Email`, `Gps`, `ProductName`, `quantity`, `unitPrice`, `totalPrice`) 
          VALUES('".$fullname."','".$region."','".$address."','".$tel."','".$email."','".$gps."','".$name."','".$qty."','".$price."','".$totalprice."') ";
       $data1=mysqli_query($connect,$slq1);
       
          echo '<script>alert("Product Ordered Successfully")</script>';
          session_destroy();
          session_unset();
          
          echo '<script>window.location="generalcustomer.php" </script>';
        }
      }
    }
    
  }


?>

