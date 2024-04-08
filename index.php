<?php
// Define sample username and password
$correct_username = 'admin';
$correct_password = 'password';

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if($username == $correct_username && $password == $correct_password) {
        // Start session
        session_start();
        $_SESSION['username'] = $username;

        // Redirect user to welcome page
        header("location: welcome.php");
    } else {
        // Display an error message if username doesn't match
        $error = "Your Login Name or Password is invalid";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <div style="width: 300px; margin: 0 auto;">
        <form action="" method="post">
            <label>UserName :</label>
            <input type="text" name="username"/><br />
            <label>Password :</label>
            <input type="password" name="password"/><br />
            <input type="submit" value=" Submit "/><br />
        </form>
        <div style="font-size:11px; color:#cc0000; margin-top:10px">
            <?php echo $error; ?>
        </div>
    </div>
</body>
</html>