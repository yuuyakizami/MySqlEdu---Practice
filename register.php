<!-- DATABASE CONNECTION -->
<?php include'mysqli_connect.php';
session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E - Learning System</title>
    <!-- CSS Main -->
    <link rel="stylesheet" href="main.css"/>
    <!-- Bootstrap Link -->
    <link
      rel="stylesheet"
      href="node_modules\bootstrap\dist\css\bootstrap.min.css"/>
  </head>
  <body>
    <!-- Navigation Section-->
    <nav id="myNav" class="navbar mb-3 px-3 sticky-top" style="background-color: rgb(245, 200, 132);" >
      <a class="navbar-brand px-5" href="index.php">MySqlEdu</a>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="navbar-link px-3" href="register.php">Clear Entries</a>
        </li>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
          Login
        </button>
        <li class="nav-item">
          <a class="navbar-link px-s2" href="register.php">Register</a>
        </li>
      </ul>
    </nav>
    <div
            data-bs-spy="scroll"
            data-bs-target="#myNav"
            data-bs-smooth-scroll="true"
            tabindex="0"
            data-bs-root-margin="0px 0px -40"
            class="scrollspy-example bg-light p-3 rounded-2">
      <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form-group" action="" method="POST">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" id="username" type="text">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" id="password" type="password">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Home -->

      <div id="home" class="container-fluid text-center mx-auto">
        <h1>Register</h1>
        <form>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="JohnDoe" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Enter Username</small>
        </div>
      <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="abc@mail.com">
        <small id="emailHelpId" class="form-text text-muted">Enter Email</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Enter Your Password Again">
      </div>
      <button type="submit" name=submit class="btn btn-primary">Submit</button>
      <form>
      </div>
</div>
<div id="about" class="container-fluid text-center mx-auto">
  <?php
  // SELECT ALL FROM users table
$sql = "SELECT * FROM usermessage";
if($result = mysqli_query($con, $sql)){
  print_r($result);
  if(mysqli_num_rows($result)>0){
    echo "<table class="">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Date Added</th>
    </tr>
    ";
    // $count = 0;
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      // $count++;
      // echo "<p>Row number: $count</p>";
      // print_r($row);
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["message"] . "</td>";
      echo "<td>" . $row["reg_date"] . "</td>";
      
    }
    echo "</table>";
  }
}
?>
</div>















  <!-- Footer Section -->

 <?php include'footer.php';?>

    
    <script src="myModal.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

  </body>
</html>
