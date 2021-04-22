<?php
    class EmpWage{
        public $IS_PART_TIME = 1;
        public $IS_FULL_TIME =2;
        public $wage_per_hour =20;
        public $num_of_working_days = 20;
        public $max_working_hour_per_month = 100;
        public $companyName;

        public function __construct($companyName, $wage_per_day, $num_of_working_days, $max_working_hour_per_month){
            $this->companyName = $companyName;
            $this->wage_per_day = $wage_per_day;
            $this->num_of_working_days = $num_of_working_days;
            $this->max_working_hour_per_month = $max_working_hour_per_month;
        }
        function computeEmployeeWage(){
            $totalEmpWage = 0;
            $totalEmpHrs = 0;
            $totalWorkingDays = 0;
            $empHrs = 0;
            while ($totalEmpHrs <= $this->max_working_hour_per_month &&
                $totalWorkingDays < $this->num_of_working_days) {
                $totalWorkingDays++;
                $empCheck = rand(1,2);
                switch($empCheck){
                    case 1:
                        $empHrs = 4;
                        break;
                    case 2:
                        $empHrs = 8;
                        break;
                    default:
                        $empHrs = 0;
                        break;
                }
                $totalEmpHrs += $empHrs;
                echo "<br>Days : ".$totalWorkingDays." <br>Hours : ".$empHrs;
            }
            $totalEmpWage = $totalEmpHrs * $this->wage_per_hour;
            return $totalEmpWage;
        }
    }
    $obj1 = new EmpWage("Dmart", 100, 26, 30);
    $obj2 = new EmpWage("Bigbasket", 150, 20, 40);
    echo "<br>The company is ".$obj1->companyName;
    echo "<br>Total Employee wage for this company is : ".$obj1->computeEmployeeWage();
    echo "<br><br>The company is ".$obj2->companyName;
    echo "<br>Total Employee wage for this company is : ".$obj2->computeEmployeeWage();
?>