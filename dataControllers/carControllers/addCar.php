<!--This controller is for adding data for the cars-->
<?php
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

        // Check if the form is submitted
        if (isset($_POST['addcar_button'])) {
            $carName = $_POST["carName"];
            $carPrice = $_POST["carPrice"];
            $branch = $_POST["branch_name"];
            $carDescription = $_POST["carDescription"];

            $sql = "SELECT COUNT(*) FROM branch WHERE branchname = '$branch'";
            $result = $conn->query($sql);

            if ($result) {
                $row = $result->fetch_assoc();
                $branchExists = $row['COUNT(*)'];

                if($branchExists > 0) {
                    // Insert the submitted data into the database
                    $sql = "INSERT INTO cars (carname, branch, description, price) VALUES ('$carName', '$branch','$carDescription', $carPrice)";
                    $conn -> query($sql);
                } else {
                    // Branch doesn't exist, handle the error or provide feedback to the user
                    echo "<script>alert('The branch does not exist, choose a valid one')</script>";
                }
            }
        }
?>