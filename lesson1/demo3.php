<?php 
    /*
    PHP DATA TYPES:
    - String
    - Integer
    - Float
    - Boolean
    - Array
    - Object
    - NULL
    - Resource
    */
    //string
    $name ='Papyrus';
    $name2 ="Sans";
    $name3 ="Frisk";
    var_dump($name);
    var_dump($name2);
    var_dump($name3);
    echo "<br>";
    echo getType($name);
    echo "<br>";

    //integer
    $age = 20;
    var_dump($age);
    echo "<br>";

    //float
    $rating = 9.5;
    var_dump($rating);
    echo "<br>";

    //boolean
    $is_loaded = true;
    var_dump($is_loaded);
    echo "<br>";

    //array
    $marvelRivalsCharacters = array('Iron Man', 'Captain America', 'Thor', 'Hulk', 'Black Widow', 'Hawkeye');
    var_dump($marvelRivalsCharacters);
    echo "<br>";
    echo getType($marvelRivalsCharacters);
    echo "<br>";

    //object
    $person = new stdClass();
    var_dump($person);
    echo "<br>";
    echo getType($person);
    echo "<br>";

    //null
    $anime1 = null;
    var_dump($anime1);
    echo "<br>";

    //resource
    $file = fopen('sample.txt', 'r');
    echo getType($file);
?>