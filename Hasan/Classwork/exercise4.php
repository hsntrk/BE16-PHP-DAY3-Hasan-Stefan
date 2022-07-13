<?php
for ($i = 1; $i < 101; $i++) {
    $a = ($i % 3);
    $b = ($i % 5);
    if ($a == 0) {
        if ($b == 0) {
            echo "Full-Stack <br>";
        } else {
            echo "Back-End <br>";
        };
    } else if ($b == 0) {
        echo "Front-End <br>";
    } else {
        echo "$i <br>";
    };
};