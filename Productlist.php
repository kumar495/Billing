<?php
$con= new mysqli('localhost','root','','ebilling');
if(isset($_POST['submit'])){
    $product_Category=$_POST['category'];
    $product_Name=$_POST['name'];
    $product_Description=$_POST['description'];
    $product_Price=$_POST['price'];
$sql="INSERT INTO 'product' (category, name, description,price) VALUES ( ' $product_Category',' $product_Name',' $product_Description',' $product_Price')";
$Dup_name=mysqli_query($con, "SELECT * FROM 'product' WHERE name=' $product_Name'");
if(mysqli_num_rows($Dup_name)===0){
    echo"
    <script>
    alert('This name is already taken');
    
    </script>
    ";
}


else{
    $sql="INSERT INTO 'product' (category, name, description,price) VALUES ( ' $product_Category',' $product_Name',' $product_Description',' $product_Price')";

echo"
<script>
alert('Sucessfully Insert Product');
</script>
";



}
}
?>

<body>
    	<!--Include latest bootstrap, CSS, jQuery CDN-->
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src=
	"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>
    </style>
   
<div class="container ">
    <div class="row">
<div class="col-lg-12 text-center bg-white mb-5 rounded">


</div>
</div>
</div>
    
       
<div class="row justify-content-around">
    <div class="col-sm-12 col-md-6 col-lg-9">
    <a href="product.php" class ="btn btn-primary " >Add new</a><div class="container-fluid">

        <table class="table table-bordered  text-center">

            <thead class="bg-danger text-white fs-5">
            <th>ID</th>
            <th>Product Category</th>
            <th>Product's Name</th>
            <th>Product's Description</th>
            <th>Product's Price</th>
            <th>Update</th>
            <th>Delete</th>
</thead>
  

<?php
$con= new mysqli('localhost','root','','ebilling');
$sql="Select*from  product ";
$result=mysqli_query($con, $sql);


if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id']; 
        $product_Category=$row['category'];
        $product_Name=$row['name'];
        $product_Description=$row['description'];
        $product_Price=$row['price'];
        echo '<tr>
        <td>' . $row['id'] . '</td>
        <td >'.    $product_Category.'</td>
        <td>'. $product_Name.'</td>
        <td>'.$product_Description.'</td>
        <td>'.$product_Price.'</td>
        
        <td><a href="Update.php? id= ' . $row['id'] . '" class ="btn btn-primary" <i class="fa-solid fa-file-pen"></i>Update</a></td>
        <td><a href="productdel.php? id= ' . $row['id'] . '" class ="btn btn-danger">Delete</a></td>

      </tr>';
     
    }
  }

?>

</table>
</html>