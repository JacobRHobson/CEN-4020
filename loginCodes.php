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
   include("dbConnect.php");
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




         $_SESSION['fname']    =  $_POST['fname'];
         $_SESSION['lname']    =  $_POST['lname'];
         $_SESSION['username'] = $_POST['username'];
         $_SESSION['psswd']    = $_POST['psswd'];

         $FN =$_SESSION['fname'];
         $LN =$_SESSION['lname'];
         $UN = $_SESSION['username'];
         $PWD= $_SESSION['psswd'];

         echo("Your information are :\n");
         echo("First Name: ".$FN."\n");
         echo("Last Name: ".$LN."\n");
         echo("username: ".$UN."\n");

         // Hashing the user's password
         $hashedPWD = password_hash($PWD, PASSWORD_DEFAULT);

         $sql = "INSERT INTO users (First_name, Last_name, Username, Passwd, viewPreference, Points) VALUES ('$FN','$LN','$UN','$hashedPWD','Light Theme','5')";

       if (mysqli_query($conn,$sql))
        {
          echo "table modified";
        }
        else {
          echo "could not modify table";
        }
    }
 }
