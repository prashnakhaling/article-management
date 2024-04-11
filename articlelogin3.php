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

                    <button type="submit">Add</button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>