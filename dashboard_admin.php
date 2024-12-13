<?php
session_start();
include ("koneksi/koneksi.php");

if(!isset($_SESSION['email'])){
    header("location:index.php");
}

echo $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li>
        <a href="logout.php">
            <span class="icon">
             <ion-icon name="airplane-outline"></ion-icon>
            </span>
            <span class="title">Sign Out</span>
        </a>
    </li>
</body>
</html>