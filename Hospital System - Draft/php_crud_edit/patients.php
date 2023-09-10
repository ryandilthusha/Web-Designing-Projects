
<?php 

session_start();
if(!isset($_SESSION['User'])){
  header("location: index.php");
}

?>

<!-- Header -->
<?php include "header.php"?>


<!--- navbar  -->
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
  <a class="navbar-brand" href="#"><strong>AROGYA HEALTH CARE</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" id="navlist">
      <li class="nav-item active">
        <a class="nav-link" href="includes/home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="patients.php">Patients</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Schedule
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="includes/wards.php">Wards</a>
          <a class="dropdown-item" href="#">Rooms</a>
          <a class="dropdown-item" href="#">Operating Theatres</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>

<br>


<!--- navbar end  -->







  <div class="container">
    <h1 class="text-center" >PATIENTS MANAGEMENT</h1>
      <a href="includes/add-patient.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Add New Patient</a>
      <?php
     
      echo "<a href='logout.php?logout' class='btn btn-outline-dark mb-2'> <i class='bi bi-person-plus'></i> Logout</a>"
    
    
       ?>
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Name</th>
              <th  scope="col">Age</th>
              <th  scope="col">Ward</th>
              <th  scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM patient";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $pidc = $row['p_card'];        
              $pfname = $row['p_f_name'];         
              $plname = $row['p_l_name'];
              $page = $row['p_age'];
              $pward = $row['p_admit'];        

              echo "<tr >";
              echo " <th scope='row' >{$pidc}</th>";
              echo " <td > {$pfname} {$plname}</td>";
              echo " <td > {$page}</td>";
              echo " <td >{$pward} </td>";

              echo " <td class='text-center'> <a href='includes/view-patient.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='includes/update-patient.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='includes/delete-patient.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-3">
      <a href="index.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->


<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>