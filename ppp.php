<?php

    // print string :
    // echo 'we love php '; 
    // echo '<br>';
    
    // print'we love php';

    ////////////////////////////////////////////////////////////////////////////////////////

    /*
        data types :

        1. integer => int
        2. float    => floating point number | double
        3. string   
        4. boolean => bool ( true - false )
        5. array    
        6. object   
        7. resource 
        8. null     

        gettype(any kind of datatype)

    */

    ////////////////////////////////////////////////////////////////////////////////////////

    // echo gettype(true);       // bool
    // echo '<br>';
    // echo gettype(100);       // int
    // echo '<br>';
    // echo gettype(100.5);    // float
    // echo '<br>';
    // echo gettype('hello'); // string
    // echo '<br>';
    // echo gettype([1,2,3]);  // array
    // echo '<br>';
    // echo gettype(array("eg" => 'egypt' , "ksa" => "saudi aribia")); // array 
    // echo '<br>';

    ////////////////////////////////////////////////////////////////////////////////////////

    // type juggling + automatic type conversion :

    // echo 1 + '2' ;
    // echo '<br>';
    // echo gettype(1 + '2') ; // int 
    // echo '<br>';
    // echo true + true ;
    // echo '<br>';
    // echo gettype(true + true); // int
    // echo '<br>';
    // echo 25 + 10.5 ;
    // echo '<br>';
    // echo gettype(25 + 10.5); // float => double

    ////////////////////////////////////////////////////////////////////////////////////////

    // type casting :
    // 1. int()
    // 2. float() or double or real 
    // 3. string()
    // 4. bool()
    // 5. array()
    // 6. object()
    // 7. resource()
    // 8. null()

    // echo 6 + (int) "5 lessons" ;
    // echo '<br>';
    // echo 10 + (int) 10.5 ;
    // echo '<br>';
    // echo 10.5 + 10.5 ;
    // echo '<br>';
    // echo gettype(10.5 + 10.5 ); // double
    // echo '<br>';
    // echo (int) 10 + (int) 10.5; // int
    // echo '<br>';
    // echo (int) (10.5 + 10.5 /* float */) ; // (int)(float) => int  

    ////////////////////////////////////////////////////////////////////////////////////

    // boolean + converting to boolean :

    // var_dump((bool) ""); // false => empty anything 
    // echo '<br>';
    // var_dump((bool) 0); // false => 0 
    // echo '<br>';
    // var_dump((bool) '0'); // false => 0 => string 
    // echo '<br>';
    // var_dump((bool) [1, 2, 3]);  // true 
    // echo '<br>';
    // var_dump((bool) -100); // -int => true 
    // echo '<br>';
    // var_dump((bool) 100); // +int => true
    // echo '<br>';
    // var_dump((bool) array()); // empty array => false 
    // echo '<br>';

    ////////////////////////////////////////////////////////////////////////////////////

    // string and escaping :

    // echo "hello 'php' "; // to print single quote 
    // echo '<br>';
    // echo "hello \"php\" "; // to print double quote
    // echo '<br>';
    // echo 'hello \'php\' '; // to print double quote
    // echo '<br>';
    // echo "hello php\\ "; //to print \
    // echo '<br>';
    // echo "hello php 
    // on multiple
    // lines "; 
    // echo '<br>';
    // echo nl2br("hello php 
    // on multiple 
    // lines");
    // echo '<br>';

    // Heredoc - Nowdoc :

    // Heredoc

    // echo <<<"Here"

    // hello php 
    // $$$$ ' ' ' \\\\\\\\\

    // Here;

    // echo '<br>';
    // echo"<br>";

    // // Nowdoc

    // echo <<<'Now'

    // hello php 
    // $$$$ ' ' ' \\\\\\\\\

    // Now;

    // echo '<br>';
    // echo"<br>";

    
///////////////////////////////////////////////////////////////////////////////////////////////////////////

// array :

// echo '<pre>';
// print_r([
    
//     "0" => 'Joumana', // over write 
//     'A' => "Ahmed" ,
//     'B' => "Basem",
//     "mahmoud" ,/* index => 0 */
//     true => "Sayed", 
//     '1' => "Ziad", //over write
//     false => 'Joumana-2'
// ]);

// echo '</pre>';

// nested array :

// echo '<pre>';

// print_r([
//         "0" => 'Amira',
//         "0" => 'Joumana',   // over write 
//         'A' => "Ahmed",
//         'B' => "Basem",
//         "mahmoud",          // index => 0 
//         true => "Sayed",    // index => 1
//         '1' => "Ziad",      // over write on index => 1 ( sayed )
//         false => 'Joumana', // index => 0 , already exist ( the second element )

//         "Names" => [

//             "Osama" ,
//             "Ali" ,
//             "Hassan",

//                 "ages" => [

//                     "35",
//                     "18",
//                     "20"
//                 ]
//         ]
// ]);

// echo '</pre>';

//////////////////////////////////////////////////////////////////////////////////////

// variables 

// $username = "Ziad"; /* declare a var */

/* rules to declare a va : */

    /* 1. variable name must start with a letter */
    /* 2. variable name cannot start with a number */
    /* 3. variable name cannot start with an underscore */
    // 3. variable name cannot start with a special char 

// echo $username;

// echo "<br>"; 

// echo "hello $username "; /* var */
// echo "<br>"; 
// echo 'hello $username '; /* normal string  */

//////////////////////////////////////////////////////////////////////////////////////

// variable variable :

    // $a = "ziad";
    // $$a = "embaby";
    // $$$a = "front-end";

    // // ex :

    // echo $a ; 
    // echo "<br>";
    // echo $$a ; 
    // echo "<br>";
    // echo $ziad ;
    // echo "<br>";
    // echo $$$a;
    // echo "<br>";
    // echo $embaby;
    // echo "<br>";
    // echo "<br>";

    // // ex-2: 

    // echo "hello ${$a}"; // $$a
    // echo "<br>";
    // echo "hello ${$$a}"; // $$$a
    // echo "<br>";
    // echo "<br>";

    // // ex-3 :

    // echo "hello $ziad "; // $ziad => embaby 
    // echo "<br>";
    // echo "hello $embaby"; // $embaby => front-end 
    // echo "<br>";
    // echo "<br>";

    // // ex-4 :

    // echo "hello ${$ziad}"; // $$ziad => front-end 
    // echo "<br>";
    // echo "hello ${$embaby}"; // err => Undefined variable 
    // echo "<br>";

    /*  $a = ziad           $$a = embaby (1)

        $ziad = embaby      $embaby = front-end (2)

        from 1 , 2 by remove the mutual then :
        
        $$ziad = front-end

    */

//////////////////////////////////////////////////////////////////////////////////////

// assign variable by reference :

    // $a = "ziad";

    // $b = &$a ; // by reference

    // $b = "embaby";

    // $a = "front-end";

    // echo $b ;
    // echo "<br>";
    // echo $a ;

//////////////////////////////////////////////////////////////////////////////////////

// pre-defined variables :

    // echo "<pre>";
    // print_r($_SERVER);

    // echo $_SERVER["HTTP_CONNECTION"];
    // echo "</pre>";

    // echo $_POST["username"]; 
    // echo $_GET["username"]; 

    // search php pre-defined variables 

/////////////////////////////////////////////////////////////////////////////

// constants :

    // always uppercase - can't change during the execution 

    // define("DB_NAME" , "EMBABY");

    // echo DB_NAME;


/////////////////////////////////////////////////////////////////////////////

// pre-defined constants :

    /*
        PHP_VERSION 
        PHP_OS_FAMILY 
        PHP_INT_MAX
        DEFAULT_INCLUDE_PATH

        Magic constants :

            __LINE__
            __FILE__
            __DIR__

        Reserved Keyword :

            break 
            clone 

        You should search on :

            PHP PRE-DEFINED CONSTANTS 
            COMPILE TIME VS RUNTIME 
            LIST OF RESERVED WORDS 
    
    */

    // echo php_uname();
    // echo "<br>";
    // echo PHP_VERSION;
    // echo "<br>";
    // echo PHP_OS_FAMILY;
    // echo "<br>";
    // echo PHP_INT_MAX;
    // echo "<br>";
    // echo DEFAULT_INCLUDE_PATH;
    // echo "<br>";
    // echo __LINE__;
    // echo "<br>";
    // echo __FILE__;
    // echo "<br>";
    // echo __DIR__;
    // echo "<br>";
    // echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////

// operators :

// echo 10.5 + 20.5 ;
// echo '<br>';
// echo gettype(10.5 + 20.5);
// echo '<br>';
// echo 20 / 10 ; 
// echo '<br>';

// echo gettype(20/10);
// echo '<br>';
// echo 20 / 8 ;
// echo '<br>';
// echo gettype(20 / 8);
// echo '<br>';

// echo 20 % 10 ; // reminder = 0 
// echo '<br>';
// echo gettype(20 % 10);
// echo '<br>';
// echo 21 % 10 ; // reminder = 1 
// echo '<br>';
// echo gettype(21 % 10);
// echo '<br>';

////////////////////////////////////////////////////////////////////////////////////

// incrementing and decrementing :

// $likes = 0 ;
// $likes++;
// $likes++;
// $likes++;
// $likes--;

// echo $likes;
// echo '<br>';
// echo '<br>';

// $a = 0;

// echo $a++; // post increment - a=0
// echo '<br>';
// echo $a; // 1
// echo '<br>';
// echo '<br>';

// $b = 0;
// echo ++$b; // pre increment - b=1
// echo '<br>';
// echo $b; // b=1 
// echo '<br>';

///////////////////////////////////////////////////////////////////////

// logical operators :

/* 
    and => both of them true 
    && => both of them true ( has greater precedence than 'and' )

    or => one or both of them are true 
    || => one or both of them are true  ( has greater precedence than 'or' )

    xor => one is true however not both 
    
    ! => not true 

*/

// var_dump(100 > 50 and 100 > 90);
// echo "<br>";
// var_dump(100 > 50 and 100 > 100); 
// echo "<br>";
// var_dump(100 > 50 && 100 > 100); 
// echo "<br>";
// var_dump(100 > 90 or 100 > 100);  // true
// echo "<br>";
// var_dump(100 > 110 or 100 > 200 or 100 > 50); // true
// echo "<br>";
// var_dump(100 > 110 || 100 > 200 || 100 > 50); // true
// echo "<br>";
// var_dump(100 > 50 or 100 > 110); // true
// echo "<br>";
// var_dump(100 > 110 xor 100 > 110); // false
// echo "<br>";
// var_dump(100 > 50 xor 100 > 110); // true
// echo "<br>";

///////////////////////////////////////////////////////////////////////////

// string operators :

/* concatenate "

    .
    .=

*/

// $a = "ziad";
// $b = "embaby";
// define("FRONT_END" , "555");

// echo $a . " " . $b ;
// echo "<br>";
// echo "{$a} {$b} " . FRONT_END;
// echo "<br>";
// echo $a . " " . $b . " ". FRONT_END;
// echo "<br>";


// $x  = "elzero ";
// $x .= "web"; // $x = $x + "web" then $x = elzero web
// $x .= " school"; // $x = $x + "school" then $x = elzero web school

// echo $x;

///////////////////////////////////////////////////////////////////////////////

// Array operators :

/* 

    +      => union
    ==     => equal - same key and value 
    !=     => not equal
    <>     => not equal
    ===    => identical  - same key and value , same order , same type 
    !==    => not identical 
*/

// $arr1 = [1 => "A" , 2 => "B"];
// $arr2 = [3 => "C" , 4 => "D"];

// echo "<pre>";

// print_r($arr1 + $arr2);

// echo "</pre>";
// echo "<br>";
// echo "<br>";


// $arr4 = [1 => "10" , 2 => "20"];
// $arr5 = [2 => 20 , 1 => 10];   // type and order not important 

// var_dump($arr4 == $arr5);
// echo "<br>";
// var_dump($arr4 != $arr5);
// echo "<br>";
// var_dump($arr4 <> $arr5);
// echo "<br>";
// echo "<br>";


// $arr6 = [1 => "100" , 2 => "200"];
// $arr7 = [1 => "100" , 2 => "200"];

// var_dump($arr6 === $arr7);
// echo "<br>";
// var_dump($arr6 !== $arr7);
// echo "<br>";


// Error control operator :

/*

    @
    var
    file
    include
*/

// var

// $a = 10;
// $b = @$a or die("VARIABLE NOT FOUND ");

// echo $b;
// echo "<br>";

// // FILE

// $f = @file("ziad.txt") or die("file not found");

// print_r($f);
// echo "<br>";

// // include 

// (@include ("ziad.php")) or die("file not found ");

//////////////////////////////////////////////////////////////////////////////////////////////////////

/*

    operators precedence :

    || has a greater precedence than "or"
    && has a greater precedence than "and"

*/

// $a = 10 || false ; // $a = (10 || false ) => $a = true => $a = 1
// echo $a;

// echo "<br>";
// echo "<br>";

// $b = 10 or false ; // ( $b = 10 ) or false => true => 10 
// echo $b;

///////////////////////////////////////////////////////////////////////////////////////////////

// if - else - elseif :


/* if ( 10 > 30 ){

    echo " yes ";
}

elseif( 10 > 6 ){

    echo " yes (second condition ) ";
}

else{

    echo " no ";
}

*/

// if :

/* 
    $page = "Home";

    if ( $page == "About" ) {

        echo "About page";
    }

    elseif ( $page == "Home" ) {

        echo "this is Home page";
    }

    echo "<br>";
    
// if , else :

    $title = "Home";

    if( $title == "" ) {

        echo "no title";
    }
    
    else {
        
        echo $title;
    }
    
    echo "<br>";

//  if , elseif and else :

    $lang = "Arabic";
    
    if ( $lang == "Arabic" ) {

        echo 'مرحبا'; 
    }
    
    elseif ( $lang == "English" ) {

        echo "Hello";
    }
    else{

        echo "unknown language";
    }
    
    if ( 10 > 5 ) echo "Good"; // oneLine of code 
    else echo "Bad";
    
    echo "<br>";
    
    if ( 10 > 5 )  : echo "hello"; ;
endif;

echo "<br>";

echo "<br>";


// Nested if condition :
    
    $name = "osama";
    $is_student = true;
    $is_orphan = true;

    $country = "Egypt";
    $country_discount = 50;

    $price = 100;

    $student_discount = 10;
    $orphan_discount = 15;


    if ( $country == "Egypt" ){

        echo "Hello $name";
        echo "<br>";
        
        if ($is_student == true){

            if ($is_orphan == true){

                $price = (($price - $orphan_discount) - $student_discount ) - $country_discount ;
                echo "The Final Price Is : $price" ;
                echo "<br>";
            }
            
            else{
                
                $price = ($price - $student_discount) - $country_discount ;
                echo "The Final Price Is : $price" ;
                echo "<br>";
            }
        }

    }

    else {

        echo "Hello $name";
        echo "<br>";
        echo "No discount";
        echo "<br>";
        echo "Sorry , The Price Is : $price";
    }
    

    
    // Ternary Operator :

    $age = 18;

    if ( $age > 10 ){

        echo "good";
    }

    else {

        echo "bad";
    }

    // condition ? true : false ;

    echo $age > 18 ? "good" : "bad";

*/

// switch :

    // $day = "Sun";

    // switch($day){

    //     case "Sat":
    //         echo "hello today is $day we are open from 10:16";
    //         break;
    //     case "Sun": // in case there two cases with the same function 
    //     case "Mon":
    //         echo "hello today is $day we are open from 10:16";
    //         break;
    //     case "Tue":
    //         echo "hello today is $day we are open from 10:16";
    //         break;

    //     default:
    //         echo " Unknown Day";
    // }

////////////////////////////////////////////////////////////////////////////////////////////

// while loop :

    /*

    $i = 1;
    while ($i <= 3){

        echo "$i";
        echo "<br>";
        $i++;
    }

    $a = 1;
    while ($a <= 6) :

        echo "$a";
        echo "<br>";
        $a++;

    endwhile;

*/

// do while loop :

    /* 
    $i = 1;

    do {

        echo "$i";
        echo "<br>";
        $i++;

    } while($i <= 3);  //

*/

// for loop :

    /*

    for ($i = 1; $i <= 5; $i++) {

        echo "$i<br>";
    }
    echo "<br>";
    
    // second way :

    $index = 1;

    for(;;):

        if ($index == 5){ // $index < 5 

            break;
        }

        echo "$index <br>";

        $index++;
    endfor;

    */

// Foreach :

/*
    $countries_with_discount = ["EG" => 50 , "SA" => 30 , "QA" => 50 , "SY" => 70];
    
    echo "<pre>";
    print_r($countries_with_discount);
    echo "</pre>";

    foreach ( $countries_with_discount as $country => $discount): // $array as $key => $value 

        echo "country name is $country and the discount is $discount <br>";
        
    endforeach;


    echo "<br>";
    echo "<br>";


    $countries = ["EG", "SA" , "QA" , "SY"];
    
    echo "<pre>";
    print_r($countries);
    echo "</pre>";

    foreach ( $countries as $country ): // $array as $value 

        echo "country name is $country  <br>";

    endforeach;

*/

// break and continue :

/*
$countries = ["EG", "SA" , "QA" , "SY"];
    
echo "<pre>";
print_r($countries);
echo "</pre>";

foreach ( $countries as $country ): // $array as $value 

    if ($country == "QA"){

        break;
    }

    echo "country name is $country  <br>";

endforeach;

echo "<br>";
echo "<br>";

$countries = ["EG", "SA" , "QA" , "SY"];
    
echo "<pre>";
print_r($countries);
echo "</pre>";

foreach ( $countries as $country ): // $array as $value 

    if ($country == "QA"){

        continue; // skip this iteration and go for the next one 
    }

    echo "country name is $country  <br>";

endforeach;

*/

///////////////////////////////////////////////////////////////////////////////////////////////////

// function :

/* 
echo "hello ziad <br> ";
echo "hello ahmed <br>";
echo "hello ali <br>";


function say_hello($someone){

    echo "hello $someone <br>";
}

say_hello("ziad");
say_hello("ahmed");
say_hello("ali");

*/



/* 
$prizes = ["TV" , "PS" , "XBOX" , "APPLE TV" , "LAPTOP"];

function get_prize ($num_one , $num_two){

    return $num_one + $num_two;
}

echo $prizes[get_prize(1,2)]."<br>";

$prize_number = get_prize(1,2);

var_dump($prize_number);

*/



/* 
function get_data($country = "private" , $name = "private" , $age = "private" , $address = "private"){

    $line_one = "Your country is $country and your name is $name <br>";
    $line_two = "Your age is $age and your address is $address";

    return $line_one . $line_two;
}

echo get_data("Egypt","ziad",20,"cairo <br>"); // all the parameter are exist 
echo "<br>";
echo "<br>";
echo get_data(); // all the parameter doesn't exist 
echo "<br>";
echo "<br>";
echo get_data(address:"cairo"); // one parameter is exist 
echo "<br>";
echo "<br>";
echo get_data(address:"cairo" , age:19); // two parameter are exist 
echo "<br>";
echo "<br>";

*/

/* Var Arguments List :

    func_num_args()
    func_get_args(index)
    func_get_args()  => return array 

*/

/*

// old way :

function calculate (){

    echo "number of arguments is : ". func_num_args() . "<br>"; 
    echo "argument index number 3 is : ". func_get_arg(3) . "<br>" . "<br>";

    echo "<pre>";
    print_r(func_get_args());
    echo "</pre>";

    $total = 0;

    foreach (func_get_args() as $args):
        $total += $args;
    endforeach;

    echo "<br>";
    echo "<br>";

    echo $total;
}

echo "<br>";
echo "<br>";

// new way (spread syntax):

function calculate_new (...$numbers){

    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

    $total = 0;

    foreach ($numbers as $number):
        $total += $number;
    endforeach;

    echo "<br>";
    echo "<br>";

    echo $total;
}

calculate(10,20,50,30,40);
calculate_new(10,20,50,30,40,100);

*/

/* 
function get_data($name , $country = "private" , ...$skills){

    echo "hello $name your country is $country <br>";

    foreach ($skills as $skill):
        echo"-- $skill <br>";
    endforeach;
}

get_data("ziad",skills:"html");

*/

/*

$func2 = "say_hello_to";
function say_hello_to($someone){

    return "hello $someone";
}

echo $func2("osama");

echo "<br>";
echo "<br>";

function testing(){

    return " hello from function ";
}

if (function_exists("testing")):

    echo testing();

else:

    echo " function isn't exist ";
    

endif;

echo "<br>";
echo "<br>";

echo strlen("ziad"); // 4

echo "<br>";
echo "<br>";

$func4 = "strlen";

echo $func4("ziad");

 */

/*
function add_five(&$number){

    $number+=5;
    return $number;
}

$n = 15;

echo add_five($n) ."<br>";

echo $n;

echo "<br>";
echo "<br>";

function calculate($n1,$n2) : int {
    
    return $n1 + $n2;
}

echo calculate(19.5 , 1.5);

echo "<br>";
echo "<br>";

echo gettype(calculate(10.5,9.5));

*/

/* 
// normal function with parameter :

function say_hello($someone){

    return "hello $someone";
}

echo say_hello("ziad");

echo "<br>";
echo "<br>";

// anonymous function in var :

    $say_hello_to = function(){

        return "hello";
    };

    echo $say_hello_to();

    echo "<br>";
    echo "<br>";

    // anonymous function with parameter in var :

    $say_hola = function ($someone){

        return "hola $someone";
    };

    echo $say_hola("ziad");

    echo "<br>";
    echo "<br>";

    // inherit var from parent scope :

    $msg = "hi";

    $say_hi = function ($someone) use ($msg){

        return "$msg $someone";
    };

    echo $say_hi("ziad");

    echo "<br>";
    echo "<br>";

    //  pass anonymous function to function => array_map :

    $nums = [10,20,30,40,50];

    function add_five($items){

        return $items + 5;
    }

    $nums_after_adding_five = array_map("add_five",$nums);

    echo "<pre>";
    print_r($nums_after_adding_five);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    $nums_after_adding_ten = array_map(function($items){

        return $items + 10;
    },
    $nums);

    echo "<pre>";
    print_r($nums_after_adding_ten);
    echo "</pre>";

    */

    // arrow function in var :

    /*
    $say_hello_to = fn() => "hello";

    echo $say_hello_to();

    echo "<br>";
    echo "<br>";

    // arrow function with parameter in var :

    $say_hola = fn ($someone) => "hola $someone";

    echo $say_hola("ziad");

    echo "<br>";
    echo "<br>";

    // inherit var from parent scope :

    $msg = "hi";

    $say_hi = fn ($someone) => "$msg $someone";

    echo $say_hi("ziad");

    echo "<br>";
    echo "<br>";

    //  pass arrow function to function => array_map :

    $nums = [10,20,30,40,50];

    $nums_after_adding_five = array_map(fn ($items) => $items + 5 , $nums);

    echo "<pre>";
    print_r($nums_after_adding_five);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    $nums_after_adding_ten = array_map(fn($items) =>$items + 10 , $nums);

    echo "<pre>";
    print_r($nums_after_adding_ten);
    echo "</pre>";

*/

// string :

/* 
    $str = "ziad";

    echo "first index is $str[0] <br>";
    echo "first index is $str[3] <br>";

    echo "the length is : " .strlen($str);

    echo " <br> the last index is {$str[-1]} <br>";

    echo "the last index is {$str[strlen($str) - 1]}  <br>";

    echo $str ."<br>";

    $str[0] = "Z"; // update

    echo $str ."<br>";

    $str[5] = "M" ; // append 

    echo $str ."<br>";

*/

// string function :

/* 
echo lcfirst("Ziad") . "<br>";
echo ucfirst("ziad") . "<br>";

echo strtolower("ELZERO WEB SCHOOL") . "<br>";
echo strtoupper("ziad mohamed ahmed") . "<br>";

echo ucwords("ziad mohamed ahmed") . "<br>";
echo ucwords("ziad|mohamed|ahmed" , "|") . "<br>"; 

echo str_repeat("ziad mohamed ahmed", 3) . "<br>"; 


$friends = ["Ahmed" , "Ziad" , "Mohamed"];

echo implode(" ", $friends) ."<br>";

$str = "ziad mohamed ahmed";

echo "<pre>";
print_r(explode(" ",$str));
echo "</pre>";

echo "<pre>";
print_r(explode(" ",$str));
echo "</pre>";

echo "<br>";
echo "<br>";

echo str_shuffle("ziad") ."<br>";
echo strrev("ziad") ."<br>";

echo trim("#  ziad ##  ","#@ ")."<br>";
echo ltrim("#  ziad ##  ","#@ ")."<br>";
echo rtrim("#  ziad ##  ","#@ ")."<br>";

echo chunk_split("ziad mohamed ahmed", 3, "@")."<br>";

echo "<pre>";
print_r(str_split("ziad mohamed"));
echo "</pre>";

echo "<pre>";
print_r(str_split("ziad mohamed",4));
echo "</pre>";

echo "<br>";
echo "<br>";

echo strip_tags("<h3>hello <b>ziad mohamed</b></h3>","<h3>, <b>");

echo "<br>";
echo "<br>";

echo nl2br("ziad 
mohamed 
ahmed" , false);

echo "<br>";
echo "<br>";

var_dump(strpos("hello heloo","h"));
echo "<br>";
var_dump(strpos("hello heloo","h",5));
echo "<br>";
var_dump(strrpos("hello heloo","h")); 
echo "<br>";
var_dump(strrpos("hello heloo","h",5)); 
echo "<br>";
var_dump(stripos("hello heloo","H"));  // case insensitive
echo "<br>";
var_dump(strripos("hello heloo","h")); // case insensitive

echo "<br>";
echo "<br>";

var_dump(substr_count("hello Hello","he"));
echo "<br>";
var_dump(substr_count("hello Hello","he" , 1));
echo "<br>";
var_dump(substr_count("Hello Hello","He", 1,7));
echo "<br>";
var_dump(substr_count("abcdabcda", "abcda")); // 1 => because letter a the mutual (over lab string)

echo "<br>";
echo "<br>";

parse_str("name=ziad&email=ziad@gmail.com&password=1234",$query);

echo "<pre>";
print_r($query);
echo "</pre>";
echo "<br>";

echo $query['name']."<br>";
echo $query['email']."<br>";
echo $query['password']."<br>";
echo "<br>";

echo "hello = = + - // ** ##";
echo "<br>";
echo "<br>";
echo quotemeta("hello = = + - // ** ##");
echo "<br>";
echo "<br>";

echo str_pad("12",8,0,STR_PAD_BOTH) ."<br>"; // test
echo str_pad("123",8,0,STR_PAD_BOTH)."<br>"; // test
echo str_pad("1234",8,0,STR_PAD_LEFT)."<br>";
echo str_pad("12345",8,0,STR_PAD_LEFT)."<br>";
echo str_pad("123456",8,0,STR_PAD_LEFT)."<br>";

echo "<br>";
echo "<br>";

echo strtr("zi@ mohme@","@","d");
echo "<br>";

$tran = ["@" => "d" , "#" => "a"];

echo strtr("zi#@ moh#me@",$tran);
echo "<br>";

echo str_replace("@", "d" , "zia@ mohame@" , $count);
echo "<br>";
echo $count;
echo "<br>";
echo str_replace(["#", "@"],"d","zia# mohame@" , $count_2);
echo "<br>";
echo $count_2;
echo "<br>";
echo str_replace(["#", "@"],["d" , "m"],"zia# moha@ed" , $count_3);
echo "<br>";
echo $count_3;
echo "<br>";

echo "<pre>";
print_r(str_replace(["one" ,"two"], [1 , 2] , ["one" , "two" , "three"]));
echo "</pre>";

echo "<pre>";
print_r(str_ireplace(["One" ,"Two"], [1 , 2] , ["one" , "two" , "three"])); // CASE insensitive
echo "</pre>";

echo substr_replace("OneTwo",1,0);
echo "<br>";
echo substr_replace("OneTwo",1,3);
echo "<br>";
echo substr_replace("OneTwo",1,-1);
echo "<br>";
echo substr_replace("OneTwo",2,2,2);
echo "<br>";
echo substr_replace("OneTwo",2,2,2);
echo "<br>";
echo substr_replace("Ziad_Mohamed","A",4 ,3);
echo "<br>";
echo substr_replace("Ziad_Mohamed","A",4 ,-1);
echo "<br>";
echo substr_replace("Ziad_Mohamed","A",1,0);
echo "<br>";
echo "<br>";

echo "<pre>";
print_r(substr_replace(["Ziad_Mohamed","Mohamed"],["A" , "D"],7,[0,5]));
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";

*/

// array methods :

/* 

$friends = ["ziad","mohamed","ahmed"];

echo "<pre>";
print_r(array_chunk($friends,2));
echo "</pre>";

$countries = ["EG" => "Egypt" , "KSA" => "Saudi Arabia" , "SY" => "Syria"];

echo "<pre>";
print_r(array_chunk($countries , 2 , true));
echo "</pre>";

echo "<pre>";
print_r(array_change_key_case($countries,CASE_LOWER));
echo "</pre>";

$keys = ["A" , "Z" , "M"];
$value = ["AHMED" , "ZIAD" , "MOHAMED"];

echo "<pre>";
print_r(array_combine($keys , $value));
echo "</pre>";

$counting = ["A" , "A" , "B" , "C" , "B" , "C" , "B"];

echo "<pre>";
print_r(array_count_values($counting));
echo "</pre>";

// function count values :

function array_count_values_imp(...$elements){

    $count = [];
    foreach( $elements as $element ){

        if (isset($count[$element])){

            $count[$element]++;
        } else {
            $count[$element] = 1;
        }
    }
    return $count;
}

echo "<pre>";
print_r(array_count_values_imp("A" , "A" , "B" , "C" , "B" , "C" , "B" , "A" , "A"));
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";

$family = ["ziad","mohamed","ahmed" , ["eman" , "noha"]];

echo "<pre>";
print_r($family);
print_r(array_reverse($family, true));
print_r(array_reverse($family));
echo "</pre>";

$countries = ["EG" => "Egypt" , "KSA" => "Saudi Arabia" , "SY" => "Syria"];

echo "<pre>";
print_r(array_flip($countries));
echo "</pre>";

$counting_two = [

    "A",
    "B",
    "C",
    [1,2,3]
];

echo count($counting_two , 1);
echo "<br>";
echo count($counting_two , 0);
echo "<br>";

$search = ["1" , 2 , 3 , 4];

if (in_array("1" , $search)){

    echo "found";
}

echo "<br>";

if (in_array(1 , $search , true)){

    echo "found";
}

echo "<br>";

$courses = [

    "js" => 95,
    "html" => 100,
    "css" => 80
];

if(array_key_exists("js" , $courses)){

    echo "the course is found and the price is : ". $courses["js"] ."<br>";
}

$friends_two = ["ziad","mohamed","ahmed"];

echo current($friends_two); // ziad
echo "<br>";
echo next($friends_two); // mohamed
echo "<br>";
echo current($friends_two); // mohamed
echo "<br>";
echo next ($friends_two); // ahmed
echo "<br>";
echo prev($friends_two); // mohamed
echo "<br>";
echo reset($friends_two); // ziad
echo "<br>";
echo end($friends_two); // ahmed


$merge_one = [ "one" => "php" , "two" => "css" , "three" => " js"];
$merge_two = [ "one" => "html" , "two" => "python" , "three" => " tailwind" , "four" => "python"];

echo "<pre>";
print_r(array_merge($merge_one , $merge_two));
echo "</pre>";

$merge_three = [ 10 => "php" , 20 => "css" , 30 => " js"];
$merge_four = [ 40 => "python" , 10 => "go"];

echo "<pre>";
print_r(array_merge($merge_three , $merge_four));
echo "</pre>";

echo "<pre>";
print_r(array_replace($merge_three , $merge_four));
echo "</pre>";

$main = [ "one" => "php" , "two" => "css" , "three" => " js"];
$replace = [ "one" => "html" , "two" => "python" , "three" => " tailwind" , "four" => "go"];

echo "<pre>";
print_r(array_replace($main , $replace));
echo "</pre>";

$nums = [1 , 2 , 3 , 4 , 5];

echo array_rand($nums);

echo "<pre>";
print_r(array_rand($nums , 3));
echo "</pre>";

shuffle($nums);
echo "<pre>";
print_r($nums);
echo "</pre>";


// function shuffle :

function shuffle_two(...$elements){

    $count = count($elements);

    for ($i = $count - 1 ; $i > 0 ; $i--){

        $j = random_int(0 , $i);
        [$elements[$i] , $elements[$j]] = [$elements[$j] , $elements[$i]];
    }

    return $elements;

}

function shuffle_three(...$elements){

    $shuffled = $elements ;

    foreach ($elements as $i => &$element){
        
        $j = random_int(0 , $i);
        [$shuffled[$i] , $shuffled[$j]] = [$elements[$j] , $elements[$i]];
    }

    return $shuffled;
}

echo "<pre>";
print_r(shuffle_two("a","b","c","d","E"));
echo "</pre>";

echo "<pre>";
print_r(shuffle_three("a","b","c","d","E"));
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";

$chars = ["A" ,"B" ,"C" ,"D"];

echo "<pre>";
print_r($chars);
echo "</pre>";

$first = array_shift($chars);

echo "$first <br>";

echo "<pre>";
print_r($chars);
echo "</pre>";

$last = array_pop($chars);

echo "$last <br>";

echo "<pre>";
print_r($chars);
echo "</pre>";

array_push($chars , "X","Z","Y");

echo "<pre>";
print_r($chars);
echo "</pre>";


array_unshift($chars , "W" , "E" ,"R");

echo "<pre>";
print_r($chars);
echo "</pre>";

$charss = ["A" ,"B" ,"C" ,"D" ,"E" ,"F" ,"G"];
$charss_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
$charss_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

echo "<pre>";
print_r(array_slice($charss , 2));
print_r(array_slice($charss , -4));
print_r(array_slice($charss , 2 , 3));
print_r(array_slice($charss , 2 , -2));
print_r(array_slice($charss_with_string_keys , 0 , 2));
print_r(array_slice($charss_with_numeric_keys , 0 , 2,true));
echo "</pre>";

$nums = [10 ,20 ,30 ,40 ,50];

echo "<pre>";
print_r(array_splice($nums ,2 ,1, ["one" , "two"]));
echo "</pre>";


function add_title($fname , $lname){
    return ucwords("Hello Mr $fname $lname") ;
}

$first_names = ['Ziad',"mohamed","ahmed","ali"];
$last_names = ['mahmoud',"alaa","adham","mohsen"];

// echo add_title("ziad" , "mohamed")

echo "<pre>";
print_r(array_map("add_title" , $first_names ,$last_names));
print_r(array_map(fn ($f , $l) => ucwords("Hello Mr $f $l"), $first_names ,$last_names));
echo "</pre>";

$nums = [
    1 => 3,
    6 => 1,
    7 => 4,
    4 => 8,
    2 => 9
];

function check_nums($n){
    return $n > 4 ;
}

echo "<pre>";
print_r(array_filter($nums,"check_nums",ARRAY_FILTER_USE_KEY));
print_r(array_filter($nums,fn($n1 ,$n2) => $n1 > 4 || $n2 > 4 , ARRAY_FILTER_USE_BOTH));
echo "</pre>";

$numbers = [10 , 20 , 30 ,40 ,50];

echo array_reduce($numbers , fn($n1 , $n2) => $n1 + $n2 );

*/

// Math Functions :

/* 
    echo abs(10);
    echo "<br>";
    echo abs(-20);
    echo "<br>";

    echo rand(0,10); // min default => 0
    echo "<br>";
    echo mt_getrandmax();
    echo "<br>";

    echo 10 / 2 ; // integer
    echo "<br>";
    echo 11 / 5; // double
    echo "<br>";
    echo intdiv(11 , 5); // integer 
    echo "<br>";

    echo 10 % 2 ; // integer 
    echo "<br>";
    echo 11 % 2 ; // integer
    echo "<br>";
    echo fmod(11 , 5); // double 
    echo "<br>";
    echo fmod(11.5 , 5); // double 
    echo "<br>";
    echo 11.5 % 5 ;
    echo "<br>";
*/

// ceil - floor

/* 
    echo ceil(5.99);
    echo "<br>";
    echo floor(5.99);
    echo "<br>";

    // ceil - floor - round => return dounle 
*/

// round :

// precision => default value = 0
// mode => default option is PHP_ROUND_HALF_UP 
// PHP_ROUND_HALF_UP 
// PHP_ROUND_HALF_DOWN 
// PHP_ROUND_HALF_EVEN 
// PHP_ROUND_HALF_ODD

/* 
    echo round(5.99); // CEIL
    echo "<br>";
    echo round(5.10); // FLOOR 
    echo "<br>";
    echo "<br>";
    echo round(5.99,1); // 6 
    echo "<br>";
    echo round(5.94,1); // 5.9 
    echo "<br>";
    echo round(5.994,2); // 5.99
    echo "<br>";
    echo "<br>";
    echo round(5.99,0,PHP_ROUND_HALF_UP); // 6
    echo "<br>";
    echo round(5.49,0,PHP_ROUND_HALF_UP); // 5
    echo "<br>";
    echo round(5.50,0,PHP_ROUND_HALF_DOWN); // 5
    echo "<br>";
    echo round(5.50,0,PHP_ROUND_HALF_EVEN); // 6
    echo "<br>";
    echo round(5.50,0,PHP_ROUND_HALF_ODD); // 5
    echo "<br>";
    echo round(4.50,0,PHP_ROUND_HALF_ODD); // 5
    echo "<br>";
    echo "<br>";
*/
// sqrt - min - max :

/* 
    echo sqrt(16);
    echo "<br>";

    echo min(10,20,-40,-40,50);
    echo "<br>";
    echo max (10,20,30,40);
    echo "<br>";

    echo "<pre>";
    print_r(min([10,20,30,50],[1,2,6]));
    print_r(max([10,20,30,50],[1,2,6]));
    echo "</pre>";
    echo "<br>";
    echo "<br>";
*/

/*
    $bool = "elzero" ;
    var_dump(filter_var($bool,FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE));
    echo "<br>";

    $url = "https://elzero.org";

    var_dump(filter_var($url,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE));
    echo "<br>";
    var_dump(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED));
    echo "<br>";
    var_dump(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED));
    echo "<br>";
    echo "<br>";

    $ip = "192.168.2.1";

    var_dump(filter_var($ip,FILTER_VALIDATE_IP));
    echo "<br>";
    var_dump(filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4));
    echo "<br>";
    var_dump(filter_var($ip,FILTER_VALIDATE_IP,FILTER_NULL_ON_FAILURE));
    echo "<br>";
    echo "<br>";

    $MAC = "00:00:5e:00:53:af";

    var_dump(filter_var($MAC,FILTER_VALIDATE_MAC,FILTER_NULL_ON_FAILURE));
    echo "<br>";
    echo "<br>";

    $email = "ziadembaby10@gmail.com";

    var_dump(filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_NULL_ON_FAILURE));
    echo "<br>";

    $int = "100";

    var_dump(filter_var(
        $int,
        FILTER_VALIDATE_INT,
        ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50 , "max_range" => 100]]
    ));
    echo "<br>";

    $float = "90.5";

    var_dump(filter_var(
        $float,
        FILTER_VALIDATE_FLOAT,
        ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50 , "max_range" => 100]]
    ));
    echo "<br>";
    echo "<br>";


    $email_two = "ziadembaby         10@gmail           .com";

    var_dump(filter_var($email_two,FILTER_SANITIZE_EMAIL));
    echo "<br>";

    $int_two = 100;

    var_dump(filter_var($int_two,FILTER_SANITIZE_NUMBER_INT));
    echo "<br>";

    $float_two = 90.5 ;

    var_dump(filter_var(

        $float_two,
        FILTER_SANITIZE_NUMBER_FLOAT,
        ["flags" => FILTER_FLAG_ALLOW_FRACTION | FILTER_FLAG_ALLOW_THOUSAND]

    ));
    echo "<br>";

    $url_two = "https:         //elzero.org                 ";

    var_dump(filter_var($url_two, FILTER_SANITIZE_URL));
    echo "<br>";

    // filter_input :

    echo filter_input(INPUT_GET,"num" , FILTER_VALIDATE_INT);
    echo filter_input(INPUT_GET,"num" , FILTER_SANITIZE_NUMBER_INT);

*/

?>

<!-- <form action="" method="GET">
    <input type="text" name="num">
    <input type="submit" value="send">
</form> -->



<?php 

// echo round(disk_total_space("C:") / 1024 / 1024 / 1024);
// echo "<br>";
// echo diskfreespace("C:") / 1024 / 1024 / 1024;
// echo "<br>";

// var_dump(file_exists("assignment_7.php"));
// echo "<br>";
// echo filesize("assignment_7.php") / 1024 ;
// echo "<br>";

// var_dump(is_dir("PHP"));
// echo "<br>";
// var_dump(is_dir("assignment_7.php"));
// echo "<br>";

// mkdir("test/upload/files",0777,true);
// echo "<br>";

// rmdir("test");
// echo "<br>";
?>

<?php 

// setcookie("Style","Dark",time() + 60 * 60 * 24 * 30);
// setcookie("popup","done", strtotime("+1 month"));

// echo "<pre>";
// print_r($_COOKIE);
// echo "</pre>";

// echo $_COOKIE["Style"];

?>

<?php 

// session :

// // $_SESSION['name'] = "Ziad";

// session_id("1k2345");

// $_SESSION['Id'] = 12345;
// var_dump($_SESSION);

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// echo '<a href="test.php">Test</a>';

// echo session_id();

// isset($_SESSION['Views']) ? $_SESSION['Views']++  : $_SESSION['Views'] = 1 ;

// echo "Hello " . $_SESSION['name'] . "Views count is : " .$_SESSION['Views'];

// echo '<a href="about.php">about</a>';

// session_unset();

// session_destroy();

// simulation login - logout :

// session_start();

// if ($_SERVER["REQUEST_METHOD"] === "POST"){

//     if($_POST['user'] === "Ziad"){
//         $_SESSION['username'] = "Emababy";
//         $_SESSION['id'] = 1001;
//     }
// }

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";


// if(isset($_SESSION['username'])){

//     echo "Welcome " .$_SESSION['username'];
// }

// else{

// ?>

<!-- // <form action="" method="POST">
//     <input type="text" name="user">
//     <input type="submit" value="Login">
// </form>



// <a href="logout.php">Logout</a> -->


<?php 

// header("HTTP/1.0 404 Not Found");

// echo "<a href='test.php'>Test</a>";

// header("Location: test.php");

// header("Refresh:5; url=test.php");
// exit;

?>