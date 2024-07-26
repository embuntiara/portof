<?php
ob_start();

    include 'conn.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM contacts WHERE id = $id";
        
        if ($conn->query($sql) === TRUE) {
            // echo "successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        $conn->close();
        header("Location: result.php");
    }



?>