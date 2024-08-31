<?php
$servername='localhost';
$username='root';
$password='';
$dbname='crud_db';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die('Could not connect to database:' .mysqli_connect_error());
}
else{
  //echo 'connected ';
}













?>