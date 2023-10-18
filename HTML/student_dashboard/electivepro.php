<?php
 include "students_db.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>EMS-Course Catalog</title>
  <link rel="stylesheet" type="text/css" href="electivefreecat.css">
  <style>.container {
  display: inline-block;
  flex-wrap: wrap;
  justify-content: flex-start;
}

.stream-item {
  width: calc(28% - 20px); /* Adjust the percentage value as needed */
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
      document.getElementById('something').innerHTML="hello ".concat(displayName)
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
</head>
<body>
  <nav class="menu-bar">
  <ul>
		<li><a href="careertrack.html">CAREER TRACKS</a></li>
    <li><a href="electivepro.php">PROFESSIONAL ELECTIVES</a></li>
    <li><a href="electivefree.php">FREE ELECTIVES</a></li>
    <li><a href="electivesci.php">PROFESSIONAL SCIENCE ELECTIVES</a></li>
    <li><a onclick='checkflag()' href="#">COURSE REGISTER</a></li>
    <button type="button" onclick='signout(event,1)'>Log Out</button>
    </ul>
  </nav>
  
  <h1>ELECTIVES BEING OFFERED UNDER PROFESSIONAL ELECTIVES</h1>
  <h1 id='something'></h1>

  

  <script>
    function redirectToPage(element) {
      var streamHeading = element.querySelector('.stream-heading').textContent;
      console.log(streamHeading);
     
      window.location.href =  'x.php?query=' + streamHeading;
    }
  </script>

<?php
  // SQL query with GROUP BY



//$sql = "SELECT * FROM admin_course WHERE stream IN (SELECT DISTINCT stream FROM admin_course WHERE cat = 'ENGG')";
$sql = "SELECT DISTINCT stream  FROM admin_course WHERE cat = 'ENGG'";

$result = $conns->query($sql);
$dictionary = array(
  "Data Science" => "Data science is an interdisciplinary academic field that uses statistics, scientific computing, scientific methods, processes, algorithms.",
  "Cyber Security" => "Computer security, cyber security, digital security or information technology security is the protection of computer systems ",
  "Networks" => "A computer network is a set of computers sharing resources located on or provided by network nodes.",
  "Computer Vision" => "Computer vision is a field of artificial intelligence (AI) that enables computers and systems to derive meaningful information from digital images",
  "Cyber Physical Systems" => "A cyber-physical system or intelligent system is a computer system in which a mechanism is controlled or monitored by computer-based algorithms",
  "Artificial Intelligence" => "intelligence—perceiving, synthesizing, and inferring information—demonstrated by machines, as opposed to intelligence displayed by humans or by other animals"
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
</body>
<script src='../../JS/login.js' type="module" ></script>
<script src="signout.js" type="module"></script>
</html>

