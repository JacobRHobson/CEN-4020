<?php
inlude_once 'dbConnect.php';
 session_start();
?>


<html>
  <head>
    <title> Log in or Register </title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
      h3{
          color: red;
        }
        h5{
          color: red;
        }
        body{
            }
      footer{
        background: black;
        color: gray;
        font-size: 12px;
        padding: 20px 20px;
        text-align: center;
      }
      </style>

  </head>

  <body>

    <div>
      <div class="row">

        <div class="col-md-4">

          <h3> ResistorCalcApp Login </h3>

          <form action="users.php" method="post">

            <div class="form-group">
              <h5> username </h5>
              <input type="text" name= "username1" class="form-control" required>

              <h5> password </h5>
              <input type="password" name="psswd1" class="form-control" required>

            </div>

            <button type="submit" name = "log_in"class="btn btn-primary"> Log In </button>
          </form>

	     </div>

	    </div>

        <div class="col-md-4" style="background-image: url(https://i.imgur.com/6YuRxJA.png)">
          <h3>Register</h3>
          <form action="login.php" method="post">

            <div class="form-group">
              <label> First Name </label>
              <input type="text" name="fname" class="form-control" required>

              <label> Last Name </label>
              <input type="text" name="lname" class="form-control" required>

              <label> username </label>
              <input type="text" name="username" class="form-control" required>

              <label> password </label>
              <input type="password" name="psswd" class="form-control" required>

              <label> confirm password </label>
              <input type="password" name="psswd2" class="form-control" required>

            </div>

            <button type="submit" name = "register" class="btn btn-primary"> Register </button>
            <br>

             <?php

                if(isset($_POST["log_in"]))
                {
                    if(isset($_POST['username1']) &&isset($_POST['psswd1']))
                    {
                      $_SESSION['username'] = htmlspecialchars($_POST['username1']);
                      $username = htmlspecialchars($_POST['username1']);

                      $password =  htmlspecialchars($_POST['psswd1']);





                    }
                }

              else if(isset($_POST['register']))
              {
                  if(isset($_POST['psswd']) && isset($_POST['psswd2']))
                  {
                    if($_POST['psswd'] != $_POST['psswd2'])
                    {
                      echo("Invalid passwords don't match");
                      sleep(1);
                      header("Refresh:0");
                    }

                  }

                  if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['psswd'])&& isset($_POST['psswd2']) )
                  {

                       echo("Your information are :\n");
                       echo("First Name: ".$_POST['fname']."\n");
                       echo("ast Name: ".$_POST['lname']."\n");
                       echo("username: ".$_POST['username']."\n");


                      $_SESSION['fname']    =  $_POST['fname'];
                      $_SESSION['lname']    =  $_POST['lname'];
                      $_SESSION['username'] = $_POST['username'];
                      $_SESSION['psswd']    = $_POST['psswd'];

                      $sql = "INSERT INTO Users(First_name, Last_name, Username, Passwd) VALUES ('$_SESSION['fname']','$_SESSION['lname']','$_SESSION['username']','$_SESSION['psswd']');";

                 }
              }
            ?>
            </form>
        </div>
    </div>

  </body>

</html>
