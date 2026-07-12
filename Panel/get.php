<?php

$apiKey = "ei4Y4QqZ18yfgFTz7v0SoQSjYAZLpViUKKy4063OWhu";

if (!isset($_GET["key"]) || $_GET["key"] !== $apiKey) {
    http_response_code(403);
    echo json_encode(["error" => "Unauthorized"]);
    exit;
}

header("Content-Type: application/json");

echo file_get_contents("data.json");

?>