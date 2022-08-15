<?php
require_once('connect.php');
if(isset($_POST['subbt']))
{
    $titre = $_POST['titre'];
    $download = $_POST['download'];
    $rate = $_POST['rate'];
    $trailer = $_POST['trailer'];
    $resolution = $_POST['resolution'];
    $country = $_POST['country'];
    $duration = $_POST['duration'];
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./uploads/" . $filename;
    $sql = "INSERT INTO movie (id,name,rate,resolution,duration,country,download,trailer,file_name) VALUES 
    (NULL,'$titre','$rate','$resolution','$duration','$country','$download','$trailer','$filename')";
    mysqli_query($connect,$sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
         echo '<img src="./uploads/17.png">';
    }
    echo $filename ;
};