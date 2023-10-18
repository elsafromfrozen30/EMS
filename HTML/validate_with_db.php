<?php include "course_catalog_db.php" ?>
<?php
session_start();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
  $courseNames = array();
  $courseCodes = array();

  // Loop through the posted values and retrieve the course names and course codes
  foreach ($_POST as $key => $value) {
    if (strpos($key, 'course_name') === 0) {
      $courseNames[] = $value;
    } elseif (strpos($key, 'course_code') === 0) {
      $courseCodes[] = $value;
    }
  }
  $cnt = 0;
  for ($i = 0; $i < count($courseNames); $i++) {
    $courseName = $courseNames[$i];
    $courseCode = $courseCodes[$i];

    $sql  = "select * from admin_course WHERE title='$courseName' and code='$courseCode'"; 
    $result = mysqli_query($conns,$sql);
    #mysqli_num_rows($result) > 0
    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)) {
        $courseName = $row['title'];
        $courseCode = $row['code'];
        $cnt++;

        }
    }
    $sql3 = "select * from final_list";
    $result2 = mysqli_query($conns,$sql3);
    if(mysqli_num_rows($result2)>0){
      while ($row = mysqli_fetch_assoc($result2)) {
         $ok = $row['id'];
 
      }
  }
  $ok++;
   if($cnt==count($courseNames)){
    for ($i = 0; $i < count($courseNames); $i++) {
        $courseNamed = $courseNames[$i];
        $courseCoded = $courseCodes[$i];

        $sql = "INSERT INTO final_list(id,course_code,course_name)
VALUES($ok,'$courseCoded','$courseNamed')";
 if ($conns->query($sql) === FALSE) {
    echo "Error:".$sql."<br>".$conns->error;
    
  }
   $ok++;
    }

    header("Location: index.php?course succesfully added to final list");
   }
   else{
    $_SESSION["ab"] = "Course Registration failed";
    header("Location: Final_list_post.php?course invalid");
   }
  }
}
?>


