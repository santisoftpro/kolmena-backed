<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once './product.php';
$product = new Product();
if(isset($_POST['productInsert']))
{
    $productName = $_POST['productName'];
    $category = $_POST['category'];
    $power = $_POST['power'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $totalFiles = count($_FILES['postfiles']['name']);
    $fileArray = array();

    for($i = 0; $i < $totalFiles; $i++)
    {
        $imageName = $_FILES['postfiles']['name'][$i];
        $tempName = $_FILES['postfiles']['tmp_name'][$i]; // Use 'tmp_name' instead of 'name'
    
        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));
    
        $newImageName = uniqid() . '.' . $imageExtension;
    
        // Check for file upload errors
        if ($_FILES['postfiles']['error'][$i] !== UPLOAD_ERR_OK) {
            echo "File upload error for file: " . $imageName . ", Error code: " . $_FILES['postfiles']['error'][$i];
            continue; // Skip this file and continue with the loop
        }
        $uploadDir = 'uploads/';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true); // Create the directory with full permissions (0777)
            }

            else{
                if (move_uploaded_file($tempName, 'uploads/' . $newImageName)) {
                    $fileArray[] = $newImageName;
                } else {
                    echo "Failed to move file: " . $imageName;
                }
            }

      
    }
    
    $fileArray = json_encode($fileArray);

    if($product->insertProduct($productName,$category,$power,$price,$description,$fileArray))
    {
        header("Location: ../../productlist.php");
    }
    else{
        echo $user->showMessage('danger', 'Something went wrong');

    }
}

if(isset($_POST['updateProduct']))
{
    $id = $_POST['productId'];
    $productName = $_POST['productName'];
    $category = $_POST['category'];
    $power = $_POST['power'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if($product->updateProduct($id, $productName, $category, $power, $price, $description))
    {
        header("Location: ../../productlist.php");
    }
    else {
        echo $user->showMessage('danger', 'Something went wrong');
    }
}
?>