<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>viewCart</title>
</head>
<body>
<?php

include 'header.php';

?>

   <div class="container">
   <div class="row">
   <div class="col-lg-12 text-center bg-light mb-5 rounded">
   <h1 class="text-warning">My Cart</h1>
   </div>
   </div>
   </div>
    
  <div class="container-fluid">
  <div class="row justify-content-around">
  <div class="col-sm-12 col-md-6 col-lg-9">
  <table class="table table-bordered text-center ">
  <thead class="bg-danger text-white fs-5">
  <th class="bg-danger text-white">Serial No.</th>
  <th class="bg-danger text-white">Product Name</th>
  <th class="bg-danger text-white">Product Price</th>
  <th class="bg-danger text-white">Product Quantity</th>
  <th class="bg-danger text-white">Total Price</th>
  <th class="bg-danger text-white">Update</th>
  <th class="bg-danger text-white">Delete</th>
  </thead>

  <tbody>
  <?php
 
  $ptotal = 0;
  $total = 0;
  $i = 0;
  if(isset($_SESSION['cart'])){
  foreach($_SESSION['cart']as $key => $value){
    $ptotal = (float)$value['productPrice'] * (int)$value['productQuantity'];
    $total += $ptotal;
    $i = $key +1;

  echo"
    <form action = 'InsertCart.php' method ='POST'>
    <tr>
    <td>$i</td>
    <td><input type = 'hidden' name = 'PName' value = '$value[productName]'> $value[productName]</td>
    <td><input type = 'hidden' name = 'PPrice' value = '$value[productPrice]'> $value[productPrice]</td>
    <td><input type = '' name = 'PQuantity' value = '$value[productQuantity]'></td>
    <td> $ptotal</td>
    <td><button name = 'update' class = 'btn btn-warning'>Update</button></td>
    <td><button name = 'remove' class = 'btn btn-danger'>Delete</button></td>
    <td><input type = 'hidden' name = 'item' value = '$value[productName]'></td>
    </tr>
    </form>
  ";
 


  }

}

  ?>
  </tbody>

  </table>

  </div>

  <div class="col-lg-3 text-center">
  <h3>TOTAL</h3>
  <h1 class="bg-danger text-white"> <?php echo number_format($total,1) ?></h1>
  </div>
  </div>
  </div>



</body>
</html>