<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        font-family: Arial, sans-serif;
    }

    th {
        background-color: #f2f2f2;
        padding: 10px;
        text-align: left;
        color: #333;
    }

    td {
        padding: 10px;
        text-align: left;
        color: #555;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>
<body>
    
</body>
</html>
<?php
include "course_catalog_db.php"; // Include your database connection file

// Fetch all records from the database
$sql = "SELECT * FROM final_list";
$result = mysqli_query($conns, $sql);

// Check if any records exist
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>S.no</th><th>Name</th> <th>Code</th></tr>";

    // Loop through each record and display it in a table row
    $cnt=1;
    while ($row = mysqli_fetch_assoc($result)) {
    
        $course_name = $row['course_name'];
        $code = $row['course_code'];

        echo "<tr>";
        echo "<td>$cnt</td>";
        echo "<td>$course_name</td>";
        echo "<td>$code</td>";
        echo "</tr>";
        $cnt++;
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Close the database connection
mysqli_close($conns);
?>