<!-- Footer -->
<?php include "../../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM wards WHERE id = $userid ";
      $ward_manage= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($ward_manage))
      {
        //(Textbox echo id name || Database column id name)
        $id = $row['id'];
        $wnum = $row['w_number'];
        $doct1 = $row['Doctor1'];
        $doct2  = $row['Doctor2'];
        $nurs1  = $row['Nurse1'];
        $nurs2 = $row['Nurse2'];         
        $atten1 = $row['Attendant1'];
        $atten2 = $row['Attendant2'];
        
      }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      //(Now given Variable name || Textbox id name)
      $doc1 = $_POST['doc_1'];
      $doc2  = $_POST['doc_2'];
      $nur1  = $_POST['nur_1'];
      $nur2 = $_POST['nur_2'];
      $atte1 = $_POST['atte_1'];
      $atte2 = $_POST['atte_2'];
      
      
      // SQL query to update the data in user table where the id = $userid 
      //(Database column id name || Previously given Variable name) 
      $query = "UPDATE wards SET Doctor1 = '{$doc1}' , Doctor2 = '{$doc2}' , Nurse1 = '{$nur1}' , Nurse2 = '{$nur2}' , Attendant1 = '{$atte1}' , Attendant2 = '{$atte2}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Ward data updated successfully!')</script>";
      header("location:../Wards.php");
    }             
?>

<?php
    $query = "SELECT * FROM staff WHERE s_type LIKE 'Doctor%';";
    $result_set = mysqli_query($conn, $query);
    $doctor_list = '';
    while ($result = mysqli_fetch_assoc($result_set)) 
    {
      $doctor_list .="<option value=\"{$result['s_f_name']} {$result['s_l_name']}\">{$result['s_f_name']} {$result['s_l_name']}</option>";
    }
?>

<?php
    $query = "SELECT * FROM staff WHERE s_type LIKE 'Nurse%';";
    $result_set = mysqli_query($conn, $query);
    $nurse_list = '';
    while ($result = mysqli_fetch_assoc($result_set)) 
    {
      $nurse_list .="<option value=\"{$result['s_f_name']} {$result['s_l_name']}\">{$result['s_f_name']} {$result['s_l_name']}</option>";
    }
?>  


<?php
    $query = "SELECT * FROM staff WHERE s_type LIKE 'Attendant%';";
    $result_set = mysqli_query($conn, $query);
    $attendant_list = '';
    while ($result = mysqli_fetch_assoc($result_set)) 
    {
      $attendant_list .="<option value=\"{$result['s_f_name']} {$result['s_l_name']}\">{$result['s_f_name']} {$result['s_l_name']}</option>";
    }
?>   



<h1 class="text-center"><?php echo $wnum ?></h1>

  <div class="container ">

    <hr>

    <h3>Doctor</h3><br>
    <form action="" method="post">      
     <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputState">Doctor (1)</label>
          <select id="inputState" name="doc_1" class="form-control">
            <option selected><?php echo $doct1 ?></option>
                    <?php echo $doctor_list; ?>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Doctor (2)</label>
          <select id="inputState" name="doc_2" class="form-control">
            <option selected><?php echo $doct2 ?></option>
                    <?php echo $doctor_list; ?>
          </select>
        </div>
      </div>

      <hr>

      <h3>Nurse</h3><br>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputState">Nurse (1)</label>
            <select id="inputState" name="nur_1" class="form-control">
              <option selected><?php echo $nurs1 ?></option>
                    <?php echo $nurse_list; ?>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Nurse (2)</label>
            <select id="inputState" name="nur_2" class="form-control">
              <option selected><?php echo $nurs2 ?></option>
                   <?php echo $nurse_list; ?>
            </select>
          </div>
        </div> 

        <hr>

        <h3>Attendant</h3><br>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputState">Attendant (1)</label>
            <select id="inputState" name="atte_1" class="form-control">
              <option selected><?php echo $atten1 ?></option>
                    <?php echo $attendant_list; ?>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Attendant (2)</label>
            <select id="inputState" name="atte_2" class="form-control">
              <option selected><?php echo $atten2 ?></option>
                   <?php echo $attendant_list; ?>
            </select>
          </div>
        </div>
              
 

        <div class="col text-center">
              <input type="submit" name="update" class="btn btn-info btn-large" value="Submit">
        </div>

    </form>    
  </div>

    <!-- aBACK button to go to the Wards page -->
    <div class="container text-center mt-5">
      <a href="../Wards.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
