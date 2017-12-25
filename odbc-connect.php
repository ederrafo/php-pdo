<?php
    $user = 'root';
    $password = 'Follow1ngcommand?.,!';
    $datasource = "test";
    try {
        $conn = new PDO(
            "odbc:".$datasource,
            $user,
            $password,
            array(
                //PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            )
        );
        echo "<pre>",__FILE__." on line ".__LINE__,": "; print_r($conn->getAvailableDrivers()); echo "</pre>";
    }
    catch(PDOException $e) {
        die("Error connecting to Datasource: " . $e->getMessage());
    }