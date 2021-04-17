<?php
    class EmpWage{
        public function employee_attendance(){
            $empCheck = rand(0,1);
            if($empCheck == 1){
                echo "The employee is present";
            }
            else{
                echo "The employee is absent";
            }
        }

        public function daily_employeeWage(){
            //self::employee_attendance();
            $wage_per_hour = 20;
            $full_day_hour = 8;
            //calculate daily wage of employee
            $wage_per_day = $wage_per_hour * $full_day_hour;
            echo "Daily wage is:".$wage_per_day;
        }
    }
$obj = new EmpWage();
$obj->daily_employeeWage();
?>