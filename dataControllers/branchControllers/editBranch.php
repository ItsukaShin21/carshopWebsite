<?php
    // This controller is for editing the data in database
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

    // Function to edit a branch
    if(isset($_POST['edit_branchbtn'])) {
        $branchid = $_POST['branch_id'];
        $branchname = $_POST['branchname'];

        $sql = "UPDATE branch SET branchname = '$branchname' WHERE branchID = '$branchid'";
        $conn -> query($sql);
        
        header('Location: branchlistPage.php');
    }
?>