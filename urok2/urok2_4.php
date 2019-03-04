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
};

function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case "sum":
            return sum($arg1, $arg2);
            break;
        case "subt":
            return subt($arg1, $arg2);
            break;
        case "mult":
            return mult($arg1, $arg2);
            break;
        case "div":
            return div($arg1, $arg2);
            break;
        default:
            return NaN;
            break;
    }
};

echo "Результат операции: ".mathOperation(2, 5, sum)."<br>";
echo "Результат операции: ".mathOperation(4, 8, subt)."<br>";
echo "Результат операции: ".mathOperation(3, 1, mult)."<br>";
echo "Результат операции: ".mathOperation(8, 6, div)."<br>";

?>
