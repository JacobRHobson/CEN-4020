
<html>
<?php
require 'dbConnect.php';
 ?>
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

          <form action="loginCodes.php" method="post">

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
          <form action="loginCodes.php" method="post">

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


            </form>
        </div>
    </div>

  </body>

</html>
