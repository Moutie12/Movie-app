<?php
require_once('connect.php');
$id = $_GET['id'];
$sql = "SELECT * FROM movie WHERE id=".$id;
$users = $connect->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="regarder.css" rel="stylesheet">
    <title>Regarder</title>
</head>
<body>
    <?php
    while($user = $users->fetch_assoc())
    {
    echo '<div class="details">
       <div class="name">
           <span>Name : '.$user["name"].'</span>
       </div>
       <div class="name1">
        <span>Rate : **'.$user["rate"].'**</span>
        </div>
        <div class="name1">
            <span>Resolution : '.$user["resolution"].'</span>
        </div>
        <div class="name1">
            <span>Duration : '.$user["duration"].'</span>
        </div>
        <div class="name1">
            <span>Country : '.$user["country"].'</span>
        </div>
        <button id="download">Download</button>
        <img src="./uploads/'.$user["file_name"].'" height="600px" width="500px" id="image">
    </div>
    <h1>Trailer</h1>    
    <iframe class="video p240" id="trailer" src="'.$user['trailer'].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
     ';
     echo $user['trailer'];
}
    ?>
</body>
</html>