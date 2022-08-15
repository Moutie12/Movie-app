<?php
include_once('connect.php');
$query = " select * from movie ";
        $result = mysqli_query($connect, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="./image/<?php echo $data['17.png']; ?>" >
 
        <?php
        }

?>        