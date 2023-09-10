<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">Staff Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col" >ID</th>
          <th  scope="col">Name</th>
          <th  scope="col">Mobile</th>
          <th  scope="col">Address</th>
           <th  scope="col">Gender</th>
          <th  scope="col">Type</th>
          <th  scope="col">Date of Birth</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM staff WHERE id = {$userid} ";  
                  $view_staff= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_staff))
                  {
                      $id = $row['id'];
                      $idc = $row['s_card'];
                      $fName  = $row['s_f_name'];
                      $lName  = $row['s_l_name'];
                      $Mobile = $row['s_phone'];
                      $Address = $row['s_address'];
                      $Gender = $row['s_gender'];
                      $Type = $row['s_type'];
                      $Dob = $row['s_dob'];


                        echo "<tr >";
                        echo " <td >{$idc}</td>";
                        echo " <td > {$fName} {$lName} </td>";
                        echo " <td > {$Mobile}</td>";
                        echo " <td >{$Address} </td>"; 
                        echo " <td > {$Gender}</td>";
                        echo " <td >{$Type} </td>";
                        echo " <td >{$Dob} </td>";  
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- a BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>