<?php

include('../db_functions/fcns.php');


    $conn = connect();
    $userid = $_POST['user_id'];

    $sql = "select * from user where user_id = '$userid'";

    $stmt = $conn->query($sql);


    if($stmt->num_rows > 0)
    {
      while($row = $stmt->fetch_assoc())
      {
        echo "
          <div class='container' style='background-color:white; margin-top:60px'>

           <div class='row justify-content-center'>
             <div class = 'card'>
              <div class='col-12'>
                <strong>Employee ID: </strong> ".$row['user_id']."
                <br>
                <strong> First Name </strong> ".$row['firstname']."
                <br>
                <strong>Last Name</strong> ".$row['lastname']."
                <br>
                <strong>Location: </strong> ".$row['location']."
                <br>
                <strong>Employee Type: </strong> ".$row['type']."
              </div>
            </div>
            </div>
          </div>
        ";
      }
    }

?>
