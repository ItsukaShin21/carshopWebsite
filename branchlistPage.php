<?php
    require_once('db_connection.php');
    require_once('./dataControllers/branchControllers/addBranch.php');
    require_once('./dataControllers/branchControllers/viewCars.php');
    require_once('./dataControllers/branchControllers/editBranch.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KotCheck | Branch</title>
    <link rel = "stylesheet" href = "./css/styles.css">
    <script src="./script/jqueryscript.js"></script>
    <script src="./script/script.js"></script>
</head>
<body class = "bg">
        <div class = "headerContainers">
            <div class = "headerContainer1">
                <a href = "loginPage.php" class = "logoutBtn">LOG OUT</a>
            </div>
            <div class="headerContainer2">
                <a href="">
                    <img src="./images/weblogo.png" class = "webLogo">
                </a>
            <div class = "navBtns">
                <a href = "carPage.php">Car Page</a>
                <a href = "branchlistPage.php">Branch Page</a>
                <a href = "customerlistPage.php">Customer Page</a>
            </div>
            </div>
        </div>
        
        <div class = "mainSection">
            <div class = "branchlistTable">
                <table>
                    <thead>
                        <th>Branch Name</th>
                        <th>Sold Cars</th>
                        <th></th>
                    </thead>
                    <tbody>
                    <?php require_once('./dataControllers/branchControllers/displayBranch.php') ?>
                    </tbody>
                </table>
            </div>

            <div class = "addForm">
                <form method = "POST">
                    <p>ADD/EDIT BRANCH</p>
                    <input type = "hidden" name = "branch_id" id = "branch_id" value = "<?php require_once('./dataControllers/branchControllers/branchidFetcher.php') ?>">
                    <input type = "text" name = "branchname" placeholder = "Name of the branch" class = "addbranchTxt" id = "branchtxtBox" required value = "<?php require_once('./dataControllers/branchControllers/branchnameFetcher.php') ?>">       
                    <input type = "submit" name = "add_branch" id = "add_branch" value = "ADD BRANCH" class = "branchaddBtn">
                    <input type = "submit" name = "edit_branchbtn" id = "edit_branchbtn" class = "branchaddBtn" value = "EDIT BRANCH">
                </form>
            </div>
        </div>
</body>
</html>