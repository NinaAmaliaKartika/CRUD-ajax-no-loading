<?php
    // connect ke db
    $db_host = "localhost";
    $db_database = "db_starbhak";
    $db_username = "root";
    $db_password = "";
    $db_port = "3306";

    // create connection
    $db1 = new mysqli($db_host, $db_username, $db_password, $db_database, $db_port);

    // check connection
    if ($db1->connect_error) {
        die('Connection failed:' .$db1->connect_error);
    }
?>