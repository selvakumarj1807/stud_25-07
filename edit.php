<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        @media (max-width: 600px) {
            form {
                padding: 10px;
            }

            button {
                padding: 8px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "detailsStud";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $slno = 0;

    $id = $_REQUEST['id'];

    $result = mysqli_query($conn, "SELECT * FROM details where id = $id");

    while ($row_result = mysqli_fetch_array($result)) {
        $slno++;
        $studName = $row_result['studName'];
        $studAge = $row_result['studAge'];
        $studPhone = $row_result['studPhone'];

        $id = $row_result['id'];

    ?>


        <form action="editSaveDetails.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label>Name</label>
            <input type="text" name="studName" value="<?php echo $studName; ?>">
            <br>

            <label>Age</label>
            <input type="text" name="studAge" value="<?php echo $studAge; ?>">
            <br>

            <label>Mobile Number</label>
            <input type="text" name="studPhone" value="<?php echo $studPhone; ?>">
            <br>

            <button type="submit">Submit</button>
        </form>

    <?php
    }
    ?>
</body>

</html>