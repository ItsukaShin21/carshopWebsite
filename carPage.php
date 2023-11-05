<?php 
<<<<<<< Updated upstream
    require_once('db_connection.php');
    require_once ('../carshopWebsite/dataControllers/carControllers/addCar.php');
    require_once('../carshopWebsite/dataControllers/carControllers/deleteCar.php');
=======
    require_once('C:\xampp\htdocs\carshopWebsite\db_connection.php');
    require_once ('./dataControllers/carControllers/addCar.php');
>>>>>>> Stashed changes
    require_once('./dataControllers/carControllers/updateCar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KotCheck | Cars</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./script/jqueryscript.js"></script>
    <script src="./script/script.js"></script>
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
                    <th>Branch</th>
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
            <form method="POST" id="carForm">
                <p>ADD CAR</p>
                <input type="hidden" name="car_code" value="<?php require_once('./dataControllers/carControllers/caridFetcher.php') ?>"> 
                <input type="text" name="carName" placeholder="Name of the car" class="addcarTxt" required value="<?php require_once('./dataControllers/carControllers/carnameFetcher.php') ?>"> 
                <input type="number" name="carPrice" placeholder="Price of the car" class="addcarTxt" required value="<?php require_once('./dataControllers/carControllers/carpriceFetcher.php') ?>">
                
                <select name="branch_name" placeholder="Branch" class="addcarTxt" required >
                
                <option value="">Choose Branch</option>
                <?php require_once('./dataControllers/otherControllers/fetch_branches.php') ?>
                </select>
                
                <textarea name="carDescription" cols="5" rows="7" placeholder="Car Description" class="cardescriptxtbox" required><?php require_once('./dataControllers/carControllers/descriptionFetcher.php') ?></textarea>
                <input type="submit" name="addcar_button" value="ADD CAR" class="branchaddBtn">
                <input type="submit" name="updatecar_button" value="UPDATE CAR" class="branchaddBtn">
            </form>
        </div>
    </div>
</body>
</html>