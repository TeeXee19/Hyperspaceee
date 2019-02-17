<?php

    //include connection here
    include_once('../config/connection.php');
    //include session here
    include_once('../config/session.php');

    // define variables and set to empty values
    $h_name = $h_tag = $h_date_b = $h_date_e = $h_description = "";
    function validate_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $h_name = validate_input($_POST["h_name"]);
        $h_tag = validate_input($_POST["h_tag"]);
        $h_date_b = validate_input($_POST["h_date_b"]);
        $h_date_e = validate_input($_POST["h_date_e"]);
        $h_description = validate_input($_POST["h_description"]);
    
    }


    if(isset($_POST["h_register"])){

        $sql = "INSERT INTO hackathons (`name`, `start_date`, `end_date`, `tags`, `description`) 
        VALUES ('$h_name', '$h_date_b', '$h_date_e', '$h_tag','$h_description')";

        if ($conn->query($sql) === TRUE) {
            
            $_SESSION["hackathon_message"] = "Hackathon Successfully Created";
            header("Location:../add_hackathon.php");
           
        } else {
            $_SESSION["hackathon_message"] = "Error: " . $sql . "<br>" . $conn->error;
            //$_SESSION["hackathon_message"] = "Your records where not created successfully, Please double check your input";
            header("Location:../add_hackathon.php");
        }

    }
    




?>