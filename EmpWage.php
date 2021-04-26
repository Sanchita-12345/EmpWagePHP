<?php
    $IS_FULL_TIME = 1;
    $empCheck = rand(0,1);
    if($empCheck == $IS_FULL_TIME){
        echo "The employee is present";
    }
    else{
        echo "The employee is absent";
    }
?>