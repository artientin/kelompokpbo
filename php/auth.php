<?php

class Auth
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    
    public function registerUser($username, $email, $password, $cpassword)
    {
        if ($this->isUserLoggedIn()) {
            header("Location: ../view/index.pph");
        }

        if ($this->validatePasswords($password, $cpassword)) {
            $hashedPassword = $this->hashPassword($password);

            if (!$this->isEmailRegistered($email)) {
                if ($this->insertUserToDatabase($username, $email, $hashedPassword)) {
                    $this->redirect("../view/index.php");
                } else {
                    $this->showAlert('Terjadi Kesalahan.');
                }
            } else {
                $this->showAlert('Email Sudah Terdaftar.');
            }
        } else {
            $this->showAlert('Password Tidak Sesuai');
        }
    }

    public function loginUser($email, $password)
    {
        if ($this->isUserLoggedIn()) {
            $this->redirect("../view/index.php");
        }

        $hashedPassword = $this->hashPassword($password);

        $stmt = $this->conn->prepare("SELECT * FROM masuk WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $hashedPassword);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['username'] = $result->fetch_assoc()['username'];
            $this->redirect("../view/index.php");
        } else {
            $this->showAlert('Login Failed. Check Your Email and Password.');
        }
    }

    private function isUserLoggedIn()
    {
        return isset($_SESSION['username']);
    }

    private function validatePasswords($password, $cpassword)
    {
        return $password == $cpassword;
    }

    private function hashPassword($password)
    {
        return hash('sha256', $password);
    }

    private function isEmailRegistered($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM masuk WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows > 0;
    }

    private function insertUserToDatabase($username, $email, $password)
    {
        $stmt = $this->conn->prepare("INSERT INTO masuk (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        $stmt->execute();

        return $stmt->affected_rows > 0;
    }

    private function redirect($location)
    {
        header("Location: $location");
        
        exit();
    }

    private function showAlert($message)
    {
        echo "<script>alert('$message')</script>";
    }
}
//dalam codingan ini telah dibuat class auth
//terdapat property private $conn yang dimana ia hanya dapat di akses di dalam kelas itu saja (akram E1E122114)
?>