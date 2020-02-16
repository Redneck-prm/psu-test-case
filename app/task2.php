<?php

function search_with_prefix($prefix, $strings){
    $result = array();
    $prefix_lenght = strlen($prefix);
    print("prefix_lenght ".$prefix_lenght."\n");
    foreach($strings as $str){
        $str_prefix = substr(0, $prefix_lenght);
        print("str_prefix ".$str_prefix." prefix ".$prefix."\n");
        if($str_prefix == $prefix){
            array_push($result, $str);
        }
    }
    return $result;
}

$arr = array("gsfgsdfg","sfgsgsdg","gsfdgsdg","sfgsfg");

print_r(search_with_prefix("gsf", $arr));

?>
