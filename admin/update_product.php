<?php 
include_once "init.php";
$title = "UPDATE PRODUCT";
include_once "admin_header.php";
$errors = [];

if(!isset($_SESSION['user']))
    header("location: login.php");

// find the product to be updated

// get if the url contains some id for a product else redirect to the homepage
if(trim($_GET['id']) != '')
{
    $id = trim($_GET['id']);
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $query = mysqli_query($connect, $sql);
    if($query)
        $product = mysqli_fetch_assoc($query);
}else {
    // header("location: dash.php");
}

if(isset($_POST['submit']))
{
    // get form data into variables

    $name = htmlspecialchars(trim($_POST['name']));
    $quantity = htmlspecialchars(trim($_POST['qty']));
    $price = htmlspecialchars(trim($_POST['price']));
    $type = htmlspecialchars(trim($_POST['type']));
    $id = $_POST['id'];

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
                $sql = "UPDATE products SET name = '$name', type = '$type', quantity = '$quantity', price = '$price', image = '$fileName' WHERE id = '$id'";

                mysqli_query($connect, $sql);
            }
            else{
                array_push($errors, 'File not uploaded');
            }


        }else{
            array_push($errors, "File type not supported.");
        }
        
    }else{
        array_push($errors, 'An error occured,try again');
    }



}

?>


        <!-- main content container -->
        <div class="dash_content">
            
            <form action="update_product.php" method="post" class="addForm" enctype = 'multipart/form-data'>
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
                    <td><input type="file" name="file" required value = "<?= $product['image'] ?? '' ?>"></td>
                </tr>
                <tr>
                    <th>product name</th>
                    <td><input type="text" name="name" required value = "<?= $product['name'] ?? '' ?>"></td>
                </tr>
                <tr>
                    <th>product quantity</th>
                    <td><input type="text" name="qty" required value = "<?= $product['quantity'] ?? '' ?>"></td>
                </tr>
                <tr>
                    <th>product price</th>
                    <td><input type="text" name="price" required value = "<?= $product['price'] ?? '' ?>"></td>
                </tr>

                 <tr>
                    <th>product type</th>
                    <td>
                        <select name="type" id="type" required>
                            <option value="cereal" <?php if($product['type'] == 'cereal') echo 'selected' ?>>Cereals</option>

                            <option value="tuber" <?php if($product['type'] == 'tuber') echo 'selected' ?>>Tuber</option>

                            <option value="legume" <?php if($product['type'] == 'legume') echo 'selected' ?>>Legume</option>

                            <option value="vegetable" <?php if($product['type'] == 'vegetable') echo 'selected' ?>>Vegetable</option>
                        </select>
                    </td>
                </tr>
                
                </table>
                <div>
                    <input type="text" hidden value="<?= $product['id'] ?>" name="id">
                    <input type="submit" value="add product" name="submit">
                </div>
            </form>


        </div>
    </div>

  <?php
  include_once "admin_footer.php";