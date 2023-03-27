<?php



    // задача 1.

    function multiply ($a, $b) {

        return $a + $b;
    }
    echo multiply( 3, 7);



    // задача 2.

    $str = 'Manager';

    echo strlen ($str);



    // Задача 3.


    $averageNum = array(3,2,54,123,5235,734);

    function getAverage ($value) {
        return array_sum($value) / sizeof($value);
    }

    echo getAverage($averageNum);




    // Задача 4.


    $maxNum = [31, 323, 3241, 5341, 31231,];
    function getMaxNum ($value) {
        return max($value);
    }
    echo getMaxNum($maxNum);





    // Задача 5.

    $a = 'Добрый';
    $b = ' день!';
    $str = $a . $b;
    echo $str;



    // Задача 6.

    $string = "hello, world!";
    $string = strtoupper($string);
    echo $string;




    // Задача 7.

    $is_substring = substr("Hello, World!", -6);
    echo $is_substring;







    // Задача 8.

    $average = array(588, 1012);

    function getNum($value) {
        return array_sum($value) / 2;
    }

    echo getNum($average);




    // Задача 9.

    echo sqrt(9);







