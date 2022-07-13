<?php 
$array = [];
for ($i=0;$i<10;$i++) {
    $array[] = rand(1,100);
};
var_dump($array);
echo "<br>";

function gethighest($array) {
    $highest = 0;
    foreach ($array as $value) {
        if ($value > $highest) {
            $highest = $value;
        };
    }
    return $highest;
}

echo "<br>" . gethighest($array) . "<br>";
?>