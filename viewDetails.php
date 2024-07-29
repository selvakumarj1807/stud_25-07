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
            <th>Action</th>
        </tr>
        <?php
        require('db.php');

        $slno = 0;

        $result = mysqli_query($conn, "SELECT * FROM details");

        while ($row_result = mysqli_fetch_array($result)) {
            $slno++;
            $studName = $row_result['studName'];
            $studAge = $row_result['studAge'];
            $studPhone = $row_result['studPhone'];

            $id = $row_result['id'];

        ?>

            <tr>
                <td><?php echo $slno; ?></td>
                <td><?php echo $studName; ?></td>
                <td><?php echo $studAge; ?></td>
                <td><?php echo $studPhone; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $id; ?>">
                        <button>Edit</button>
                    </a>
                    &nbsp;&nbsp;
                    <a href="delete.php?id=<?php echo $id; ?>">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>

</body>

</html>