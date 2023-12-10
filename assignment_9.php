<?php 

// assignment 1 :

$randNum = rand(10 , 20);

while($randNum == 10 || $randNum == 20){
    $randNum = rand(10 , 20);
}

echo $randNum;
echo "<br>";
echo "<br>";

// assignment 2 :

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

// Example
// Ibrahim
// Ahmed

$randIndex = rand(0 , count($friends) - 1);

echo $friends[$randIndex];
echo "<br>";
echo "<br>";

// assignment 3 :

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1 , 0 , PHP_ROUND_HALF_DOWN);
echo "<br>";
echo round($num2 , 1);
echo "<br>";
echo round($num3 , 0 , PHP_ROUND_HALF_ODD);
echo "<br>";
echo "<br>";

// assignment 4 :

$filterList = filter_list();

$result = array();

foreach($filterList as $filter){
    $id = filter_id($filter);
    $result[$id] = $filter;
}

echo "<pre>";
print_r($result);
echo "</pre>";

echo "<br>";
echo "<br>";

// assignment 5 :

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1,FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL" ;
echo "<br>";
echo filter_var($url2,FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL" ;
echo "<br>";
echo filter_var($url3,FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL" ;
echo "<br>";
echo filter_var($url4,FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL" ;

echo "<br>";
echo "<br>";

// assignment 6 :

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

// Output
echo filter_var($url1,FILTER_SANITIZE_URL);
echo "<br>";
echo filter_var($url2,FILTER_SANITIZE_URL);
echo "<br>";
echo filter_var($url3,FILTER_SANITIZE_URL);
echo "<br>";
echo filter_var($url4,FILTER_SANITIZE_URL);




?>