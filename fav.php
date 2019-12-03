<?php
include 'connection.php';
session_start();
if(isset($_POST['idd'])|| isset($_SESSION['user_id']))
{
    $image_id=$_POST['idd'];
    //$image=$_POST['image'];
   // echo $image;
   // echo $id;
    $user_id= $_SESSION['user_id'];
   //echo $user_id;
   $sq = "select * from fav where image_id='$image_id' and user_id='$user_id';";
   $re = mysqli_query($con, $sq);
   if(mysqli_num_rows($re)==0)
   {
   $sql = "INSERT INTO fav(image_id,user_id) values ('$image_id','$user_id');";
     $r = mysqli_query($con, $sql);
   if ($r == true) {
    header("location:display.php");
  } else {
        
    echo  "<script> alert('can not add to fav');
                    window.location.href='display.php';
                    </script>"; }
}else{

       $sqll="delete from fav where image_id='$image_id' and user_id='$user_id'; ";
       mysqli_query($con, $sqll);
          

  echo  "<script> alert('removed  from  fav');
  window.location.href='display.php';
  </script>";
}
}

?>