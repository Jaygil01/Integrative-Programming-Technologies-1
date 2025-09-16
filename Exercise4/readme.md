<!DOCTYPE html>
<html>
<head>
    <title>POST Method Example</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 30px 35px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 360px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            display: block;
            margin-top: 15px;
            color: #2c3e50;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
            transition: 0.3s;
            font-size: 14px;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #3498db;
            box-shadow: 0 0 6px rgba(52,152,219,0.4);
        }

        input[type="submit"] {
            margin-top: 25px;
            width: 100%;
            background: #3498db;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #2c80b4;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background: #ecf6fd;
            border-radius: 6px;
            border-left: 5px solid #3498db;
            font-size: 15px;
            color: #2c3e50;
        }

        .result b {
            color: #1a5276;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Professional POST Form</h2>

        <form action="" method="post">
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required>

            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['name']) && !empty($_POST['age'])) {
                $name = htmlspecialchars($_POST['name']); 
                $age = (int) $_POST['age'];

                echo "<div class='result'>";
                echo "<h3>Result:</h3>";
                echo "Hello, <b>$name</b>!<br>";
                echo "You are <b>$age</b> years old.";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
