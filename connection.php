<?php
$servername = "localhost:3306"; // This is usually 'localhost' for a local setup.
        $username = "root"; // Use your MySQL username.
        $password = ""; // Use your MySQL password, might be empty by default.
        $dbname = "database_name"; // Your database name in MySQL.

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>