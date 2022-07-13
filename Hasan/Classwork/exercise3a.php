<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3a</title>
</head>

<body>
    <?php
    function randGen($iterartion)
    {
        $arr = [];
        for ($i = 0; $i < $iterartion; $i++) {
            array_push($arr, random_int(0, 100));
        }
        return $arr;
    }

    function exercise3($arr_len)
    {
        $arr = randGen($arr_len);
        echo var_dump($arr);
        $max = max($arr);
        echo $max;
    }
    exercise3(15);
    ?>
</body>

</html>