<?php
 include "students_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .course-item {
            background-color: #7fd4e6;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        
        .course-title {
            cursor: pointer;
        }
        
        .course-description,
        .course-prerequisites {
            display: none;
        }
        
        .hidden {
            display: none;
        }
    </style>
    
    <script>
        function showCourseDetails(element) {
          var courseItem = element.parentNode;
          var courseDescription = courseItem.querySelector(".course-description");
          var coursePrerequisites = courseItem.querySelector(".course-prerequisites");
          
          // Toggle the visibility of course details
          if (courseDescription.style.display === "none") {
            courseDescription.style.display = "block";
            coursePrerequisites.style.display = "block";
          } else {
            courseDescription.style.display = "none";
            coursePrerequisites.style.display = "none";
          }
        }
    </script>
              <script type="text/javascript">
    function preventBack() {
        window.history.forward(); 
    }
      
    setTimeout("preventBack()", 0);
      
    window.onunload = function () { null };
</script>
</head>
<body>
<?php
$currentURL = $_SERVER['REQUEST_URI'];
$currentURL = str_replace('%20', ' ', $currentURL);
$queryString = parse_url($currentURL, PHP_URL_QUERY);

// Parse the query string to get the query parameters
parse_str($queryString, $queryParameters);

// Retrieve the value after ?query=
$queryValue = isset($queryParameters['query']) ? $queryParameters['query'] : '';
echo $queryValue;

$sql = "SELECT * FROM admin_course WHERE stream='$queryValue' ";

$result = $conns->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch and display the grouped data
    while ($row = $result->fetch_assoc()) {
        // Access the columns using $row['column_name']
        // Output the course title as a clickable element
        $courseTitle = $row['title'];
        $courseDescription = $row['descb'];
        $coursePrerequisites = $row['preq'];

        // Output the course item
        echo '<div class="course-item">';
        echo '<h3 class="course-title" onclick="showCourseDetails(this)">' . $courseTitle . '</h3>';
        echo '<p class="course-description hidden">' . $courseDescription . '</p>';
        echo '<p class="course-prerequisites hidden">' . $coursePrerequisites . '</p>';
        echo '</div>';
        echo '<br>';
    }
 
} else {
    echo "Error executing query: " . $conns->error;
}

// Close the database connsection
$conns->close();
?>
</body>
<a  href="electivepro.php">Return to home</a>
</html>
