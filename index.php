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

    <a href="viewDetails.php">viewDetails</a>

    <form action="saveDetails.php" method="POST">
        <label for="studName">Name</label>
        <input type="text" id="studName" name="studName">

        <label for="studAge">Age</label>
        <input type="text" id="studAge" name="studAge">

        <label for="studPhone">Mobile Number</label>
        <input type="text" id="studPhone" name="studPhone">

        <button type="submit">Submit</button>
    </form>

</body>

</html>