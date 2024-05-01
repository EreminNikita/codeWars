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

/* function strCount($str, $letter)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $letter) {
            $count++;
        }
    }
    echo ($count);
}
strCount('Nikitaaa', 'a'); */

/* function is_uppercase($str)
{
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] !== strtoupper($str[$i])) {
            echo 'false';
            break;
        } else {
            echo 'true';
            break;
        }
    }
}
is_uppercase('ZzzzzzZ'); */

/* function correct($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] === '5') {
            $string[$i] = 's';
        } elseif ($string[$i] === '0') {
            $string[$i] = 'o';
        } elseif ($string[$i] === '1') {
            $string[$i] = 'i';
        }
    }
    echo $string;
}
correct('51ng0n'); */

/* function remove($s) {
    $last = substr($s, -1);
    if ($last === '!') {
        echo substr($s, 0, -1);
    }
}
remove('!Hi!'); */

/* function format_money($amount)
{
    return '$' . number_format($amount, 2, '.', ' ');
}
format_money(1139.9); */

/* function greet($name)
{
    echo "Hello,  $name";
}
greet('World'); */

function mouth_size($animal)
{
    if ($animal === 'alligator') {
        return 'small';
    } else {
        return 'wide';
    }
}
 echo(mouth_size('Alligator'));