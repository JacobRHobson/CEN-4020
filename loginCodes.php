<?php

// code for logging in
   if(isset($_POST["log_in"]))
   {
       if(isset($_POST['username1']) &&isset($_POST['psswd1']))
       {
         include("dbConnect.php");
         $username =$_POST['username1'];
         $password =$_POST['psswd1'];
         $loginSQL= "SELECT * from users where Username =?;";
         $query = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($query, $loginSQL))
         {
           header("Location: login.php?SQLerror");
           exit();
         }
         else {
           mysqli_stmt_bind_param($query,"s",$username);
           mysqli_stmt_execute($query);
           $result= mysqli_stmt_get_result($query);
           if($row = mysqli_fetch_assoc($result))
           {
          
             if(password_verify($password, $row['Passwd']))
             {
               $_SESSION['fname']=$row['First_name'];
              $_SESSION['lname']=$row['Last_name'];
               header("Location: users.php?login=success");
               exit();
             }
             else {
               header("Location: login.php?err=wrongpassword");
               exit();
             }
           }
           else {
             header("Location: login.php?NoSuchUser");
             exit();
           }
         }

       }

   }


// Code for registration

 else if(isset($_POST['register']))
 {
   include("dbConnect.php");
     if(isset($_POST['psswd']) && isset($_POST['psswd2']))
     {
       if($_POST['psswd'] != $_POST['psswd2'])
       {

         header("Location: login.php?PasswordsDonmtMatch");
         exit();
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
 else {
   // code...
   header("Location: login.php");
   exit();
 }
