<?php
include_once("connection.php");

?>
<?php
if(session_start()){
 if(isset($_SESSION['user_id']))
 {
     $user_id=$_SESSION['user_id'];
     //echo $user_id;
 }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>     
    div{
         background:transperent;
         position: absolute;
         top:50%;
          left:40%;
           margin-top:-100px;
             margin-left:-100px;
    }
    
    
    </style>
</head>
<body>
<div>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
              <input type="file" name="image" >
              <input type="submit" name="submit" value="upload image">
              <input type="submit" name="submit2" value="upload video">
    </form>
    <a href="homepage.php">homepage</a>
      </div>
    </body>
</html>

<?php


if(isset($_POST['submit']))
{
    $file=$_FILES['image'];
   // print_r($file);
        $image_name = $_FILES['image']['name'];
        $image_temp=$_FILES['image']['tmp_name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $tmp=addslashes(file_get_contents($image_temp));
       // $image_type=$_FILES[]
  	// Get text
  	//$image_text = mysqli_real_escape_string($con, $_POST['image_text']);

  	// insert query
  	$sql = "INSERT INTO upload (user_id,imagename, image_type,image_size,image) VALUES ('$user_id','$image_name', '$image_type','$image_size','$tmp')";
  	// execute query
  	mysqli_query($con, $sql);
}
//////////////////////////video  //////////////////
if(isset($_POST['submit2']))
{
    $file=$_FILES['image'];
    print_r($file);
        $video_name = $_FILES['image']['name'];
        $video_temp=$_FILES['image']['tmp_name'];
        $video_type=$_FILES['image']['type'];
        $video_size=$_FILES['image']['size'];
        $tmp=addslashes(file_get_contents($video_temp));
        move_uploaded_file($video_temp,'uploadss/'.$video_name);
       // $image_type=$_FILES[]
  	// Get text
  	//$image_text = mysqli_real_escape_string($con, $_POST['image_text']);

  	// insert query
  	$sql = "INSERT INTO video (user_id,video_name, video_type,video_size) VALUES ('$user_id','$video_name', '$video_type','$video_size')";
  	// execute query
  	mysqli_query($con, $sql);
}

?>