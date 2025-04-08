<?php

    $servername = "172.17.0.3";
    $username = "root";
    $password = "qwerty";
    $dbname = "example_db";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection successfull" . "<br />";
        // $conn = new mysqli($servername, $username, $password, $dbname);
    } catch (PDOException $e) {
        echo "connection failed ". $e->getMessage();
    }

