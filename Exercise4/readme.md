<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>The Wonder Pets - Registration</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      overflow: hidden;
    }

    
    .bg-circle {
      position: absolute;
      border-radius: 50%;
      opacity: 0.4;
      animation: float 15s infinite ease-in-out;
    }
    .circle1 { width: 250px; height: 250px; background: #ff7eb3; top: -50px; left: -80px; }
    .circle2 { width: 300px; height: 300px; background: #42e695; bottom: -100px; right: -120px; }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-40px); }
    }

    .form-card {
      position: relative;
      z-index: 2;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(20px);
      border: 2px solid rgba(255, 255, 255, 0.2);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.2);
      width: 400px;
      text-align: center;
      color: #fff;
      animation: fadeIn 1.2s ease-in-out;
    }

    h2 {
      margin-bottom: 25px;
      font-size: 24px;
      font-weight: 600;
    }

    input, select {
      width: 90%;
      padding: 12px;
      margin: 12px 0;
      border-radius: 10px;
      border: none;
      outline: none;
      font-size: 15px;
      background: rgba(255, 255, 255, 0.9);
      color: #333;
    }

    button {
      margin-top: 20px;
      padding: 14px 20px;
      border: none;
      border-radius: 12px;
      background: linear-gradient(135deg, #ff758c, #ff7eb3);
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
      font-weight: bold;
      width: 95%;
    }
    button:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 20px rgba(255, 118, 136, 0.6);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <div class="bg-circle circle1"></div>
  <div class="bg-circle circle2"></div>

  <div class="form-card">
    <h2>🐹🐢🦆 Wonder Pets Registration</h2>
    <form method="POST" action="process.php">
      <input type="text" name="name" placeholder="Enter your name" required>
      <input type="email" name="email" placeholder="Enter your email" required>
      <select name="group" required>
        <option value="Linny">Linny the Guinea Pig</option>
        <option value="Tuck">Tuck the Turtle</option>
        <option value="Ming-Ming">Ming-Ming the Duckling</option>
      </select>
      <button type="submit">🚀 Register Now</button>
    </form>
  </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $group = htmlspecialchars($_POST['group']);

    // Group images
    $images = [
        "Linny" => "images/linny.jpg",
        "Tuck" => "images/tuck.jpg",
        "Ming-Ming" => "images/mingming.jpg"
    ];
    $groupImage = $images[$group] ?? "images/default.jpg";
} else {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>The Wonder Pets - Result</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fbc2eb);
      background-size: 300% 300%;
      animation: gradientBG 10s ease infinite;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(25px);
      border: 2px solid rgba(255,255,255,0.3);
      padding: 35px;
      border-radius: 25px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.3);
      width: 450px;
      text-align: center;
      animation: fadeIn 1s ease-in-out;
      color: #fff;
    }
    .card img {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 4px solid #fff;
      object-fit: cover;
    }
    h2 {
      margin-bottom: 20px;
      font-size: 26px;
      font-weight: 600;
    }
    table {
      width: 100%;
      margin-top: 15px;
      font-size: 15px;
    }
    td {
      padding: 10px;
      text-align: left;
      color: #fff;
    }
    td:first-child {
      font-weight: bold;
      color: #ffe066;
      width: 35%;
    }
    a {
      display: inline-block;
      margin-top: 25px;
      padding: 12px 20px;
      background: linear-gradient(135deg, #43cea2, #185a9d);
      color: #fff;
      border-radius: 12px;
      text-decoration: none;
      transition: 0.3s;
      font-weight: bold;
    }
    a:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(24, 90, 157, 0.6);
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="card">
    <img src="<?php echo $groupImage; ?>" alt="<?php echo $group; ?>">
    <h2>🎉 Registration Successful!</h2>
    <table>
      <tr>
        <td>Name:</td>
        <td><?php echo $name; ?></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><?php echo $email; ?></td>
      </tr>
      <tr>
        <td>Group:</td>
        <td><?php echo $group; ?></td>
      </tr>
    </table>
    <a href="index.html">⬅ Back to Form</a>
  </div>
</body>
</html>



