<?php
    //get database connection
    require('../config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketapp - List users</title>
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
            $sql_users = "
                select 
                    u.firstname || '' || u.lastname as fullname,
                    u.email,
                    u.ide_number,
                    u.mobile_number,
                    case 
                        when u.status = true then 'Active' else 'Inactive'
                    end as status
                from
                    users u
            ";

            $result = pg_query($conn_local, $sql_users);

            if(!$result){
                die("ERROR: ".pg_last_error());
            }

            while ($row = pg_fetch_assoc($result)){
                echo"
                    <tr>
                        <td>" . $row['fullname'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>1101</td>
                        <td>312212123</td>
                        <td>Active</td>
                        <td>
                            <a href = '#' ><img src = 'icons/search-icon(1).png' width = '20'></a>
                            <a href = '#' ><img src = 'icons/search-icon(1).png' width = '20'></a>
                            <a href = '#' ><img src = 'icons/search-icon(1).png' width = '20'></a>
                        </td>
                    </tr>
                ";
            }
        ?>
        
    </table>
</body>
</html>