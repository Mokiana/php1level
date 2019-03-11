<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="gallery-wrap">
    <?include "urok4.php"?>
</div>

<script>
    // window.onload = () => {
    //     initGallery()
    //     {
    //         gallery - wrap.addEventListener('click', e => {
    //             if (e.target.tagName !== 'IMG') {
    //                 return
    //             }
    //             this.open(e.target);
    //         })
    //     }
    // }
    function init (){
    var images = document . getElementsByTagName ( "img" );
    for ( var i = 0 ; i < images . length ; i ++) {
           images [ i ]. onclick = changeBigPicture;
      }
    }
    function changeBigPicture ( eventObj ){
    var appDiv = document . getElementById ( "big_picture" );
    appDiv . innerHTML = "";
    var eventElement = eventObj . target;
    var imageNameParts = eventElement . id . split ( "_" );
    var src = "img/big/" + imageNameParts [ 1 ] + ".jpg";
    var imageDomElement = document . createElement ( "img" );
    imageDomElement . src = src;
    appDiv . appendChild ( imageDomElement );
    }
    window . onload = init;
</script>
</body>
</html>