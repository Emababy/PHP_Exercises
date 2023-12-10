<?php 

// // assignment 1 :

$index = 10;

// /*
// Needed Output:

// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1

// */

while ($index <= 10) {

    if ($index == 0){

        break;
    }

    echo $index. "<br>";
    $index--;
}


echo "<br>";
echo "<br>";
echo "<br>";

// // assignment 2 :

$index = 0;

// /*
// Needed Output:

// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20

// */

// with while :

while ($index <= 20){
    
    $index +=2;
    
    if ($index > 20){

        break;
    }
    
    echo "$index <br>";
}

echo "<br>";
echo "<br>";
echo "<br>";


// with for :
    
    for ($index = 0; $index <= 20; $index += 2){
        
        if ($index == 0){

            continue;
        }

        echo "$index <br>";

    }
    
    
echo "<br>";
echo "<br>";
echo "<br>";

// with do while :
    
    do {
        
        $index += 2;
        
        if ($index > 20){
            
            break;
        }
        
        echo "$index <br>";
        
    } while($index <= 20);

    
echo "<br>";
echo "<br>";
echo "<br>";

// assignment 3 :

$num = 2;


while ($num < 520) {

    if ($num == 2){

        $num = 1;
    }

    echo $num. "<br>";
    $num = ($num * 2) + 2;
    
}

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 4 :   

$start = 10;
$end = 0;
$stop = 3;

for (; $start >= $end; $start--):

    if ($start < 10 ){

        echo "0". $start ."<br>";

    }

    else{

        echo $start. "<br>";
    }

    if ($start == $stop):

        break;

    endif;

endfor;

echo "<br>";
echo "<br>";
echo "<br>";


// assignment 5 :

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for (; $start < count($mix); $start++):

    if ($start == 0):

        continue;

    endif;

    if (gettype($mix[$start]) == "integer"):

        echo $mix[$start]. "<br>";

    endif;

endfor;

echo "<br>";
echo "<br>";
echo "<br>";


// assignment 6 :

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

echo"<pre>";
print_r($money);
echo"</pre>";

foreach($money as $name => $value):

    echo "The Name is $name And I need $value Pound From Him <br>";

endforeach;

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 7 :

$mix_letters = [1, 2, "A", "B", "C", 3, 4];

$numberCount = 0;
$LetterIgnored = 0;

echo "<pre>";

print_r($mix_letters);

echo "</pre>";

for ($i = 0; $i < count($mix_letters); $i++):
    
    if (gettype($mix_letters[$i]) == "integer" ):

        echo $mix_letters[$i]. "<br>";

    endif;

endfor;

echo "<br>";

foreach ($mix_letters as $element):

    if (is_numeric(($element))):
        $numberCount++;
    else:
        $LetterIgnored++;
    endif;

endforeach;

echo "$numberCount Numbers Printed <br>";
echo "$LetterIgnored Letters Ignored <br>";

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 8 :

$nums = [1, 13, 12, 20, 51, 17, 30];

for ($i=0; $i < count($nums); $i++):

    if ($nums[$i] %2 == 0):

        $num = $nums[$i] / 2;
        echo $num. "<br>";
    
    endif;

endfor;

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 9 :

$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for ( $i = 0 ; $i < count($names); $i++):

    if ($names[$i] == "Sayed" || $names[$i] == "Osama"):

        echo $names[$i]. "<br>";
    else:

        continue;

    endif;

endfor;

echo "<br>";
echo "<br>";
echo "<br>";

// assignment 10 :


$help_num = 4;
$num_tot = [2, 4, 5, 6, 10];
$count = count($num_tot); // 5

echo "<pre>";

print_r($num_tot);

echo "</pre>";

foreach ( $num_tot as $key => $num1){ 

    $num2_index = ($key + $count / 2) % $count; 

    $num2 = $num_tot[$num2_index];

    echo $num1 . " + " . $num2 . " = " . ($num1 + $num2) . "<br>";

}










?>