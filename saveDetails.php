<?php
require('db.php');

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