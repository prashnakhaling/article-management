<?php
include ("dbconnection.php");
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $hasedpassword = password_hash($password, PASSWORD_DEFAULT);
    $number = $_POST['number'];
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,16}$/";
    $numPattern = "/^(?=.[0-9]).{10}$/";

    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "Please fill up the form.";

    } else if ((strlen($username) < 8)) {
        echo "username should be more than 8 characters.<br>";
    }

    $confirmuser = "SELECT * FROM registrationdetail WHERE username = '$username'";
    $result = mysqli_query($connectin, $confirmuser);
    if (mysqli_num_rows($result) > 0) {
        echo "username already exist.";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "invalid email.<br>";

    } else if (!(preg_match($pattern, $password))) {
        echo "incorrect pattern.<br>";
    } else if ($password != $confirmPassword) {
        echo "password didn't match.<br>";
    } else if (!(preg_match($numPattern, $number))) {
        echo "password didn't match.<br>";
    } else{

    
    
    $sql = "INSERT INTO `registrationdetail` (`username`, `email`, `password`, `number`) values ('$username', '$email', '$hasedpassword', '$number')";

    mysqli_query($connectin, $sql);
    header("Location:registerlink.php");

    mysqli_close($connectin);

    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form </title>
    <link rel="stylesheet" href="signupdesign.css">
</head>

<body>
    <!-- sign up form  -->
    <section class="sectionpage_1">
        <div class="mainpage">
            <div class="innerpage1">
                <div class="headingpage">
                    <h2>Register</h2>
                </div>

                <div class="innerpage">
                    <form action="" method="POST">
                        <label for="name" id="topic">Username</label><br>
                        <input type="text" name="username" id="details"><br>

                        <label for="email" id="topic">Email</label><br>
                        <input type="text" name="email" id="details"><br>

                        <label for="password" id="topic">Password</label><br>
                        <input type="password" name="password" id="details"><br>

                        <label for="confirmpassword" id="topic">Confirm Password</label><br>
                        <input type="password" name="confirmpassword" id="details"><br>

                        <label for="number">Phone Number</label><br>
                        <input type="number" name="number" id="details"><br>

                        <button type="signup" name="signup">Sign Up</button>
                    </form>
                    <div class="formfooter">
                        <p class="notice">Already have an account?</p>
                        <a class="logindirection" href="loginform.php">Log in</a>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>