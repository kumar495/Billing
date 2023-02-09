<?php  
 $connect = mysqli_connect("localhost", "root", "", "ebilling");
 if(isset($_POST['submit'])) { 
 $name = $_POST["name"]; 
 $invoice = $_POST["invoice"]; 
 $quantaty =$_POST["quantaty"]; 
 $price = $_POST["price"]; 
}
foreach($name as $key=>$value){
    $save="INSERT INTO bill (name, invoice,quantaty, price) VALUES('".$value."','".$invoice[$key]."','".$quantaty[$key]."','".$price[$key]."')";
$query=mysqli_query($connect,$save);


}
 ?> 
   