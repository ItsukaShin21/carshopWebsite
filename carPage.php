<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KotCheck | Cars</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="javacript" href="./script/script.js">
</head>

<body>
    <div class="bg">
        <div class="headerContainer1">
            <a href="loginPage.php" class="logoutBtn">LOG OUT</a>
        </div>
        <div class="headerContainer2">
            <a href="">
                <img src="./images/weblogo.png" class="webLogo">
            </a>
            <div class="navBtns">
                <a href="">Car Page</a>
                <a href="branchlistPage.php">Branch Page</a>
                <a href="customerlistPage.php">Customer Page</a>
            </div>
        </div>
        <div class="branchlistTable">
            <table>
                <thead>
                    <th>Car Code</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td>XYZ123</td>
                        <td>Name1</td>
                        <td>Name1</td>
                        <td>
                            <input type="submit" value="EDIT" class="tableBtn">
                            <input type="submit" value="DELETE" class="tableBtn">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="addbranchForm">
                <form method="POST">
                    <p>ADD CAR</p>
                    <input type="text" placeholder="Name of the car" class="addbranchTxt" required>
                    <input type="submit" value="ADD CAR" class="branchaddBtn">
                </form>
            </div>
        </div>
    </div>
</body>

</html>