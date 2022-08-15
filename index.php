<?php
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Movie App</title>
</head>
<body>
  <nav>
    <h2><a href="http://localhost/Movie/index.php" class="text-warning">Movie App</a></h2>
    <ul>
        <li><a href="http://localhost/Movie/index.php" class="text-danger">Home</a></li>
    </ul>
</nav>
    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height: 300px;">
        <div class="carousel-inner" style="height: 300px;">
          <div class="carousel-item active">
            <img src="1.jpg" id="pp1" class="d-block w-100" height="300px" style="background-position: center; background-repeat: no-repeat; background-size:cover;">
          </div>
          <div class="carousel-item">
            <img src="2.jpg" id="pp1" class="d-block w-100" height="300px" style="background-position: center; background-repeat: no-repeat; background-size:cover;">
          </div>
        </div>
        <button class="carousel-control-prev" id="back" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" id="next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <cards>
        <?php
        $sql = "SELECT * FROM movie";
        $users = $connect->query($sql);
        while($user = $users->fetch_assoc())
        {
          echo "
          <card>
        <img src='./uploads/".$user['file_name']."' height='350px' width='300px' id='img1'>
          <a id='view' href='http://localhost/Movie/download.php?id=".$user['id']."'>View And Download</a>
      </card>" ;
        }



        ?>
    </cards>
    <last>
      <h3>CopyRight : Moutie Abdelhafidh</h3>
    </last>
</body>
<script src="js/bootstrap.js"></script>
<script src="jquery-3.6.0.min.js"></script>
<script src="popper.min.js"></script>
</html>