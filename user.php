<?php
include 'connect.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile =$_POST['mobile'];
$password=$_POST['password'];

$sql="INSERT INTO `crud_opration` (name,email,mobile,password)   VALUES ('$name',
            '$email','$mobile','$password')";
$result = mysqli_query($con,$sql);
if($result){
    echo "data inserted successfully";
}else{
    die(mysqli_error($con));  

}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
.m{
margin:20px;
}
.m2{
    margin-top:40px;
}
</style>
</head>
  <body>
  <div class="container">
    <form method="post">
  <div class="mb-3 m">
    <label >Name</label>
    <input type="text" class="form-control"placeholder="enter your Name " name="name" autocomplete="off" >
    <label >Email</label>
    <input type="email" class="form-control"placeholder="enter your Email "  name="email" autocomplete="off">
    <label >Mobile Number</label>
    <input type="text" class="form-control"placeholder="enter your Mobile Number " name="mobile" autocomplete="off" >
    <label >Password</label>
    <input type="password" class="form-control"placeholder="enter your Password " name="password" autocomplete="off" >
    <button type="submit" class="btn btn-primary m2" name="submit">Submit</button>
  </div>  
</form>
  </div>
</body>
</html>