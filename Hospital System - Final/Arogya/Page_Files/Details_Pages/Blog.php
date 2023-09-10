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
                    <li class="nav-item">         <a href="Home.php"    class="nav-link">           Home </a>            </li>
                    <li class="nav-item">         <a href="About.php"   class="nav-link">           About Us </a>        </li>
                    <li class="nav-item">         <a href="Blog.php"    class="nav-link   active">  Blog </a>            </li>               
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

<br><br><br>


<!-------------------------------------------------- Show Case -> Get Foundation -------------------------------------------------->

<section class="p-5"     id="Learn1">
     
     <div class="container">
          
          <div class="row     align-items-center  justify-content-between">               
               
               <div class="col-md">
                    <img src="images/Blog1.jpg" class="img-fluid" alt="">
               </div>
               
               <div class="col-md       p-5">
                    <h1  class="text-center">     COVID-19 Treatment    </h1>
                    <p class="lead           text-center">We offer level 1 care in four luxury hotels in the vicinity of Lanka Hospitals for asymptomatic & mildly symptomatic patients, with 24/7 hour medical & nursing care under the supervision of specialised consultants with advanced High Dependency Care. </p>
                    
                    <p class="lead           text-center">We provide level 2 care in a purpose-built COVID-19 ICU with critical care beds dedicated for patients who need ICU care with the best critical care doctors & nurses, ventilator support, 24-hour monitoring, high-flow oxygen, all investigations and medication.</p>

                    <button class="btn btn-light  mt-3">
                         <i class="bi bi-chevron-right"></i>
                         Read More                          
                    </button>
               </div>

          </div>

     </div>

</section>



<!---------------------------------------------------- Show Case -> Get Discounts ---------------------------------------------------->

<section class="p-5"     id="Discount1">
     
     <div class="container">
          
          <div class="row     align-items-center  justify-content-between       bg-dark        text-light">   
               
               <div class="col-md       p-5">
                    <h1  class="text-center">     International Patient Care Centre  </h1>
                    <p class="lead           text-center">International Patient Care Centre is a dedicated centre at Lanka Hospitals designed to provide personalized, quality care for international patients travelling to Sri Lanka from overseas. The centre offers a plethora of servicers ranging from attentive patient care and monitoring to travel and accommodation arrangements, liaising with relevant parties for visa arrangements and much more. We ensure that you are well looked after by our team of trained health professionals. </p>

                    <button class="btn btn-dark   mt-3">
                         <i class="bi bi-chevron-right"></i>
                         Read More                          
                    </button>
               </div>

               <div class="col-md">
                    <img src="images/Blog2.jpg" class="img-fluid" alt="">
               </div>

          </div>

     </div>

</section>





<!-------------------------------------------------------- Footer part -------------------------------------------------------->

<footer class="p-5 bg-dark    text-white  text-center       position-relative">
     
     <div class="container">
          <p class="lead">CopyRight &copy; 2022 Apex Design Works</p>
          <p class="lead"> <i class="bi bi-person-bounding-box"></i> </p>

          <a href="" class="position-absolute     bottom-0  end-0     p-5">     <i class="bi bi-arrow-up-circle h1"></i>     </a>
          
     </div>

     
</footer>







