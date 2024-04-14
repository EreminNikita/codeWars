<?php

/*$array = [1, 2, 3, 4, 'str'];
$count = 0;
foreach ($array as $value)
    if (is_numeric($value)) {
        $count = $count + $value;
    }
echo $count;*/

/*function evenOrOdd($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}
evenOrOdd(5);*/

/*function removeExclamationMarks($string) {
    echo (str_replace('!', '', $string));
    return str_replace('!', '', $string);

}
removeExclamationMarks('He!!o wor!d');*/

/* function sumArray($array) {
    echo array_sum($array)-max($array)-min($array);
}
sumArray([1,2,5,10]); */

/* $array = ["Eremin", "world", "!"];
$result = implode(' ', $array);
echo $result; */

function strCount($str, $letter)
{
    for ($i = 0; $i < strlen($str); $i++) {
        $count = $str[$i]. ' ';
        if($str[$i] === 'k') {
            // echo 'stop';
            break;
        }
        echo( $count);
    }
}
strCount('Nikita','');