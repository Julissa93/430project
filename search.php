<?php
//session_start();
include('fcns.php');


    $conn = connect();
    $userid = trim($_POST['search']);
    $userid = htmlspecialchars($userid);

    $sql = "select name, location, type, username from user where user_id = $userid";
    $stmt = $conn->query($sql);
    /*$stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $userid);
    $stmt->execute();*/


    if($stmt->num_rows > 0)
    {
      while($row = $stmt->fetch_assoc())
      {
        //showHeader();
        echo"
        &nbsp;
          <div class = 'row d-flex justify-content-center'>
            <div class = 'col-10 border rounded'>
            <p class = 'text-center align-middle'>
              <img src = 'default-avatar.jpg' class = 'rounded-circle img-thumbnail float-left' height = '100px' width = '100px';>
              <strong>Name: </strong>".$row['name']."

              <strong>User Type: </strong> ".$row['type']."</p>
            </div>
          </div>
        ";
        //showFooter();
      }
    }


  /*else
  {
      echo"<div class='alert alert-danger' role='alert'>
      <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>";
  }*/


?>
