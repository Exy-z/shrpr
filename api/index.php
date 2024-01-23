<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: https://thyeme.myshopify.com");
header("Access-Control-Allow-Methods: DELETE, GET, HEAD, OPTIONS, PATCH, POST, PUT");
header("Access-Control-Allow-Headers: content-type");
header("Allow: OPTIONS, POST, HEAD, GET");
header("Alt-Svc: h3=\":443\"; ma=86400");
header("Cf-Cache-Status: DYNAMIC");
header("Content-Encoding: br");
header("Vary: Origin");

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
