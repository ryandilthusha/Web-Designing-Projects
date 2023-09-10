<!-- Header -->
<?php  include '../../header.php'?>

<h1 class="text-center">Staff Details</h1>

  <div class="container">

    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col">ID</th>
          <th  scope="col">Item Name</th>
          <th  scope="col">Item Type</th>
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
                  $query="SELECT * FROM other WHERE id = {$userid} ";  
                  $view_other= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_other))
                  {
                    //(Now given Variable name || Database column id name)
                    $id = $row['id'];
                    $idc = $row['o_card'];
                    $Name  = $row['o_name'];
                    $Type  = $row['o_type'];
                    $Price = $row['o_price'];
                    $Quantity = $row['o_quantity'];                    

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
    <a href="../Other.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../../footer.php" ?>