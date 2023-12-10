<?php 

// assignment 1 :

$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];

$chunk = array_chunk($friends, 2, true);

$result = array_map(fn($chunk) => array_combine(array_map("strtolower", array_keys($chunk))
,$chunk),$chunk);

echo"<pre>";
print_r($result);
echo"</pre>";

// assignment 2 :

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo"<pre>";
print_r(array_combine(array_map("strtolower",$codes),$means));
echo"</pre>";

// assignment 3 :

$friends_two = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];

$friends_change = array_flip($friends_two);
$reverse = array_reverse($friends_change);
$change_keys = array_change_key_case($reverse , CASE_LOWER);


echo"<pre>";
print_r($change_keys);
echo"</pre>";

// assignment 4 :

$nums = [10, 20, 30];

function add($n1 , $n2){
    return $n1 + $n2;
}

echo array_reduce($nums , fn($n1 , $n2) => $n1 + $n2);
echo "<br>";
echo "<br>";
echo array_reduce($nums , "add");
echo "<br>";
echo "<br>";

// assignment 5 :

$nums = [5, 10, 20, 5, 30, 40];

// Output

$result = array_reduce($nums , function($carry , $num){
    if ($num !== 5){
        $carry +=$num ;
    }
    return $carry;
},0);

echo $result;

// assignment 6 :

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

$final_result = array_merge($chars, array_fill($zero,5,$char[$zero]));

echo"<pre>";
print_r($final_result);
echo"</pre>";

// assignment 7 :

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);
echo current($names) . "<br>"; // "Sayed"

end($names);

echo current($names) . "<br>"; // "Ali"

reset($names);

echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);

echo current($names) . "<br>"; // "Mahmoud"


// assignment 8 :

$chars = ["A", "B", "C"];
$char = ["D"];

// $chars[] = "D";

// echo"<pre>";
// print_r($chars);
// echo"</pre>";

// array_push($chars , "D");

// echo"<pre>";
// print_r($chars);
// echo"</pre>";

// $chars_two = array_merge($chars,array_fill(-1,1,"D"));

// echo"<pre>";
// print_r($chars_two);
// echo"</pre>";

// $chars_three = array_merge($chars ,$char);

// echo"<pre>";
// print_r($chars_three);
// echo"</pre>";

// assignment 9 :

$nums = [1, 2, 3, 4, 5, 6];

echo"<pre>";
print_r(array_slice($nums,-5,3));
echo"</pre>";

// assignment 10 :

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here

$mix = array_merge($mix , $nums);
sort($mix);

$mix = array_filter($mix , 'is_numeric');

echo"<pre>";
print_r($mix);
echo"</pre>";

// assignment 11 :

$arr = ["A", "B", "C", "D", "E" , "Z"];

function count_array($arr){

    $count = 0;

    foreach ($arr as $element){
        $count++;
    }

    return $count;
}

echo count_array($arr);

echo "<br>";
echo "<br>";

// assignment 12 :

$nums = [11, 2, 10, 7, 20, 50];

function sum($numbers){

    $sum = 0;

    foreach ($numbers as $element){
        $sum += $element;
    }

    return $sum;
}

echo sum($nums);

echo "<br>";
echo "<br>";

// assignment 13 :

$nums = [10, 100, -20, 50, 30];

function get_max_number($numbers){

    $max = $numbers[0];

    foreach ($numbers as $num){

        if ($num > $max){

            $max = $num;
        }
    }

    return $max;
}

echo get_max_number($nums);

echo "<br>";
echo "<br>";

// assignment 14 :

$nums = [10, 100, -20, 50, 30];

function get_min_number($numbers){

    $min = $numbers[0];

    foreach ($numbers as $num){

        if($min > $num){

            $min = $num;
        }
    }

    return $min;
}

echo get_min_number($nums);

echo "<br>";
echo "<br>";

// assignment 15 :

$chars = ["o", "r", "e", "z", "l", "E"];

function concatenateChars($arr) {

    $result = $arr[5] . $arr[4] . $arr[3] . $arr[2] . $arr[1] . $arr[0];
    
    return $result;
}

$chars = ["o", "r", "e", "z", "l", "E"];
$result = concatenateChars($chars);

echo $result;

echo "<br>";
echo "<br>";

// assignment 16 :

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

function print_int_sorted($number){

    $int = [];

    foreach ($number as $element){

        if (gettype($element) === "integer" && $element % 2 == 1){

            $int [] = $element;
        }

        else{

            continue;
        }
    }

    sort($int);

    return $int;
}


echo "<pre>";
print_r(print_int_sorted($mix));
echo "</pre>";



?>