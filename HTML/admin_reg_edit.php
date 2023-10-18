<?php 
include "course_catalog_db.php";
?>



<?php
// Get the course ID and updated values from the form
// Assuming that you have already established a connection to your database
$my = $_POST['ak'];

if(isset($_POST['cat']) && isset($_POST['stream']) && isset($_POST['code']) && isset($_POST['title']) && isset($_POST['credit']) && isset($_POST['preq']) && isset($_POST['descb'])) {
    
    $cat = $_POST['cat'];
    $stream = $_POST['stream'];
    $code = $_POST['code'];
    $title = $_POST['title'];
    $credit = $_POST['credit'];
    $preq = $_POST['preq'];
    $descb = $_POST['descb'];
    
    
    $sql = "UPDATE admin_course SET cat='$cat',stream='$stream', code='$code', title='$title', credit='$credit', Preq='$preq', descb='$descb' WHERE code='$my'";
    
    if(mysqli_query($conns, $sql)) {
        header("Location: index.php?querisupdated");
    } else {
        echo "Error updating record: " . mysqli_error($conns);
    }
    
    mysqli_close($conns); // Close the database connection
}

?>
