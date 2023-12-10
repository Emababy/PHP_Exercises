<?php 

// assignment 1 :
function greeting($name , $gender = "private"){

    if ($gender === "Male"){

        return "Hello Mr $name";
    }

    elseif ($gender === "Female") {

        return "Hello Miss $name";
    }

    elseif ($gender == "private"){

        return "hello $name";
    }
}


// Write Function Content Here

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo "<br>";
echo greeting("Eman", "Female"); // Hello Miss Eman
echo "<br>";
echo greeting("Sameh"); // Hello Sameh

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 2 :

function get_arguments(...$args){

    echo "<pre>";
    print_r($args);
    echo "</pre>";

    $all = "";

    foreach ($args as $arg):
        $all = "$arg ";
        echo $all;
    endforeach;

    echo "<br>";
    echo "<br>";
}

function get_arguments_old(){

    echo "<pre>";
    print_r(func_get_args());
    echo "</pre>";

    $all = "";

    foreach (func_get_args() as $args):
        $all = "$args ";
        echo $all;
    endforeach;

    echo "<br>";
    echo "<br>";
}

echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
echo "<br>";
echo "<br>";
echo get_arguments_old("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments_old("I", "Love", "PHP"); // I Love PHP

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 3 :

function sum_all(...$numbers){

echo "<pre>";
print_r($numbers);
echo "</pre>";

$total = 0;

foreach ($numbers as $number):

    if ($number == 5) {
        
        continue;
    }

    elseif ($number == 10){

        $number = 20;
    }

    $total += $number;

endforeach;

    return $total;
}

echo sum_all(10, 12, 5, 6, 6, 10); // 64

echo "<br>";
echo "<br>";

echo sum_all(5, 10, 5, 10); // 40

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 4 :

function multiply(...$numbers){

    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

    $result = 1;

    foreach ($numbers as $number):

        if (gettype($number) == "string" ):

            continue;
        elseif(gettype($number) == "double"):

            $number = (int)$number;

        endif;
        $result *= $number;

    endforeach;

    return $result;
}



echo multiply(10, 20); // 200
echo "<br>";
echo "<br>";
echo multiply("A", 10, 30); // 300
echo "<br>";
echo "<br>";
echo multiply(100.5, 10, "B"); // 1000

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 5 :

function check_status($a, $b, $c) {

    $name = "";
    $age = "";
    $status = "";

    if (is_string($a)):

        $name = $a;
    

    elseif (is_string($b)):

        $name = $b;
    

    elseif (is_string($c)):

        $name = $c;

    endif;


    if (is_numeric($a)):

        $age = $a;

    elseif (is_numeric($b)):

        $age = $b;

    elseif (is_numeric($c)):

        $age = $c;

    endif;


    if (is_bool($a)){

        $status = $a;
    }

    elseif (is_bool($b)){

        $status = $b;
    }

    elseif (is_bool($c)){

        $status = $c;
    }


    if ($status){

        return "hello $name , your age is $age , You Are Available For Hire";
    }

    else{

        return "hello $name , your age is $age , You Are Not Available For Hire";
    }

}


// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo "<br>";
    echo "<br>";
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo "<br>";
    echo "<br>";
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo "<br>";
    echo "<br>";
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 6 :

function calculate ($num1,$num2,$option ="default"){

    if ($option === "multiply" || $option === "M" || $option === "m"){

        return $num1 * $num2;
    }

    elseif ($option === "subtract" || $option === "S" || $option === "s"){

        return $num1 - $num2;
    }

    elseif ($option === "add" || $option === "A" || $option === "a"){

        return $num1 + $num2;
    }

    elseif ($option == "default"){

        return $num1 + $num2;
    }

}

echo calculate(10, 20); // 30
echo "<br>";
echo "<br>";
echo calculate(10, 20, "a"); // 30
echo "<br>";
echo "<br>";
echo calculate(10, 20, "s"); // -10
echo "<br>";
echo "<br>";
echo calculate(10, 20, "subtract"); // -10
echo "<br>";
echo "<br>";
echo calculate(10, 20, "multiply"); // 200
echo "<br>";
echo "<br>";
echo calculate(10, 20, "m"); // 200

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 7 :

function calculate_two($num_one,$num_two) : float {

    return ($num_one + $num_two);
}

echo calculate_two(20, 10); // 30
echo "<br>";
echo "<br>";
echo gettype(calculate_two(20, 10)); // Double

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 8 :

$message = "Hello";

$Hello = function($someone) use ($message){

    return "$message $someone";
};
$HI = fn($someone) => "$message $someone"; // arrow function 

echo $Hello("Osama"); // Hello Osama
echo "<br>";
echo "<br>"; 
echo $HI("Osama"); // Hello Osama

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 9 :

$greet = function($someone){

    return "Hi $someone";
};

$greet_new = fn($someone) => "Hola $someone"; // arrow function 


// Needed Output
echo $greet("Osama"); // Greetings
echo "<br>";
echo "<br>";
echo $greet_new("Osama"); // Greetings

echo "<br>";
echo "<br>";
echo "<br>";

?>