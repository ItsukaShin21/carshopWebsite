<?php
// This controller is for adding the data in database
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

// Function to add a new branch
    if (isset($_POST['add_branch'])) {
        $branchname = $_POST['branchname'];
        
        $sql = "SELECT COUNT(*) as count FROM branch WHERE branchname = '$branchname'";
        $result = $conn->query($sql);
        if($result) {
            $row = $result->fetch_assoc();
            $count = $row['count'];
            if($count > 0) {
                echo "<script>alert('The branch already exist, choose another one')</script>";
            } else {
                $sql = "INSERT INTO branch (branchname) VALUES ('$branchname')";
                $conn->query($sql);
            }
        }
    }
?>