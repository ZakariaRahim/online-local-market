<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">


    <title>ZIGRI | ADMIN DASHBOARD</title>
</head>
<body>
    <div class="dash_container">
        <div class="dash_top">
            <h4>dashboard</h4>

            <div class="user">
                <h6>
                    hi <?php echo "admin"; ?>
                </h6>
            </div>
        </div>

        <!-- right side bar -->
        <div class="dash_side">
            <h4>admin dashboard</h4>
            <nav class="side_bar">
                <ul>
                    <li>
                        <a href="dash.php" class="current">home</a>
                    </li>
                    <li>
                        <a href="add_product.php">add product</a>
                    </li>
                    <li>
                        <a href="update_product.php">update product</a>
                    </li>
                    <li>
                        <a href="customer.php">customer record</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- main content container -->
        <div class="dash_content">
            
            <div class="d_box col-md-4 mr-5 ml-5">
                <i class="fa fa-carrot"></i>
                <h4>4</h4>
                
                <div class="d_foot">
                    <h5 class="f-veg">vegetables</h5>
                </div>
            </div>

            <div class="d_box col-md-4 mr-5">
                <img src="../img/d_beans.png" alt="">
                <h4>4</h4>
                
                <div class="d_foot">
                    <h5 class="f-veg">legumes</h5>
                </div>
            </div>

            <div class="d_box col-md-4 mr-5">
            <img src="../img/d_cassava.jpg" alt="">
            <h4>4</h4>
                
                <div class="d_foot">
                    <h5 class="f-veg">root tubers</h5>
                </div>
            </div>

            <div class="d_box col-md-4 mr-5 ml-5">
            <img src="../img/d_rice.jpg" alt="">
            <h4>4</h4>
                
                <div class="d_foot">
                    <h5 class="f-veg">cereals</h5>
                </div>
            </div>

            <div class="d_box col-md-4 mr-5">
                <i class="fa fa-users"></i>
                <h4>4</h4>
                
                <div class="d_foot">
                    <h5 class="f-veg">customers</h5>
                </div>
            </div>
        

        </div>
    </div>






    <!-- js files -->
    <script src="../js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
    <script src="../js/popper.min.js" charset="utf-8"></script>
    <script src="../js/bootstrap.min.js" charset="utf-8"></script>
    <script src="../js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="../js/main.js" charset="utf-8"></script>
</body>
</html>