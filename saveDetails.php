<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detailsStud";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$studName = $_POST['studName'];

$studAge = $_POST['studAge'];

$studPhone = $_POST['studPhone'];

// Insert Into the Table

$sql = "INSERT INTO `details`(`studName`, `studAge`, `studPhone`) 
        VALUES ('$studName', '$studAge', '$studPhone')";

if ($conn->query($sql) == TRUE) {
    echo "<script>alert('Added  Successfully!');</script>";
    echo "<script type='text/javascript'>window.location.href = 'viewDetails.php';</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>