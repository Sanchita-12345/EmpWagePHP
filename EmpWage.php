<?php
    class EmpWage{
        public $wage_per_hour;
        public $full_day_hour;
        public $part_time_hour;
        public function __construct(){
            $this->wage_per_hour = 20;
            $this->full_day_hour = 8;
            $this->part_time_hour = 4;
        }
        public function employee_attendance(){
            $empCheck = rand(0,2);
            switch($empCheck){
                case 0:
                    echo "The employee is absent";
                    break;
                case 1 :
                    echo "The employee is present and a full time employee.";
                    self::fulltime_employeeWage();
                    break;
                case 2:
                    echo "The employee is present and a part time employee.";
                    self::parttime_employeeWage();
                    break;
            }
        }

        public function fulltime_employeeWage(){
            //calculate daily wage of fulltime employee
            $wage_per_day = $this->wage_per_hour * $this->full_day_hour;
            echo "<br>Daily wages of the full time employee is: ".$wage_per_day;
        }

        public function parttime_employeeWage(){
            //calculate daily wage of parttime employee
            $wage_per_day = $this->wage_per_hour * $this->part_time_hour;
            echo "<br>Daily wages of the part time employee is: ".$wage_per_day;
        }
    }
$obj = new EmpWage();
$obj->employee_attendance();
?>