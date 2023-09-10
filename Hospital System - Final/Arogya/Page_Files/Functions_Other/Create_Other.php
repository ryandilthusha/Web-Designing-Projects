<!-- Header -->
<?php  include "../../header.php" ?>

<?php 
  
  //To give new values to DATABASE
  if(isset($_POST['submit'])) 
  {      
    //(Now given Variable name || Textbox id name)
    $id = $_POST['oth_card'];
    $Name = $_POST['oth_name'];
    $Type = $_POST['oth_type'];
    $Price = $_POST['oth_price'];
    $Quantity = $_POST['oth_quantity'];     

        
      
    // SQL query to insert user data into the users table
    //(Database column id name || Previously given Variable name)
    $query= "INSERT INTO other(o_card, o_name, o_type, o_price, o_quantity) VALUES('{$id}','{$Name}','{$Type}','{$Price}','{$Quantity}')";
    $add_other = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
        if (!$add_other) 
        {
          echo "something went wrong ". mysqli_error($conn);
        }

        else 
        { echo "<script type='text/javascript'>alert('Item added successfully!')</script>";
          header('Location:../Other.php');
        }  
             
    }
?>


<h1 class="text-center">Add Item Details</h1>
  <div class="container">
    <form action="" method="post">

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="idnumber">ID Number</label>
          <input type="text" class="form-control" name="oth_card" placeholder="Enter ID Number" maxlength="12" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Item Name</label>
          <input type="phone" class="form-control" name="oth_name" placeholder="Enter Item Name" maxlength="10" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="type">Item Type</label>
          <select id="inputState" name="oth_type" class="form-control">
            <option selected>Choose...</option>
            <option>Office Stationary</option>
            <option>Machines</option>
            <option>Beds and Metrresses</option>
            <option>Vehicles</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="price">Price</label>
          <input type="text" class="form-control" name="oth_price" placeholder="Enter Item Price">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="quantity">Quantity</label>
          <input type="text" class="form-control" name="oth_quantity" placeholder="Enter Quantity">
        </div>        
      </div>

      

      <div class="col text-center">
        <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
      </div>

    </form> 
  </div>

   <!-- BACK button to go to the Staff page -->
  <div class="container text-center mt-3">
    <a href="../Other.php" class="btn btn-warning mt-5"> Back </a>
  <div>




