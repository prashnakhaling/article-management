<?php
include("dbconnection");
 if(isset($_POST['add'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST ['image'];

    if(empty($title) || empty ($content) || empty ($image)){
        echo "please fill the details to add your articles.";
    }else if (strlen($title)<5){
        echo "title should be 5 characters long.";
    }else

    //connecting the database
    $host = 'localhost';
    $username = 'root';
    $hostpassword = '';
    $databasename = 'articlemanagement';

    $connect1 = mysqli_connect($host, $username, $hostpassword, $databasename);
    $sql1 = "INSERT INTO articlesdetails (title, content, image) values ('$title', 'content' , 'image')";
 
    mysqli_query($connect1, $sql1);
    if (mysqli_connect_errno()) {
        die("Failed to connect:") . mysqli_connect_error();
        exit();

    } else {
        header("Location:addarticle4.php");
        exit();

    }

 }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article log in </title>
    <link rel="stylesheet" href="articlepage3.css">
</head>

<body>
    <!-- blank form for adding new article -->
    <section class="new-article">
        <div class="inner-article">
            <div class = "">
                <div class="heading">
                    <h2>Add New Article </h2>
                </div>
                <form action="" method="POST">
                    <label for="title" class="">Title</label><br>
                    <input type="text" name="title" id="title"><br>
                    

                    <label for="content" class="">Content</label><br>
                    <textarea type="text" name=" content" id="content"></textarea><br>

                    <label for="image" class="topic">Image</label><br>
                    <input type="file" name="image" id="image"><br>

                    <button type="submit" name = "add">Add</button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>