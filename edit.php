<?php 
    include 'php/conn.php';

    $client = $_GET['id'];  
    if(!isset($client))
    {
        header("Location: index.php");
    }
    $sql = mysqli_query($conn, "SELECT * FROM `data` WHERE `crud_id` = '$client'");
    $row = mysqli_fetch_assoc($sql);
    if(isset($_POST['submit']))
    {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $address = trim($_POST['address']);
        $birth = trim($_POST['birth']);
        $gender = trim($_POST['gender']);


        $sql = mysqli_query($conn, "UPDATE `data` SET `name`='$name',`email`='$email',`phone`='$phone',`address`='$address',`birth`='$birth',`gender`='$gender' WHERE `crud_id` = '$client'"); //`id`='$id' INTO `data`(`crud_id`, `name`, `email`, `phone`, `address`, `birth`, `gender`) VALUES ('$crud_id','$name','$email','$phone','$address','$birth','$gender')");
        
        if($sql){
            header("Location: create.php?success=New Client Added");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD - PHP</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container my-5">
      <h2>Edit Clients Data</h2>
      <br />
      <br />

      <form action="" method="post">
        <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Client Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Client Email" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Phone" class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-6">
                <input type="number" name="phone" value="<?php echo $row['phone']; ?>" class="form-control" placeholder="Phone No." required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Address" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" placeholder="Client Address" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="date" class="col-sm-3 col-form-label">Date</label>
            <div class="col-sm-6">
                <input type="date" name="date" value="<?php echo $row['birth']; ?>" class="form-control" placeholder="Date of Birth" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Gender" class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-6">
                <select name="gender" id="" class="form-control">
                    <option class="text-muted" value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <button type="submit" name="submit" class="col-sm-3 btn btn-primary">Edit Clients Data</button>
            <div class="col-sm-6">
                <a href="index.php" class="btn btn-outline-primary">Go Back</a>
            </div>
        </div>
      </form>
      
    </div>
  </body>
</html>
