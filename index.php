<?php
include("./db_conn.php");

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
    <?php
    if(isset($_GET['msg'])){ 
      $msg=$_GET['msg'];
      echo '
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
  '.$msg.'.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>
<a href="./add_new.php" class="btn btn-outline-primary text-white mb-3">Add New User</a>

<table class="table table-hover">
  <thead class="table-primary">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
 $sql="select * from crud";
 $result = mysqli_query($conn, $sql);
   while($row=mysqli_fetch_assoc($result)) { ?>
    <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['first_name'] ?></td>
      <td><?php echo $row['last_name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['gender'] ?></td>
      <td>
        <a href="./edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa solid fa-pen-to-square fs-5 me-3"></i></a>
        <a href="./delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa solid fa-trash fs-5 me-3"></i></a>
      </td>
    </tr>
  </tbody>

<?php } ?>

</table>
</div>

                                           <!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>