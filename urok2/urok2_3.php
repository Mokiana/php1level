<?php
function sum ($x, $y){
    return $x + $y;
}
function subt ($x, $y){
    return $x - $y;
}
function mult ($x, $y){
    return $x * $y;
}
function div ($x, $y){
    if($y!=0)
        return $x/$y;
    else
        echo "На 0 делить нельзя";
}
echo sum(2, 5) . "<br>";
echo subt(4, 8) . "<br>";
echo mult(3, 1) . "<br>";
echo div(8, 4);
?>
