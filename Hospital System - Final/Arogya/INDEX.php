<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS ->CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- custom  CSS File made by me -->
     <link rel =    "stylesheet" href="Mystyle.css">    
     

    <!-- Bootstrap CDN for icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Java Script CDN bundle -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    
    <title>Login Form</title>

</head>



<body> 

<!-- Basic Carousel Part -->

<div class="container-fluid">
    <div  class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
                
            <div class="carousel-item       active">
                <img src="Images/Welcome1.jpg"  alt=""      class="d-block w-100">              
            </div>  

            <div class="carousel-item">
                <img src="Images/Welcome1.jpg"   alt=""      class="d-block w-100">              
            </div>               

        </div>              
    </div>
</div>


<!-- Login Form Part -->

 <div class="login-form">
    <form action="Login_Function.php" method="post">
        <h2 class="text-center">User Login</h2>
        <!-- Variables are given here  -->
        <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>




        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="UName">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="PWord">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="Login">Sign in</button>
        </div>
                
    </form>
    
</div>

</body>


<!-- Footer -->
<?php include "footer.php" ?>
