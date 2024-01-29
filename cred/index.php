<?php
include "connection.php";

// Delete functionality
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE from `services` where id=$id";
    $conn->query($sql);
    
  
}

// Fetching data
$sql = "SELECT * FROM services";
$result = $conn->query($sql);
if (!$result) {
    die("Invalid query: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Inventory Management System</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="btn btn-dark" href="create.php">Add New</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Count</th>
                    <th>PRICE</th>
                    <th>MFG.DATE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['count']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['date']}</td>
                        <td>
                            <a class='btn btn-success' href='edit.php?id={$row['id']}'>Edit</a>
                            <a class='btn btn-danger' href='index.php?id={$row['id']}' onclick='return confirm(\"Are you sure you want to delete this item?\");'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
