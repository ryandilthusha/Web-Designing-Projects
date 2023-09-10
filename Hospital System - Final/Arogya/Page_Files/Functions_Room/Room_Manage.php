<!-- Footer -->
<?php include "../../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM rooms WHERE id = $userid ";
      $room_manage= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($room_manage))
      {
        //(Textbox echo id name || Database column id name)
        $id = $row['id'];
        $Wardnum = $row['ward_id'];
        $Room1 = $row['room1'];
        $Room2  = $row['room2'];
        $Room3  = $row['room3'];
        $Room4 = $row['room4'];
        
      }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      //(Now given Variable name || Textbox id name)
      $RM1 = $_POST['r_1'];
      $RM2  = $_POST['r_2'];
      $RM3  = $_POST['r_3'];
      $RM4 = $_POST['r_4'];
      
      
      // SQL query to update the data in user table where the id = $userid 
      //(Database column id name || Previously given Variable name) 
      $query = "UPDATE rooms SET room1 = '{$RM1}' , room2 = '{$RM2}' , room3 = '{$RM3}' , room4 = '{$RM4}'  WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Ward room data updated successfully!')</script>";
      header("location:../Rooms.php");
    }             
?>



<h1 class="text-center"><?php echo $Wardnum ?></h1>

  <div class="container ">
    <form action="" method="post">    

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputState">Room 1</label>
          <select id="inputState" name="r_1" class="form-control" value="<?php echo $Room1 ?>">
            <option selected><?php echo $Room1 ?></option>
            <option>Available</option>
            <option>No</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Room 2</label>
          <select id="inputState" name="r_2" class="form-control" value="<?php echo $Room2 ?>">
            <option selected><?php echo $Room2 ?></option>
            <option>Available</option>
            <option>No</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputState">Room 3</label>
          <select id="inputState" name="r_3" class="form-control" value="<?php echo $Room3 ?>">
            <option selected><?php echo $Room3 ?></option>
            <option>Available</option>
            <option>No</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Room 4</label>
          <select id="inputState" name="r_4" class="form-control" value="<?php echo $Room4 ?>">
            <option selected><?php echo $Room4 ?></option>
            <option>Available</option>
            <option>No</option>
          </select>
        </div>
      </div>

        <div class="col text-center">
          <input type="submit" name="update" class="btn btn-info btn-large" value="Edit">
        </div>

    </form>    
  </div>

    <!-- aBACK button to go to the Wards page -->
    <div class="container text-center mt-5">
      <a href="../Rooms.php" class="btn btn-warning mt-5"> Back </a>
    <div>

