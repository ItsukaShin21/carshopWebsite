<?php
    // This controller is for deleting data in database
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

    // Function to delete a customer
     if (isset($_POST['delete_customer'])) {
        $customer_id = $_POST['customerid'];
        $buyedcar = $_POST['buyedcar'];
        
        $sql = "DELETE FROM customer WHERE customerID = '$customer_id'";
        $updateCount = "UPDATE cars SET sold = sold -1 WHERE carname = '$buyedcar'";
        $conn -> query($sql);
        $conn -> query($updateCount);
    }
?>