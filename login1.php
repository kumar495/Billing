<?php



$con= new mysqli('localhost','root','','ebilling');
if(isset($_POST['submit'])){
$A_name=$_POST['name'];
$A_password=$_POST['password'];
}
$result=mysqli_query($con,"Select*from login where name='$A_name' AND password='$A_password'");
session_start();
if(mysqli_num_rows($result)){
	$_SESSION['admin']=$A_name;
	echo"
<script>
alert('login successfully');
window.location.href='index.php';
</script>
";
}
else{
echo"
<script>
alert('invalid username or pass');
window.location.href='login.php';
 </script>
 ";
}
