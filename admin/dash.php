<?php 
include_once "init.php";;
$title = "ADMIN DASHBOARD";
include_once "admin_header.php";

if(!isset($_SESSION['user']))
    header("location: login.php");

// find cereal count

$sql_c = "SELECT COUNT(type) num FROM products WHERE type = 'cereal'";
$query = mysqli_query($connect, $sql_c);
$cereal = 0;
if($query)
    $cereal= mysqli_fetch_assoc($query)['num'];



// find vegetable count

$sql_v = "SELECT COUNT(type) num FROM products WHERE type = 'vegetable'";
$query = mysqli_query($connect, $sql_v);
$vegetable = 0;
if($query)
    $vegetable= mysqli_fetch_assoc($query)['num'];


// find legume count

$sql_l = "SELECT COUNT(type) num FROM products WHERE type = 'legume'";
$query = mysqli_query($connect, $sql_l);

$legume = 0;

if($query)
    $legume= mysqli_fetch_assoc($query)['num'];

    

// find tuber count

$sql_t = "SELECT COUNT(type) num FROM products WHERE type = 'tuber'";
$query = mysqli_query($connect, $sql_t);

$tuber = 0;

if($query)
    $tuber= mysqli_fetch_assoc($query)['num'];



// find customer count

$sql_cu = "SELECT COUNT(username) num FROM users ";
$query = mysqli_query($connect, $sql_cu);

$customer = 0;

if($query)
    $customer= mysqli_fetch_assoc($query)['num'];


$sql_o="SELECT COUNT(customerId) num FROM orders_t";
$query = mysqli_query($connect, $sql_o);
  $orders=0;
if($query)
     $orders=mysqli_fetch_assoc($query)['num'];



?>

        <!-- main content container -->
        <div class="dash_content">
            
            <div class="d_box col-md-4 mr-5 ml-5">
                <i class="fa fa-carrot"></i>
                <h4 id="vegetable"><?= $vegetable ?></h4>
                
                <div class="d_foot">
                    <h5 class="f-veg">vegetables</h5>
                </div>
            </div>

            <div class="d_box col-md-4 mr-5">
                <img src="../img/d_beans.png" alt="">
                <h4 id="legume"><?= $legume ?></h4>
                
                <div class="d_foot">
                    <h5 class="f-veg">legumes</h5>
                </div>
            </div>

            <div class="d_box col-md-4 mr-5">
            <img src="../img/d_cassava.jpg" alt="">
            <h4 id="tuber"><?= $tuber ?></h4>
                
                <div class="d_foot">
                    <h5 class="f-veg">root tubers</h5>
                </div>
            </div>

            <div class="d_box col-md-4 mr-5 ml-5">
            <img src="../img/d_rice.jpg" alt="">
            <h4 id="cereal"><?= $cereal ?></h4>
                
                <div class="d_foot">
                    <h5 class="f-veg">cereals</h5>
                </div>
            </div>

            <div class="d_box col-md-4 mr-5">
                <i class="fa fa-users"></i>
                <h4 id="customer"><?= $customer ?></h4>
                
                <div class="d_foot">
                    <h5 class="f-veg">customers</h5>
                </div>
            </div>

            <div class="d_box col-md-4 mr-5">
            <i class="fas fa-shopping-cart fa-4x" style="padding-top:10%;"></i>
                <h4 id="orders"><?= $orders ?></h4>
                
                <div class="d_foot">
                    <h5 class="f-veg">Orders</h5>
                </div>
            </div>
        

        </div>
    </div>


<?php 
include_once "admin_footer.php";
?>

