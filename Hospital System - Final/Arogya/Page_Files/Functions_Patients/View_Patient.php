<!-- Header -->
<?php  include '../../header.php'?>

<h1 class="text-center">Patient Details</h1>
  
  <div class="container">

    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col" >ID</th>
          <th  scope="col">Name</th>
          <th  scope="col">Mobile</th>
          <th  scope="col">Address</th>
           <th  scope="col">Gender</th>
          <th  scope="col">Age</th>
          <th  scope="col">Admitted to</th>
          <th  scope="col">Patient History</th>
        </tr>  
      </thead>
        <tbody>
          <tr>               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['user_id'])) 
              {
                  $userid = $_GET['user_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM patient WHERE id = {$userid} ";  
                  $view_staff= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_staff))
                  {
                    $id = $row['id'];
                    $pidc = $row['p_card'];
                    $pfName  = $row['p_f_name'];
                    $plName  = $row['p_l_name'];
                    $pMobile = $row['p_mobile'];
                    $pAddress = $row['p_address'];
                    $pGender = $row['p_gender'];
                    $page = $row['p_age'];
                    $pward = $row['p_admit'];
                    $phistory = $row['p_history'];


                    echo "<tr >";
                    echo " <td >{$pidc}</td>";
                    echo " <td > {$pfName} {$plName} </td>";
                    echo " <td > {$pMobile}</td>";
                    echo " <td >{$pAddress} </td>"; 
                    echo " <td > {$pGender}</td>";
                    echo " <td >{$page} </td>";
                    echo " <td >{$pward} </td>";
                    echo " <td >{$phistory} </td>";  
                    echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="../patients.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../../footer.php" ?>