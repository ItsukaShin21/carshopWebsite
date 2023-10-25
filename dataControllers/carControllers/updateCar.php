<!--This controller is for updating data for the cars-->
<?php
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');
                
    if(isset($_POST['updatecar_button'])) {
        $carID = $_POST['car_code'];
        $carName = $_POST['carName'];
        $carprice = $_POST['carPrice'];
        $branch = $_POST['branch_name'];
        $carDescription = $_POST['carDescription'];

        $sql = "UPDATE cars SET carname = '$carName', branch = '$branch', description = '$carDescription', price = '$carprice' WHERE carID = '$carID'";
        $conn -> query($sql);  
                    
        header('Location: carPage.php');
    }
?>