<?php
ob_start();
include "conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // echo" <h2> Data yang ditangkap dari form </h2>";
    // echo "Nama: $name <br>";
    // echo "Email: $email <br>";
    // echo "Phone: $phone <br>";
    // echo "Message: $message <br>";

    $sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', 
    '$phone', '$message')";
    
    if ($conn->query($sql) === TRUE) {
      header("Location: ctc.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

}
?>