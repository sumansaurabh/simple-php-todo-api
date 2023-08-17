<?php
// Set the response content type to JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

// Create a response array
$response = [
    [
        "_id" => 0001,
        "todo" => "Buy groceries for the week"
    ],
    [
        "_id" => 0002,
        "todo" => "Complete the presentation slides"
    ],
    [
        "_id" => 0003,
        "todo" => "Call the utility company to resolve billing issue"
    ],
    [
        "_id" => 0004,
        "todo" => "Schedule a dentist appointment"
    ]
];

// Encode the response array as JSON
$jsonResponse = json_encode($response);

// Output the JSON response
echo $jsonResponse;