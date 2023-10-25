<?php
// This controller is for deleting the data in database
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');
    
    // Function to delete a branch
    if (isset($_POST['delete_branch'])) {
        $branch_id = $_POST['branch_id'];

        $sql = "DELETE FROM branch WHERE branchID = '$branch_id'";
        $result = $conn -> query($sql);
    }
?>