<?php
//connect to database
include_once("./config/database.php");

//catch the id from the url
$id = $_GET["id"];

if($id !== null){
    //select the complete detail from the hacathon table
    $select_event = "SELECT * FROM events WHERE `id` = '$id'  LIMIT 1";
    $heading = $conn->query($select_event);
    $details = $conn->query($select_event);

  

}

