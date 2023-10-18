<?php include "course_catalog_db.php";
$sql = "TRUNCATE TABLE final_list";

// Execute the query
if ($conns->query($sql) === TRUE) {
    echo "Table emptied successfully.";
    header("Location: Final_list_post.php?course is empty now");
} else {
    echo "Error emptying table: " . $conn->error;
}

?>