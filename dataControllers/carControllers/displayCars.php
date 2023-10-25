<!--This controller is for displaying data for the cars-->
<?php
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');
    // Loop through the fetched data and create rows in the table
    // Query to fetch data from the database
    $sql = "SELECT * FROM cars";
    $result = $conn->query($sql);
     
    // Check if the table has data
    if($result -> num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $carID = $row['carID'];
            
            echo "<tr>";
            echo '<form method = "POST">';
            echo '<input type="hidden" name="car_code" value="'.$carID.'">';
            echo "<td>" . $row["carname"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>
            <input type='submit' name='edit_car' value='EDIT' class='tableBtn'>
            <input type='submit' name='delete_car' value='DELETE' class='tableBtn'>
            </form>
            </td>";
        }
    } else {
        echo "<td colspan = '4'>No cars available</td>";
        }
    echo "</tr>";
?>