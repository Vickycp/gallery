<?php
include_once 'connection.php';

if(mysqli_connect_error())
{
    die('connect Error('.mysqli_connect_error().')'.mysqli_connect_errno());
}else {
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $pas = mysqli_real_escape_string($con, $_POST['password']);
        $password = md5($pas);
        // user name & email already exist?
         if(empty($username)||empty($email)|| empty($pas))
         {
            // header("location:signup.php");
             echo "<script>alert('emailerror');
                    window.location.href='signup.php';
                    </script>";
             exit();
         }else {
                  $sq = "SELECT * FROM  user WHERE email='$email'";
                 $result = mysqli_query($con, $sq);
                 $check = mysqli_num_rows($result);

                   if ($check > 0) {
                           echo "<script>
                                  alert('emailerror');
                                  window.location.href='signup.php';
                                </script>";
                              //  header("location:signup.php? signup email already exist  error");

                   }else {
                          //insert page  code
                              $sql = "INSERT INTO user(username,email,password) values ('  $username','$email','$password');";
                               $r = mysqli_query($con, $sql);
                           if ($r == true) {
                                header("location:login.php");
                            } else {
                                 header("location:signup.php");
                                 }
                         }
               }
    }
 }

?>