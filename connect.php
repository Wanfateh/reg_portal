<?php

$conn=new mysqli('localhost','root','','crudoperation');

if(!$conn){
    die("connection failed".mysqli_connect_error());
}
?>