<?php
session_start();
unset($_SESSION['adminData']);
header("location:admin_login.php");
?>