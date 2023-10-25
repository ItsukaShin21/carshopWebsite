<!--This controller is for updating data for the cars-->
<?php
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');
                
    if (isset($_POST['updatecar_button'])) {
        $carID = $_POST['car_code'];
        $carName = $_POST['carName'];
        $carprice = $_POST['carPrice'];
        $branch = $_POST['branch_name'];
        $carDescription = $_POST['carDescription'];
        
        // Check if the branch exists
        $sql = "SELECT COUNT(*) as branchExists FROM branch WHERE branchname = '$branch'";
        $result = $conn->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            $branchExists = $row['branchExists'];

            if ($branchExists > 0) {
                // The branch exists; now check if the car already exists in that branch
                $sql = "SELECT COUNT(*) as carExists FROM cars WHERE branch = '$branch' AND carname = '$carName'";
                $result = $conn->query($sql);
    
                if ($result) {
                    $row = $result->fetch_assoc();
                    $carExists = $row['carExists'];
    
                    if ($carExists > 0) {
                        // Car already exists in the branch, handle the error or provide feedback to the user
                        echo "<script>alert('The car already exists in the branch, choose a different name or branch')</script>";
                    } else {
                        // Car doesn't exist in the branch; update the data in the database
                        $sql = "UPDATE cars SET carname = '$carName', branch = '$branch', description = '$carDescription', price = '$carprice' WHERE carID = '$carID'";
                        $conn->query($sql);
                    }
                }
            } else {
                // Branch doesn't exist, handle the error or provide feedback to the user
                echo "<script>alert('The branch does not exist, choose a valid one')</script>";
            }
        }
    }
?>