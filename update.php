<?php
include('./connect.php');
$id = $_GET['updateid'];
//herre showing previous filled result
$sql = "select * from`crud` where id = $id";
$result= mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$name = $row['Name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if (isset($_POST['submit'])) {    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id = $id , name = '$name' , email = '$email' , 
    mobile = '$mobile' , password = '$password'
    where id=$id";

    $result = mysqli_query($conn , $sql);
    if ($result) {
           
      header('location:display.php');

    }
    else{
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>



      <div class="container my-5">
          <form method="post" >
            <div class="mb-3">
              <label for="name" class="form-label">Username</label>
              <input type="text" class="form-control" name="name" id="" placeholder="Enter Username" autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email"  class="form-control" name="email" placeholder="Enter Email" autocomplete="off" value=<?php echo $email;?>>
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">Mobile</label>
              <input type="text"  class="form-control" name="mobile" placeholder="Enter Number" autocomplete="off" value=<?php echo $mobile;?>>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="text"  class="form-control" name="password" placeholder="Enter password" autocomplete="off" value=<?php echo $password;?>>
            </div>
            <button type="submit" class="btn btn-primary bg" name="submit">Update</button>
          </form>
      </div>        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>