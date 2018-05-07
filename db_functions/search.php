<?php
//session_start();
include('../db_functions/fcns.php');


    $conn = connect();
    $userid = trim($_POST['search']);
    $userid = htmlspecialchars($userid);
    $select_by = $_POST['search_by'];

    $sql = "select user_id, firstname, lastname, location, type from user where $select_by = '$userid'";
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
        <tr>
              <td>".$row['user_id']."</td>
              <td>".$row['firstname']."</td>
              <td>".$row['lastname']."</td>
              <td>".$row['location']."</td>
              <td>".$row['type']."</td>
              </tr>
        ";
        //showFooter();
      }

    }
    else
    {
      echo "No user with that ID"; # code...
    }


  /*else
  {
      echo"<div class='alert alert-danger' role='alert'>
      <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>";
  }*/


?>
