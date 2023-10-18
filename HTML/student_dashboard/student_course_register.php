<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<style>
      #btndp{
        margin-left:-100px;
        width:80px;
        height:30px;
        font-size:0.5cm;
        background-color:red;

    }

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
<a  href="electivepro.php">click here to return back</a>

</body>

<?php
include "students_db.php"; // Include your database connection file

// Fetch all records from the database
$sql = "SELECT * FROM final_list";
$result = mysqli_query($conns, $sql);
$rowCount = mysqli_num_rows($result);

// Check if any records exist
if ($rowCount > 0) {
    echo "<br>";
    echo "<center><b> ELECTIVE SUBJECT REGISTRATION</b>";
    echo "<br>";
    echo "<br>";
    echo "<form method='POST'>";
    echo "<table>";
    echo "<tr><th>S.no</th><th>Name</th> <th>Code</th> <th>Priority</th></tr>";

    // Loop through each record and display it in a table row
    $cnt = 1;
    $flag=0;
    $selectedOptions = array(); // Array to store selected options
    $courses =array();
    while ($row = mysqli_fetch_assoc($result)) {
        $course_name = $row['course_name'];
        $code = $row['course_code'];
        array_push($courses,$code);
        echo "<tr>";
        echo "<td>$cnt</td>";
        echo "<td>$course_name</td>";
        echo "<td>$code</td>";
        echo "<td><select class='priority-select' name='priority[]'>";
        
        // Generate options dynamically
        for ($i = 1; $i <= $rowCount; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        
        echo "</select></td>";
        echo "</tr>";
        $cnt++;
    }

    echo "</table>";
    echo "<br>";
    echo "<button id='btndp' type='submit'>Submit</button>";
    echo "</form>";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedOptions = $_POST['priority']; // Get the selected optionsselectedOptions
        $_SESSION["array"] = $selectedOptions;
    
        // Check if selected options are unique in number
        if (count($selectedOptions) === count(array_unique($selectedOptions))) {
            echo "<br>";
            echo "<script>";
        
            echo "var arr1 = " . json_encode($selectedOptions) . ";";
            echo "var arr2 = " . json_encode($courses) . ";";
            $flag = 1;
            echo "var flag = " . json_encode($flag) . ";";
            echo "alert('Registration successful');";
            echo "localStorage.setItem('priority', arr1);";
            echo "localStorage.setItem('flag', flag);";
           
            echo "window.location.href='electivepro.php';";
            echo "</script>";
        }
        else {
            echo "<br>";
            $flag = 0;
            echo "var flag = " . json_encode($flag) . ";";
            
            echo "Please select unique options.";
            
        }
    }
} else {
    echo "No records found.";
}

// Close the database connection
mysqli_close($conns);
?>





</html>