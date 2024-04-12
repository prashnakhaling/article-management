<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Please fill up the login details.";
    }
    $finalpassword = password_hash($password, PASSWORD_DEFAULT);

    include ("dbconnection.php");
    $sqli = "SELECT * FROM registrationdetails";
    $finaldata = mysqli_query($connectin, $sqli);
    // mysqli_query($connect, $sqli);

    if (mysqli_num_rows($finaldata) > 0) {
        while ($result = mysqli_fetch_assoc($finaldata)) {
            $validusername = $result['username'];
            $validpassword = $result['password'];
            if ($validusername == $username && $validpassword == $finalpassword) {
                header("Location:addarticle4.php");
            }

        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form </title>
    <link rel="stylesheet" href="loginstylesheet2.css">
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
            </div>
        </div>
    </section>

</body>

</html>