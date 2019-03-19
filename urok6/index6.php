<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <style>

    </style>
</head>
<body>
<?
include "config.php";

$sql = "select * from gallery";
$res = mysqli_query($connect, $sql);

$form = "<table border='1' width='1000'>";

while ($data = mysqli_fetch_assoc($res)) {
    $form .= "<tr><td>" . $data['name'] . "</td>";
    $form .= "<td>" . "<img src='img/small/" . $data['img'] . ".jpg'>" . "</td>";
    $form .= "<td>" . $data['price'] . "</td>";
    $form .= "<td>" . $data['info'] . "</td></tr>";
}
echo $form; ?>
</body>
</html>
