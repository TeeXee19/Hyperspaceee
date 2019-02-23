<?php

    //include connection here
    include_once('./config/connection.php');
    //include session here
    include_once('./config/session.php');

    $events = "SELECT * FROM events ORDER by id DESC";
    $results = $conn->query($events);
?>
