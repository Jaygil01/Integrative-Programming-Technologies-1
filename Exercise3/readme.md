<!DOCTYPE html>
<html>
<head>
    <title>GET Method Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            width: 350px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            color: #444;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #74ebd5;
            box-shadow: 0 0 5px rgba(116, 235, 213, 0.8);
        }

        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            background: #74ebd5;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #58c7b8;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 8px;
            border-left: 5px solid #74ebd5;
        }

        .result b {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Simple GET Method Form</h2>

        <form action="" method="get">
            <label for="name">Enter your name:</label>
            <input type="text" name="name" id="name" required>

            <label for="age">Enter your age:</label>
            <input type="number" name="age" id="age" required>

            <input type="submit" value="Submit">
        </form>

        <?php
        if (isset($_GET['name']) && isset($_GET['age'])) {
            $name = htmlspecialchars($_GET['name']); 
            $age = (int) $_GET['age'];

            echo "<div class='result'>";
            echo "<h3>Result:</h3>";
            echo "Hello, <b>$name</b>!<br>";
            echo "You are <b>$age</b> years old.";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
