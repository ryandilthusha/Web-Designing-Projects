<?php 

session_start();
if(!isset($_SESSION['User'])){
  header("location:../../INDEX.php");
}

?>

<!-- Header -->
<?php include "../../header.php"?>

<!------------------------------------------------------- Nav Bar ------------------------------------------------------->
<nav class="navbar       navbar-light    bg-info        navbar-expand-sm    fixed-top">

     <div class="container">

          <a href="#" class="navbar-brand" > AROGYA </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">  <span class="navbar-toggler-icon"></span>  </button>

          <div class="collapse          navbar-collapse"    id="navbarNavDropdown">  <! –– Nav Bar can collapse like a drop down button ––> 
               
               <ul class="navbar-nav    ms-auto"> 
                    <li class="nav-item">         <a href="Home.php"    class="nav-link   active">  Home </a>            </li>
                    <li class="nav-item">         <a href="About.php"   class="nav-link">           About Us </a>        </li>
                    <li class="nav-item">         <a href="Blog.php"    class="nav-link">           Blog </a>            </li>               
                    <li class="nav-item">         <a href="Contact.php" class="nav-link">           Contact Us </a>      </li>
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >     Services       </a>

                      <div class="dropdown-menu">
                        <a class="dropdown-item"          href="../Staff.php">Staff</a>
                        <a class="dropdown-item"          href="../Patients.php">Patients</a>
                        <a class="dropdown-item"          href="../Wards.php">Wards</a>
                        <a class="dropdown-item"          href="../Rooms.php">Rooms</a>
                      </div>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >     Supplies       </a>

                      <div class="dropdown-menu">
                        <a class="dropdown-item"          href="../Medicines.php">Medicines</a>
                        <a class="dropdown-item"          href="../Other.php">Other</a>
                      </div>
                    </li>
                </ul>

          </div>

     </div>    
          
</nav>

<!------------------------------------------------------- Show Case ------------------------------------------------------->

<section  class="bg-info      text-dark       text-sm-start       pt-5       pt-lg-5">
     <div class="container">
          <div class="d-md-flex         align-items-center       justify-content-between">               
          
               <div>                    
                    <h1> GROW UP with <span class="badge  bg-success">Arogya</span>     </h1>
                    <p class="lead      my-4">Arogya Hospitals is the most accredited hospital in the Sri Lankan healthcare sector. Our fundamental purpose of health care is to enhance quality of life by enhancing health. By this portale you can easily enter/edit records, make schedules, make invoices and much more. </p>                    
               </div>
               <div>
                    <br>
                    <img class="img-fluid    d-none    d-md-block" src="images/Arogya_Logo.jpg" alt="">
               </div>

          </div>
     </div>    
</section>

<!------------------------------------------------ Signup for Newsletter Part ------------------------------------------------>

<section  class="bg-danger        text-dark      pt-3">
     <div class="container">
          <div class="d-md-flex         align-items-center       justify-content-between">               
          
               <div>
                    <h3  class="mb-3         mb-md-0"> Sign Up For Our Newsletter    </h1>                    
               </div>
               <div>
                    

                    <div class="input-group mb-3  news-input">
                         <input type="text" class="form-control" placeholder="Enter your Email">
                          <button class="btn btn-warning   btn-lg" type="button" id="button-addon2">Signup</button>
                    </div>
               </div>

          </div>
     </div>    
</section>

<!-- Make Responsive Carousels -->

     <div>
          <div  id="carouselExampleControls" class="carousel slide    carousel-fade" data-bs-ride="carousel">
               
               <div class="carousel-indicators">            
               <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>

               <div class="carousel-inner">
                    
                    <div class="carousel-item          active"        data-bs-interval="2000">
                         <img src="images/Hospital1.jpg"     alt=""         class="d-block w-100">
                         <div class="carousel-caption">
                         <h5 class="text-light bg-dark">Best Facilities</h5>
                         <p class="text-light bg-dark">Arogya Hospital has the best equipment and facilities with the best service you will ever have.</p>
                         </div>                   
                    </div>    

                    <div class="carousel-item"         data-bs-interval="1000">
                         <img src="images/Hospital2.jpg"      alt=""         class="d-block w-100">   
                         <div class="carousel-caption">
                         <h5 class="text-light bg-dark">Best Treatment</h5>
                         <p class="text-light bg-dark">We provide superior treatment for patients with superb friendly staff.</p>
                          </div>             
                    </div>

                    <div class="carousel-item"         data-bs-interval="1000">
                         <img src="images/Hospital3.jpg"      alt=""         class="d-block w-100">   
                         <div class="carousel-caption">
                         <h5 class="text-light bg-dark">Best Technology</h5>
                         <p class="text-light bg-dark">With technological evolution, we have enhanced our services with them.</p>
                         </div>              
                    </div>

               </div>    
               <!-- Carousel Buttons -->
               <a href="#carouselExampleControls" class="carousel-control-prev" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
               </a>

               <a href="#carouselExampleControls" class="carousel-control-next" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
               </a>           
          </div>
     </div>


<!-------------------------------------------------------- Footer part -------------------------------------------------------->

<!-- JS CDN bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<footer class="p-5 bg-dark    text-white  text-center       position-relative">
     
     <div class="container">
          <p class="lead">CopyRight &copy; 2022 Apex Design Works</p>
          <p class="lead"> <i class="bi bi-person-bounding-box"></i> </p>

          <a href="" class="position-absolute     bottom-0  end-0     p-5">     <i class="bi bi-arrow-up-circle h1"></i>     </a>
          
     </div>

     
</footer>







