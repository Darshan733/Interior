<?php
    include("connection.php");

    //submit button is pressed 
    if (isset($_POST["submit"])) 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];   

        // Validate user input (you may want to add more validation)
        if (empty($username) || empty($password) || empty($confirm_password)) {
            // Handle validation errors, for example, redirect back to the signup page with an error message
            header('Location: signup.php');
            exit;
        }

        if ($password !== $confirm_password) {
            // Handle password mismatch error
            header('Location: signup.php');
            exit;
        }

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if the username already exists
        $check_query = "SELECT * FROM users WHERE username = '$username'";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            // Handle username already exists error
            header('Location: signup.php');
            exit;
        }

        // Insert user data into the database
        $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        $res = mysqli_query($conn, $insert_query);

        if ($res) {
            // Redirect to a success page or the login page
            header('Location: login.php');
            exit;
        } else {
            // Handle database insertion error
            echo "Error: " . mysqli_error($conn);
        }
    }
?>
