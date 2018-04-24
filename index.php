<?php
include('fcns.php');
//if submit button is not clicked set the error message to null and just display login form
if(!isset($_POST['submit']))
{
    $errorMessage = " ";
    loginForm($errorMessage);
}
//otherwise if submit is clicked, check if valid user
//if valid user send them to the next page
//if not valid user, set error message and call function to display login form again with error message displayed.
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

      if ($stmt->num_rows > 0)
      {
      // if they are in the database register the user id
          session_start();
          $_SESSION['valid_user'] = $username;
          //echo "Success betch!!!!!!!!!!!!sjlsdfgjlgsjblgf";
          $stmt->free_result();
          header('Location: dashboard.php');

      }
      else
      {
        $errorMessage = '<div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
        </div>';
        //echo "IT DOESNT WORK ";
        loginForm($errorMessage);
      }

     $stmt->free_result();
  }
}
?>
