<?php
    class EmpWage{
        public $full_day_hour;
        public function employee_attendance(){
            $empCheck = rand(0,1);
            if($empCheck == 1){
                $this->full_day_hour = 8;
                self::daily_employeeWage();
            }
            else{
                $this->full_day_hour = 0;
                self::daily_employeeWage();
            }
        }

        public function daily_employeeWage(){
            $wage_per_hour = 20;
            //calculate daily wage of employee
            $wage_per_day = $wage_per_hour * $this->full_day_hour;
            echo "Daily wage is:".$wage_per_day;
        }
    }
$obj = new EmpWage();
$obj->employee_attendance();
?>