<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hasedpassword1 = password_hash($password, PASSWORD_DEFAULT);


    if (empty($username) || empty($password)) {
        echo "Please fill up the login details.";
    }
    // $finalpassword = password_hash($password, PASSWORD_DEFAULT);

    include ("dbconnection.php");
    $sqli = "SELECT * FROM registrationdetails WHERE username = '$username' LIMIT 1 ";
   // var_dump($sqli);
   // exit;
    $finaldata = mysqli_query($connectin, $sqli);
    // var_dump($finaldata);
    // mysqli_query($connect, $sqli);
// var_dump(mysqli_num_rows($finaldata));
    
    

    if (mysqli_num_rows($finaldata) > 0) {
        $row = mysqli_fetch_assoc($finaldata);
        // var_dump($row);
        if ($row["username"] != $username) {
            echo "Invalid username.";

        } else if(password_verify($password, $row["password"])) {
            // echo "vayo";
            header("Location:addarticle.php");
        }
        
    } else {
        echo "Invalid details";
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form </title>
    <link rel="stylesheet" href="loginstylesheet.css">
</head>

<body>
    <!-- log in form -->
    <section class="main-container">
        <div class="mainpage">
            <div class="innerpage">
                <div class="heading">
                    <h2>Log In</h2>
                </div>
                <form action="" method="POST">
                    <label for="name">Username</label><br>
                    <input type="text" name="username" id="details"><br>

                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="details"><br>
                    <button type="login" name="login">Log in </button>
                </form>
                <div class = "loginfooter">
                    <p class = "accountcreation">Create an account</p>
                    <a href="signupform.php" class = "signupredirection">Sign Up</a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>