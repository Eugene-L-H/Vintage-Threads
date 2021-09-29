<?php
include('functions.php');
$uri = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" media="screen" type="text/css" href="assets/css/style.css">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Grechen+Fuemen&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@1&display=swap" rel="stylesheet">
  <title><?php tab_page($uri); ?>&nbsp;Vintage Threads</title>
</head>

<header>
  <h2>Vintage &nbsp;Threads</h2>
  <div class="main-nav">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Search</a></li>
      </ul>
    </nav>
  </div>
</header>