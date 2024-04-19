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

    // logu existing user
    public function login($email)
        {
            $sql = "SELECT email,password FROM user WHERE email=:email AND deleted !=0";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(["email"=>$email]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row;
        }
    // curreny user in session
    public function currentUser($email)
    {
        $sql = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(["email"=>$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    // Forogt password

    public function forgot_password($token, $email)
    {
        try {
           $sql = "UPDATE user SET token= :token, token_expire= DATE_ADD(NOW(),INTERVAL 10 MINUTE) WHERE email = :email";
           $stmt = $this->conn->prepare($sql);
           $stmt->execute(['token'=>$token, 'email'=>$email]);
           return true;
        } catch (PDOException $e) {
            echo "forgot error" .$e->getMessage();
            return false;

        }
    }

    // reset password
    public function reset_pass_auth($email,$token)
    {
        try {
           $sql = "SELECT id FROM user WHERE email = :email AND token = :token AND token != '' AND token_expire > NOW() AND deleted != 0";
           $stmt = $this->conn->prepare($sql);
           $stmt->execute(['email' => $email, 'token' => $token]);
           $row = $stmt->fetch(PDO::FETCH_ASSOC);
           return $row;
        } catch (PDOException $e) {
            echo "Reset: " .$e->getMessage();
            return false;
        }
    }

    // update new password

    public function update_new_pass($pass,$email)
    {
       try {
        $sql = "UPDATE user SET token = '', password = :pass WHERE email = :email AND deleted != 0";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['pass' => $pass, 'email' => $email]);
        return true;
       } catch (PDOException $e) {
        echo "Updat password: " .$e->getMessage();
            return false;
       }


    }
}