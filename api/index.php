<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: https://thyeme.myshopify.com");
header("Access-Control-Allow-Methods: DELETE, GET, HEAD, OPTIONS, PATCH, POST, PUT");
header("Access-Control-Allow-Headers: content-type");
header("Allow: OPTIONS, POST, HEAD, GET");
header("Alt-Svc: h3=\":443\"; ma=86400");
header("Cf-Cache-Status: DYNAMIC");
header("Vary: Origin");

// Check if it's a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Fetch the POST data if needed, but for now, we'll just acknowledge the request
    // $postData = json_decode(file_get_contents("php://input"), true);

    // Respond with success
    $responseData = array("success" => true);
    echo json_encode($responseData);
} else {
    // If it's not a POST request, return an error
    http_response_code(400);
    echo json_encode(array("success" => false, "error" => "Invalid request method"));
}
?>
