<?php

$hours = date('G');
echo $hours;
$minutes = date('i');
if ($hours = 0 || $hours > 4 || $hours < 21) {
    echo "часов";
} elseif ($hours = 1 || $hours = 21) {
    echo "час";
} else {
    echo "часа";
}
echo $minutes;
if ($minutes = 0 || $minutes >= 5 || $minutes <= 20 || $minutes >= 25 || $minutes <= 30 || $minutes >= 35 || $minutes <= 40 || $minutes >= 45 || $minutes <= 50 || $minutes >= 55 || $minutes <= 59) {
    echo "минут";
} elseif ($minutes = 1 || $minutes = 21 || $minutes = 31 || $minutes = 41 || $minutes = 51) {
    echo "минута";
} else {
    echo "минуты";
}
//    switch($hours){
//        case 0: echo $hours . "часов";
//        break;
//        case 1: echo $hours . "час";
//            break;
//        case 2: echo $hours . "часа";
//            break;
//        case 3: echo $hours . "часа";
//            break;
//        case 4: echo $hours . "часа";
//            break;
//        case 5: echo $hours . "часов";
//            break;
//        case 6: echo $hours . "часов";
//            break;
//        case 7: echo $hours . "часов";
//            break;
//        case 8: echo $hours . "часов";
//            break;
//        case 9: echo $hours . "часов";
//            break;
//        case 10: echo $hours . "часов";
//            break;
//        case 11: echo $hours . "часов";
//            break;
//        case 12: echo $hours . "часов";
//            break;
//        case 13: echo $hours . "часов";
//            break;
//        case 14: echo $hours . "часов";
//            break;
//        case 15: echo $hours . "часов";
//            break;
//        case 16: echo $hours . "часов";
//            break;
//        case 17: echo $hours . "часов";
//            break;
//        case 18: echo $hours . "часов";
//            break;
//        case 19: echo $hours . "часов";
//            break;
//        case 20: echo $hours . "часов";
//            break;
//        case 21: echo $hours . "час";
//            break;
//        case 22: echo $hours . "часа";
//            break;
//        case 23: echo $hours . "часа";
//            break;
//        default:
//            echo "Введено значение вне заданного диапазона";
//            break;
//    }

?>