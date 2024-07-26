<?php
include 'create.php';

$sql = "SELECT id, create_time, name, email, phone, message FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contacts List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["phone"]; ?></td>
                                    <td><?php echo $row["message"]; ?></td>
                                    <td>
                                        <a href='edit.php?id=<?php echo $row["id"]; ?>' class='btn btn-primary btn-sm'>Edit</a>
                                        <a href='delete.php?id=<?php echo $row["id"]; ?>' class='btn btn-danger btn-sm'>Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    echo "<p class='text-center'>0 results</p>";
}
$conn->close();
?>