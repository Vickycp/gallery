<?php include_once("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- <link rel="stylesheet" type="text/css" href="style11.css">-->
   <style>

header{
    position: fixed;
    top:0;
}

.divcl{
    width: 1080px;
    height: 40px;
}
ul{
    padding:0px;
    margin:0px;
    list-style: none;
}
ul li{
     float: left;
     width: 100px;
     height: 30px;
     
     
     line-height: 40px;
     text-align: center;
     font-size: 20px;
     
}
ul li a{
    text-decoration: none;
    color:black;
    display: block;
}
ul li a:hover{
    background-color: whitesmoke;

}
ul li ul li{
    display: none;
    
}
ul li:hover ul li{
    display: block;
    
    
}
.uli ,.ulii{
    text-decoration: none;
    color:black;
    display: block;
}
.uli ,.ulii :hover{
    background-color: whitesmoke;

}
h3{
    color: black;
    float: right;
     width: 100px;
     height: 30px;
     
     
     line-height: 30px;
     text-align: center;
     font-size: 20px;
}
.f{

position: absolute;
top: 40%;
left: 30%;
margin-top: -150px;
margin-left: -150px;



}
    </style>


</head>
<body>
<header>
<div class="divcl">
       <nav>
        <ul class="ul1">
           
            <li class="ul1li1"><a href="homepage.php"><img src="images/home.png"></a></li>
           <!-- <li><a href="display.php" target="iframes"><img src="images/d2.png"></a></li>-->


            <li class="ul1li2"><a><img src="images/d2.png" alt="photo"></a>
                <ul>
                    <li><a href="display.php">image</a></li>
                    <li><a  href="displayvid.php">video</a></li>
                </ul>
            </li>



            <li class="ul1li3"><a href="search.php"><img src="images/search.png" style="color:white"></a></li>
           <li><a><img src="images/photo.png" alt="photo"></a>
                <ul>
                        <li><a>videos</a></li>
                        <li><a>images</a></li>
               </ul>
           </li>
           <li class="ul1li4"> <a href="admin.php">ADMIN</a></li>
        
                    
        
                   
           <li><a href="logout.php">Logout</a></li>
           <li><a href="about.php">About</li>
           <li><a href="upload.php">upload</a></li>
           <li><a href="favdisplay.php">my fav</a></li>
        </ul>
           <ul class="uli">
          <?php
          $user="";
              if(session_start())
              {
                  if(isset($_SESSION['username']))
                  {
               $user = $_SESSION['username'];
                echo "<li class='ulii'>$user</li>";

            }else{
                  echo "photo gallery";
              }
            }else{
                        echo "photogallery";
              }

           ?>

           </ul>
       </nav>
       <!--<iframe src="homepage.php" frameborder="0" height="300px" width="100%" name="iframes"></iframe>
       <div class="f">
       <?php
         //  include_once('display.php');
       ?>
       </div>-->
</div>
</header>
</body>
</html>