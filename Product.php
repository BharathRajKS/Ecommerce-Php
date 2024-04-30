<?php 
require("nav.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* -------------------------- table ----------------------------- */
        table {
            width: 100%;
            margin-top: 40px;
        }

        th, td {
            padding: 10px; 
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #A0A0A0;
        }

        tr:nth-child(odd) {
            background-color: #f3f3f3;;
        }

        tr:hover {
            background-color: 	#C8C8C8;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>
<?php
    $conn = new mysqli("localhost", "dckap", "Dckap2023Ecommerce", "Ecommerce");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $selectQuery = "SELECT id, `product-name`, price, description, image FROM Products"; 
    $result = $conn->query($selectQuery);

    if ($result->num_rows > 0) {
        echo "<h1 style='margin-top: 40px;'>Products</h1>";
        echo "<table>"; 
        echo "<tr><th>Product Id</th><th>Product Name</th><th>Price</th><th>Product Image</th><th>Description</th></tr>"; 

 
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["product-name"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
     
            echo "<td><img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' alt='" . $row["product-name"] . "' style='width: 100px; height: 100px;'></td>"; // Corrected product_name to product-name
            echo "<td>" . $row["description"] . "</td>";
            echo "</tr>";
        }

        echo "</table><br><br>"; 
    } else {
        echo "0 results";
    }

    $conn->close();
?>

</body>
</html>
