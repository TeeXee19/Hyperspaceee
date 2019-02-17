<?php

    //include connection here
    include_once('../config/connection.php');
    //include session here
    include_once('../config/session.php');

    // define variables and set to empty values
    $firstname = $lastname = $email = $password  = "";
    function validate_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstname = validate_input($_POST["firstname"]);
        $lastname = validate_input($_POST["lastname"]);
        $email = validate_input($_POST["email"]);
        $password = md5(md5(validate_input($_POST["password"])));
    
    }


    if(isset($_POST["register"])){

        $sql = "INSERT INTO users (`firstname`, `lastname`, `email`, `password`) 
        VALUES ('$firstname', '$lastname', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            
            $_SESSION["username"] = $email;
            header("Location:../dashboard.php");
           
        } else {
            //$_SESSION["registration_error"] = "Error: " . $sql . "<br>" . $conn->error;
            $_SESSION["registration_error"] = "Your records where not created successfully, Please double check your input";
            header("Location:../register.php");
        }

    }
    




?>