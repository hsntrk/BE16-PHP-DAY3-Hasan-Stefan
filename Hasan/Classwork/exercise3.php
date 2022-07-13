<?php

$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(1, 100);
    echo "$array[$i] <br>";
};

echo "<hr>";
var_dump($array);
echo "<br><hr>";

function randoNumber($array)
{

    $max = 0;
    foreach ($array as $value) {
        if ($max < $value) {
            $max = $value;
        }
    }

    echo "<br><strong>$max</strong>";
};
randoNumber($array);