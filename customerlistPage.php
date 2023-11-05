<?php
    require_once('db_connection.php');
    require_once('./dataControllers/customerControllers/addCustomer.php');
    require_once('./dataControllers/customerControllers/editCustomer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KotCheck | Customer</title>
    <link rel = "stylesheet" href = "./css/styles.css">
    <script src = "./script/jqueryscript.js"></script>
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
        <div class = "customerlistTable" id = "customerlistTable">
            <?php require_once('./dataControllers/customerControllers/displayCustomer.php') ?>
        </div>

        <div class = "addForm addcustomerForm">
        <form method="POST" id = "customerForm" onsubmit="return validateForm()">
            <p>ADD/EDIT CUSTOMER</p>
            <input type="hidden" name = "customerid" id="customerid" value="<?php require_once('./dataControllers/customerControllers/customeridFetcher.php') ?>">
            <input type="text" name="name" id="name" placeholder="Name" class="addcustomerTxt" required value="<?php require_once('./dataControllers/customerControllers/customernameFetcher.php') ?>">
            <input type="number" name="contact" id="contact" placeholder="Contact Info" class="addcustomerTxt" required value="<?php require_once('./dataControllers/customerControllers/customercontactFetcher.php') ?>">
            <input type="text" name="address" id="address" placeholder="Address" class="addcustomerTxt" required value="<?php require_once('./dataControllers/customerControllers/customeraddressFetcher.php') ?>">
            
            <select name="branch" id = "branch" class="addcustomerTxt" placeholder = "Branch">
            <option value="">Choose Branch</option>
                <?php require_once('./dataControllers/otherControllers/fetch_branches.php') ?>
            </select>
            
                <select name = "buyedcar" id = "buyedcar" class="addcustomerTxt">
                    <?php require_once('carslist.php') ?>
                </select>
                    <input type="submit" name="addcustomerBtn" id="addcustomerBtn" value="ADD CUSTOMER" class="addcustomerBtn">
                    <input type="submit" name="editcustomerBtn" id="editcustomerBtn" value="EDIT CUSTOMER" class="addcustomerBtn">
        </form>
        </div>

        <script>
            document.getElementById("delete_customer").addEventListener('submit', function() {
                confirm("Do you really want to delete this?");
            });

            function validateForm() {
                var branchSelect = document.getElementById("branch");
                var selectedBranch = branchSelect.value;
                var carSelect = document.getElementById("buyedcar");
                var selectedCar = carSelect.value;

            if (selectedBranch === "" || selectedCar === "Choose Car") {
                alert("Please select a branch and a car before submitting the form.");
                return false; // Prevent form submission
            }
                return true; // Allow form submission
            }
        </script>

    </div>
</div>
</div>
</body>
</html>