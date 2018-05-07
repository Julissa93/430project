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
        <form>
          <div class='form-group'>
            <label for='firstname'>First Name</label>
            <input type='text' class='form-control' id='firstname' placeholder='First Name' value='".$row['firstname']."'>
          </div>
          <div class='form-group'>
            <label for='lastname'>Last Name</label>
            <input type='text' class='form-control' id='lastname' placeholder='Last Name' value='".$row['lastname']."'>
          </div>
          <div class='form-group'>
            <label for='location'>location</label>
            <input type='text' class='form-control' id='location' placeholder='Location' value='".$row['location']."'>
          </div>
          <div class='form-group'>
            <label for='usertype'>Type</label>
            <input type='text' class='form-control' id='usertype' placeholder='Type' value='".$row['type']."'>
          </div>
        </form>
        ";
      }
    }

?>
