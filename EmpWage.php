<?php
    $IS_FULL_TIME = 1;
    $IS_PART_TIME = 2;
    $wage_per_hour =20;
    $empCheck = rand(0,2);
    if($empCheck == 0){
        $EmpHrs = 0;
    }
    else if($empCheck == $IS_FULL_TIME){
        $EmpHrs = 8;
    }
    else if($empCheck == $IS_PART_TIME){
        $EmpHrs = 4;
    }
    $wage_per_day = $wage_per_hour * $EmpHrs;
    echo "Daily Employee Wage is: ".$wage_per_day;
?>