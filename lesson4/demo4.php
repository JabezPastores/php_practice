<?php
    define('App_Name', 'Inventory System');
    define('APP_Version', 'Version 1.0');

    //echo App_Name;
    //echo '<br>';
    //echo APP_Version;
    //echo '<br>';

    const DB_NAME = 'postgresql';
    const DB_HOST = 'supabase';

    //echo '<br>';
    //echo DB_NAME;
    //echo '<br>';
    

    function run(){
        echo App_Name;
        echo '<br>';
        echo DB_NAME, DB_HOST;
    }

    run();

    //const DB_NAME = 'DIFFDB';
    //echo DB_NAME;

    //define('App_Name2', 'Inventory System2');
    //echo App_Name2;
?>