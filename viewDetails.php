<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
</head>

<body>

<a href="index.php">Home</a>
    <center>
        <h1>View Details</h1>
    </center>

    <table border="1" cellpadding="10" cellspacing="5">
        <tr>
            <th>S.No</th>
            <th>Student Name</th>
            <th>Student Age</th>
            <th>Student Phone</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "detailsStud";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $slno = 0;

        $result = mysqli_query($conn, "SELECT * FROM details");

        while ($row_result = mysqli_fetch_array($result)) {
            $slno++;
            $studName = $row_result['studName'];
            $studAge = $row_result['studAge'];
            $studPhone = $row_result['studPhone'];
        ?>

            <tr>
                <td><?php echo $slno; ?></td>
                <td><?php echo $studName; ?></td>
                <td><?php echo $studAge; ?></td>
                <td><?php echo $studPhone; ?></td>
            </tr>

        <?php
        }
        ?>
    </table>

</body>

</html>