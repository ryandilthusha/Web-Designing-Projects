<!-- Header -->
<?php  include "../../header.php" ?>

<?php 
  
  //To give new values to DATABASE
  if(isset($_POST['submit'])) 
  {      
    //(Now given Variable name || Textbox id name)
    $id = $_POST['med_card'];
    $Name = $_POST['med_name'];
    $Type = $_POST['med_type'];
    $Price = $_POST['med_price'];
    $Quantity = $_POST['med_quantity'];     

        
      
    // SQL query to insert user data into the users table
    //(Database column id name || Previously given Variable name)
    $query= "INSERT INTO medicine(m_card, m_name, m_type, m_price, m_quantity) VALUES('{$id}','{$Name}','{$Type}','{$Price}','{$Quantity}')";
    $add_medicine = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
        if (!$add_medicine) 
        {
          echo "something went wrong ". mysqli_error($conn);
        }

        else 
        { echo "<script type='text/javascript'>alert('Medicine added successfully!')</script>";
          header('Location:../Medicines.php');
        }  
             
    }
?>


<h1 class="text-center">Add Medicine Details</h1>
  <div class="container">
    <form action="" method="post">

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="idnumber">ID Number</label>
          <input type="text" class="form-control" name="med_card" placeholder="Enter ID Number" maxlength="12" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Medicine Name</label>
          <input type="phone" class="form-control" name="med_name" placeholder="Enter Medicine Name" maxlength="20" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="type">Type</label>
          <select id="inputState" name="med_type" class="form-control">
            <option selected>Choose...</option>
            <option>Antibiotics</option>
            <option>Pain Killers</option>
            <option>Anti Malaria</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="price">Price</label>
          <input type="text" class="form-control" name="med_price" placeholder="Enter Medicine Price">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="quantity">Quantity</label>
          <input type="text" class="form-control" name="med_quantity" placeholder="Enter Quantity">
        </div>        
      </div>

      

      <div class="col text-center">
        <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
      </div>

    </form> 
  </div>

   <!-- BACK button to go to the Staff page -->
  <div class="container text-center mt-3">
    <a href="../Medicines.php" class="btn btn-warning mt-5"> Back </a>
  <div>




