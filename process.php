<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['login']))
    {
       
            $query="select * from user where username='".$_POST['Username']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['Username'];
                header("location:homepage.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>
