<!-- DATABASE CONNECTION -->
<?php include'mysqli_connect.php';?>
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
          <a class="navbar-link px-3" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="navbar-link px-3" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="navbar-link px-3" href="#contact">Contact</a>
        </li>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
          Login
        </button>
        <li class="nav-item">
          <a class="navbar-link px-2" href="register.php">Register</a>
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
              <form class="form-group">
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
        <h1>Home</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas
          tempora sunt, perspiciatis mollitia repellat facilis veniam.
          Doloribus, dicta, perferendis, earum ipsam similique iste ut commodi
          sit velit sunt debitis. Odit.s</p>
      </div>
      <div id="about" class="container-fluid text-center mx-auto">
        <h1>Have A Try</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
          ad vel illum veniam repellendus delectus, nesciunt quis. Vitae
          iure tempora, inventore, numquam atque iste eveniet sed,
          voluptatum minima voluptatem debitis!
        </p>
     <!-- <?php
$sql = "CREATE TABLE pet(name VARCHAR(25), owner VARCHAR(50), species VARCHAR(40), sex CHAR(1), birth DATE, death DATE)";

if(mysqli_query($con, $sql)){
    echo "<p>Table pet is created</p>";
}
;?> -->

      </div>
      <!-- contact-process -->
      <?php
// for contact
// Get User Input

$name = isset($_POST['name']);
$email = isset($_POST['email']);
$message = isset($_POST['message']);
// error messages
$missingName = '<br><p>Please Enter Your Name</p>';
$missingEmail = '<br><p>Please Enter Your Email</p>';
$invalidEmail = '<p>You entered an Invalid Email</p>';
$missingMessage = '<p>Please Enter Your Message</p>';
      $errors = "";
//if the user has submitted the form
if (isset($_POST['submit'])) {
    //check for errors
  
    if (!$name) {
        $errors .= $missingName;
    } else {
        $name = filter_var($name, htmlspecialchars($name));
    }
    // 
    if (!$email) {
        $errors .= $missingEmail;
    } else {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors .= $invalidEmail;
        }
    }
    if (!$message) {
        $errors .= $missingMessage;
    } else {
        $message = filter_var($message, FILTER_SANITIZE_STRING);
    }
    //if the are any errors 

    if ($errors) {
        $resultMessage = '<div class="alert alert-danger">' . $errors . '</div>';
    }
    echo $resultMessage;
}
    // print error message
    //  no errors
    // send message
    // if Success
    // print success message 
    // print warning message
;?>
      <div id="contact" class="container-fluid text-center mx-auto">
        <h1>Contact Us</h1>
        <form class="form-group" action="index.php" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="John Doe">
          </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" name="message" id="message" rows="3" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nobis corporis, eveniet iste placeat officiis nemo. Similique, aspernatur! Saepe inventore nihil, dolores deserunt repellendus ad minima numquam sed optio cumque?"></textarea>
        </div>

          <button class="btn btn-outline-success btn-lg" name="submit" id="submit">Send Message</button>
        </form>
      </div>

      <div id="contact" class="container text-center mx-auto">
        <h1>ADD DETAILS OF PET</h1>
        <form class="form-group" action="index.php" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">PET NAME</label>
          <input type="text" name="name"  id="name"  class="form-control-md" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput2" class="form-label">OWNERS</label>
          <input type="text" name="owner" id="owner"  class="form-control-md" id="exampleFormControlInput2" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput3" class="form-label">SPECIES</label>
          <input type="text" name="species" class="form-control-md" id="exampleFormControlInput3" placeholder="name@example.com">
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" value="m" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" value="f" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
            Female
          </label>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput5" class="form-label">BIRTH</label>
          <input type="date" name="birth"   class="form-control-md" id="exampleFormControlInput5" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput6" class="form-label">DEATH</label>
          <input type="date" name="death" class="form-control-md" id="exampleFormControlInput6" placeholder="name@example.com">
        </div>
        <button class="btn btn-outline-success" value="submit"  name="submit">Submit</button>
      
        
        </form>
      </div>

    </div>

  <!-- Contact -->
  <!-- Footer Section -->

    <?php include'footer.php';?>
    <script src="myModal.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

  </body>
</html>
