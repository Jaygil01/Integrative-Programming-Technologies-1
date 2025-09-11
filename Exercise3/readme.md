<!DOCTYPE html>
<html>
<head>
    <title>GET Method Example</title>
</head>
<body>
    <h2>Simple GET Method Form</h2>

    
    <form action="" method="get">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>

        <label for="age">Enter your age:</label>
        <input type="number" name="age" id="age" required>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <hr>

    <?php
   
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']); 
        $age = (int) $_GET['age']; 

        echo "<h3>Result:</h3>";
        echo "Hello, <b>$name</b>!<br>";
        echo "You are <b>$age</b> years old.";
    }
    ?>
</body>
</html>
