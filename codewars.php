<?php

/*$array = [1, 2, 3, 4, 'str'];
$count = 0;
foreach ($array as $value)
    if (is_numeric($value)) {
        $count = $count + $value;
    }
echo $count;*/

$array = [1, 2, 3, 4, -5];
foreach ($array as $value) {
    echo -$value;
}
var_dump($array);
