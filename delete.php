<?php
if (isset($_GET['ID'])) {
    $Id = $_GET['ID'];
    $con = mysqli_connect('localhost','root','','ecommerce');
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_query($con, "DELETE FROM `tbluser` WHERE Id = $Id");
    header("Location: user.php");
    exit();
} else {
    echo "Error: ID parameter missing.";
}
?>
