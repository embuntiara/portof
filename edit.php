<?php
ob_start();


    include 'conn.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM contacts WHERE id = $id";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
        }
    }

     if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "UPDATE contacts SET name = '$name', email = '$email', phone = '$phone', message = '$message' WHERE id = $id";
        
        if($conn->query($sql) === TRUE){
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
// Suggested code may be subject to a license. Learn more: ~LicenseLog:1799164890.
        $conn->close();
        header("Location: result.php");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditFile</title>
</head>
<body>
    <form action="edit.php" method="post" autocomplete="off">
        <h3 class="title">Contact us</h3>
        <!-- id  -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <!-- username  -->
        <div class="input-container">
            <input type="" name="name" class="input" value = "<?php echo $row['name']; ?>" />
            <label for="">Username</label>
            <span>Username</span>
        </div>
        <div class="input-container">
            <input type="email" name="email" class="input" value = "<?php echo $row['email']; ?>" />
            <label for="">Email</label>
            <span>Email</span>
        </div>
        <div class="input-container">
            <input type="tel" name="phone" class="input" value = "<?php echo $row['phone']; ?>" />
            <label for="">Phone</label>
            <span>Phone</span>
        </div>
        <div class="input-container textarea">
            <textarea name="message" class="input"><?php echo $row['message']; ?></textarea>
            <label for="">Message</label>
            <span>Message</span>
        </div>
        <input type="submit" value="Send" class="btn" />
    </form>
</body>

</html>


