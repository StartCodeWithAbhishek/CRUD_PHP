<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>crud PHP</title>
</head>
<body>
    <div class="container">
<a href="user.php">
<button class="btn btn-primary m-5">Add User</button>
</a>
<!-- On tables -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">s.no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile number</th>
      <th scope="col">password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql = "SELECT  * FROM crud_opration";
$result = mysqli_query($con, $sql);

if($result){
    if($result){
        while($row = mysqli_fetch_assoc($result)) {
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];
          $mobile=$row['mobile'];
          $password=$row['password'];


            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td> <a href="update.php?updateId='.$id.'" class="text-light"><button class="btn btn-primary">Update</button></a>
            <a href="delete.php?deleteId='.$id.'"class="text-light"> <button class="btn btn-danger">Delete</button></a></td>
           
          </tr>';
          }
}


}

?>
  </tbody>
</table>



    </div>


</body>
</html>