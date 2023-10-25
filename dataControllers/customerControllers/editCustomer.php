<?php
    // This controller is for editing the data in database
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

    //Function to edit a customer
    if (isset($_POST['editcustomerBtn'])) {
        $customerID = $_POST['customerid'];
        $customername = $_POST['name'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $branch = $_POST['branch'];
        $buyedcar = $_POST['buyedcar'];
    
        $sql = "UPDATE customer SET name = '$customername', contact = '$contact', address = '$address', branch = '$branch', buyedcar = '$buyedcar' WHERE customerID = '$customerID'";
        $conn -> query($sql); 
    }
?>