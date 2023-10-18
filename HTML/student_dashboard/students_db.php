<?php 
// $host = "sql12.freemysqlhosting.net";
// $dbusername = "sql12619662";
// $dbpassword = "RQ7Gvjv5vg";
// $dbname = "sql12619662";

// $conns = new mysqli ($host, $dbusername, $dbpassword, $dbname);
// if ($conns->connect_error) {
//     die("Connection failed: " . $conns->connect_error);
//   }

// ?>
<!-- this is not working for me freemysqlhosting.net -->
<?php
$host = "127.0.0.1:3306";
$dbusername = "root";
$dbpassword = "Zenmaster24";
$dbname = "elective";

$conns = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if ($conns->connect_error) {
    die("Connection failed: " . $conns->connect_error);
  }

?>  
