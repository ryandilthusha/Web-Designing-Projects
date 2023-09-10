<!-- Header -->
<?php include "../../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid ()
      $query="SELECT * FROM other WHERE id = $userid ";
      $edit_other= mysqli_query($conn,$query);

      //To see DATABASE values
      while($row = mysqli_fetch_assoc($edit_other))
      {
        //(Textbox echo id name || Database column id name)
        $id = $row['id'];
        $odc = $row['o_card'];
        $oName  = $row['o_name'];
        $oType  = $row['o_type'];
        $oPrice = $row['o_price'];
        $oQuantity = $row['o_quantity'];
      }
 
    //To give new values to DATABASE
    if(isset($_POST['update'])) 
    {
      //(Now given Variable name || Textbox id name)
      $ID = $_POST['oth_no'];
      $Name  = $_POST['oth_name'];
      $Type  = $_POST['oth_type'];
      $Price = $_POST['oth_price'];
      $Quantity = $_POST['oth_quantity'];
      
      // SQL query to update the data in user table where the id = $userid
      //(Database column id name || Previously given Variable name) 
      $query = "UPDATE other SET o_card = '{$ID}' , o_name = '{$Name}' , o_type = '{$Type}' , o_price = '{$Price}' , o_quantity = '{$Quantity}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Item edited successfully!')</script>";
      header("location:../Other.php");
    }             
?>

<h1 class="text-center">Edit Item Details</h1>
  <div class="container ">
    <form action="" method="post">
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id">ID Number</label>
          <input type="text" class="form-control" name="oth_no" value="<?php echo $odc ?>" maxlength="12" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Item Name</label>
          <input type="phone" class="form-control" name="oth_name" value="<?php echo $oName ?>" maxlength="10" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="type">Type</label>
          <select id="inputState" name="oth_type" class="form-control" value="<?php echo $oType ?>">
            <option selected><?php echo $oType ?></option>
            <option>Office Stationary</option>
            <option>Machines</option>
            <option>Beds and Metrresses</option>
            <option>Vehicles</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="price">Price</label>
          <input type="text" class="form-control" name="oth_price" value="<?php echo $oPrice ?>">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="quantity">Quantity</label>
          <input type="text" class="form-control" name="oth_quantity" value="<?php echo $oQuantity ?>">
        </div>        
      </div>

      

        <div class="col text-center">
          <input type="submit" name="update" class="btn btn-info btn-large" value="Edit">
        </div>

    </form>    
  </div>

    <!-- BACK button to go to the Other page -->
    <div class="container text-center mt-5">
      <a href="../Other.php" class="btn btn-warning mt-5"> Back </a>
    <div>



<!-- Footer -->
<?php include "../../footer.php" ?>