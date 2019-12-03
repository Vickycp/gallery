<?php include_once("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--<link rel="stylesheet" type="text/css" href="style11.css">-->
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
       <nav>
        <ul>
           
            <li><a href="homepage.php"><img src="images/home.png"></a></li>
            <li><a href="search.php"><img src="images/search.png"></a></li>
            <li><a><img src="images/d2.png" alt="photo"></a>
                <ul>
                    <li><a href="display.php">image</a></li>
                    <li><a  href="displayvid.php">video</a></li>
                </ul>
            </li>
           <li> <a href="admin.php">ADMIN</a></li>
        
                    
           <li><a href="login.php" >LOGIN</a></li>
        
                   
           <li><a href="about.php">About</li>
        </ul>
       </nav>
</body>
</html>