<?php

    //include session here
    include_once('../config/session.php');

    //include connection here
    include_once('../config/connection.php');
    


    // define variables and set to empty values
    $username = $password  = "";
    function validate_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = validate_input($_POST["username"]);
        $password = md5(md5(validate_input($_POST["password"])));
    
    }


    if(isset($_POST["login"])){

        $registered_users = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password' ";
        $result = $conn->query($registered_users);

        if ($result->num_rows > 0) {
            // redirect to homepage
            
            $_SESSION["user_email"] = $email;
            header("Location:../dashboard.php");
            
        } 
        else {
            //$_SESSION["registration_error"] = "Error: " . $sql . "<br>" . $conn->error;
            $_SESSION["login_error"] = "Incorrect Login Details";
            header("Location:../index.php");
        }


    }
    




?>