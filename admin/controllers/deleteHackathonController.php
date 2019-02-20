<?php

    //include connection here
    include_once('../config/connection.php');
    //include session here
    include_once('../config/session.php');

    
    //catch the id from the url
    $id = $_GET["id"];

    // delete the hackathon using this id
    $sql = "DELETE FROM hackathons WHERE `id` = '$id'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION["hackathon_message"] = "Hackathon Successfully deleted";
        header("Location:../manage_hackathon.php");
    } else {
        $_SESSION["hackathon_message"] = "Error deleting record: " . $conn->error;
        header("Location:../manage_hackathon.php");
    }