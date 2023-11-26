<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:  	#E6E6FA; /* Change background color to red */
            color: #fff; /* Change text color to white */
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ff0000;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-container label {
            display: block;
            margin-bottom: 8px;
        }

        .login-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .login-container button {
            background-color: #36454F;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .signup-link {
            margin-top: 20px;
            display: block;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>LOGIN</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="submit">Login</button>
    </form>

    <a href="signup.php" class="signup-link">Don't have an account? Sign up here.</a>
</div>
<?php
    session_start();
    include("connection.php");

    if (isset($_POST["submit"])) {
        $name = $_POST["username"];
        $pass = $_POST["password"];
        $sql = "SELECT * FROM users WHERE username='$name' AND password='$pass'";
        $res = mysqli_query($conn, $sql);

        if (!$res) {
            // Handle the case where the query fails
            echo "Error: " . mysqli_error($conn);
            exit;
        }

        $row = mysqli_fetch_assoc($res);

        if ($row) {
            // Adjust the key name according to your database schema
            $_SESSION['id'] = $row['id']; // Assuming the actual key is 'id'
            $_SESSION["Uname"] = $name;
            header("location:interior2.php");
            exit;
        } else {
            echo "<script>alert('Invalid user');</script>";
        }
    }
?>
</body>
</html>
