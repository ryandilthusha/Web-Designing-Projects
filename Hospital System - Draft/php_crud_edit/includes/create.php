<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['submit'])) 
    {
        $id = $_POST['card_no'];
        $sfname = $_POST['st_fname'];
        $slname = $_POST['st_lname'];
        $sphone = $_POST['st_mobile'];
        $saddress = $_POST['st_address'];
        $sgender = $_POST['st_gender'];
        $stype = $_POST['st_type'];
        $sdob = $_POST['st_dob'];


       

        
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO staff(s_card, s_f_name, s_l_name, s_phone, s_address, s_gender, s_type, s_dob) VALUES('{$id}','{$sfname}','{$slname}','{$sphone}','{$saddress}','{$sgender}','{$stype}','{$sdob}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
               header('Location: home.php');
              }     
             
    }
?>

<h1 class="text-center">Add User details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">ID Number</label>
                  <input type="text" class="form-control" name="card_no" placeholder="Enter ID Number" maxlength="12" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">First Name</label>
                  <input type="phone" class="form-control" name="st_fname" placeholder="Enter First Name" maxlength="10" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstname">Last Name</label>
                  <input type="text" class="form-control" name="st_lname" placeholder="Enter Last Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="lastname">Mobile</label>
                  <input type="text" class="form-control" name="st_mobile" placeholder="Enter Mobile Number">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name="st_address" placeholder="Enter Address">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputState">Gender</label>
                  <select id="inputState" name="st_gender" class="form-control">
                    <option selected>Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputState">Type</label>
                  <select id="inputState" name="st_type" class="form-control">
                    <option selected>Choose...</option>
                    <option>Doctor</option>
                    <option>Nurse</option>
                    <option>Attendant</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Date of Birth</label>
                  <input type="date" class="form-control" name="st_dob" placeholder="Date of Birth">
                </div>
              </div>
              <div class="col text-center">
              <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
            </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-3">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
