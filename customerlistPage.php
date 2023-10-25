<?php
    require_once('db_connection.php');
    require_once('./dataControllers/customerControllers/addCustomer.php');
    require_once('./dataControllers/customerControllers/deleteCustomer.php');
    require_once('./dataControllers/customerControllers/editCustomer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KotCheck | Customer</title>
    <link rel = "stylesheet" href = "./css/styles.css">
    <script src = "./script/script.js"></script>
</head>
<body class = bg>
    <div class = "headerContainers">
        <div class = "headerContainer1">
            <a href = "loginPage.php" class = "logoutBtn">LOG OUT</a>
        </div>
        <div class = "headerContainer2">
            <a href="">
                <img src = "./images/weblogo.png" class = "webLogo">
            </a>
            <div class = "navBtns">
                <a href="carPage.php">Car Page</a>
                <a href = "branchlistPage.php">Branch Page</a>
                <a href = "customerlistPage.php">Customer Page</a>
            </div>
        </div>
    </div>

    <div class = "mainSection">
        <div class = "customerlistTable">
            <?php require_once('./dataControllers/customerControllers/displayCustomer.php') ?>
        </div>

        <div class = "addForm addcustomerForm">
        <form method="POST">
            <p>ADD/EDIT CUSTOMER</p>
            <input type="hidden" name = "customerid" value = "<?php require_once('./dataControllers/customerControllers/customeridFetcher.php') ?>">
            <input type="text" name="name" placeholder="Name" class="addcustomerTxt" required value = "<?php require_once('./dataControllers/customerControllers/customernameFetcher.php') ?>">
            <input type="number" name="contact" placeholder="Contact Info" class="addcustomerTxt" required value = "<?php require_once('./dataControllers/customerControllers/customercontactFetcher.php') ?>">
            <input type="text" name="address" placeholder="Address" class="addcustomerTxt" required value = "<?php require_once('./dataControllers/customerControllers/customeraddressFetcher.php') ?>">
            <input name="branch" id = "branch" class="addcustomerTxt" placeholder = "Branch" value = "<?php require_once('./dataControllers/customerControllers/customerbranchFetcher.php') ?>">
    
            <select name = "buyedcar" id = "buyedcar" class="addcustomerTxt">
                <option value="">Choose Car</option>
                <?php require_once('./dataControllers/otherControllers/fetch_cars.php') ?>
            </select>
            
            <input type = "submit" name = "addcustomerBtn" value = "ADD CUSTOMER" class = "addcustomerBtn">
            <input type = "submit" id = "editcustomerBtn" name = "editcustomerBtn" value = "EDIT CUSTOMER" class = "addcustomerBtn">
        </form>
        </div>
    </div>
</body>
</html>