<?php
    $dsn = 'mysql:host=97.74.31.28;dbname=finaljrs';
    $username = 'finaljrs';
    $password = 'Spring98@';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

?>
