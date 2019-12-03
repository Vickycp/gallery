<?php

include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    .image1{

        width:300px;
        height:300px;
    }

</style>
</head>
<body>
    <?php
    session_start();
    $user_id=$_SESSION['user_id'];
    $sql="select i.image,v.video_name from upload i,fav f,user u ,fav2 f2, video v where f.user_id='$user_id' and i.upload_id=f.image_id or f2.user_id='$user_id' and v.video_id=f2.video_id";
    $re=mysqli_query($con,$sql);
    //$result=mysqli_num_rows($re);
    if(mysqli_num_rows($re)>0)
{
    while($row=mysqli_fetch_array($re)){
     ?>
     <form >
        <img class="image1" src="data:image/jpeg;base64,<?php echo base64_encode($row['image']) ?>">
        <video width="400px" height="300px" controls="controls">
<source   src=" uploadss/<?php echo $row['video_name']; ?>" type="video/mp4">
</video>
    </form>
<?php
    }
}
    ?>
</body>
</html>