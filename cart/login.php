<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'produce');

$errors = [];
if(isset($_POST['submit']))
{
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    // user validation
    // username and password field should not be blank
    if($username != '' && $password != ''){

        
        // get the current user from database
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $query = mysqli_query($connect, $sql);

        if($query)
            $result = mysqli_fetch_assoc($query);

        if(!empty($result) && password_verify($password, $result['password'] ))
        {
            // if a user is returned and the password matches, proceed to login
            $_SESSION['user'] = $result;
            header('location: ../index.php');
        }else{
            array_push($errors, 'username and password do not match');
        }   
    }else{
        array_push($errors, 'Username and password required');
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


    <title>ZIGRI | USER LOGIN</title>
</head>
<body>
    
    <div class="login_box">
        <div class="title">zigri shop</div>
        <form action="login.php" method="post" class="form2">
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
            <div class="form_title">user login</div>
            <div>
                <div class="label">user name</div>
                <input type="text" id="log_input" name="username">
            </div>
            <div>
                <div class="label">password</div>
                <input type="password" id="log_input" name="password">
            </div>
            <div>
                <input type="submit" id="log_submit" value="login" name="submit">
            </div>

            <div class="opt">new user? <a href="signup.php">click to signup</a></div>
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