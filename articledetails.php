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
    <link rel="stylesheet" href="articletabledesign.css">
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
                                <td><img src= 'images/".$row['image']."' height = '50px'></td>
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
                    <div class = "button_btn">
                    <button class = "redirectionbutton">  <a href="addarticle.php" >Add Article</a></button>
                    <!-- <button href = "addarticle.php">Add Article</button> -->
<button class = "redirectionbutton"><a href="signupform.php">Log Out</a></button>
</div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>