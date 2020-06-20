<?php

$connect = mysqli_connect('localhost', 'root', '', 'produce');

$errors = [];

if(isset($_POST['submit']))
{
    // get fields into variable
    
    $username = htmlspecialchars(trim($_POST['username'])) ;
    $fullname = htmlspecialchars(trim($_POST['fullname'])) ;
    $email = htmlspecialchars(trim($_POST['email'])) ;
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $gps = htmlspecialchars(trim($_POST['gps']));
    $region = htmlspecialchars(trim($_POST['region']));
    $address = htmlspecialchars(trim($_POST['address']));
    $password = htmlspecialchars(trim($_POST['password']));

    // echo "<script>confirm('ok')</script>";

    if($username != '' && $fullname != '' && $email != '' 
            && $telephone != '' &&  $gps != '' &&  $region != '' && $address != '' )
    {
        // if no fields are empty, check if username alread registed

        $sql = "SELECT * FROM users WHERE username  '$username'";
        $query = mysqli_query($connect, $sql);

        if($query)
            $result = mysqli_fetch_assoc($query);

        if(empty($result))
        {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, fullname, telephone, email, address, gps, region, password)
                        VALUES ('$username', '$fullname', '$telephone', '$email', '$address', '$gps', '$region', '$password' )";

            if(mysqli_query($connect, $sql))
            {
                header('location: login.php');
            }else{
                echo $sql;
                array_push($errors, "field to create user, please try again");
            }

        }else{
            // username exist
            array_push($errors, 'username already exist');
        }
        
    }else{
        array_push($errors, "all fields are required");
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


    <title>ZIGRI | USER SIGNUP</title>
</head>
<body>
    
    <div class="login_box">
        <div class="title">zigri shop</div>
        <form action="signup.php" method="post" class="form3">
        
        <?php if(!empty($errors)){ ?>
            <div>
            <ul><!-- form errors goes in here, add som styles  -->
            <?php
            foreach ($errors as $error) { ?>
               
                <li><?= $error ?></li>
                

                
            <?php } ?>
            </ul>
        </div>
       <?php  } ?>
            
            <div class="form_title">user signup</div>

            <div class="input_float">
                <div>
                    <div class="label">user name</div>
                    <input type="text" id="log_input" name="username" value="<?= $_POST['username'] ?? '' ?>">
                </div>
                <div>
                    <div class="label">fullname</div>
                    <input type="text" id="log_input" name="fullname" value="<?= $_POST['fullname'] ?? '' ?>">
                </div>
                <div>
                    <div class="label">region</div>
                    <input type="text" id="log_input" name="region" value="<?= $_POST['region'] ?? '' ?>">
                </div>
                <div>
                    <div class="label">address</div>
                    <input type="text" id="log_input" name="address" value="<?= $_POST['address'] ?? '' ?>">
                </div>
                <div>
                    <div class="label">telephone</div>
                    <input type="text" id="log_input" name="telephone" value="<?= $_POST['telephone'] ?? '' ?>">
                </div>
            </div>

            <div class="input_float">
                <div>
                    <div class="label">email</div>
                    <input type="email" id="log_input" name="email" value="<?= $_POST['email'] ?? '' ?>">
                </div>
                <div>
                    <div class="label">gps</div>
                    <input type="text" id="log_input" name="gps" value="<?= $_POST['gps'] ?? '' ?>">
                </div>
                <div>
                    <div class="label">password</div>
                    <input type="password" id="log_input" name="password" >
                </div>
                <div>
                    <input type="submit" id="log_submit" value="login" name="submit">
                </div>
            </div>
        </form>
    </div>






    <!-- js files -->
    <script src="../js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
    <script src="../js/popper.min.js" charset="utf-8"></script>
    <script src="../js/bootstrap.min.js" charset="utf-8"></script>
    <script src="../js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="../js/main.js" charset="utf-8"></script>
</body>
</html>