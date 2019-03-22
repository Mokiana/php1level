<?php
function power($val, $pow){
    if($pow==1){
      return $val;
    }
    if($pow==0){
      return 1;
    }
    if ($pow>0){
      $temp = $val * power($val,$pow-1);
      return $temp;
    } elseif ($pow<0){
        return (1/$val) * (power($val, $pow+1));
    } else {
        return 1;
    }
}
echo power(2,3);
?>
