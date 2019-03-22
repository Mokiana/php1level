<?php
include_once "../models/db_goods.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Интернет-магазин одежды</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
    <script src="js/jquery.js"></script>
    <script src="js/Cart.js"></script>
</head>
<body>
<div id="container">
    <? include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <div class="content">
        <h2>Корзина</h2>

    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>
