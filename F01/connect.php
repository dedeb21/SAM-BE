<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "athlift";


$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function executeQuery($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    return $result;
}
?>

