<?php

require_once('db.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['PWord']))
       {
            header("location:INDEX.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admin where u_name='".$_POST['UName']."' and u_password='".$_POST['PWord']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:Page_Files/Details_Pages/Home.php");
            }
            else
            {
                header("location:INDEX.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Sorry Not Working';
    }

?>  