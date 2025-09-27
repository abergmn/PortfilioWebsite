/*

for db:

CREATE TABLE visitors (
    ip VARCHAR(45) NOT NULL UNIQUE
);

*/

<?php

$host = "localhost";
$dbname = "database_name";
$uname = "db_username";
$pword = "db_password";

// create and test db connection
$conn = new mysqli($host, $uname, $pword, $dbname);
if ($conn->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}

// get user IP
$ip = $_SERVER['REMOTE_ADDRESS'];

// insert IP to db
$conn->query("INSERT IGNORE INTO visitors (ip) VALUES ('$ip')");

// get unique visitor count
$result = $conn->query("SELECT COUNT(*) AS total FROM visitors");
$row = $result->fetch_assoc();

echo "Unique visitors: " . $row['total'];

$conn->close();

?>
