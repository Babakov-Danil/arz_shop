<?php
require (ROOT . '/models\Balance.php');
$balance = Balance::getBalance();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Arz_Shop</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" media="screen"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" media="screen"/>
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" media="screen"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="/assets\css\bootstrap.min.css" media="screen"/>
    <link rel="stylesheet" href="/assets\css\style.css" media="screen"/>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <!-- Custom styles -->
</head>