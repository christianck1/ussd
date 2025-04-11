<?php
// Get input from the telco gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

// Logic
if ($text == "") {
    // First menu
    $response  = "CON Welcome to CK Services\n";
    $response .= "1. Check Balance\n";
    $response .= "2. Buy Airtime";
    
} else if ($text == "1") {
    // Option 1 selected
    $response = "END Your balance is RWF 1,000";
    
} else if ($text == "2") {
    // Option 2 selected
    $response = "END You bought airtime successfully";
    
} else {
    $response = "END Invalid choice. Try again.";
}

// Output response
header('Content-type: text/plain');
echo $response;
