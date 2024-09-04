<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prasad Fashion</title>
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js" defer></script>
    <?php include "logic.php"?>
</head>
<body>
    <header>
        <img src="./assets/img/logo.png" alt="Prasad Fashion">
        <nav>
            <a href="index.php"><b>Home</b></a>
            <a href="shop.php"><b>Shop</b></a>
            <a href="featured.php"><b>Featured</b></a>
            <a href="tel:+94717713094"><b>Contact</b></a>
            <a href="add.php"><b>Add</b></a>
            <a href="remove.php"><b>Remove</b></a>
        </nav>
        <div>
            <img src="./assets/img/search.gif" alt="search" onclick="window.open('search.php')">
            <img src="./assets/img/signin.gif" alt="signin" onclick="window.open('login.php')">
            <img src="./assets/img/cart.gif" alt="cart" onclick="window.open('cart.php')">
        </div>
    </header>