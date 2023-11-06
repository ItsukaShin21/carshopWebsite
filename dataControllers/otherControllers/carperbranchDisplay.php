<?php
    // This controller is for displaying the data in database
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

    if(isset($_GET['branchname'])) {
        $branchname = $_GET['branchname'];

    // Query to fetch unique branches
    $sqlBranches = "SELECT * FROM cars WHERE branch = '$branchname'";
    $branchList = $conn->query($sqlBranches);

    echo '<table>
    <caption>' . $branchname . '</caption>
    <thead>
    <th>Car code</th>
    <th>Description</th>
    <th>Sold</th>
    <th>Price</th>
    <th></th>
    </thead>
    <tbody>';

    if ($branchList->num_rows > 0) {
        while ($branchRow = $branchList->fetch_assoc()) {
            $carID = $branchRow['carID'];
            $carname = $branchRow['carname'];
            $description = $branchRow['description'];
            $price = $branchRow['price'];

            $sql1 = "SELECT COUNT(*) AS cars_count FROM customer WHERE buyedcar = '$carname' AND branch = '$branchname'";
            $result = $conn->query($sql1);
            $row = $result->fetch_assoc();
            $soldcar = $row['cars_count'];

            echo '<form method = "GET">';
            echo '<input type="hidden" name="carname" value="' . $carname . '">';
            echo '<tr>';
            echo '<input type="hidden" name="carid" value="' . $carID . '">';
            echo '<td>' . $carname . '</td>';
            echo '<td>' . $description . '</td>';
            echo '<td>' . $soldcar . '</td>';
            echo '<td>'.$price.'</td>';
            echo '<td>';
            echo '<input type="submit" value="VIEW" class="tableBtn" name="view_customers">';
            echo '</td>';
            echo '</tr>';
            echo '</form>';
        }
        } else {
        echo '<tr><td colspan="5">No cars in this branch.</td></tr>';
        }
        echo '</tbody></table>';
        } else {
        echo 'No cars in this branch';
    }
?>