<?php
    // This controller is for displaying the data
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');

    // Query to fetch unique branches
    $sqlBranches = "SELECT branchname FROM branch";
    $branchList = $conn->query($sqlBranches);
                
    if ($branchList -> num_rows > 0) {
        while ($branchRow = $branchList->fetch_assoc()) {
            $branch = $branchRow['branchname'];

            echo '<table>
                <caption>'.$branch.'</caption>
                <thead>
                    <th>Name</th>
                    <th>Contact Info</th>
                    <th>Address</th>
                    <th>Buyed Car</th>
                    <th></th>
                </thead>
                <tbody>';

    // Query to fetch customers for the current branch
    $sqlView = "SELECT * FROM customer WHERE branch = '$branch'";
    $list = $conn -> query($sqlView);
                
    if ($list->num_rows > 0) {
        while ($row = $list->fetch_assoc()) {
            $customerID = $row['customerID'];
            $name = $row['name'];
            $contact = $row['contact'];
            $address = $row['address'];
            $buyedcar = $row['buyedcar'];
                
            echo '<tr>
                <input type = "hidden" name = "customerid" value = "'.$customerID.'">
                <td>'.$name.'</td>
                <td>'.$contact.'</td>
                <td>'.$address.'</td>
                <td>'.$buyedcar.'</td>
                <td>
                <form method = "POST">
                <input type = "hidden" id="customerid" name = "customerid" value = "'.$customerID.'"><input type = "hidden" name = "buyedcar" value = "'.$buyedcar.'";
                <input type = "hidden" name = "customername" value = "'.$name.'">
                <input type="submit" name="edit_customer" class="tableBtn edit_customer" id="editBtn" value="EDIT">
                <input type="submit" name="delete_customer" id="delete_customer" class="tableBtn delete_customer" value="DELETE" data-customerid="'.$customerID.'">
                </form>
                </td>
                </tr>';
        }
    } else {
        echo '<tr><td colspan="5">No customers in this branch.</td></tr>';
    }
        echo '</tbody></table>';
    }
    } else {
        echo 'No branches and customers found';
    }
?>