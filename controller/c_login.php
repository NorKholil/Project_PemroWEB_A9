<?php
session_start();
error_reporting(0);
include '../model/m_koneksi.php';
if (isset($_SESSION['login'])) {
    header("Location: ../view/welcome.php");
    exit();
}
if (isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $database = mysqli_query($connection,"SELECT * FROM users WHERE username='$username' and password='$password'");
    $result = mysqli_num_rows($database);
    
    if($result > 0){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        setcookie($_SESSION['username'], $_SESSION['password'], time() + (86400 * 30), "/");
        $_SESSION['login'] = true;
            header("location: ../view/welcome.php");
            exit();
    }else{
        echo "<script>alert('Username atau Password Tidak Sesuai!'); document.location.href = '../view/v_login.php';</script>";
    }

}
?>