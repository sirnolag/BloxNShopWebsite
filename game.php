<?php
header("Content-Type: application/json");

$universeId = $_GET['universeId'] ?? null;

if (!$universeId) {
    echo json_encode(["error" => "No universe ID"]);
    exit;
}

$url = "https://games.roblox.com/v1/games?universeIds=" . $universeId;

$response = file_get_contents($url);

echo $response;
?>