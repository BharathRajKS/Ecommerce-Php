<?php

session_start();
require 'nav.php';

$connection['db'] = (new Database())->db;
$select_query = "SELECT * FROM Userdetails";
$statement = $connection['db']->query($select_query);
$exists = $statement->fetchAll();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>User Details</h2>
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php foreach ($exists as $row): ?>
            <tr>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['password']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
