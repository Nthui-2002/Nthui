<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" href="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin home-page</title>

       <!--Boostrap CDN -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

         <!-- Fontawesome CDN -->         
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
 <?php
 session_start();
 if(!$_SESSION['admin']){
  header("location:form/login.php");
 }

 ?>


<body>
 

  <nav class="navbar bg-dark">
  <div class="container-fluid text-white">
  <a class="navbar-brand text-white"><h1>MyStore</h1></a>
    <span>
    <i class="fa-regular fa-user"></i>
    Hello,<?php echo $_SESSION['admin'];?>
    <i class="fa-regular fa-sign-out"></i>
    <a href="form/logout.php
    "class="text-decoration-none text-white">Logout</a>
    <a href="../user/index.php"class="text-decoration-none text-white">Userpanel</a>

    </span>
  </div>
</nav>

      <div>
        <h2 class="text-center">Dashboard</h2>
      </div>

        <div class="col-md-6 bg-danger text-center m-auto">
        <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5 ">Add Post</a>
        <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5 ">Users</a>
      </div>


</body>
</html>