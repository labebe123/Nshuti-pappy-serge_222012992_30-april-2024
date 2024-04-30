<!-- these codes designed by Nshuti Pappy Serge  -->
<?php
session_start();
include('connection.php'); // Include the database connection file

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // Receive data from form
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password_1 = $_POST['password_1'];
    
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    ;

    

    // Registration
    $password = password_hash($password_1, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (username, name, password, email, phone) 
    VALUES('$username', '$name', '$password', '$email', '$phone')");
  
    $stmt->execute();
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
    exit();
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
    <title>Registration</title>
</head>
<body>
    <!-- Registration Form -->
    
        <h3>Create account</h3>
        <form method="post" action="register.php">
            
            <div class="input-group">
                <input type="text" name="username" required placeholder="username" value="<?php echo isset($username) ? $username : ''; ?>">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="name" required placeholder="Name" value="<?php echo isset($name) ? $name : ''; ?>">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="email" required placeholder="E-mail" value="<?php echo isset($email) ? $email : ''; ?>">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="phone" required placeholder="telephone number" value="<?php echo isset($phone) ? $phone : ''; ?>">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="city" required placeholder="City" value="<?php echo isset($city) ? $city : ''; ?>">
            </div>
            <br>
            <div class="input-group">
                <input type="password" required placeholder="Password" name="password_1">
            </div>
            <br>
            <div class="input-group">
                <input type="password" required placeholder="Confirm Password" name="password_2">
            </div>
            <br>
            <div class="input-group">
                <button type="submit"  name="reg_user">Register</button>
            </div>
            <br>
            <a href="login.php" >already have an account?</a>
            
        </form>
    </div>
</body>
</html>
