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

        if(isset($_FILES['image'])){

            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
           
            
            if($file_size > 2097152){
               $errors[]='File size must be excately 2 MB';
            }
            
            if(empty($errors)==true){
               move_uploaded_file($file_tmp,"../../assets/uploads/".$file_name);
              
            }else{
                header("Location:../add_hackathon.php");
            }
        }

        $sql = "INSERT INTO hackathons (`name`, `start_date`, `end_date`, `tags`, `description`,`image`) 
        VALUES ('$h_name', '$h_date_b', '$h_date_e', '$h_tag','$h_description','$file_name')";

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