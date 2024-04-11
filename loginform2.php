<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if  (empty($username)) {
        echo "Name is required <br>";
    }
    if (empty ($password)){
        echo "Password is required.";
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
                    <button type="login" name = "login">Log in </button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>