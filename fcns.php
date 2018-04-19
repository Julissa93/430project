<?php
$session_start();
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
    // echo "Connected successfully";
     return $result;
   }
}

function login($username, $password, $acctype)
{
  if(isset($_POST['submit']))
  {
    $conn = connect();
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pw = mysqli_real_escape_string($conn, $_POST['pw']);

    //error handlers
    if(empty($uid) || empty($pw))
    {
      header("Location: .. /index.php?login=empty");
      exit();
    }
    else
    {
      $_SESSION['login_user'] = $username;
      $_SESSION['password'] = $password;

      $query = "select * from user where username = '$username' and password = '$password'";
      $result = mysqli_query($conn, $query);
      $resultCheck = mysqli_num_rows($result);
      if($resultCheck < 1)
      {
        header("Location: .. /index.php?login=error");
        exit();
      }
      else
      {
        if($row = mysqli_fetch_assoc($result))
        {
          
        }

      }
      }

    }



  }

}
?>
