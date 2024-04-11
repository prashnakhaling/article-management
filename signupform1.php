<?php
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $hasedpassword = password_hash($password, PASSWORD_DEFAULT);
    $number = $_POST['number'];
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,16}$/";
    $numPattern = "/^(?=.[0-9]).{10}$/";
    $errors = "";


    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "Please fill up the form.";
    } else if ((strlen($username) < 8)) {
        echo "username should be more than 8 characters.<br>";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "invalid email.<br>";

    } else if (!(preg_match($pattern, $password))) {
        echo "incorrect pattern.<br>";
    } else if ($password != $confirmPassword) {
        echo "password didn't match.<br>";
    } else if (!(preg_match($numPattern, $number))) {
        echo "password didn't match.<br>";
    } else {

        // else {
//     header("Location:loginform2.php");
// }

        // for connecting to database

        $host = 'localhost';
        $name = 'root';
        $hostpassword = '';
        $databasename = 'articlemanagement';

        $connectin = mysqli_connect($host, $name, $hostpassword, $databasename);
        $sql = "INSERT INTO registrationdetails (username, email, password, number) values ('$username', '$email', '$password', '$number')";

        // mysqli_query($connectin, $sql);
        if (mysqli_connect_errno()) {
            die("Failed to connect:") . mysqli_connect_error();
        } else {
            mysqli_query($connectin, $sql);
        }
        if (mysqli_query($connectin, $sql)){
             header ("Locatoin:loginform2.php");
        }
        // if (mysqli_connect_error()) {
        //     echo "Please enter valid information. <br>";
        // } else {
        //     header("Location:loginform2.php");
        // }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form </title>
    <link rel="stylesheet" href="formstylesheet1.css">
</head>

<body>
    <!-- sign up form  -->
    <section class="sectionpage_1">
        <div class="mainpage">
            <div class="innerpage1">
                <div class="headingpage">
                    <h2>Sign Up</h2>
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
                </div>
            </div>
    </section>
</body>

</html>