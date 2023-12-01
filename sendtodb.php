<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minor project";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $utoken = $_POST["token"];

    $sql = "SELECT * FROM all_student_db WHERE token = '$utoken'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<script>alert("Student available");</script>';
    } else {
        echo '<script>alert("Student not found");</script>';
    }
}

echo '<script>window.location.href = "index.html";</script>';

?>
