<?php 
include "course_catalog_db.php";
?>
<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM admin_course WHERE  title= '$id'";
  // Execute the SQL query to delete the row
  $result = mysqli_query($conns, $sql);
  if ($result) {
    header("Location: index.php");
} else {
    echo "Error deleting row: " . mysqli_error($conns);
}
  
}


?>

