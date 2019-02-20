<?php
//include session here
include_once('./config/session.php');
//include connection here
include_once('./config/connection.php');

//grab the session and retrieve this user
$email = $_SESSION["user_email"];
$select_user = "SELECT firstname, lastname FROM users WHERE `email` = '$email' LIMIT 1 ";
$result = $conn->query($select_user);

$user = $result->fetch_assoc();

