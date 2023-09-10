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
                        <a class="dropdown-item"            href="Staff.php">Staff</a>
                        <a class="dropdown-item   active"   href="Patients.php">Patients</a>
                        <a class="dropdown-item"            href="Wards.php">Wards</a>
                        <a class="dropdown-item"          href="Rooms.php">Rooms</a>
                      </div>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >     Supplies       </a>

                      <div class="dropdown-menu">
                        <a class="dropdown-item"          href="Medicines.php">Medicines</a>
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
    <h1 class="text-center" >Patients Management</h1>

      <a href="Functions_Patients/Create_Patient.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus-fill"></i> Add New Patient</a>
      
      <?php     
      echo "<a href='../Logout_Function.php?logout' class='btn btn-danger btn-outline-dark mb-2'> <i class='bi bi-box-arrow-in-left'></i> Logout</a>" 
      ?>

<!------------------------------------------------------- Table Part ------------------------------------------------------->

    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col">ID</th>
          <th  scope="col">Name</th>
          <th  scope="col">Age</th>
          <th  scope="col">Ward</th>
          <th  scope="col" colspan="3" class="text-center">Options</th>
        </tr>  
      </thead>

      <tbody>
        <tr>
 
          <?php
            $query="SELECT * FROM patient";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users))
            {
              //(Now given Variable name || Database column id name)
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

              echo " <td class='text-center'> <a href='Functions_Patients/View_Patient.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='Functions_Patients/Edit_Patient.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> Edit</a> </td>";

              echo " <td  class='text-center'>  <a href='Functions_Patients/Delete_Patient.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> Delete</a> </td>";
              echo " </tr> ";
            }  
          ?>
        </tr>          
      </tbody>
    </table>
  </div>

  <?php 
  
  //To give new values to DATABASE
  if(isset($_POST['submit'])) 
  {      
    //(Now given Variable name || Textbox id name)
    $id = $_POST['b_no'];
    $billname = $_POST['b_name'];
    $billtotal = $_POST['b_total'];
    $billphone = $_POST['b_phone'];    

        
      
    // SQL query to insert user data into the users table
    //(Database column id name || Previously given Variable name)
    $query= "INSERT INTO bills(bill_no, bill_name, bill_total, bill_phone) VALUES('{$id}','{$billname}','{$billtotal}','{$billphone}')";
    $add_bill = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
        if (!$add_bill) 
        {
          echo "something went wrong ". mysqli_error($conn);
        }

        else 
        { echo "<script type='text/javascript'>alert('Bill added successfully!')</script>";
          header('Location:../Patients.php');
        }  
             
    }
?>


  <!-- Patient Invoice Modal -->
<div class="modal fade" id="invoice" tabindex="-1">
     <div class="modal-dialog">
          <div class="modal-content">
               
               <div class="modal-header">
                    <h5 class="modal-title    bi bi-credit-card-2-front" id="enrollLabel"> Patient Bill</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
               </div>

               <div class="modal-body">
                    <p class="lead  text-center"> Arogya Hospitals Colombo</p>

                    <form action="" method="post">

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="idnumber">Bill Number</label>
                          <input type="text" class="form-control" name="b_no" placeholder="" maxlength="20" required>
                        </div>        
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="firstname">Patient Name</label>
                          <input type="phone" class="form-control" name="b_name" placeholder="" maxlength="20" required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="idnumber">Bill Total</label>
                          <input type="text" class="form-control" name="b_total" placeholder="" maxlength="20" required>
                          <div id="emailHelp" class="form-text">Non refundable.</div>
                        </div>        
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="firstname">Patient Phone</label>
                          <input type="phone" class="form-control" name="b_phone" placeholder="" maxlength="20" required>
                        </div>
                      </div>

                      <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div> 


                      <div class="col text-center">
                        <input type="submit" name="submit" class="btn btn-info btn-large" value="Enter Bill">
                      </div>

                  </form>             
   
               </div>

               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>          
               </div>
          </div>
     </div>
</div>



  <!-- Button for Invoices -->
  <div class="row">
    <div class="col text-center">
      <button class="btn  btn-success      bi bi-receipt   btn-center mt-3"  data-toggle="modal"   data-target="#invoice"> Patient Invoice </button>
    </div>
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