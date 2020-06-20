<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>ZIGRI | HOME</title>
</head>
<body>
    <div class="index-container">
    
    <div class="top_head">
        <div class="container-fluid">
            <div class="row">

                <!-- site logo -->
                <div class="col-md-6">
                    <div class="logo">
                        <a href="index.php">zigri</a>
                    </div>
                </div>

                <!-- menus  -->
                <div class="col-md-6">
                    <nav class="list">
                        <ul>
                            <li>
                                <a href="index.php">
                                    <i class="fa fa-home"></i>
                                    home
                                </a>
                            </li>
                            <li>
                                <a href="cart/cart.php">
                                    <i class="fa fa-shopping-cart"></i>
                                    shopping cart
                                </a>
                            </li>
                            <li>
                                <a href="cart/login.php">
                                    <i class="fa fa-user"></i>
                                    login
                                </a>
                            </li>
                            <li>
                                <a href="cart/signup.php">
                                    <i class="fa fa-users"></i>
                                    signup
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    

    <section class="slider">


        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
                <li data-target="#slides" data-slide-to="3"></li>
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide_one"></div>
                </div>

                <div class="carousel-item">
                    <div class="slide_two"></div>
                </div>

                <div class="carousel-item">
                    <div class="slide_three"></div>
                </div>

                <div class="carousel-item">
                    <div class="slide_four"></div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="feature">

        <h2>featured product</h2>
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <a href="cart/cereals.php">
                        <img src="img/rice2.jpg" alt="">
                    </a>
                    <h6>rice</h6>
                </div>

                <div class="col-md-4">
                    <a href="cart/vegetables.php">
                        <img src="img/carrot3.jpg" alt="">
                    </a>
                    <h6>carrot</h6>
                </div>

                <div class="col-md-4">
                    <a href="cart/root.php">
                        <img src="img/radish2.jpg" alt="">
                    </a>
                    <h6>radish</h6>
                </div>

            </div>
        </div>
    </section>

    <section class="products">
        <h2>products category</h2>
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <a href="cart/vegetables.php">
                        <div class="veg ml-2"></div>
                        <div class="name">
                            vegetable
                        </div>
                        
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="cart/root.php">
                        <div class="root ml-2"></div>
                        <div class="name">
                            root tubers
                        </div>
                        
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="cart/cereals.php">
                        <div class="cereal ml-2"></div>
                        <div class="name">
                            cereals
                        </div>
                        
                    </a>
                </div>

                <div class="col-md-4 ">
                    <a href="cart/legumescart.php">
                        <div class="legume ml-2"></div>
                        <div class="name">
                            legumes
                        </div>
                        
                    </a>
                </div>

            </div>
        </div>
    
    </section>

    </div>

    <?php include_once 'footer.php' ; ?>
    











    <!-- js files -->
    <script src="js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
    <script src="js/popper.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="js/main.js" charset="utf-8"></script>
</body>
</html>