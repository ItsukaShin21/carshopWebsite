<?php
    // This controller will display all branch
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');
    
    // Function to retrieve branches
    $viewbranchSql = "SELECT * FROM branch";
    $branchlist = $conn -> query($viewbranchSql);

    if($branchlist -> num_rows > 0) {
        while ($branchlistrow = $branchlist -> fetch_assoc()) {
            $branchid = $branchlistrow['branchID'];
            $branchname = $branchlistrow['branchname'];
            $carsold = $branchlistrow['soldcars'];

            $sql = "SELECT COUNT(*) AS car_count FROM customer WHERE branch = '$branchname'";
            $result = $conn->query($sql);
        
            if ($result) {
                $row = $result->fetch_assoc();
                $carsold = $row['car_count'];
            } else {
                $carsold = 0;
            }
            
            echo '<tr>';
            echo '<form method = "POST">';
            echo '<input type="hidden" name="branch_id" value="' . $branchid . '">';
            echo '<input type="hidden" name="branch_name" value="'.$branchname.'">';
            echo '<td>' . $branchname . '</td>';
            echo '<td>' . $carsold . ' sold cars</td>';
            echo '<td>';
            echo '<input type="submit" name="edit_branch" value="EDIT" class="tableBtn" id = "edit_branch">';
            echo '<input type="submit" name="delete_branch" value="DELETE" class="tableBtn">';
            echo '</form>';
            echo '<form method = "POST">';
            echo '<input type="hidden" name="branch_id" value="' . $branchid . '">';
            echo '<input type="hidden" name="branch_name" value="'.$branchname.'">';
            echo '<input type="submit" name="view_branch" value="VIEW" class="tableBtn">';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="3">No branches</td></tr>';
        }
?>