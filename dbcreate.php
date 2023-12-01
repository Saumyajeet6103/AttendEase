<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minor project";

$cname=$_POST["name"];
$id=$_POST["enrollmentId"];
$prog=$_POST["program"];
$branch=$_POST["course"];
$utoken=$_POST["token"];




$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "insert into all_student_db(Name,Enrollment_Id,Program,Course,Token) values('$cname','$id','$prog','$branch','$utoken')";
mysqli_query($conn,$sql);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<script>window.location.href = "index.html";</script>';

?>