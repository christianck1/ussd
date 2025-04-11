<?php
// Read the variables sent via GET
$sessionId   = $_GET["sessionId"];
$serviceCode = $_GET["serviceCode"];
$phoneNumber = $_GET["phoneNumber"];
$text        = $_GET["text"];

// Explode text to get user input level
$textArray = explode("*", $text);
$userResponse = trim(end($textArray));

// Check user input level
if ($text == "") {
    // First request
    $response  = "CON VIRUS PREVENTION SYSTEM\n";
    $response .= "1. Kinyarwanda\n";
    $response .= "2. English";
} 

// English Menu
else if ($text == "2") {
    $response = "CON Choose Virus:\n";
    $response .= "1. Marburg Virus\n";
    $response .= "2. Monkey Pox Virus\n";
    $response .= "3. Ebola Virus\n";
    $response .= "4. Covid-19 Virus\n";
} 

// Marburg Virus Menu
else if ($text == "2*1") {
    $response = "CON Marburg Virus\n";
    $response .= "1. Symptoms\n";
    $response .= "2. Prevention\n";
    $response .= "3. Vaccination\n";
    $response .= "4. Messages\n";
    $response .= "5. Check Results\n";
    $response .= "6. Virus CheckUp\n";
}

// Marburg Virus Details
else if ($text == "2*1*1") {
    $response = "END Marburg Symptoms:\n";
    $response .= "- Fever, Headache, Muscle pain\n";
    $response .= "- Vomiting, Diarrhea, Rash\n";
    $response .= "- Red eyes, Sore throat, Chest pain\n";
    $response .= "- Internal bleeding";
} 
else if ($text == "2*1*2") {
    $response = "END Marburg Prevention:\n";
    $response .= "- Avoid contact with infected persons\n";
    $response .= "- Wash hands regularly\n";
    $response .= "- Use protective equipment\n";
    $response .= "- Avoid funeral rituals involving contact";
} 
else if ($text == "2*1*3") {
    $response = "END Marburg Vaccination:\n";
    $response .= "Available in:\n";
    $response .= "- Rusizi, Nyamasheke, Kigali\n";
    $response .= "Dose Types: 1st, 2nd, Booster\n";
    $response .= "Dates: Every Monday and Thursday";
} 
else if ($text == "2*1*4") {
    $response = "END RBC Messages:\n";
    $response .= "- 5 people infected in Rusizi District\n";
    $response .= "- Follow safety guidelines";
} 
else if ($text == "2*1*5") {
    $response = "END Check Results:\n";
    $response .= "- Your signs show you are suspicious.\n";
    $response .= "- Visit the nearest health center.";
} 
else if ($text == "2*1*6") {
    $response = "END Virus CheckUp:\n";
    $response .= "Visit: www.viruspreventionsystem.rw";
}

// Monkey Pox Virus Menu
else if ($text == "2*2") {
    $response = "CON Monkey Pox Virus\n";
    $response .= "1. Symptoms\n";
    $response .= "2. Prevention\n";
    $response .= "3. Vaccination\n";
    $response .= "4. Messages\n";
    $response .= "5. Check Results\n";
    $response .= "6. Virus CheckUp\n";
}

// Monkey Pox Details
else if ($text == "2*2*1") {
    $response = "END Monkey Pox Symptoms:\n";
    $response .= "- Fever, Headache, Muscle pain\n";
    $response .= "- Rash, Swollen lymph nodes\n";
    $response .= "- Chills, Exhaustion";
} 
else if ($text == "2*2*2") {
    $response = "END Monkey Pox Prevention:\n";
    $response .= "- Avoid animal contact\n";
    $response .= "- Wash hands regularly\n";
    $response .= "- Use protective equipment";
} 
else if ($text == "2*2*3") {
    $response = "END Monkey Pox Vaccination:\n";
    $response .= "Available in:\n";
    $response .= "- Rusizi, Nyamasheke, Kigali\n";
    $response .= "Dose Types: 1st, 2nd, Booster\n";
    $response .= "Dates: Every Monday and Thursday";
} 
else if ($text == "2*2*4") {
    $response = "END RBC Messages:\n";
    $response .= "- 2 new cases in Kigali\n";
    $response .= "- Follow safety guidelines";
} 
else if ($text == "2*2*5") {
    $response = "END Check Results:\n";
    $response .= "- Your signs show you are suspicious.\n";
    $response .= "- Visit the nearest health center.";
} 
else if ($text == "2*2*6") {
    $response = "END Virus CheckUp:\n";
    $response .= "Visit: www.viruspreventionsystem.rw";
}

// Invalid Input
else {
    $response = "END Invalid input. Try again.";
}

// Send the response back to the API
header('Content-type: text/plain');
echo $response;
?>
