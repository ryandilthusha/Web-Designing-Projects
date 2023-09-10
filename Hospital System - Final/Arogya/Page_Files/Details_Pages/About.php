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
                    <li class="nav-item">         <a href="About.php"   class="nav-link   active">  About Us </a>        </li>
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

<br><br><br>

<!------------------------------------------------ 3 Card Boxes ------------------------------------------------>


<section class="p-5">
     <div class="container">
          <div class="row     text-center         g-4">
               
               <div class="col-md">

                    <div class="card    bg-dark        text-light">        
                                                  
                         <div class="card-body    text-center">
                              <div class="h1      mb-3">
                                   <i class="bi bi-award-fill"></i>
                              </div>
                              <h3 class="card-title    mb-3">    Awarded         </h3>
                              <p class="card-text">We have been recognized for our exceptional service and care by both international and local awarding bodies.</p>
                              <a href="#"  class="btn btn-primary">   Read More>     </a>
                         </div>    

                    </div>

               </div>

               <div class="col-md">

                    <div class="card    bg-dark        text-light">        
                                                  
                         <div class="card-body    text-center">
                              <div class="h1      mb-3">
                                   <i class="bi bi-shield-fill-check"></i>
                              </div>
                              <h3 class="card-title    mb-3">    Secured  </h3>
                              <p class="card-text">Your health is our priority. We give our priority to helping you, healing you, and protecting you.</p>
                              <a href="#"  class="btn btn-primary">   Read More>     </a>
                         </div>                        

                    </div>

               </div>

               <div class="col-md">
                    
                    <div class="card    bg-dark        text-light">        
                                                  
                         <div class="card-body    text-center">
                              <div class="h1      mb-3">
                                   <i class="bi bi-people-fill"></i>
                              </div>
                              <h3 class="card-title    mb-3">    Excellent Staff   </h3>
                              <p class="card-text">We have an expert medical staff to provide the best health recovery possible. So don't worry about your health.</p>
                              <a href="#"  class="btn btn-primary">   Read More>     </a>
                         </div>                        

                    </div>

               </div>

          </div>
     </div>
</section>


<!-------------------------------------------------- Our Instructors part -------------------------------------------------->

<section id="instructors" class="p-5 bg-info">
     <div class="container">
          <h2 class="text-center text-dark">Our Specialists</h2>
          <p class="lead text-center text-dark mb-5">Our Specialists all have remarkable working experience with international recognition.</p>
          
          <div class="row g-4">
               
               <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                         <div class="card-body text-center">
                              <img src="https://randomuser.me/api/portraits/men/11.jpg"  class="rounded-circle  mb-3"  alt="">
                              <h3 class="card-title mb-3">Prof. Shaman Rajindrajith</h3>
                              <p class="card-text">I am a consultant Paediatrician with special interest to gastroenterology. I have experience in treating children with functional gastrointestinal disorders (constipation, abdominal pain ect..), inflammatory bowel disorders, and liver diseases. I also perform endoscopic procedures in children.</p>
                              <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                         </div>
                    </div>
               </div>

               <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                         <div class="card-body text-center">
                              <img src="https://randomuser.me/api/portraits/women/2.jpg"  class="rounded-circle  mb-3"  alt="">
                              <h3 class="card-title mb-3">Prof. Jithangi Wanigasinghe</h3>
                              <p class="card-text">Prof. Jithangi Wanigasinghe is a professor in paediatric neurology in the Department of Paediatrics, Faculty of Medicine, University of Colombo. She graduated from the University of Colombo in 1998 with first Class Honours.Her main field of work relates to paediatric epilepsies and her research interests have been most on treatment of infantile spasms.</p>
                              <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                         </div>
                    </div>
               </div>

               <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                         <div class="card-body text-center">
                              <img src="https://randomuser.me/api/portraits/men/1.jpg"  class="rounded-circle  mb-3"  alt="">
                              <h3 class="card-title mb-3">Prof. Pujitha Wickramasinghe</h3>
                              <p class="card-text">Training in Paediatric Gastroenterology and Clinical Nutrition Royal Children’s Hospital, and Research on Human Body Composition at Children’s Nutrition Research Centre, Dept of Paediatrics and Child Health Brisbane, Australia (Clinical Nutrition Research Fellow, Post MD overseas training) –  Apr 2003 – Apr 2004.</p>
                              <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                         </div>
                    </div>
               </div>

               <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                         <div class="card-body text-center">
                              <img src="https://randomuser.me/api/portraits/women/1.jpg"  class="rounded-circle  mb-3"  alt="">
                              <h3 class="card-title mb-3">Prof. Shamya De Silva</h3>
                              <p class="card-text">Kirikankanange Shamya Harshini de Silva joined the Faculty of Medicine, University of Colombo as a Senior Lecturer in September 1991 and was subsequently promoted to the current position of Professor in Paediatrics in November 2009. She is a honorary Consultant Paediatrician attached to the University Unit at Lady Ridgeway Hospital since September 1991.</p>
                              <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                              <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                         </div>
                    </div>
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







