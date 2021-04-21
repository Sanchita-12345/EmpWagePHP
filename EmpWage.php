<?php
    $IS_PART_TIME = 1;
    $IS_FULL_TIME =2;
    $wage_per_hour =20;
    $num_of_working_days = 20;
    $max_working_hour_per_month = 100;
    $totalEmpWage = 0;
    $totalEmpHrs = 0;
    $totalWorkingDays = 0;

    while ($totalEmpHrs <= $max_working_hour_per_month &&
            $totalWorkingDays < $num_of_working_days) {
        $totalWorkingDays++;
        $empCheck = rand(1,2);
        switch($empCheck){
            case $IS_PART_TIME :
                $empHrs = 4;
                break;
            case $IS_FULL_TIME:
                $empHrs = 8;
                break;
            default:
                $empHrs =0;
                break;
        }
        $totalEmpHrs += $empHrs;
        echo "<br>Days : ".$totalWorkingDays." <br>Hours : ".$empHrs;
    }
    $totalEmpWage = $totalEmpHrs * $wage_per_hour;
    echo "<br>Total Employee wage : ".$totalEmpWage;
?>