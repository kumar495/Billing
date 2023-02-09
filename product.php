<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.container{box-sizing: border-box;
width:80%;
margin-left:80px;
margin-top:30px;
}

input[type=text], select, textarea {
  width: 90%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.subcontainer{
    margin-left:10px;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: blue;
}

.container {
  
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  
  margin-top:20px;
  
  
}
.table{
  margin:20px;
  margin-left:5px;
}
</style>
</head>
<body>

<h3>Product Upload Form</h3>

<div class="container">
    <div class="subcontainer">
  <form action="Productlist.php"   method="POST" enctype="multipart/form-data" required>
  <label for="lname">Product Category</label>
    <input type="text" id="lname" name="category" placeholder="Enter a Category" required>
    <br>
    <label for="name">Product's Name</label>
    <input type="text" id="lname" name="name" placeholder="Enter a Name" required>
    <br>
    <label for="name">Product's Description</label>
    <textarea cols="80" name="description" rows="12" wrap="virtual" ></textarea>
    <br>
    <label for="lname">Product's Price</label><br>
    <input type="Number" id="lname" name="price" placeholder="Enter a Price" required>
    <br>
   <br>
    <input type="submit" value="Submit" name="submit"><br>
    <br>
  </form>
</div>
</div>


</body>
<table class="table">
<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
  text:center;
}
.table th{
  background:black;
}
.btn {
  color:red;
}
.btn1 {
  color:blue;
}
.img{
  margin-button:10px;
}
</style>
<body>




</html>