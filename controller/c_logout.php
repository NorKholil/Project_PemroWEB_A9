<?php
session_start(); // Start session nya
session_destroy(); // Hapus semua session
header("location: ../view/v_login.php"); // Redirect ke halaman index.php
?>