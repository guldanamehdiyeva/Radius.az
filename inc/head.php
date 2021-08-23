<?php
$script = explode('/', $_SERVER['SCRIPT_NAME']);
$checkFileName = end($script);
$isIndex = strpos($_SERVER['SCRIPT_NAME'], 'index');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radius.az</title>

    <!--Selectric Css-->
    <link rel="stylesheet" href="css/vendor/selectric.css">

    <!--slider-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!--Bootstrap-grid Css -->
    <link rel="stylesheet" href="css/vendor/bootstrap-grid.css">
    <!--Style Css-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
