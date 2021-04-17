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
    }
$obj = new EmpWage();
$obj->employee_attendance();
?>