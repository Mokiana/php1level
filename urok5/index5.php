<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="gallery-wrap">


<script>
    window.onload = () => {

        function init() {
            var images = document.getElementsByTagName("img");
            for (var i = 0; i < images.length; i++) {
                images [i].onclick = changeBigPicture;
            }
        }

        function changeBigPicture(eventObj) {
            var appDiv = document.getElementById("big_picture");
            appDiv.innerHTML = "";
            var eventElement = eventObj.target;
            var imageNameParts = eventElement.id.split("_");
            var src = "img/big/photo" + imageNameParts [1] + ".jpg";
            var imageDomElement = document.createElement("img");
            imageDomElement.src = src;
            appDiv.appendChild(imageDomElement);
        }
    }
</script>
<!--<script src="jquery.js"></script>-->
<!--<script>-->
<!--	function f(id_good){-->
<!--		var id_size = "#size_"+id_good;-->
<!--		var size = $(id_size).val();-->
<!--		$.ajax({-->
<!--			method:"GET",-->
<!--			url:"urok5.php",-->
<!--			data: {id:id_good,s:size}-->
<!--		})-->
<!--		.done(function(answer){-->
<!--			alert(answer);-->
<!--		});-->
<!--	}-->
<!--</script>-->
<?
include "config5.php";

$sql = "select * from gallery";
$res = mysqli_query($connect, $sql);

$gal = "<table border='1' width='320'>";

while ($data = mysqli_fetch_assoc($res)) {
    $gal .= "<tr><td>" . $data['name'] . "</td>";
    $gal .= "<tr><td>" . "<img src=" . $data['url'] . ">" . "</td>";
//	$form.="<td><input id='size_".$data['id']."' type='text' value=".$data['size']."></td>";
//	$form.="<td><button onclick='f(".$data['id'].")'>Сохранить</button></td></tr>";
}
$gal .= "</table>";
echo $gal;
?>
</div>
</body>
</html>