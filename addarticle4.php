<?php

include ("dbconnection.php");
$sqli = "SELECT *FROM articlesdetails";
$details = mysqli_query($connectin, $sqli);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addarticle4.css">
</head>

<body>
    <section class="containersection">
        <div class="maintable">
            <div class="secondpage">
                <div class="mainheading">
                    <h2>List of Article</h2>
                </div>
                <div>
                    <table class="articlesdetails">
                        <thead class="rowdetails">
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Content</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?Php

                            while ($row = mysqli_fetch_assoc($details)) {
                                $title = $row['title'];
                                $date = $row['date'];
                                $content = $row['content'];
                                $image = $row['image'];
                            }
                            ?>
                            <tr>
                                <td><?php echo $title ?></td>
                                <td><?php echo $date ?></td>
                                <td><?php echo $content ?></td>
                                <td><?php echo $image ?></td>

                            </tr>
                            <tr>
                                <td><?php echo $title ?></td>
                                <td><?php echo $date ?></td>
                                <td><?php echo $content ?></td>
                                <td><?php echo $image ?></td>
                            </tr>


                        </tbody>
                    </table>
                    <button></button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>