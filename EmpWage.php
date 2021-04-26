<?php
    $IS_FULL_TIME = 1;
    $wage_per_hour = 20;
    $empCheck = rand(0,1);
    if($empCheck == $IS_FULL_TIME){
        $full_day_hour = 8;
    }
    else{
        $full_day_hour = 0;
    }
    //calculate daily wage of employee
    $wage_per_day = $wage_per_hour * $full_day_hour;
    echo "Daily wage is:".$wage_per_day;
?>