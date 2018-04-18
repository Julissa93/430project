<?php
function connect()
{
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $db = "tutoring_mgmt_sys";
  $result = new mysqli($servername, $username, $password, $db);
   if (mysqli_connect_errno())
   {
     throw new Exception('Could not connect to database server');
   }
   else
   {
     echo "Connected successfully";
     return $result;
   }
}

function login($username, $password, $acctype)
{
  $session_start();
  $_SESSION['login_user'] = $username;
  $_SESSION['password'] = $password;

}
?>
