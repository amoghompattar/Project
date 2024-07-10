<?php include("connection.php");?>


<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="contactus.css" />
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="#" class="form" method="POST">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" class="input" placeholder="Enter full name" name="fname">
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" class="input" placeholder="Enter email address" name="email">
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" class="input" placeholder="Enter phone number" name="phonenumber">
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" class="input" placeholder="Enter birth date" name="bday">
          </div>
        </div>
        <div class="input_field">
        <label>gender</label>
        <div class="custom_select">
          <select name="gender" >
            <option value="not selected">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
          
         
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" class="input" placeholder="Enter street address" name="address">
        
        </div>
       <div class="input_field">
       <input type="submit" value="submit" class="btn" name="submit">
       </div>
      </form>
    </section>
  </body>
</html>

<?php
       if (isset($_POST['submit']))
       {
  $fname       = $_POST['fname'];
  $email       = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $bday        = $_POST['bday'];
  $gender      = $_POST['gender'];
  $address     = $_POST['address'];
 

  $query = "INSERT INTO GYM VALUES( '$fname', '$email','$phonenumber','$bday','$gender','$address' )";
  $result = mysqli_query($connection, $query);

  if (!$result) {
      die("Query failed: " . mysqli_error($connection));
  }
 }
?>
