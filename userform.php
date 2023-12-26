<?php
include 'connect.php';

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql="insert into `crud` (name,email,mobile,password)
values('$name','$email','$mobile','$password')";
$result=mysqli_query($conn,$sql);
if($result){
    // echo"Data inserted successfully!!";
    header('location:display.php');
}else{
    die("connection failed".mysqli_error($conn));
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
        <h3>ADD NEW USER</h3>
    <form method="post" class="my-4">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name!"  name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email!" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number"  name="mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password"  name="password" autocomplete="off">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
  </body>
</html>