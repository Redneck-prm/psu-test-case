<?php

function search_with_prefix($prefix, $strings){
    $result = array();
    $prefix_lenght = strlen($prefix);
    foreach($strings as $str){
        $str_prefix = substr(0, $prefix_lenght);
        if($str_prefix == $prefix){
            array_push($result, $str);
        }
    }
    return $result;
}

$arr = array("gsfgsdfg","sfgsgsdg","gsfdgsdg","sfgsfg");

print_r(search_with_prefix("gsf", $arr));

?>
