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

function isAllCapsLock($str)
{
    return preg_match('/^[A-Z]+$/', $str);
}

// Пример использования
$string = "ALLCAPSLOCK";
if (isAllCapsLock($string)) {
    echo "Строка полностью в верхнем регистре (ALLCAPSLOCK)";
} else {
    echo "Строка содержит не только заглавные буквы или пустая";
}
