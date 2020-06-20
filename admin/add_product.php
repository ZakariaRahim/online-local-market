<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">


    <title>ZIGRI | ADD PRODUCT</title>
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
                        <a href="dash.php">home</a>
                    </li>
                    <li>
                        <a href="add_product.php" class="current">add product</a>
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
            
            <form action="" method="post" class="addForm">
                <table>
                <tr>
                    <th>upload picture</th>
                    <td><input type="file"></td>
                </tr>
                <tr>
                    <th>product name</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>product quantity</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>product price</th>
                    <td><input type="text"></td>
                </tr>
                
                </table>
                <div>
                    <input type="submit" value="add product">
                </div>
            </form>


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