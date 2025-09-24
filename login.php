<?php
$valid_user = "";
$valid_pass = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $password = isset($_POST['Password']) ? $_POST['Password'] : '';

    if ($email == $valid_user && $password == $valid_pass) {
        echo "<h2 style='color:green; text-align:center;'>Welcome, " . htmlspecialchars($email) . "! </h2>";
    } else {
        echo "Login Failed";
        echo "Go Back";
    }
} else {
    echo "Invalid Request";
}
?>
