<?php
include("./db_conn.php");
if(isset($_POST['submit'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

    $sql ="INSERT INTO `crud`(`id`,`first_name`, `last_name`, `email`, `gender`)
     VALUES (NULL,'$first_name','$last_name','$email','$gender')";
    $result= mysqli_query($conn,$sql);
    if($result){
      header("Location:index.php?msg=new record created successfully");
        }
        else{
            echo "Data Not Inserted";
            }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                            <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                                            <!--fontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
     integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="./style.css">
    
    <title>crud PHP Application</title>
</head>
<body class="bg-info">
<nav class="navbar navbar-light justify-content-center fs-3 mb-5">
    PHP CRUD complete Application
</nav>
<div class="container">
    <div class="text-center mb-4">
        <h3>Add new user</h3>
        <p class="text-muted">complete the forn below to add new user</p>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col">
                    <label for="first_name">first name:</label>
                    <input type="text" id="name" name="first_name" class="form-control"
                    placeholder="abdel-bari" required>

                </div>
                <div class="col">
                    <label for="last_name">last name:</label>
                    <input type="text" id="name" name="last_name" class="form-control"
                    placeholder="altaha" required>

                </div>
            </div>
            <div class="mb-3">
                    <label for="name">Email:</label>
                    <input type="text" id="name" name="email" class="form-control"
                    placeholder="baritaha@gmail.com" required>

                </div>
                <div class="form-group mb-3">
                    <label for="gender">Gender:</label>&nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male" required>
                    <label for="male" class="form-input-lable">Male</label>&nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female" required>
                    <label for="female" class="form-input-lable">female</label>
                </div>
                <div>
                    <button class="btn btn-outline-success fw-bold" type="submit" name="submit">save</button>
                  <a href="./index.php" class="btn btn-outline-danger">cancle</a>
                </div>
        </form>
    </div>
</div>
                                           <!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>