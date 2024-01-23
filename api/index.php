<?php
header("Content-Type: application/json");

// Check if it's a POST request or if 'check' parameter is present in the URL
if ($_SERVER["REQUEST_METHOD"] === "POST" || isset($_GET['check'])) {
    $responseData = array("success" => true);

    // Encode the data as JSON
    $jsonResponse = json_encode($responseData);

    // Send the JSON response
    echo $jsonResponse;
} else {
    // If it's not a POST request, return an error
    echo json_encode(array("success" => false, "error" => "Invalid request method"));
}
?>