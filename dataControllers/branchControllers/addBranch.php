<?php
// This controller is for adding the data in database
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

// Function to add a new branch
    if (isset($_POST['add_branch'])) {
        $branchname = $_POST['branchname'];
    
        $sql = "INSERT INTO branch (branchname) VALUES ('$branchname')";
        $conn->query($sql);
    }
?>