<?php 

// assignment 1 :

    $a = 100;
    $b = 200;
    $c = 100;

    /*
    Check That:
    Variable "b" Larger Than Variable "a"
    Variable "a" Identical To Variable "c"
    Variable "a" Plus Variable "c" Identical To Variable "b"
    */

    if ( $b > $c ){

        echo "Yes";
        echo "<br>";

        if ( $a === $c) {
        
            echo "Yes";
            echo "<br>";

            if ( ($a + $c ) === $b ){
    
                echo "Yes";
                echo "<br>";
            }
        }
    }

    echo "<br>";
    echo "<br>";
    
    // assignment 2 :
    
    // Test Case 1:

        $a = 100;
        $b = 200;
        $c = 300;
        
        // the output : A Is Not Larger Than B Or C

        if ($a < $b && $a < $c ){
            
        echo "A Is Not Larger Than B Or C";
    
    }
    echo "<br>";
    echo "<br>";
    
    // Test Case 2:

            $a = 200;
            $b = 100;
            $c = 300;
            
            // The Output is : A Is Larger Than B

            if ($a > $b){

                echo"A Is Larger Than B ";
            }
    echo "<br>";
    echo "<br>";

    // Test Case 3 :

        $a = 200;
        $b = 200;
        $c = 100;

        // The Output is : A Is Larger Than c

        if ($a > $c){

                echo"A Is Larger Than c ";
        }

    echo "<br>";
    echo "<br>";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <form action="" method="POST">
            <input type="text" name="user">
            <input type="submit" value="Send">
        </form>

        <?php 

            $admins = ["Osama", "Ahmed", "Sayed"];
            // Input Name "Osama"

            // Needed Output
            // "The Request Method Is Post And Username Is Osama"
            // "This Username Osama Is Admin"

            if ($_SERVER["REQUEST_METHOD"] == "POST" ){

                $user = $_POST["user"];

                if (in_array( $user , $admins )){

                    echo "The Request Method Is POST And Username Is $user";
                    echo "<br>";
                    echo "This Username $user Is Admin";
                }

                else{
                    echo "The Request Method Is POST And Username Is $user";
                    echo "<br>";
                    echo "This Username $user Is Not Admin";
                }
            }
            ?>
    </body>
</html>


<?php 

echo "<br>";
echo "<br>";
// assignment 5 :

$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {

    echo "A + B = C";

} 
elseif ($a + $c === $b) {

    echo "A + C = B";
    
} 
elseif ($b + $c === $a) {

    echo "B + C = A";
} 
else {
    
    echo "The End";
    
}

echo "<br>";
echo "<br>";
// Output
// "B + C = A"

echo $a + $b === $c ? "A + B = C" : ($a + $c === $b ?  "A + C = B" :($b + $c === $a ? "B + C = A" : "The End"));

echo "<br>";
echo "<br>";

// assignment 6 :

$genre = "Hack And Slash";

if ($genre === "RPG") {

  echo "I Recommend Ys Games";
  
} elseif ($genre === "Hack And Slash") {

  echo "I Recommend Castlevania Games";

} elseif ($genre === "FPS") {
    
    echo "I Recommend Uncharted Games";

} elseif ($genre === "Platform") {

  echo "I Recommend Megaman Games";

} elseif ($genre === "Puzzle") {

  echo "I Recommend Megaman Games";
  
} else {
    
    echo "I Recommend Shadow Of Mordor And Shadow Of War";
    
}

// Needed Output
// "I Recommend Castlevania Games"

echo "<br>";
echo "<br>";

switch ($genre){
    
    case "RPG":
        echo "I Recommend Ys Games";
        break;

    case "FPS":
        echo "I Recommend Uncharted Games";
        break;  

        case "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
    }
    
echo "<br>";
echo "<br>";

// assignment 7:

    $num_one = 23;
    $num_two = 5;
    $op = "/";

    if ($op == "+"){

        echo $num_one + $num_two;
    }

    elseif ($op == "-"){

        echo $num_one - $num_two;
    }

    elseif ($op == "*"){

        echo $num_one * $num_two;
    }

    elseif ($op == "/"){

        echo (int)($num_one / $num_two);
        
        echo "<br>";

        echo $num_one % $num_two;
    }
    else{

        echo "Unknown Operator";
    }

echo "<br>";
echo "<br>";

// assignment 8 :

    $day = "Wed";

    if ( $day == "Mon" or $day == "Sun" or $day == "Sat" ){

        echo  "We Are Open All The Day";
    }

    elseif ( $day == "Tue" or $day == "Wed" ){

        echo "We Are Open From 08:12";
    }
    elseif ( $day == "Thu" or $day == "Fri"){

        echo "We Are Open From 08:12" ;
    }
    else {

        echo "Unknown Day";
    }
?>