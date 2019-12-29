<?php
  
$summary = $_POST["summary"];
$description = $_POST["description"];
$url = "https://visoldev.ddns.net:8888/rest/api/2/issue/";
$username = "testuser";
$password = "Test123";
$date = $_POST["date"];
$priority = $_POST["priority"];
$txt = '{
    "fields": {
        "project": {
            "key": "TEST"
        },
        "summary": "'.$summary.'",
        "description": "'.$description.'",
        "assignee":{"name":"testuser"},
        "duedate": "'.$date.'",
        "priority":{"name":"'.$priority.'"},
        "issuetype": {
            "name": "Task"
        }
    }
}';

// Create a new cURL resource
$ch = curl_init ();

// Set URL and other appropriate options
curl_setopt ( $ch, CURLOPT_URL, $url );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $txt );
curl_setopt ( $ch, CURLOPT_POST, 1 );
curl_setopt ( $ch, CURLOPT_USERPWD, $username . ":" . $password );

$headers = array ();
$headers [] = "Content-Type: application/json";
curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );

// Grab URL and pass it to the browser
$result = curl_exec ( $ch );

echo $result;

?>