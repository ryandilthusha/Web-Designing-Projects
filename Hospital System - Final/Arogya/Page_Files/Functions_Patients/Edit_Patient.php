<!-- Header -->
<?php include "../../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM patient WHERE id = $userid ";
      $edit_staff= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($edit_staff))
      {  
        //(Textbox echo id name || Database column id name)
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
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      //(Now given Variable name || Textbox id name)
      $ptidc = $_POST['pcard_no'];
      $ptfName  = $_POST['pt_fname'];
      $ptlName  = $_POST['pt_lname'];
      $ptMobile = $_POST['pt_mobile'];
      $ptAddress = $_POST['pt_address'];
      $ptGender = $_POST['pt_gender'];
      $ptage = $_POST['pt_age'];
      $ptward = $_POST['pt_admit'];
      $pthistory = $_POST['pt_history'];
      
      // SQL query to update the data in user table where the id = $userid 
      //(Database column id name || Previously given Variable name) 
      $query = "UPDATE patient SET p_card = '{$ptidc}' , p_f_name = '{$ptfName}' , p_l_name = '{$ptlName}' , p_mobile = '{$ptMobile}' , p_address = '{$ptAddress}' , p_gender = '{$ptGender}' , p_age = '{$ptage}' , p_admit = '{$ptward}' , p_history = '{$pthistory}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Patient edited successfully!')</script>";
      header("location: ../patients.php");
    }             
?>


<?php
  //Select ward from ward list and give exact value to the database
  $query = "SELECT w_number FROM wards";
  $result_set = mysqli_query($conn, $query);
  $ward_list = '';
  while ($result = mysqli_fetch_assoc($result_set)) 
  {
    $ward_list .="<option value=\"{$result['w_number']}\">{$result['w_number']}</option>";
  }

?>


<h1 class="text-center">Update Patient Details</h1>
  <div class="container ">
    <form action="" method="post">
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">ID Number</label>
          <input type="text" class="form-control" name="pcard_no" value="<?php echo $pidc ?>" maxlength="12" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">First Name</label>
          <input type="phone" class="form-control" name="pt_fname" value="<?php echo $pfName ?>" maxlength="10" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="firstname">Last Name</label>
          <input type="text" class="form-control" name="pt_lname" value="<?php echo $plName ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="lastname">Mobile</label>
          <input type="text" class="form-control" name="pt_mobile" value="<?php echo $pMobile ?>">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="pt_address" value="<?php echo $pAddress ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Gender</label>
          <select id="inputState" name="pt_gender" class="form-control" value="<?php echo $pGender ?>">
            <option selected><?php echo $pGender ?></option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="address">Age</label>
          <input type="text" class="form-control" name="pt_age" value="<?php echo $page ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Admit To</label>
          <select id="inputState" name="pt_admit" class="form-control" value="<?php echo $pward ?>">
            <option selected><?php echo $pward ?></option>
                    <?php echo $ward_list; ?>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="family">Patient's Medical History</label>
          <textarea class="form-control" name="pt_history"><?php echo htmlspecialchars($phistory); ?></textarea>
        </div>
      </div>
 
      <div class="col text-center">
        <input type="submit" name="update" class="btn btn-info btn-large" value="Submit">
      </div>

    </form>    
  </div>

    <!-- BACK button to go to the Patients page -->
    <div class="container text-center mt-5">
      <a href="../Patients.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
