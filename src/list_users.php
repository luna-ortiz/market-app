<?php
    //get database connection
    require('../config/database/php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketapp-List users</title>
</head>
<body>
    <table border = "1">
        <tr>
            <th>Fullname</th>
            <th>E-mail</th>
            <th>Ide. number</th>
            <th>Phone number</th>
            <th>Status</th>
            <th>Options</th>
        </tr>
        <?php
            sql_users = "
             //
            ";
        ?>
        <tr>
            <td>Joe Doe</td>
            <td>Joe@email.co</td>
            <td>1101</td>
            <td>312212123</td>
            <td>Active</td>
            <td>
                <a href = "#" ><img src = "icons/search-icon(1).png" width = "20"></a>
                <a href = "#" ><img src = "icons/search-icon(1).png" width = "20"></a>
                <a href = "#" ><img src = "icons/search-icon(1).png" width = "20"></a>
            </td>
        </tr>
    </table>
</body>
</html>