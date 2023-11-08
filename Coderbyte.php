<?php
declare(strict_types=1);

function LongestWord($sen):string {
    $etalonarray=[',', '<', '.', '>', '/', '?', ';', ':', '[', '{', ']', '}', '|', '!', '@', '#', '$', '%',
    '^', '&', '*', '(', ')', '_', '=', '+',];
    $arrayofsens=str_split($sen);
    foreach ($arrayofsens as $key => $arrayofsen){
        if ($arrayofsen=='-'){
            $arrayofsens[$key]=' ';
        }
        if(in_array($arrayofsen,$etalonarray)){
            unset($arrayofsens[$key]);
        }
    }
    $result=implode($arrayofsens);
    $result1=array();
    $arrayofsens=explode(' ', $result);
        foreach ($arrayofsens as $arrayofsen){
            $result1[$arrayofsen]=strlen($arrayofsen);
        }
        arsort($result1,SORT_NUMERIC);
        $sen=array_key_first($result1);

    // code goes here
    return $sen;

}
print_r(LongestWord('I love dogs'));