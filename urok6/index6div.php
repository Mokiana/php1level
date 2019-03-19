<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <style>
        #content {
            background-color: aqua;
            width: 80%;
            margin: 0 auto;
        }

        div {
            width: 50%;
        }
    </style>
</head>
<body>

<!--<div id="content">-->
<!--    <div class="obch">-->
<!--        <h2>название товара</h2>-->
<!--        img-->
<!--        <p>price</p>-->
<!--        button-->
<!--        <div class="info"></div>info-->
<!--    </div>-->
<!--</div>-->

<?
include "config.php";

$sql = "select * from gallery";
$res = mysqli_query($connect, $sql);

$form = "<div id='content'>";

while ($data = mysqli_fetch_assoc($res)) {
    $form .= "<div class='name'>" . "<a href='index6div1.php'>" . $data['name'] . "</a></div>";
   // $form .= "<div class='name'>" . $data['name'] . "</div>";
    $form .= "<div class='img'>" . "<img src='img/small/" . $data['img'] . ".jpg'>" . "</div>";
//    $form .= "<div>" . "<a href='img/big/" . $data['img'] . ".jpg'><img src='img/small/" . $data['img'] . ".jpg'></a>" . "</div>";
    $form .= "<div class='price'>" . $data['price'] . "</div>";
    $form .= "<div class='info'>" . $data['info'] . "</div>";
    $form .= "<button>Заказать</button>";
}

echo $form; ?>
</body>
</html>


