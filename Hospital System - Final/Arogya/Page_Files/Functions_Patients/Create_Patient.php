<!-- Header -->
<?php  include "../../header.php" ?>

<?php 

  //To give new values to DATABASE
  if(isset($_POST['submit'])) 
    {
      //(Now given Variable name || Textbox id name)
      $id = $_POST['pcard_no'];
      $pfname = $_POST['pt_fname'];
      $plname = $_POST['pt_lname'];
      $pphone = $_POST['pt_mobile'];
      $paddress = $_POST['pt_address'];
      $pgender = $_POST['pt_gender'];
      $page = $_POST['pt_age'];
      $padmit = $_POST['pt_admit'];
      $phistory = $_POST['pt_history'];


      
      // SQL query to insert user data into the users table
      $query= "INSERT INTO patient(p_card, p_f_name, p_l_name, p_mobile, p_address, p_gender, p_age, p_admit, p_history) VALUES('{$id}','{$pfname}','{$plname}','{$pphone}','{$paddress}','{$pgender}','{$page}','{$padmit}','{$phistory}')";
      $add_patient = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_patient) 
          {
              echo "something went wrong ". mysqli_error($conn);
          }

          else 
          { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
            header('Location: ../Patients.php');
          }         
    }
?>

<?php
//Select ward from ward list and give exact value to the database
  $query = "SELECT w_number FROM wards";
  $result_set = mysqli_query($conn, $query);
  $ward_list = '';
  while ($result = mysqli_fetch_assoc($result_set)) {
    $ward_list .="<option value=\"{$result['w_number']}\">{$result['w_number']}</option>";
  }
?>


<h1 class="text-center">Add Patient Details </h1>
  <div class="container">
    <form action="" method="post">

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">ID Number</label>
          <input type="text" class="form-control" name="pcard_no" placeholder="Enter ID Number" maxlength="12" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">First Name</label>
          <input type="phone" class="form-control" name="pt_fname" placeholder="Enter First Name" maxlength="10" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="firstname">Last Name</label>
          <input type="text" class="form-control" name="pt_lname" placeholder="Enter Last Name">
        </div>
        <div class="form-group col-md-6">
          <label for="lastname">Mobile</label>
          <input type="text" class="form-control" name="pt_mobile" placeholder="Enter Mobile Number">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="pt_address" placeholder="Enter Address">
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Gender</label>
          <select id="inputState" name="pt_gender" class="form-control">
            <option selected>Choose...</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="address">Age</label>
          <input type="text" class="form-control" name="pt_age" placeholder="Enter Age">
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Admit To</label>
          <select id="inputState" name="pt_admit" class="form-control">
            <option selected>Choose...</option>
            <?php echo $ward_list; ?>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="family">Patient's Medical History</label>
          <textarea class="form-control" name="pt_history" rows="5"></textarea>
        </div>
      </div>
 

      <div class="col text-center">
        <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
      </div>

    </form> 
  </div>

   <!-- BACK button to go to the Patients page -->
  <div class="container text-center mt-3">
    <a href="../Patients.php" class="btn btn-warning mt-5"> Back </a>
  <div>

