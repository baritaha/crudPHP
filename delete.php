<?php

include("./db_conn.php");
$id=$_GET['id'];
$sql="delete from crud where id=$id";
$result=mysqli_query($conn,$sql);
if($result)
{
    header("location:./index.php?msg=deleted successfully");
    }else{
        header("location:./index.php?msg=error");
        }
?>