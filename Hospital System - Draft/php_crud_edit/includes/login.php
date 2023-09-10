<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS ->CDN Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- Bootstrap CDN for Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Java Script CDN bundle -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- custom  CSS File made by me -->
     <link rel =    "stylesheet" href="Mystyle.css">

    <title>Login Form</title>

</head>




<body>


<!-- Basic Carousel Part -->

<div class="container-fluid">
    <div  id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
                
            <div class="carousel-item       active">
                <img src="Images/Welcome1.jpg"  alt=""      class="d-block w-100">              
            </div>

            <div class="carousel-item">
            <img src="Images/Welcome2.jpg"  alt=""      class="d-block w-100">              
            </div>                  

        </div>  
        <!-- Carousel Buttons -->
        <a href="#carouselExampleControls"  class="carousel-control-prev"   data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#carouselExampleControls"  class="carousel-control-next"   data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>            
    </div>
</div>



<!-- Login Form Part -->

<div class="login-form">
    <form action="includes/home.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" onClick="document.location.href='includes/home.php'">Log in</button>
        </div>
                
    </form>
    
</div>
</body>
</html>