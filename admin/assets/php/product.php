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

    public function deleteProduct($id)
    {
        try {
            $sql = "DELETE FROM posts WHERE product_id = :id";
            $stmt= $this->conn->prepare($sql);
            $stmt->execute(['id'=> $id]);
            return true;
        } catch (PDOException $e) {
            echo "Database Error: " . $e->getMessage();
            return false;
        }
    }
    public function updateProduct($id, $productName, $category, $power, $price, $description, $images)
    
    {
        try {
           $sql = "UPDATE `posts` SET `productName`=:productName,`category`=:category,`power`=:power,`price`=:price,`description`=:description,`images`=:images WHERE `product_id` =:id ";
           $stmt = $this->conn->prepare($sql);
           $stmt->execute([
            "id"=> $id,
            'productName' => $productName,
            'category' => $category,
            'power' => $power,
            'price' => $price,
            'description' => $description,
            'images' => $images
        ]);
        return true;
        } catch (PDOException $e) {
           echo 'Query error: '. $e->getMessage();
        }
    }

    public function fetchProductById($id)
    {
        try {
            $sql = "SELECT * FROM posts WHERE  product_id= :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(["id"=>$id]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
            
        } catch (\Throwable $th) {
           echo "fetching error: ". $th->getMessage();
        }
    }
}
