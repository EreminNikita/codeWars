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