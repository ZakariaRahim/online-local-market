<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">


    <title>ZIGRI | <?= $title ?></title>
</head>
<body>
    <div class="dash_container">
        <div class="dash_top">
            <h4>dashboard</h4>

            <div class="user">
                <h6>
                    hi <?= $_SESSION['user']['username'] ?? null; ?>
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
                        <a href="all_products.php" class="current">All products</a>
                    </li>
                    <li>
                        <a href="add_product.php">Add products</a>
                    </li>
                    <li>
                        <a href="orders.php">Orders records</a>
                    </li>
                </ul>
            </nav>
        </div>