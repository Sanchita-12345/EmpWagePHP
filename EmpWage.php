<?php
    $wage_per_hour = 20;
    $num_of_working_days = 2;
    $totalEmpWage = 0;
        
    for($day =0; $day < $num_of_working_days; $day++){
        $empCheck = rand(1,2);
        switch($empCheck){
            case 1 :
                $empHrs = 8;
                break;
            case 2:
                $empHrs = 4;
                break;
            default:
                break;
        }
        $empWage = $wage_per_hour * $empHrs;
        $totalEmpWage += $empWage;
    }
    echo "Employee wage: ".$empWage;
    echo "<br>Total wage: ".$totalEmpWage;
?>