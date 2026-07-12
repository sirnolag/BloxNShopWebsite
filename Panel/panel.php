<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $message = $_POST["message"];

    $data = [
        "message" => $message,
        "id" => time()
    ];

    file_put_contents(
        "data.json",
        json_encode($data, JSON_PRETTY_PRINT)
    );

    $success = "Updated!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>

<body>

<h2>Send Message</h2>

<?php
if (isset($success)) {
    echo "<p>$success</p>";
}
?>

<form method="POST">

    <input 
        type="text" 
        name="message" 
        placeholder="Enter message"
    >

    <button type="submit">
        Send
    </button>

</form>

</body>
</html>