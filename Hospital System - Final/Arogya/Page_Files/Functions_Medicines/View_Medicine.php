<!-- Header -->
<?php  include '../../header.php'?>

<h1 class="text-center">Staff Details</h1>

  <div class="container">

    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col">ID</th>
          <th  scope="col">Medicine Name</th>
          <th  scope="col">Type</th>
          <th  scope="col">Price</th>
          <th  scope="col">Quantity</th>
        </tr>  
      </thead>
        <tbody>
          <tr>               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['user_id'])) 
              {
                  $userid = $_GET['user_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM medicine WHERE id = {$userid} ";  
                  $view_medicine= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_medicine))
                  {
                    //(Now given Variable name || Database column id name)
                    $id = $row['id'];
                    $idc = $row['m_card'];
                    $Name  = $row['m_name'];
                    $Type  = $row['m_type'];
                    $Price = $row['m_price'];
                    $Quantity = $row['m_quantity'];                    

                    echo "<tr >";
                    echo " <td >{$idc}</td>";
                    echo " <td > {$Name}</td>";
                    echo " <td > {$Type}</td>";
                    echo " <td > {$Price} </td>"; 
                    echo " <td > {$Quantity}</td>"; 
                    echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>

  </div>


  <!-- BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="../Medicines.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../../footer.php" ?>