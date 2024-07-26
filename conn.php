<!-- Suggested code may be subject to a license. Learn more: ~LicenseLog:3205089721. -->
<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "contact_form";

//create conection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>