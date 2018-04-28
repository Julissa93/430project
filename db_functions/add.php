<?php
include('fcns.php');
//if(isset($_POST['submit']))
//{
  //if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['location']) && isset($_POST['user_type']) )
  //{
    $conn = connect();
    $firstname = trim($_POST['first_name']);
    $firstname = htmlspecialchars($firstname);
    $lastname = trim($_POST['last_name']);
    $lastname = htmlspecialchars($lastname);
    $location = $_POST['location'];
    $usertype = $_POST['user_type'];
    $name = $firstname .' '. $lastname;

    $sql = "insert into user (name, location, type) values (?, ?, ?) ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $location, $usertype);
    $stmt->execute();
    if($stmt)
    {
      showHeader();

      echo "
      <div class = 'container'>
        <div class = 'row justify-content-center'>
          <div class = 'col-12'>
            <div class='alert alert-success' role='alert'>
            <strong>".$name." added successfully!</strong>
            </div>
            <p><strong>Name:</strong> ".$name."
            <br>
            <strong>Location:</strong> ".$location."
            <br>
            <strong>User Type: </strong> ".$usertype."
            </p>
          </div>
        </div>
      </div>
      ";

      showFooter();
    }
    else {
      showHeader();

      echo "
      <div class = 'container'>
        <div class = 'row justify-content-center'>
          <div class = 'col-12'>
            <div class='alert alert-danger' role='alert'>
              <strong>Error adding new user!</strong> Change a few things up and try submitting again.
            </div>
          </div>
        </div>
      </div>
      ";

      showFooter();
    }

  //}
  //else {
  //  echo "u didn't insert stuff into the text fields???? wtf iz u doin???????";
  //}

//}
//else {
  //echo"submit button wasn't clicked";
//}
?>
<script>

</script>
