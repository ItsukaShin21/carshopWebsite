<?php
    // This controller is for adding the data in database
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

    // Function to add customer
    if (isset($_POST['addcustomerBtn'])) {
        // Retrieve the selected values
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $branch = $_POST['branch'];
        $buyedcar = $_POST['buyedcar'];
    
        $sql = "SELECT COUNT(*) FROM branch WHERE branchname = '$branch'";
        $result = $conn->query($sql);
    
        if ($result) {
            $row = $result->fetch_assoc();
            $branchExists = $row['COUNT(*)'];
    
            if ($branchExists > 0) {
                // Branch exists, so you can proceed with the customer insertion
                $sqladdCustomer = "INSERT INTO customer (name, contact, address, branch, buyedcar, datepurchased) 
                VALUES ('$name', '$contact', '$address', '$branch', '$buyedcar', NOW())";

                $sqladdsoldCount = "UPDATE cars SET sold = sold + 1 WHERE carname = '$buyedcar'";
                $conn->query($sqladdCustomer);
                $conn->query($sqladdsoldCount);
            } else {
                // Branch doesn't exist, handle the error or provide feedback to the user
                echo "<script>alert('The branch does not exist, choose a valid one')</script>";
            }
        }
    }
?>