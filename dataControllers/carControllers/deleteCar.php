<!--This controller is for deleting data for the cars-->
<?php
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

    // Check if the form is submitted
    if (isset($_POST['delete_car'])) {
        $carID = $_POST['car_code'];

        // Delete the data from the database
        $sql = "DELETE FROM cars WHERE carID = '$carID'";
        $conn -> query($sql);
    }
?>