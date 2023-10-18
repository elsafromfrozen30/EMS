<?php
session_start();
$ab = "";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="final_list_style.css">
  <title>Dynamic Labels</title>
  <script>
    function generateLabels() {
      // Get the user input value
      var n = parseInt(document.getElementById("input_number").value);

      // Get the container where labels will be appended
      var container = document.getElementById("label_container");

      // Clear the container first
      container.innerHTML = '';

      // Generate labels based on the user input
      for (var i = 1; i <= n; i++) {
        // Create a new label element
        var label = document.createElement("label");

        // Set the label's text content
        label.textContent = "Course Name " + i + ": ";

        // Create an input element for the course name
        var inputName = document.createElement("input");
        inputName.type = "text";
        inputName.name = "course_name" + i;
        inputName.id = "course_name" + i;

        // Create an input element for the course code
        var inputCode = document.createElement("input");
        inputCode.type = "text";
        inputCode.name = "course_code" + i;
        inputCode.id = "course_code" + i;
        inputCode.style.width = "70px";
         console.log("course_code" + i);
        // Append the elements to the container
        container.appendChild(document.createTextNode(" Course Code " + i + ": "));
        container.appendChild(inputCode);
        container.appendChild(document.createTextNode("\u2002")); // Add spaces
        container.appendChild(document.createTextNode("\u2002"));
        container.appendChild(document.createTextNode("\u2002"));
        container.appendChild(document.createTextNode("Course Name" + i + ":"));
        container.appendChild(inputName);
        container.appendChild(document.createElement("br"));
        container.appendChild(document.createElement("br"));
      }
    }


  </script>

<script>
     function emptyTableAndRedirect() {
     window.location.href = "empty.php";
     }
</script>
<script src='student_dashboard/signout.js' type='module'> </script>
</head>
<body>
  <label>Enter the number of courses:</label>
  <input type="number" id="input_number" min="1" max="10">
  <button onclick="generateLabels()">Generate Labels</button>
  <button id="huik"  onclick="emptyTableAndRedirect()">clear</button>
  <br>
  <br>
 
  <form action="validate_with_db.php" method="post">
    <div id="label_container"></div>
    <button type="submit" value="Suuuubmit"  id="subm"  >Submit</button>
  </form>
 
</body>
</html>
