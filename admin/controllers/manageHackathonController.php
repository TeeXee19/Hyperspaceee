<?php

    //include connection here
    include_once('./config/connection.php');
    //include session here
    include_once('./config/session.php');

    $hackathons = "SELECT * FROM hackathons ORDER by id DESC";
    $results = $conn->query($hackathons);
?>
