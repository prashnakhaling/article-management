<?php
include ("dbconnection.php");
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];

    // $sql = "UPDATE articlesdetails SET title = '$title', content = '$content', image = '$image' WHERE id = $id";
    // $data = mysqli_query($connectin, $sql);
    if (empty($image)) {
        $sql = "UPDATE articlesdetails SET title = '$title', content = '$content' WHERE id = $id";
        $data = mysqli_query($connectin, $sql);
    } else {
        $sql = "UPDATE articlesdetails SET title = '$title', content = '$content', image = '$image' WHERE id = $id";
        $data = mysqli_query($connectin, $sql);

    }
    header("Location:addarticle4.php");



    // $sql = "SELECT title, content, image FROM articlesdetails ";
    // $data = mysqli_query($connectin, $sql);
    // $row = mysqli_fetch_assoc($data);
    // $previousinfor = "UPDATE"
}
?>
<?php
$id = $_GET['id'];
// echo $id;
$sql1 = "SELECT title, content, image FROM articlesdetails WHERE id = '$id' ";
$data = mysqli_query($connectin, $sql1);
// var_dump($data);
$row = mysqli_fetch_assoc($data);



// while ($row = mysqli_fetch_assoc($data)) {
//     $title = $row['title'];
//     $content = $row['content'];
//     $image = $row['image'];
// }
mysqli_close($connectin);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link rel="stylesheet" href="articlepage3.css">
</head>

<body>
    <section class="new-article">
        <div class="inner-article">
            <div class="">
                <div class="heading">
                    <h2>Edit Article </h2>
                </div>
                <form action="" method="POST">
                    <label for="title" class="">Title</label></br>
                    <input type="text" name="title" id="title" value="<?= $row['title'] ?>" /></br>


                    <label for="content" class="">Content</label></br>
                    <input type="text" name=" content" id="content" value="<?= $row['content'] ?>" /></br>

                    <label for="image" class="topic">Image</label></br>
                    <input type="file" name="image" id="image " value="<?= $row['image'] ?>"></br>

                    <button type="submit" name="update">Update</button>
                </form>
            </div>
        </div>
    </section>


</body>

</html>