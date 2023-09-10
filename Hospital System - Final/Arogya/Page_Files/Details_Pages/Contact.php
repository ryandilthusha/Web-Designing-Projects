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
                    <li class="nav-item">         <a href="Blog.php"    class="nav-link">           Blog </a>            </li>               
                    <li class="nav-item">         <a href="Contact.php" class="nav-link   active">  Contact Us </a>      </li>
                    
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

<!-------------------------------------------------- Frequently Asked Questions part -------------------------------------------------->

<section class="p-5"     id="FaQ1">
     <div class="container">
          
          <h2 class="text-center mb-4"> Frequently Asked Questions </h2>

          
          <div class="accordion accordion-flush" id="questions">
               
               <!-- Item 1 -->
               <div class="accordion-item">
               <h2 class="accordion-header">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-1">
                    What procedures will I have in the Emergency Department? 

                         </button>
               </h2>
               <div id="question-1" class="accordion-collapse collapse" data-bs-parent="#questions">
                    <div class="accordion-body">Treatments and procedures may include lab work, radiological studies, CAT scans, ultrasound, EKG for cardiac review, medication administration and physician evaluations.</div>
               </div>
               </div>

               <!-- Item 2 -->
               <div class="accordion-item">
               <h2 class="accordion-header">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-2">
                    How is the Emergency Department staffed?

                         </button>
               </h2>
               <div id="question-2" class="accordion-collapse collapse" data-bs-parent="#questions">
                    <div class="accordion-body">The department is staffed with emergency medicine physicians and nurses, physician assistants, technicians, CNAs and unit coordinators along with specialists from the laboratory, cardiology, respiratory and radiology departments.</div>
               </div>
               </div>

               <!-- Item 3 -->
               <div class="accordion-item">
               <h2 class="accordion-header">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-3">
                         Will I be allowed to have visitors during my treatment?
                         </button>
               </h2>
               <div id="question-3" class="accordion-collapse collapse" data-bs-parent="#questions">
                    <div class="accordion-body">Yes, usually, but the number of visitors in the emergency treatment area is kept to a minimum. Occasionally, visitors will be asked to remain in the ED lobby until your loved one is placed into the room and settled into their environment. Usually, two visitors per patient are allowed in most areas of the department.</div>
               </div>
               </div>

               <!-- Item 4 -->
               <div class="accordion-item">
               <h2 class="accordion-header">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-4">
                         What happens if I am admitted?
                         </button>
               </h2>
               <div id="question-4" class="accordion-collapse collapse" data-bs-parent="#questions">
                    <div class="accordion-body">Upon admission to the hospital, you will remain in the Emergency Department until your inpatient room is ready. Your admitting physician will visit you during their designated "patient rounds."</div>
               </div>
               </div>

          </div>
          

     </div>
</section>

<!-------------------------------------------------- Contact Info with Map part -------------------------------------------------->

<section class="p-5" id="Contact1">
     <div class="container">
          
          <div class="row g-4">
               
               <div class="col-md">
                    <h2 class="text-center mb-4">Contact Info</h2>
                    <ul class="list-group list-group-flush lead">
                         <li class="list-group-item">       <span class="fw-bold">Main Location:</span>  578 Elvitigala Mawatha, Colombo 00500     </li>
                         <li class="list-group-item">       <span class="fw-bold">Phone:</span>  +94 11 754 4801                        </li>
                         <li class="list-group-item">       <span class="fw-bold">Office Email:</span>    INFO@AROGYA.LK       </li>                         
                    </ul>
               </div>

               <div class="col-md">                    
                    <div id="map"></div>
               </div>

     </div>
</section>

<!-- JS CDN bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- JS Mapbox -->
<script src='https://api.mapbox.com/mapbox-gl-js/v2.8.0/mapbox-gl.js'></script>

<script>
mapboxgl.accessToken = 'pk.eyJ1IjoicnlhbndpY2tyYW1hcmF0bmUiLCJhIjoiY2wxc3o2aWh1MDM3dTNkbnkybjc2d2ppcyJ9.xiN3YL3nFTM63Ib9XlB4Ig';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',

center: [79.9729, 6.9147],
zoom: 13

});

</script>


<!-------------------------------------------------------- Footer part -------------------------------------------------------->

<footer class="p-5 bg-dark    text-white  text-center       position-relative">
     
     <div class="container">
          <p class="lead">CopyRight &copy; 2022 Apex Design Works</p>
          <p class="lead"> <i class="bi bi-person-bounding-box"></i> </p>

          <a href="" class="position-absolute     bottom-0  end-0     p-5">     <i class="bi bi-arrow-up-circle h1"></i>     </a>
          
     </div>

     
</footer>







