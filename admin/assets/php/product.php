<?php
require_once './config.php';

class Product extends Database {
    // inserting new product
    public function insertProduct($productName, $category, $power, $price, $description, $images)
    {
        try {
            $sql = "INSERT INTO posts(productName, category, power, price, description, images) VALUES(:productName, :category, :power, :price, :description, :images)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'productName' => $productName,
                'category' => $category,
                'power' => $power,
                'price' => $price,
                'description' => $description,
                'images' => $images
            ]);
            
            return true;
        } catch (PDOException $e) {
            // Handle database errors
            echo "Database Error: " . $e->getMessage();
            return false;
        }
    }

    public function fetchProduct()
    {
        try {
          $sql = "SELECT * FROM posts ORDER BY product_id DESC";
          $stmt = $this->conn->query($sql);
          $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
          return $products;

        } catch (PDOException $e) {
            echo "Database Error: " . $e->getMessage();
            return false;
        }
    }

}
