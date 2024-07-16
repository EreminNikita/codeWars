<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codewars.php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

</body>

</html>
<?php

// !string

// $array = [1, 2, 3, 4, 'str'];
// $count = 0;
// foreach ($array as $value)
//     if (is_numeric($value)) {
//         $count = $count + $value;
//     }
// echo $count;



// function evenOrOdd($number) {
//     if ($number % 2 == 0) {
//         return "Even";
//     } else {
//         return "Odd";
//     }
// }
// evenOrOdd(5);



// function removeExclamationMarks($string) {
//     echo (str_replace('!', '', $string));
//     return str_replace('!', '', $string);
// }
// removeExclamationMarks('He!!o wor!d');



// function sumArray($array) {
//     echo array_sum($array) - max($array) - min($array);
// }
// sumArray([1, 2, 5, 10]);



// $array = ["Eremin", "world", "!"];
// $result = implode(' ', $array);
// echo $result;



// function strCount($str, $letter) {
//     $count = 0;
//     for ($i = 0; $i < strlen($str); $i++) {
//         if ($str[$i] === $letter) {
//             $count++;
//         }
//     }
//     echo ($count);
// }
// strCount('Nikitaaa', 'a');



// function is_uppercase($str) {
//     $length = strlen($str);
//     for ($i = 0; $i < $length; $i++) {
//         if ($str[$i] !== strtoupper($str[$i])) {
//             echo 'false';
//             break;
//         } else {
//             echo 'true';
//             break;
//         }
//     }
// }
// is_uppercase('ZzzzzzZ');



// function correct($string) {
//     for ($i = 0; $i < strlen($string); $i++) {
//         if ($string[$i] === '5') {
//             $string[$i] = 's';
//         } elseif ($string[$i] === '0') {
//             $string[$i] = 'o';
//         } elseif ($string[$i] === '1') {
//             $string[$i] = 'i';
//         }
//     }
//     echo $string;
// }
// correct('51ng0n');



// function remove($s) {
//     $last = substr($s, -1);
//     if ($last === '!') {
//         echo substr($s, 0, -1);
//     }
// }
// remove('!Hi!');



// function format_money($amount) {
//     return '$' . number_format($amount, 2, '.', ' ');
// }
// format_money(1139.9);



// function greet($name) {
//     echo "Hello,  $name";
// }
// greet('World');



// function mouth_size($animal) {
//     if ($animal === 'alligator') {
//         return 'small';
//     } else {
//         return 'wide';
//     }
// }
// mouth_size('Alligator');



// function fake_bin($s) {
//     for ($i = 0; $i < strlen($s); $i++) {
//         if ($s[$i] < 5) {
//             $s[$i] = 0;
//         } else {
//             $s[$i] = 1;
//         }
//     }
//     return $s;
// }
// fake_bin('45385593107843568');



// function fake_bin(string $s): string {
//     $result = '';
//     foreach (str_split($s) as $char) {
//         $result .= intval($char) < 5 ? '0' : '1';
//     }
//     return $result;
// }



// function two_sort(array $s): string {
//     sort($s);

//     $firstString = $s[0];

//     $modifiedString = implode('***', str_split($firstString));

//     return $modifiedString;
// }

// $list = ["banana", "apple", "orange"];
// echo two_sort($list); // Вывод: 'a***p***p***l***e'



// function shortLongShort(string $s1, string $s2): string {

//     $lengthS1 = strlen($s1);
//     $lengthS2 = strlen($s2);

//     if ($lengthS1 < $lengthS2) {
//         echo $s1 . $s2 . $s1;
//     } else {
//         echo $s2 . $s1 . $s2;
//     }
// }
// shortLongShort('22', '1');



// function booleanToString($b) {
//     if ($b === true) {
//         echo 'true';
//     }
//     else {
//         echo 'false';
//     }
// }
// booleanToString(1);



// function abbrevName($name) {
//     $arrWord = explode(' ', $name);

//     echo strtoupper($arrWord[0][0] . '.' . $arrWord[1][0]);
// }
// abbrevName('er ni nn');



// function reverseWords($str) {
//     $revStr = '';
//     for ($i = strlen($str) - 1; $i >= 0; $i--) {
//         $revStr = $str[$i];
//         echo $revStr;
//     }
// }
// reverseWords('hello, world!');



// !
// function rW($str) {
//     $words = explode(' ', $str);
//     $rStr = '';

//     for ($i = count($words) - 1; $i >= 0; $i--) {
//         if ($rStr !== '') {
//             $rStr  .= ' ';
//         }
//         $rStr .= $words[$i];
//     }
//     echo $rStr;
// }
// rW('nikita, eremin!');



// function countsheep($num) {
//     $result = '';

//     for ($i = 1; $i <= $num; $i++) {
//         $result = $result . $i . 'sheep...';
//     }
//     echo $result;
// }
// countsheep(2);



// function no_space(string $s) {
//     $pattern = '/\s+/';
//     $replacement = '';
//     return  preg_replace($pattern, $replacement, $s);
// }
// echo no_space('n i k i t a_');



// function apple($x) {
//     $s = pow($x, 2);
//     if ($s > 1000) {
//         echo 'It\'s hotter than the sun!!';
//     }
//     else {
//         echo 'Help yourself to a honeycomb Yorkie for the glovebox.';
//     }
// }
// apple(4);



// function isVow(array $a) {
//     $vowel = ["a", "e", "i", "o", "u"];
//     $result = [];
//     for ($i = 0; $i < count($a); $i++) {
//         if (in_array(chr($a[$i]), $vowel)) {
//             $result[] = chr($a[$i]);
//         } else {
//             $result[] = $a[$i];
//         }
//     }
//     return $result;
// }
// var_dump( isVow([1,97,3]));



// function bonusTime($salary, $bonus) {
//     if ($bonus === true) {
//         echo  '"$"' . $salary * '10';
//     } else {
//         echo '"$"' . $salary;
//     }
// }
// bonusTime(10, true);



// function replaceWithVowels(array $numbers) {
//     $vowels = ['a', 'e', 'i', 'o', 'u'];

//     foreach ($numbers as $key => $num) {
//         if (in_array($num, [ord('a'), ord('e'), ord('i'), ord('o'), ord('u')])) {
//             $numbers[$key] = $vowels[array_search($num, [ord('a'), ord('e'), ord('i'), ord('o'), ord('u')])];
//         }
//     }

//     var_dump($numbers);
// }
// replaceWithVowels([101, 121, 105,1,117]);



// function DNAtoRNA($dna) {
//     echo str_replace('T', 'U', $dna);
// }
// DNAtoRNA('nikiTa');



// function mouth_size($animal) {
//     $animal = strtolower($animal);
//     return ($animal === 'alligator') ? 'small' : 'wide';
// }
// echo mouth_size('alligator');



// function points(array $games) {
//     $totalPoints = 0;

//     foreach ($games as $match) {
//         list($x, $y) = explode(':', $match);

//         $x = (int) $x;
//         $y = (int) $y;

//         if ($x > $y) {
//             $totalPoints += 3;
//         } elseif ($x == $y) {
//             $totalPoints += 1;
//         }
//     }
//     echo $totalPoints;
// }
// points(["4:3"]);



// function feast($beast, $dish) {
//     $beast_first = $beast[0];
//     $beast_last = substr($beast, -1);
//     $dish_first = $dish[0];
//     $dish_last = substr($dish, -1);

//     if ($beast_first == $dish_first && $beast_last == $dish_last) {
//         return true;
//     } else {
//         return false;
//     }
// }
// echo feast("great blue heron", "garlic naan");
// !end string



// !arrays

// function differenceInAges($ages) {
//     $oldest = max($ages);
//     $youngest = min($ages);
//     $res = [min($ages), max($ages), $oldest-$youngest];
//     print_r ($res);
// }
// differenceInAges([16, 8, 2, 32]);



// function square_sum($numbers) {
//     $res = 0;
//     foreach ($numbers as $num) {
//         $res += $num ** 2;
//     }
//     echo $res;
// }
// square_sum([1, 2,]);



// function findMultiples($integer, $limit) {
//     $multiples = [];
//     for ($i = $integer; $i <= $limit; $i = $i + $integer) {
//         $multiples[] = $i;
//     }
//     return $multiples;
// }
// var_dump(findMultiples(2, 6));



// function multiples($x, $n) {
//     $result = [];
//     for ($i = 1; $i <= $n; $i++) {
//         $result[] = $x * $i;
//     }
//     return $result;
// }
// var_dump(multiples(2, 4));



// function find_average($array): float {
//     $sum = array_sum($array);
//     $count = count($array);
//     $average = (float)($sum / $count);

//     return $average;
// }
// print_r(find_average([1, 2, 3]));



// function arr2bin($arr) {
//     $sum = 0;
//     foreach ($arr as $value) {
//         if (is_numeric($value)) {
//             $sum += $value;
//         }
//     }
//     $binarySum = decbin($sum);
//     return $binarySum;
// }
// var_dump(arr2bin([1,2]));



// function isIsogram($string) {
//     $string = strtolower($string);
//     $seen = [];
//     for ($i = 0; $i < strlen($string); $i++) {
//         $char = $string[$i];
//         if (in_array($char, $seen)) {
//             return false;
//         }
//         $seen[] = $char;
//     }
//     return true;
// }
// var_dump(isIsogram('niki'));
// echo '<br>';
// var_dump(isIsogram('nik'));



// function toNumberArray(array $stringArray) : array {
//     $numberArray = [];
//     foreach ($stringArray as $string) {
//         $numberArray[] = floatval($string);
//     }
//     return $numberArray;
// }
// print_r(toNumberArray(['1','2.2']));
// var_dump(toNumberArray(['1','2.2']));
// !end arrays



// function draw_stairs($n) {
//     $stairs = '';
//     for ($i = 0; $i < $n; $i++) {
//         $stairs .= str_repeat(' ', $i) . "I";
//         if ($i < $n - 1) {
//             $stairs .= "\n"; // Добавляем новую строку, кроме последней
//         }
//     }
//     return $stairs;
// }
// echo draw_stairs(3);



// function odd_numbers_below($n) {
//     $odd_numbers = [];
//     for ($i = 1; $i < $n; $i += 2) {
//         $odd_numbers[] = $i;
//     }
//     return $odd_numbers;
// }
// print_r(odd_numbers_below(7));



// function rpc($p1, $p2) {
//     if ($p1 === $p2) {
//         return "Draw!";
//     }

//     $winningCases = [
//         'rock' => 'scissors',
//         'scissors' => 'paper',
//         'paper' => 'rock'
//     ];

//     if ($winningCases[$p1] === $p2) {
//         return 'Player 1 won!';
//     }

//     return 'Player 2 won!';
// }
// echo rpc('paper', 'rock');



// function simpleCalculator($num1, $num2, $operation) {
//     // Проверка, что первые два аргумента - числа
//     if (!is_numeric($num1) || !is_numeric($num2) || is_string($num1) || is_string($num2)) {
//         return "unknown value";
//     }
//     // Выполнение операции в зависимости от третьего аргумента
//     switch ($operation) {
//         case '+':
//             return $num1 + $num2;
//         case '-':
//             return $num1 - $num2;
//         case '*':
//             return $num1 * $num2;
//         case '/':
//             // Проверка деления на ноль
//             if ($num2 == 0) {
//                 return "unknown value";
//             }
//             return $num1 / $num2;
//         default:
//             // Если операция не из списка
//             return "unknown value";
//     }
// }
// // Примеры использования функции
// echo simpleCalculator(5, 3, '+'); // 8
// echo simpleCalculator(5, 3, '-'); // 2
// echo simpleCalculator(5, 3, '*'); // 15
// echo simpleCalculator(5, 0, '/'); // unknown value (деление на ноль)
// echo simpleCalculator(5, 3, '^'); // unknown value (неизвестная операция)
// echo simpleCalculator(5, '2', '+'); // unknown value (второй аргумент не число)



// function getGirlsAge($inputString) {
//     $age = $inputString[0];
//     return intval($age);
// }
// echo getGirlsAge("1 год") . "\n";



// function arr2bin($arr) {
//     $total_sum = 0;

//     foreach ($arr as $elem) {
//         if (is_numeric($elem)) {
//             $total_sum += (int)$elem;
//         }
//     }
//     return decbin($total_sum);
// }
// echo arr2bin([1, 5]) . "\n";
