<?php
include 'connect.php';
if(isset($_GET['delete_id'])){
 $id=$_GET['delete_id'];
 $sql="Delete from `crud` where id=$id";
 $result=mysqli_query($conn,$sql);
 if($result){
    echo "user deleted successfully!!";
    header("location:display.php");
 }else{
    die('error generated'.mysqli_connect_error());
 }

}
?>