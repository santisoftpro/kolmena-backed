<?php

require_once './config.php';
class User extends Database {
    // register new user
    public function register($name, $email, $password) {
        $sql = "INSERT INTO user (fullName,email,password) VALUES(:name,:email,:password)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name'=>$name,'email'=>$email,'password'=>$password]);
        return true;
    
}
// check if user already registered

    public function user_exist($email)
    {
        $sql = "SELECT email FROM user WHERE email=:email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}