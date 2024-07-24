<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON input from the request body
    $data = json_decode(file_get_contents('php://input'), true);
    // Extract the phone number from the input data
    $phoneNumber = $data['phoneNumber'];

    // Process the phone number (e.g., initiate WhatsApp pairing)
    // For demonstration, we'll just return a success message

    // Return a success message
    echo "Pairing initiated for phone number: " . htmlspecialchars($phoneNumber);
}
?>
