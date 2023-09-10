<?php 

session_start();
if(!isset($_SESSION['User'])){
  header("location:../INDEX.php");
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
                        <a class="dropdown-item"          href="Wards.php">Wards</a>
                        <a class="dropdown-item"          href="Rooms.php">Rooms</a>
                      </div>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >     Supplies       </a>

                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="Medicines.php">Medicines</a>
                        <a class="dropdown-item   active"          href="Other.php">Other</a>
                      </div>
                    </li>
                </ul>

          </div>

     </div>    
          
</nav>

<br><br><br>


<!------------------------------------------------------- Upper Part ------------------------------------------------------->

  <div class="container">

    <h1 class="text-center" >Other Supplies Management</h1>

    <a href="Functions_Other/Create_Other.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-box-seam"></i> Add New Item</a>

      <?php     
      echo "<a href='../Logout_Function.php?logout' class='btn btn-danger btn-outline-dark mb-2'> <i class='bi bi-box-arrow-in-left'></i> Logout</a>" 
      ?>

<!------------------------------------------------------- Table Part ------------------------------------------------------->

    <table class="table   table-striped   table-bordered    table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col"  class="text-center">ID Number</th>
          <th  scope="col"  class="text-center">Name</th>
          <th  scope="col"  class="text-center">Type</th>
          <th  scope="col"  class="text-center">Quantity</th>               
          <th  scope="col" colspan="3" class="text-center">Options</th>
        </tr>  
      </thead>
      
      <tbody>
        <tr>

          <?php
              $query="SELECT * FROM other";               // SQL query to fetch all table data
              $view_other= mysqli_query($conn,$query);    // sending the query to the database

              //  displaying all the data retrieved from the database using while loop
              while($row= mysqli_fetch_assoc($view_other))
              {
                //(Now given Variable name || Database column id name)
                $id = $row['id'];
                $idc = $row['o_card'];                
                $fname = $row['o_name'];                       
                $type = $row['o_type']; 
                $quantity = $row['o_quantity'];       

                echo "<tr >";
                echo " <th scope='row' >{$idc}</th>";
                echo " <td > {$fname}</td>";
                echo " <td > {$type}</td>";
                echo " <td > {$quantity}</td>";
              

                echo " <td class='text-center'> <a href='Functions_Other/View_Other.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

                echo " <td class='text-center' > <a href='Functions_Other/Edit_Other.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> Edit</a> </td>";

                echo " <td  class='text-center'>  <a href='Functions_Other/Delete_Other.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> Delete</a> </td>";
                echo " </tr> ";           
              }  
            ?>

        </tr>  
      </tbody>
    </table>
  </div>

<!-- BACK button to go to the Home Page -->
<div class="container text-center mt-3">
      <a href="Details_Pages/Home.php" class="btn btn-warning mt-5"> Back </a>
<div>





<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>