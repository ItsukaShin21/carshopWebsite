<?php
    // This controller is for displaying the data in database
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

    if(isset($_GET['carname'])) {
        $carname = $_GET['carname'];

    // Query to fetch unique branches
    $sql = "SELECT * FROM customer WHERE buyedcar = '$carname'";
    $result = $conn->query($sql);

    echo '<table>
    <caption>' . $carname . '</caption>
    <thead>
    <th>Name</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Date & Time purchased</th>
    </thead>
    <tbody>';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $customerID = $row['customerID'];
            $name = $row['name'];
            $contact = $row['contact'];
            $address = $row['address'];
            $datetime = $row['datepurchased'];

            echo '<form method = "GET">';
            echo '<input type="hidden" name="carname" value="' . $name . '">';
            echo '<tr>';
            echo '<input type="hidden" name="carid" value="' . $customerID . '">';
            echo '<td>' . $name . '</td>';
            echo '<td>' . $contact . '</td>';
            echo '<td>' . $address . '</td>';
            echo '<td>'. $datetime .'</td>';
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