<?php 

    // assignment 1:

    echo (int)(15.2 + 14.7) + (10.5 + 10.5); // 50
    echo '<br>';
    echo gettype( (int)((15.2 + 14.7) + (10.5 + 10.5))); // Integer
    echo '<br>';

    ////////////////////////////////////////////////////////////////////////

    // assignment 2:

    var_dump(100);
    echo '<br>';
    echo gettype(100);
    echo '<br>';
    $num = 100 ;
    $type = gettype($num);
    echo $type;
    echo '<br>';

    ////////////////////////////////////////////////////////////////////////

    // assignment 3:

    // Needed Output:
    
    // Hello "Elzero" \\ """ We Love "$$PHP"

    echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP";

    echo '<br>';

    ////////////////////////////////////////////////////////////////////////

    // assignment 4:

    echo "We \n Love \n Elzero \n Web \n School";

    echo '<br>';

    echo nl2br("We 
    Love
    Elzero 
    Web 
    School");

    /*Needed Output:
        We
        Love
        Elzero
        Web
        School
    */

    echo '<br>';

    ////////////////////////////////////////////////////////////////////////

    // assignment 5:

    echo nl2br('Hello "\'Elzero\'" 
    We Love $Programming$ 
    Languages Specially "PHP"
    ');

    // Needed Output
    // Hello "'Elzero'"
    // We Love $Programming$
    // Languages Specially "PHP"

    echo '<br>';

    ////////////////////////////////////////////////////////////////////////

    // assignment 6:

    $something = "Programming";

    echo <<<"code"

    Hello \PHP\
    We Love $something

    code;

    // [1] Fix The Error
    // [2] Remove 2 Characters To Get The Output

    // Needed Output
    // Hello \PHP\ We Love Programming

    echo '<br>';

    ////////////////////////////////////////////////////////////////////////

    // assignment 7:

    echo '<br>';
    echo (int)true + (int)"Hello PHP";
    echo '<br>';
    echo gettype((int)"Hello PHP");

    // Needed Output
    // 1
    // integer

    echo '<br>';

    ////////////////////////////////////////////////////////////////////////

    // assignment 8:

    echo "<pre>";

    print_r([

        "FrontEnd" => [
            "0" => "HTML",
            "1" => "CSS",
            "JS" => [

                "Vuejs" => [

                    "2" => "v2",
                    "3" => "v3"
                ],

                "0" => "Reactjs",
                "1" => "Svelte"
            ]
        ],

        "BackEnd" => [

            "0" => "MySQL",
            "1" => "PHP",
            "2" => "Security"
        ],
        "0" => "Git",
        "1" => "Github",
        "Testing" => [

            "0" => "Unit Testing",
            "1" => "End To End",
            "2" => "Integration Testing"
        ]

    ]);


    echo "</pre>";


?>