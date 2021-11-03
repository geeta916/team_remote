<!doctype html>
<html lang="en">
  <head>
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
    <link rel = "stylesheet" type = "text/css" href = "js/bootstrap.js">
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    <title>registeration Form</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
  </head>
  <body style="background-color: skyblue;">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
        
        <div class="container">
          <ul class="nav-tabs nav nav-justified">
            <li class="nav-item">
              
              <a href="#profile" class="nav-link-active btn btn-primary" >Profile</a>
            </li>
            <li class="nav-item">
         <!--     <a href="search" class="nav-link" >Existing_user> -->
              <button type = "button" onclick = "window.location.href = 'Existing_user.php'">Existing_user</button>
              </a>
            </li>
            
          </ul>
        </div>
      </nav>
      <div class="tab-content container">
        <div class="tab-pane active" id="profile"><br><br>
          <div class="main_div">
            <div class="box">
              <h1>SIGN UP FORM</h1>
              <form method="POST" action="">
                <div class="inputBox">
                  <input type="text" name="name" autocomplete="off" required="">
                  <label>Name</label>
                </div>
               <div class="inputBox">
                  <input type="text" name="email" autocomplete="off" required="" >
                  <label>Email</label>
                </div>
                <div class="inputBox">
                  <input type="text" name="mobile" autocomplete="off" required="" >
                  <label>MobileNo</label>
                </div>
                
                <div class="inputBox">
                  <input type="password" name="password"  required="" >
                  <label>Password</label>
                </div>
                
                <input type="submit" name="submit" value="Submit">
              </form>
              <br>
            </div>
            
          </div>
          
        </div>
      </body>
</html>

<?php
include 'connection.php';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password =  $_POST['password'];

    $insertquery = "insert into registered_users(name,email,mobile,password)values ('$name' , '$email' , '$mobile','$password' )";
    $query = mysqli_query($con,$insertquery);
    if($query)
    {
        ?>
         <script>
           alert("data inserted properly");
         </script>
           <?php
    }
     else{
           ?>
           <script>
             alert("data not inserted properly");
          </script>
           <?php
      }
    }