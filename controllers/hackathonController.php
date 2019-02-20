<?php
//connect to database
include_once("./config/database.php");

//select all from hackathon table
$select_hackathons = "SELECT * FROM hackathons ORDER BY `id` DESC  LIMIT 12 ";
$results = $conn->query($select_hackathons);

