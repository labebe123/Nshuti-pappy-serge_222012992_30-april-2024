<!-- these codes designed by Nshuti Pappy Serge -->
<?php

session_start();
include('connection.php'); // Include the database connection file


// LOGIN CODES
if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Form validation
    if (empty($username) || empty($password)) {
        echo "Please input both username and password!";
    } else {
        // Login the user
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Verify password
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
               
                    header('location: index.php');
                
            } else {
                echo "Incorrect password!";
            }
        } else {
            echo "User does not exist!";
        }
    }





        
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css stylesheet-->
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <!-- login Form -->
    <div id="banner">
        <h3>Login in your account</h3>
        <form method="post" action="login.php">
           
            
                <input type="text" name="username" placeholder="Username">
            </div>
            <br>
            <div >
                <input type="password" name="password" placeholder="Password">
            </div>
            <br>
            <button type="submit" name="login_user">LOGIN</button>
            <br>
            <a href="register.php" >Sign UP?</a>
            
        </form>
    </div>
</body>
</html>


