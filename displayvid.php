<?php
include 'homepage.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet"  type="text/css" href="styledisplay.css">
</head>
<body>
<?php
// Include the database configuration file
include 'connection.php';

// Get images from the database
$sql="select * from video";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$iddd= $row['video_id'];
?>




<div class="video1">
<form action="fav2.php" class="forms" method="post">
 <input type="hidden" name="idd" class="id" value="<?= $row['video_id'] ?>">
<video width="400px" height="300px" controls="controls">
<source   src=" uploadss/<?php echo $row['video_name']; ?>" type="video/mp4">
</video>
<div class="b1">
            <button class="submit" type="submit" name="submit"></button>
            <button class="delete" type="submit" name="delete"></button>
        </div>       
</form>
</div>


<?php } ?>
<script type="text/javascript">
$(document).ready(function() {
   $(".submit").click(function(e){
    e.preventDefault();
    var $form=$(this).closest(".forms");
    var id=$form.find(".id").val();
       $.ajax({
       url:'fav2.php',
       method:'post',
       data:{id:id}
   

       });
   });
   
});

</script>





</body>
</html>