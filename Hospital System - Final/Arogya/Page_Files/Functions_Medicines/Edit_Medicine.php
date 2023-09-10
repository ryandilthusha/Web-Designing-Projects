<!-- Header -->
<?php include "../../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid ()
      $query="SELECT * FROM medicine WHERE id = $userid ";
      $edit_medicine= mysqli_query($conn,$query);

      //To see DATABASE values
      while($row = mysqli_fetch_assoc($edit_medicine))
      {
        //(Textbox echo id name || Database column id name)
        $id = $row['id'];
        $mdc = $row['m_card'];
        $mName  = $row['m_name'];
        $mType  = $row['m_type'];
        $mPrice = $row['m_price'];
        $mQuantity = $row['m_quantity'];
      }
 
    //To give new values to DATABASE
    if(isset($_POST['update'])) 
    {
      //(Now given Variable name || Textbox id name)
      $ID = $_POST['med_no'];
      $Name  = $_POST['med_name'];
      $Type  = $_POST['med_type'];
      $Price = $_POST['med_price'];
      $Quantity = $_POST['med_quantity'];
      
      // SQL query to update the data in user table where the id = $userid
      //(Database column id name || Previously given Variable name) 
      $query = "UPDATE medicine SET m_card = '{$ID}' , m_name = '{$Name}' , m_type = '{$Type}' , m_price = '{$Price}' , m_quantity = '{$Quantity}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Medicine edited successfully!')</script>";
      header("location:../Medicines.php");
    }             
?>

<h1 class="text-center">Edit Medicine Details</h1>
  <div class="container ">
    <form action="" method="post">
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id">ID Number</label>
          <input type="text" class="form-control" name="med_no" value="<?php echo $mdc ?>" maxlength="12" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Medicine Name</label>
          <input type="phone" class="form-control" name="med_name" value="<?php echo $mName ?>" maxlength="10" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="type">Type</label>
          <select id="inputState" name="med_type" class="form-control" value="<?php echo $mType ?>">
            <option selected><?php echo $mType ?></option>
            <option>Antibiotics</option>
            <option>Pain Killers</option>
            <option>Anti Malaria</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="price">Price</label>
          <input type="text" class="form-control" name="med_price" value="<?php echo $mPrice ?>">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="quantity">Quantity</label>
          <input type="text" class="form-control" name="med_quantity" value="<?php echo $mQuantity ?>">
        </div>        
      </div>

      

        <div class="col text-center">
          <input type="submit" name="update" class="btn btn-info btn-large" value="Edit">
        </div>

    </form>    
  </div>

    <!-- BACK button to go to the Staff page -->
    <div class="container text-center mt-5">
      <a href="../Medicines.php" class="btn btn-warning mt-5"> Back </a>
    <div>



<!-- Footer -->
<?php include "../../footer.php" ?>