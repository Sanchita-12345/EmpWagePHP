<?php
    class EmpWage{
        public $full_day_hour = 8;
        public $part_time_hour = 4;
        public $wage_per_hour = 20;
        public $max_working_day_per_month;
        public $max_working_hour_per_month;
        public $companyName;
        public $wage_per_month;
        
        public function __construct($companyName, $wage_per_month, $max_working_day_per_month, $max_working_hour_per_month){
            $this->companyName = $companyName;
            $this->wage_per_month = $wage_per_month;
            $this->max_working_day_per_month = $max_working_day_per_month;
            $this->max_working_hour_per_month = $max_working_hour_per_month;
        }
        public function employee_attendance(){
            $empCheck = rand(1,2);
            switch($empCheck){
                // case 0:
                //     echo "The employee is absent";
                //     break;
                case 1 :
                    echo " and he employee is present and a full time employee.";
                    self::fulltime_employeeWage();
                    break;
                case 2:
                    echo " and the employee is present and a part time employee.";
                    self::parttime_employeeWage();
                    break;
            }
        }

        public function fulltime_employeeWage(){
            //calculate daily wage of fulltime employee
            if($this->max_working_hour_per_month >= 100 || $this->max_working_day_per_month >= 20){
                $wage_per_month = $this->max_working_hour_per_month * $this->max_working_day_per_month * $this->wage_per_hour * $this->full_day_hour;
            echo "<br>Monthly wage of this employee is: ".$wage_per_month;
            }
        }

        public function parttime_employeeWage(){
            //calculate daily wage of parttime employee
            if($this->max_working_hour_per_month >= 100 || $this->max_working_day_per_month >= 20){
                $wage_per_month = $this->max_working_hour_per_month * $this->max_working_day_per_month * $this->wage_per_hour * $this->part_time_hour;
            echo "<br>Monthly wage of this employee is: ".$wage_per_month;
            }
        }
    }
$obj1 = new EmpWage("Dmart", 100, 26, 30);
echo "<br>The company is ".$obj1->companyName;
$obj1->employee_attendance();

$obj2 = new EmpWage("Bigbasket", 150, 20, 40);
echo "<br>The company is ".$obj2->companyName;
$obj2->employee_attendance();
?>