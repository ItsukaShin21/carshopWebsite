<?php 
    require_once('db_connection.php');
    require_once ('../carshopWebsite/dataControllers/carControllers/addCar.php');
    require_once('../carshopWebsite/dataControllers/carControllers/deleteCar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KotCheck | Cars</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="javascript" href="./script/script.js">
</head>

<body class="bg">
    <div class="headerContainers">
        <div class="headerContainer1">
            <a href="loginPage.php" class="logoutBtn">LOG OUT</a>
        </div>
        <div class="headerContainer2">
            <a href="">
                <img src="./images/weblogo.png" class="webLogo">
            </a>
            <div class="navBtns">
                <a href="carPage.php">Car Page</a>
                <a href="branchlistPage.php">Branch Page</a>
                <a href="customerlistPage.php">Customer Page</a>
            </div>
        </div>
    </div>
    <div class="mainSection">
        <div class="carlistTable">
            <table>
                <thead>
                    <th>Car Code</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php require_once('./dataControllers/carControllers/displayCars.php'); ?>
                </tbody>
            </table>
        </div>

        <div class="addForm addcarForm">
            <form method="POST">
                <p>ADD CAR</p>
                <input type="hidden" name="car_code" value="<?php require_once('./dataControllers/carControllers/caridFetcher.php') ?>"> 
                <input type="text" name="carName" placeholder="Name of the car" class="addcarTxt" required value="<?php require_once('./dataControllers/carControllers/carnameFetcher.php') ?>"> 
                <input type="number" name="carPrice" placeholder="Price of the car" class="addcarTxt" required value="<?php require_once('./dataControllers/carControllers/carpriceFetcher.php') ?>">
                <input type="text" name="branch_name" placeholder="Branch" class="addcarTxt" required value="<?php require_once('./dataControllers/carControllers/branchnameFetcher.php') ?>">
                <textarea name="carDescription" cols="5" rows="7" placeholder="Car Description" class="cardescriptxtbox" required><?php require_once('./dataControllers/carControllers/descriptionFetcher.php') ?></textarea>
                <input type="submit" name="addcar_button" value="ADD CAR" class="branchaddBtn">
                <input type="submit" name="updatecar_button" value="UPDATE CAR" class="branchaddBtn">

                <?php require_once('./dataControllers/carControllers/updateCar.php'); ?>
            </form>
        </div>
    </div>
</body>
</html>