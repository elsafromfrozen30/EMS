<?php
 include "students_db.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>EMS-Course Catalog</title>
  <link rel="stylesheet" type="text/css" href="electivefreecat.css">
  <style>
  .container {
  display: inline-block;
  flex-wrap: wrap;
  justify-content: flex-start;
}

.stream-item {
  width: calc(28% - 50px); /* Adjust the percentage value as needed */
  margin: 50px;
  display: inline-block;
  border:2px solid black;
  flex-direction: column;
}

.stream-heading {
  color: white;
  text-align: center;
  padding: 10px;
  background-color: #000;
}

.stream-value {
  color: white;
  text-align: center;
  padding: 10px;
  background-color: #333;
}
.stream-item {
      cursor: pointer;
      transition: transform 0.3s;
    }

    .stream-item:hover {
      transform: scale(1.1);
    }

/* Rest of the CSS styles */




 


  </style>
          <script type="text/javascript">
    function preventBack() {
        window.history.forward(); 
    }
      
    setTimeout("preventBack()", 0);
      
    window.onunload = function () { null };
</script>
<script>
    window.onload = function()
    {
      const displayName = localStorage.getItem('Name');
      document.getElementById('something').innerHTML="Hello ".concat(displayName)
      var course = localStorage.getItem('elective');
      if (course !=null)
      {
        document.getElementById('something').innerHTML="hello ".concat(displayName).concat(", You have been alloted the elective ").concat(course)
      }
    }
</script>
<script>
  function checkflag()
  {
    const link =localStorage.getItem('flag');
    if (link==0)
    {
      window.location.href='student_course_register.php'
    }
    else{
      alert("You have already completed your registration");
    }
  }
  </script>
  <script>
    function redirectToPage(element) {
      var streamHeading = element.querySelector('.stream-heading').textContent;
    console.log(streamHeading);
    window.location.href =  'x.php?query=' + streamHeading;
      //window.location.href = "x.php";
    }
  </script>
  <script src="../../JS/login.js" type='module'></script>
</head>
<body>
  <nav class="menu-bar">
    <ul>
		<li><a href="careertrack.html">CAREER TRACKS</a></li>
    <li><a href="electivepro.php">PROFESSIONAL ELECTIVES</a></li>
    <li><a href="electivefree.php">FREE ELECTIVES</a></li>
    <li><a href="electivesci.php">PROFESSIONAL SCIENCE ELECTIVES</a></li>
    <li><a onclick='checkflag()' href="#">COURSE REGISTER</a></li>
    <button type="button" onclick="signout(event,1)">Log Out</button>
    </ul>
  </nav>
  
      

  <h1>ELECTIVES BEING OFFERED UNDER FREE ELECTIVES</h1>
  <h1 id='something'></h1>

</body>
<script src="signout.js" type="module"></script>
</html>

<?php
  // SQL query with GROUP BY



//$sql = "SELECT * FROM admin_course WHERE stream IN (SELECT DISTINCT stream FROM admin_course WHERE cat = 'ENGG')";
$sql = "SELECT DISTINCT stream  FROM admin_course WHERE cat = 'HUM'";

$result = $conns->query($sql);

$dictionary = array(
  "Management" => "Management (or managing) is the administration of organizations, whether they are a business, a nonprofit organization, or a government body.",
  "Social Science" => "Social science is one of the branches of science, devoted to the study of societies and the relationships among individuals within those societies."
  
);

// Check if the query was successful
if ($result) {
    // Fetch and display the grouped data
    while ($row = $result->fetch_assoc()) {
        // Access the columns using $row['column_name']
        // echo "Cat: " . $row['cat'] . "<br>";
        // echo "stream " . $row['stream'] . "<br>";
        // echo "code: " . $row['code'] . "<br>";
        // echo "title: " . $row['title'] . "<br>";
        // echo "preq: " . $row['preq'] . "<br>";
        // echo "describe: " . $row['descb'] . "<br>";
      
        echo '<div class="stream-item"  onclick="redirectToPage(this)">';
        echo '<h2 class="stream-heading">' . $row['stream'] . '</h2>';
        if (array_key_exists($row['stream'], $dictionary)) {
          echo $dictionary[$row['stream']];
        } else {
          echo "<p>Data science is an interdisciplinary field that combines statistical analysis, 
          machine learning, and computer science to extract insights and knowledge from data. It involves the application
           of various techniques and algorithms to uncover patterns, make predictions, and solve complex problems.</p>";
        }
       
        
        echo '</div>';
        


    
    }
 
} else {
    echo "Error executing query: " . $conns->error;
}

// Close the database connsection
$conns->close();
?>