<?php
include('fcns.php');

if(!isset($_POST['submit']))
    {
        $errorMessage = " ";
        loginForm($errorMessage);
    }
else
{

  if (isset($_POST['username']) && isset($_POST['pw']))
  {
      $conn = connect();
      // if the user has just tried to log in
      $username = trim($_POST['username']);
      $username = htmlspecialchars($username);
      $password = trim($_POST['pw']);
      $password = htmlspecialchars($password);

      $query = "select username from user where username= ? and password = sha1(?)";

      $stmt = $conn -> prepare($query);
      $stmt->bind_param('ss',$username,$password);
      $stmt->execute();
      $stmt->store_result();
      $stmt->bind_result($username);

      if ($stmt->num_rows >0 )
      {
      // if they are in the database register the user id
          session_start();
          $_SESSION['valid_user'] = $username;
          echo "Success betch!!!!!!!!!!!!sjlsdfgjlgsjblgf";
          header("Location:homepage.php");
      }
      else
      {
        //echo "IT DOESNT WORK ";
        loginForm("<br><span style = 'color: red; '>Wrong username/password </span>");
      }

     $stmt->free_result();
  }
}

?>
