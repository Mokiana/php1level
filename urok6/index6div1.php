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
<?
include "config.php";

//$sql = "select * from gallery where id=".$_POST[id];
$sql = "select * from gallery";
$res = mysqli_query($connect, $sql);

$form = "<div id='content'>";

while ($data = mysqli_fetch_assoc($res)) {
    $form .= "<div>" . $data['name'] . "</div>";
    $form .= "<div>" . "<a href='img/big/" . $data['img'] . ".jpg'><img src='img/small/" . $data['img'] . ".jpg'></a>" . "</div>";
    $form .= "<div>" . $data['price'] . "</div>";
    $form .= "<div>" . $data['description'] . "</div>";
    $form .= "<button>Заказать</button>";
}

echo $form; ?>
</body>
</html>


