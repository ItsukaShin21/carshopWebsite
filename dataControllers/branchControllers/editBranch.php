<?php
    // This controller is for editing the data in database
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

    // Function to edit a branch
    if(isset($_POST['edit_branchbtn'])) {
        $branchid = $_POST['branch_id'];
        $branchname = $_POST['branchname'];

        $sql = "UPDATE branch SET branchname = '$branchname' WHERE branchID = '$branchid'";
<<<<<<< Updated upstream
        $conn -> query($sql);
=======
        
        $conn->begin_transaction();

        if($conn->query($sql) === TRUE) {
                $conn->commit();
            } else {
                $conn->rollback();
            }
>>>>>>> Stashed changes
    }
?>