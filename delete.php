<?php
include ("dbconnection.php");
$id = $_GET['id'];
$sql = "DELETE FROM articlesdetails WHERE id = '$id' ";
$result = mysqli_query($connectin, $sql);
if(mysqli_query($connectin, $sql)){
    header("Location:addarticle4.php");
}
