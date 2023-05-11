<?php

    function connectDB() {
        // static $db_conn;
        $dbHostName = 'localhost';
        $dbUserName = 'root';
        $dbPassword = 'root';
        $dbConnection = mysqli_connect($dbHostName, $dbUserName, $dbPassword) or die ("Database connection failed: %s\n".$dbConnection -> error);
        return $dbConnection;
    }

    function disconnectDB($dbConnection) {
        $dbConnection -> close();
    }
?>