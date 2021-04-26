<?php
    function compute_empwage(){
        $IS_PART_TIME=1;
        $IS_FULL_TIME=2;
        $wage_per_hour=20;
        $empCheck = rand(0,2);
        switch($empCheck){
            case 0:
                $EmpHrs = 0;
                break;
            case 1 :
                $EmpHrs = 8;
                break;
            case 2:
                $EmpHrs = 4;
                break;
        }
        $wage_per_day = $wage_per_hour * $EmpHrs;
        echo "Daily employee wage is: ".$wage_per_day;
    }
    compute_empwage();
?>