<?php
// Include the database configuration file
include 'connection.php';
?>
<?php
include_once "homepage.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet"  type="text/css" href="styledip.css">
</head>
<body>

   <section>
<?php
// Get images from the database
$sql="select * from upload";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
 $iddd= $row['upload_id'];
 $image=$row['image'];
 
 ?>
 <div class="dis1">
<form action="fav.php" class="forms" method="post">
 <input type="hidden" name="idd" class="id" value="<?= $row['upload_id'] ?>">
 <img class="iimage" src="data:image/jpeg;base64,<?php echo base64_encode($row['image']) ?>">
 <div class="b1">
 <div class="b2">
<button class="submit" type="submit" name="submit"></button>
 </div>
     <div class="rr">
         <button class="delete" type="submit" name="delete"></button>
     </div>

</div>
</form>
</div>
<?php
 }
}
?>
   </section>


<script type="text/javascript">
$(document).ready(function() {
   $(".submit").click(function(e){
    e.preventDefault();
    var $form=$(this).closest(".forms");
    var id=$form.find(".id").val();
       $.ajax({
       url:'fav.php',
       method:'post',
       data:{id:id}
   

       });
   });
   
});

</script>
</body>
</html>
