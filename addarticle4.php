<?php
include("dbconnection.php");



// $sql1 = "SELECT * FROM articlesdetails ";
 
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
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody class="bodydetails">
                            <?php
                            include ("dbconnection.php");
                            $sqli = "SELECT * FROM articlesdetails";
                            $details = mysqli_query($connectin, $sqli);
                            while ($row = mysqli_fetch_assoc($details)) {

                                echo "<tr>
                                <td>" . $row['title'] . "</td>
                                <td>" . $row['date'] . "</td>
                                <td>" . $row['content'] . "</td>
                                <td>" . $row['image'] . "</td>
                                <td>
                                <a href = 'updatepage.php?id=". $row['id']."'>Edit</a>
                                </td>  
                                <td>
                                <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
                                </td>                                                          
                               </tr> ";

                            }
                            ?>

                        </tbody>


                    </table>



                    <button class = "redirectionbutton">  <a href="articlelogin3.php" >Add Article</a></button>
                    <!-- <button href = "articlelogin3.php">Add Article</button> -->

                </div>
            </div>
        </div>
    </section>
</body>

</html>