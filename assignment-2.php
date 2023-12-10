<!-- assignment 1 : -->

<?php 

$name = "Elzero Courses";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To<?php echo $name ?></title>
</head>
<body>
    <h1><?php echo $name ?></h1>
    <p>Here In <?php echo $name ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $name ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $name ?></footer>
</body>
</html> 

<!-- ///////////////////////////////////////////////////////////////////////// -->

<?php 

    // assignment 2 :

    $name = "elzero";
    $$name = "Web";

    echo $$name;
    echo "<br>";
    echo $elzero;
    echo "<br>";
    echo "${$name}";
    echo "<br>";
    echo "$elzero";
    echo "<br>";
    echo "{$elzero}";
    echo "<br>";

    ////////////////////////////////////////////////////////////////////////////

    // assignment 3 :

    $a = 200;
    $b = &$a; // by reference 
    $a = 100;

    echo $b; // 100

    /////////////////////////////////////////////////////////////////////////////

    // assignment 4 :

    $documentRoot = $_SERVER['DOCUMENT_ROOT']; // to know document root
    echo "Document Root: " . $documentRoot;

    echo "<br>";

    $serverName = $_SERVER["SERVER_NAME"]; // SERVER-NAME
    echo "Server Name: ". $serverName;
    echo "<br>";

    $systemRoot = $_SERVER["SystemRoot"]; // SYSTEM-ROOT
    echo "System Root: ". $systemRoot;
    echo "<br>";

    //////////////////////////////////////////////////////////////////////////

    // assignment 5 :

    /*
        15 reserved words in php :

            1-break
            2-clone
            3-continue
            4-class
            5-and 
            6-or
            7-if
            8-for 
            9-do
            10-while 
            11-case
            12-echo 
            13-else 
            14-default
            15-finally
    */

    //////////////////////////////////////////////////////////////////////////

    // assignment 6 :

    echo __LINE__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    echo __DIR__;
    echo "<br>";

?>



