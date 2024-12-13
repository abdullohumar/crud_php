<?php 
    include 'php/conn.php';

    if(isset($_POST['submit']))
    {
        $crud_id = rand(time(), 100000);
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $address = trim($_POST['address']);
        $birth = trim($_POST['birth']);
        $gender = trim($_POST['gender']);


        $sql = mysqli_query($conn, "INSERT INTO `data`(`crud_id`, `name`, `email`, `phone`, `address`, `birth`, `gender`) VALUES ('$crud_id','$name','$email','$phone','$address','$birth','$gender')");
        
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
      <h2>New Clients</h2>
      <br />
      <br />

      <form action="" method="post">
        <?php 
            if(isset($_GET['success']))
            {
                echo "<div class='w-25 alert alert-success' role='alert'>".$_GET['success']."</div>";
            }
        ?>
        <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" name="name" class="form-control" placeholder="Client Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="email" name="email" class="form-control" placeholder="Client Email" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Phone" class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-6">
                <input type="number" name="phone" class="form-control" placeholder="Phone No." required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Address" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" name="address" class="form-control" placeholder="Client Address" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="birth" class="col-sm-3 col-form-label">Date of Birth</label>
            <div class="col-sm-6">
                <input type="date" name="birth" class="form-control" placeholder="Date of Birth" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Gender" class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-6">
                <select name="gender" id="" class="form-control" required>
                    <option class="text-muted" value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <button type="submit" name="submit" class="col-sm-3 btn btn-primary">Submit</button>
            <div class="col-sm-6">
                <a href="index.html" class="btn btn-outline-primary">Go Back</a>
            </div>
        </div>
      </form>
      
    </div>
  </body>
</html>
