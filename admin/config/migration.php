<?php
    //include connection here
    include_once('connection.php');

   // sql to create tables
    $users_table = "CREATE TABLE IF NOT EXISTS users  (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        usertype VARCHAR(10) DEFAULT 'user'
        )";
        
        if ($conn->query($users_table) === TRUE) {
            echo "Table user  successful created ";
        }
        else{
            echo "Migration error : " . $conn->error;
        }
    
    $hackathons_table = "CREATE TABLE IF NOT EXISTS hackathons  (
        `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(150) NOT NULL,
        `start_date` DATETIME(6) NOT NULL,
        `end_date` DATETIME(6) NOT NULL,
        `tags` TEXT,
        `description` TEXT
       
        )";
        
        if ($conn->query($hackathons_table) === TRUE) {
            echo "Table hackathons successful created ";
        }
        else{
            echo "Migration error : " . $conn->error;
        }

    
