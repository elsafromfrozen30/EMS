<?php
// Start the session
session_start();
include 'course_catalog_db.php';

?>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $cat = $_POST["cat"];
  $stream = $_POST["stream"];
 $code = $_POST["code"];
 $title = $_POST["title"];
  $credit  = $_POST["credit"];
  $preq = $_POST["preq"];
  $descb = $_POST["descb"];
  }

  ?>
<?php
$sql = "INSERT INTO admin_course(cat,stream,code,title,credit,preq,descb)
VALUES('$cat','$stream','$code','$title','$credit','$preq','$descb')";

if ($conns->query($sql) === FALSE) {
    echo "Error:".$sql."<br>".$conns->error;
  }
 else{
   
    header("Location: ../HTML/index.php?query= success");
 }
 

?>


