<?php
//connect to database
include_once("./config/database.php");

//select all from event table
$select_events = "SELECT * FROM events ORDER BY `id` DESC  LIMIT 12 ";
$results = $conn->query($select_events);

