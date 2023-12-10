<?php 

// assignment 1 :

// Replace ? With Arithmetic Operators

echo ( (10 * 20) + ( 15 % 3 ) + ( 190 + 10)  ) - 400 ; // 0

echo "<br>";
echo "<br>";

// assignment 2:

$a = "10";

/*Needed Output :

10
"integer"
10
"integer"
10
"integer"

// For The People Who Love Searching :

10
"integer"
10
"integer"

*/

$var = $a + 0;
echo $var; 
echo "<br>";
echo gettype($var);
echo "<br>";

$num = (int)$a;
echo $num;
echo "<br>";
echo gettype($num);
echo "<br>";
echo "<br>";


// assignment 3 :

$a = 10;
$b = 20;

// Needed Output => -1

echo ( $a * 2) - ( $b+1 );
echo "<br>";

echo gettype( ( $a * 2) - ( $b+1 ) );
echo "<br>";
echo "<br>";

// assignment 4 :

$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a != $b); // True
var_dump($a !== $b); // True
var_dump($a <= $c); // True
var_dump($a <> $c); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype((float) $a) !== gettype($b)); // True
echo "<br>";
echo "<br>";


// assignment 5 :

$points = 10;

++$points;
++$points;
++$points;

echo $points; // 13

echo "<br>";
echo "<br>";

$points--;
$points--;
$points--;
$points--;
$points--;

echo $points; // 8;

echo "<br>";
echo "<br>";


//  assignment 6 :

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
// $d = "{$a} {$b} {$c}";

// Method Two
// $d = $a . " " . $b . " " . $c;

// Method Three
// $d = "$a $b $c";

// Method Four
$d  = $a ." "  ;
$d .= $b ." "  ;
$d .= $c ;

echo $d; // Elzero Web School

echo "<br>";
echo "<br>";

// assignment 8 :

// Code 1
$a = @$b;

// Code 2
$f = @file("Not_A_File") or die("file not found ");

// Code 3
(@include("Not_A_File")) or die("file not found ");

?>