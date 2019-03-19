<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--<div id="kalk1">-->
<!--    <div id="1ch">--><?// $x = rand(1, 10);
//        echo $x ?>
<!--    </div>-->
<!--    <select name="mathElem">-->
<!--        <option value="sum">+--><?// $op = '+' ?><!--</option>-->
<!--        <option value="subt">---><?// $op = '-' ?><!--</option>-->
<!--        <option value="mult">*--><?// $op = '*' ?><!--</option>-->
<!--        <option value="div">/--><?// $op = '/' ?><!--</option>-->
<!--    </select>-->
<!--    <div id="2ch">--><?// $y = rand(1, 10);
//        echo $y ?>
<!--    </div>-->
<!--    <div id="res">--><?//
//        function kalkul($op)
//        {
//            switch ($op) {
//                case '+':
//                    return $res = $x + $y;
//                    break;
//
//                case '-':
//                    return $res = $x - $y;
//                    break;
//
//                case '*':
//                    return $res = $x * $y;
//                    break;
//
//                case '/':
//                    return $res = $x / $y;
//                    break;
//            }
//            echo $res;
//        };
//        ?>
<!--    </div>-->
<!--</div>-->
<!--<div id="kalk2">-->
<!---->
<!--</div>-->


<form method="post">
    <input type="text" name="num1">
    <select name="operator" id="">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="num2">
    <button type="submit" name="submit" value="submit">=</button>
</form>

<?php

if (isset($_POST['submit'])) {
    $x = $_POST['num1'];
    $y = $_POST['num2'];
    $op = $_POST['operator'];
    switch ($op) {
        case '+':
            echo $x + $y;
            break;
        case '-':
            echo $x - $y;
            break;
        case '*':
            echo $x * $y;
            break;
        case '/':
            echo $x / $y;
            break;
        default:
            return "Error";
    }
}
?>
</body>
</html>