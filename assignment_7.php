<?php 

// assignment 1 :

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str = str_replace(["%","0"],[$let_two,$let_one],$str);

echo $str; // Elzero

echo "<br>";
echo "<br>";

// assignment 2 :

$str = "Orezle";

echo ucfirst(strtolower((strrev($str))));

// Elzero

echo "<br>";
echo "<br>";

// assignment 3 :

$str = 'aAa';
$num = 3;
$char = "_";

echo strtolower(str_repeat(substr_replace($str,$char,$num,0),3));

// aaa_aaa_aaa_

echo "<br>";
echo "<br>";

// assignment 4 :

$str = "<div><b>Elzero</b></div>";

// <b>Elzero</b>

echo strip_tags($str,'<b>');

echo "<br>";
echo "<br>";

// assignment 5 :

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

// 1
// 2

echo substr_count($str,$e,$four);
echo "<br>";
echo substr_count($str,$e);

echo "<br>";
echo "<br>";

// assignment 6 :

$chars = ["E", "l", "z", "e", "r", "o"];

// Output
// "Elzero"

echo implode("",$chars);

echo "<br>";
echo "<br>";

// assignment 7 :

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

// Output
// "Elzero"

$result_one = "";

foreach ($chars as $char){

    if(is_string($char)){

        $result_one .= $char;
    }
}

function CollectTheChars(...$chars){

    $result = "";

    foreach ($chars as $char){

        if(is_string($char)){
            $result .= $char;
        }
    }

    return ucfirst(strtolower($result)) ."<br>";
}

echo CollectTheChars("E", 1, 2, "l", "z", "E", "R", "o");


$result_two = "";

for ($i = 0 ; $i < count($chars) ; $i++){

    $char = $chars[$i];

    if (is_string($char)){

        $result_two .= $char;
    }

    else{

        continue;
    }
}

echo ucfirst(strtolower($result_one));
echo "<br>";
echo ucfirst(strtolower($result_two));


?>