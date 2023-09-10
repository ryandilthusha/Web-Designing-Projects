<?php 

session_start();
if(!isset($_SESSION['User'])){
  header("location: index.php");
}

?>

<!-- Header -->
<?php include "../header.php"?>


<!------------------------------------------------------- Nav Bar ------------------------------------------------------->
<nav class="navbar       navbar-light    bg-info        navbar-expand-sm    fixed-top">

     <div class="container">

          <a href="#" class="navbar-brand" > AROGYA </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">  <span class="navbar-toggler-icon"></span>  </button>

          <div class="collapse          navbar-collapse"    id="navbarNavDropdown">  <! –– Nav Bar can collapse like a drop down button ––> 
               
               <ul class="navbar-nav    ms-auto"> 
                    <li class="nav-item">         <a href="Details_Pages/Home.php"    class="nav-link"> Home </a>            </li>
                    <li class="nav-item">         <a href="Details_Pages/About.php"   class="nav-link"> About Us </a>        </li>
                    <li class="nav-item">         <a href="Details_Pages/Blog.php"    class="nav-link"> Blog </a>            </li>               
                    <li class="nav-item">         <a href="Details_Pages/Contact.php" class="nav-link"> Contact Us </a>      </li>
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >     Services       </a>

                      <div class="dropdown-menu">
                        <a class="dropdown-item"          href="Staff.php">Staff</a>
                        <a class="dropdown-item"          href="Patients.php">Patients</a>
                        <a class="dropdown-item  active"  href="Wards.php">Wards</a>
                        <a class="dropdown-item"          href="Rooms.php">Rooms</a>
                      </div>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >     Supplies       </a>

                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="Medicines.php">Medicines</a>
                        <a class="dropdown-item"          href="Other.php">Other</a>
                      </div>
                    </li>
                </ul>

          </div>

     </div>    
          
</nav>

<br><br><br>




<!------------------------------------------------------- Upper Part ------------------------------------------------------->


  <div class="container">
    <h1 class="text-center" >Ward Management</h1>
      
      <?php     
      echo "<a href='../Logout_Function.php?logout' class='btn btn-danger btn-outline-dark mb-2'> <i class='bi bi-box-arrow-in-left'></i> Logout</a>" 
      ?>


<!------------------------------------------------------- Table 1 Part ------------------------------------------------------->

    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col">Ward</th>
          <th  scope="col" colspan="3" class="text-center">Edit Ward Status</th>
        </tr>  
      </thead>

      <tbody>
        <tr>
 
          <?php
            $query="SELECT * FROM wards";               // SQL query to fetch all table data
            $view_ward= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_ward))
            {
              //(Now given Variable name || Database column id name)
              $id = $row['id'];                
              $wnum = $row['w_number'];        
                    
              echo "<tr >";
              echo " <th scope='row' >{$wnum}</th>";                      

              echo " <td class='text-center' > <a href='Functions_Ward/Ward_Manage.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-building'></i> Manage the Ward</a> </td>";

              
              echo " </tr> ";
            }  
          ?>
        </tr>  
      </tbody>
    </table>

<!------------------------------------------------------- Table 2 Part ------------------------------------------------------->

    <h3 class="text-center" >Ward Details</h3>

    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col"  class="text-center">Ward Number</th>
          <th  scope="col"  class="text-center">Doctor 1</th>
          <th  scope="col"  class="text-center">Doctor 2</th>
          <th  scope="col"  class="text-center">Nurse 1</th>
          <th  scope="col"  class="text-center">Nurse 2</th> 
          <th  scope="col"  class="text-center">Attendant 1</th>
          <th  scope="col"  class="text-center">Attendant 2</th>  
        </tr>  
      </thead>

      <tbody>
        <tr>
 
          <?php
            $query="SELECT * FROM wards";               // SQL query to fetch all table data
            $view_ward= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_ward))
            {
              //(Now given Variable name || Database column id name)
              $id = $row['id']; 
              $wnum = $row['w_number']; 
              $doc1 = $row['Doctor1'];
              $doc2 = $row['Doctor2'];
              $nur1 = $row['Nurse1'];
              $nur2 = $row['Nurse2'];
              $atten1 = $row['Attendant1'];
              $atten2 = $row['Attendant2'];  

                    
              echo "<tr >";
              echo " <th scope='row' >{$wnum}</th>"; 
              echo " <th scope='row' >{$doc1}</th>"; 
              echo " <th scope='row' >{$doc2}</th>"; 
              echo " <th scope='row' >{$nur1}</th>"; 
              echo " <th scope='row' >{$nur2}</th>"; 
              echo " <th scope='row' >{$atten1}</th>"; 
              echo " <th scope='row' >{$atten2}</th>";          
              echo " </tr> ";
            }  
          ?>
        </tr>  
      </tbody>
    </table>

  </div>


<!-- BACK button to go to the Home page -->
<div class="container text-center mt-3">
      <a href="Details_Pages/Home.php" class="btn btn-warning mt-5"> Back </a>
<div>




<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>