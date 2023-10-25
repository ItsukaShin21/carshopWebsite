<?php
    require_once('db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KotCheck | Cars</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="javacript" href="./script/script.js">
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
        <div class = "mainsectionCpprb">
            <div class = "carlistTable">
            <?php require_once('./dataControllers/otherControllers/customerpercarDisplay.php') ?>
            </div>
        </div>
</body>
</html>