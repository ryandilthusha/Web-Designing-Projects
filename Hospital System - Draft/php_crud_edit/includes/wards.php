
<?php 

session_start();
if(!isset($_SESSION['User'])){
  header("location: index.php");
}

?>

<!-- Header -->
<?php include "../header.php"?>


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
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../patients.php">Patients</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Schedule
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="wards.php">Wards</a>
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
    <h1 class="text-center" >WARDS</h1>
      
      <?php
     
      echo "<a href='../logout.php?logout' class='btn btn-outline-dark mb-2'> <i class='bi bi-person-plus'></i> Logout</a>"
    
    
       ?>
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">WARD</th>
              <th  scope="col" colspan="3" class="text-center">STATUS</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM wards";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $wnum = $row['w_number'];        
                    

              echo "<tr >";
              echo " <th scope='row' >{$wnum}</th>";
             

          

              echo " <td class='text-center' > <a href='ward-manage.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> Ward Management</a> </td>";

              
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