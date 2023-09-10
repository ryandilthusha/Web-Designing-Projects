<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM staff WHERE id = $userid ";
      $edit_staff= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($edit_staff))
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
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $sidc = $_POST['card_no'];
      $sfName  = $_POST['st_fname'];
      $slName  = $_POST['st_lname'];
      $sMobile = $_POST['st_mobile'];
      $sAddress = $_POST['st_address'];
      $sGender = $_POST['st_gender'];
      $sType = $_POST['st_type'];
      $sDob = $_POST['st_dob'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE staff SET s_card = '{$sidc}' , s_f_name = '{$sfName}' , s_l_name = '{$slName}' , s_phone = '{$sMobile}' , s_address = '{$sAddress}' , s_gender = '{$sGender}' , s_type = '{$sType}' , s_dob = '{$sDob}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
      header("location: home.php");
    }             
?>

<h1 class="text-center">Update Staff Details</h1>
  <div class="container ">
    <form action="" method="post">
      
      <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">ID Number</label>
        <input type="text" class="form-control" name="card_no" value="<?php echo $idc ?>" maxlength="12" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">First Name</label>
        <input type="phone" class="form-control" name="st_fname" value="<?php echo $fName ?>" maxlength="10" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="firstname">Last Name</label>
        <input type="text" class="form-control" name="st_lname" value="<?php echo $lName ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="lastname">Mobile</label>
        <input type="text" class="form-control" name="st_mobile" value="<?php echo $Mobile ?>">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="st_address" value="<?php echo $Address ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="inputState">Gender</label>
        <select id="inputState" name="st_gender" class="form-control" value="<?php echo $Gender ?>">
          <option selected><?php echo $Gender ?></option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputState">Type</label>
        <select id="inputState" name="st_type" class="form-control" value="<?php echo $Type ?>">
          <option selected><?php echo $Type ?></option>
          <option>Doctor</option>
          <option>Nurse</option>
          <option>Attendant</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Date of Birth</label>
        <input type="date" class="form-control" name="st_dob" value="<?php echo $Dob ?>">
      </div>
    </div>
    <div class="col text-center">
      <input type="submit" name="update" class="btn btn-info btn-large" value="Submit">
    </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>