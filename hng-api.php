<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$email = "rereadigun@gmail.com";
$timestamp = date('c');
$githuburl = "https://github.com/Rere99/hngapi";

// Prepare the response
$response = [
    "email" => $email,
    "timestamp" => $timestamp,
    "githuburl" => $githuburl
];

// Return JSON response
echo json_encode($response);
?>
