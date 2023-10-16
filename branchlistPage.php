<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KotCheck | Branch</title>
    <link rel = "stylesheet" href = "./css/styles.css">
    <link rel = "javacript" href = "./script/script.js">
</head>
<body>
<div class = "bg">
    <div class = "headerContainer1">
        <a href = "loginPage.php" class = "logoutBtn">LOG OUT</a>
    </div>
    <div class = "headerContainer2">
        <a href="">
            <img src = "./images/weblogo.png" class = "webLogo">
        </a>
        <div class = "navBtns">
            <a href="">Car Page</a>
            <a href = "branchlistPage.php">Branch Page</a>
            <a href = "customerlistPage.php">Customer Page</a>
        </div>
    </div>
        <div class = "branchlistTable">
                <table>
                    <thead>
                        <th>Branch Name</th>
                        <th>Sold Cars</th>
                        <th>
                            <input type = "submit" value = "ADD BRANCH" class = "addBtn">
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tacloban Branch</td>
                            <td>135 sold cars</td>
                            <td>
                                <input type = "submit" value = "EDIT" class = "tableBtn">
                                <input type = "submit" value = "DELETE" class = "tableBtn">
                                <input type = "submit" value = "VIEW" class = "tableBtn">
                            </td>
                        </tr>
                        <tr>
                            <td>Tacloban Branch</td>
                            <td>135 sold cars</td>
                            <td>
                                <input type = "submit" value = "EDIT" class = "tableBtn">
                                <input type = "submit" value = "DELETE" class = "tableBtn">
                                <input type = "submit" value = "VIEW" class = "tableBtn">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class = "addbranchForm">
                    <form method = "POST">
                        <p>ADD BRANCH</p>
                        <input type = "text" placeholder = "Name of the branch" class = "addbranchTxt" required>
                        <input type = "submit" value = "ADD BRANCH" class = "branchaddBtn">
                    </form>
                </div>
        </div>
    </div>
</body>
</html>