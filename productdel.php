<?php
 $id=$_GET['id'];
 $con= new mysqli('localhost','root','','ebilling');
 if(mysqli_query($con, "DELETE FROM `product` WHERE id=$id")){
    echo "<script>alert('The item is deleted')</script>";
}
else{
    echo"thank u";
}

header('location:productlist.php');


?>