<!--This controller is for adding data for the cars-->
<?php
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

        // Check if the form is submitted
        if (isset($_POST['addcar_button'])) {
            $carName = $_POST["carName"];
            $carPrice = $_POST["carPrice"];
            $branch = $_POST["branch_name"];
            $carDescription = $_POST["carDescription"];
        
            // Check if the branch exists
            $branchSql = "SELECT COUNT(*) as branchExists FROM branch WHERE branchname = '$branch'";
            $branchResult = $conn->query($branchSql);
        
            if ($branchResult) {
                $branchRow = $branchResult->fetch_assoc();
                $branchExists = $branchRow['branchExists'];
        
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
                            // Car doesn't exist in the branch; insert the submitted data into the database
                            $sql = "INSERT INTO cars (carname, branch, description, price) VALUES ('$carName', '$branch', '$carDescription', $carPrice)";
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