<?php
include 'connect.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud Operation display</title>
  </head>
  <body>
    <div class="container">
    <h3 class="my-5">USER TABLE</h3>

    <button class="btn btn-primary mb-5"><a href="userform.php" class="text-light">ADD USER</a></button>
  <table class="table">
    <thead>
        <tr>
            <th scope="col">Sr no.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
            <th scope="col">Operations</th>

        </tr>
    </thead>
    <tbody>
    <?php
        $sql="Select * from `crud`";
        $result=mysqli_query($conn,$sql);
        if($result){
            // $row=mysqli_fetch_assoc($result);
            // echo $row['name'];
            while($row=mysqli_fetch_assoc($result)){
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
                <td>
                    <button  class="btn btn-primary" ><a href="update.php?update_id='.$id.'" class="text-light ">Update</a></button>
                    <button class="btn btn-danger" ><a href="delete.php?delete_id='.$id.'"  class="text-light ">Delete</a></button>
                </td>
    
    
            </tr>';
            }

            
        }

?>
    </tbody>
</table>
</div>
</body>
</html>



