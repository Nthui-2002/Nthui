<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-page</title>
  <?php
  include 'header.php';
  ?>
</head>
<body>
  <div class="container-fluid">
  <div class="col-md-12">
  <div class="row"> 
 
 
<h1 class="text-warning font-monospace text-center my-3">Home</h1>
<?php
include 'config.php';
$Record = mysqli_query($con,"select * from tblproduct ");
    while($row=mysqli_fetch_array($Record)) {
       $check_page = $row['PCategory'];
       if( $check_page === 'Home'){

echo "
<div class='col-md-6 col-lg-4 m-auto mb-3'>
  <form action='InsertCart.php' method='POST'>
    <div class='card m-auto' style='width: 18rem;'>
      <img src='../admin/product/{$row['PImage']}' class='card-img-top'>
      <div class='card-body text-center'>
        <h5 class='card-title text-danger fs-4 fw-bold'>{$row['PName']}</h5>
        <p class='card-text text-danger fs-4 fw-bold'>";?>Rs: <?php echo number_format($row['PPrice'],2) ?> <?php echo "</p>
        <input type='hidden' name='PName' value='{$row['PName']}'>
        <input type='hidden' name='PPrice' value='{$row['PPrice']}'>
        <input type='number' name='PQuantity' min='1' max='10' placeholder='Quantity' class='form-control mb-2' required><br>
        <input type='submit' name='addCart' class='btn btn-warning text-white w-100' value='Add To Cart'>
      </div>
    </div>
  </form>
</div>
";
  } 
  }
?>

 </div>
 </div>
 </div>

 <?php
 include 'footer.php';

 ?>
</body>
</html>