<?php 
include_once 'init.php';
$title = "ADD PRODUCT";
include_once 'admin_header.php';
$errors = [];

if(!isset($_SESSION['user']))
    header("location: login.php");


if(isset($_POST['submit']))
{
    // get form data into variables

    $name = htmlspecialchars(trim($_POST['name']));
    $quantity = htmlspecialchars(trim($_POST['qty']));
    $price = htmlspecialchars(trim($_POST['price']));
    $type = htmlspecialchars(trim($_POST['type']));

    // get the file to be uploaded

    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    $tmpName = $_FILES['file']['tmp_name'];

    $fileSplit = explode('.', $fileName );
    $fileExt =  end($fileSplit);

    $allowedExt = ['jpg', 'png', 'jpeg'];

    // var_dump($fileSplit);
    // die();


    if($error == '')
    {
        if(in_array($fileExt, $allowedExt))
        {
            if(move_uploaded_file($tmpName, 'uploaded_images/'. $fileName))
            {
                $sql = "INSERT INTO products (name, type, quantity, price, image)
                             VALUES('$name', '$type', '$quantity', '$price', '$fileName' )";

                mysqli_query($connect, $sql);
            }
            else{
                array_push($errors, 'File not uploaded');
            }


        }else{
            array_push($errors, "File type not supported.");
            // die($fileExt);
        }
        
    }else{
        array_push($errors, 'An error occured,try again');
    }



}

?>



        <!-- main content container -->
        <div class="dash_content">
            
            <form action="add_product.php" method="post" class="addForm" enctype = 'multipart/form-data'>
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
                <table>
                <tr>
                    <th>upload picture</th>
                    <td><input type="file" name="file" required value = "<?= $_FILES['file']['name'] ?? '' ?>"></td>
                </tr>
                <tr>
                    <th>product name</th>
                    <td><input type="text" name="name" required value = "<?= $_POST['name'] ?? '' ?>"></td>
                </tr>
                <tr>
                    <th>product quantity</th>
                    <td><input type="text" name="qty" required value = "<?= $_POST['qty'] ?? '' ?>"></td>
                </tr>
                <tr>
                    <th>product price</th>
                    <td><input type="text" name="price" required value = "<?= $_POST['price'] ?? '' ?>"></td>
                </tr>

                 <tr>
                    <th>product type</th>
                    <td>
                        <select name="type" id="type" required>
                            <option value="cereal" selected>Cereals</option>
                            <option value="legume" selected>Legumes</option>
                            <option value="tuber" selected>Roots and Tubers</option>
                            <option value="vegetable" selected>Veegetables</option>
                        </select>
                    </td>
                </tr>
                
                </table>
                <div>
                    <input type="submit" value="add product" name="submit">
                </div>
            </form>


        </div>
    </div>


<?php 

include_once "admin_footer.php";