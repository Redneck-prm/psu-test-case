<?php

function is_leap_year($year){

    if($year < 1582){
        return false;
    }

    if($year % 4 != 0){
        return false;
    }

    if($year % 100 == 0){
        if($year % 400 == 0){
            return true;
        }
        return false;
    }

    return true;
}

if (isset($_POST["year"])) { 
    $year = intval($_POST["year"]);
    if($year == 0){
        $res = "input data error";
    }
    else {
        switch(is_leap_year($year)){
            case true:
                $res = "yes";
            break;
            case false:
                $res = "no";
            break;        
        }
    }

	// Формируем массив для JSON ответа
    $result = array(
    	'data' => $res,
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}

?>