<?php

    include '../admin/mysqli/db.php';
    $name = $_POST['name'];
    $sql =  "SELECT * FROM posts WHERE productName LIKE '$name%' ORDER BY product_id DESC";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $row): 
    $images = json_decode($row['images'], true); 
    if (!empty($images)) {
    $firstImage = reset($images);
    }
    ?>
    <a href="product.php?id=<?=$row['product_id']?>">
    <figure>
    <div class="image-icons">
    <img src="admin/assets/php/uploads/<?=$firstImage?>" />
    <i class="far fa-heart heart-icon"></i>
    <i class="far fa-star star-icon"></i>
    <i class="fas fa-share-alt share-icon"></i>
    <button class="cart-btn">Add to Cart <i class="fas fa-shopping-cart"></i></button>
    </div>
    <figcaption class="discover-caption">
    <p class="discover-subtitle"><?= $row['power'] ?></p>
    <p class="discover-title"><?= $row['productName'] ?></p>
    <div class="price-div">
    <p class="price">300 RWF</p>
    <p class="sale-price"><?= $row['price'] ?> RWF</p>
    </div>
    </figcaption>
    </figure>
    </a>
    <?php endforeach; ?>
?>             