<?php
require('db.php');

$studName = $_POST['studName'];

$studAge = $_POST['studAge'];

$studPhone = $_POST['studPhone'];

$id = $_POST['id'];

// Update the table
$sql = "UPDATE `details` SET `studName`='{$studName}', `studAge`='{$studAge}',
     `studPhone`='{$studPhone}' WHERE `id`='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Updated Successfully!');</script>";
    echo "<script type='text/javascript'>window.location.href = 'viewDetails.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>