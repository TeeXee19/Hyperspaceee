<?php
//connect to database
include_once("./config/database.php");

//catch the id from the url
$id = $_GET["id"];

if($id !== null){
    //select the complete detail from the hacathon table
    $select_hackathon = "SELECT * FROM hackathons WHERE `id` = '$id'  LIMIT 1";
    $heading = $conn->query($select_hackathon);
    $details = $conn->query($select_hackathon);

  

}

