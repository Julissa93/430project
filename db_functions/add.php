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
    $username = trim($_POST['user_name']);
    $username = htmlspecialchars($username);
    $password = trim($_POST['pin']);
    $password = htmlspecialchars($password);
    
    //converting the password to sha1
    $shaPassword= sha1($password);

    $sql = "insert into user (firstname, lastname, location, type, username, password) values (?, ?, ?, ?, ?, ?) ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $firstname, $lastname, $location, $usertype, $username, $shaPassword);
    $stmt->execute();

    if($stmt)
    {
      showHeader();

      echo "
      <div class = 'container'>
        <div class = 'row justify-content-center'>
          <div class = 'col-12'>
            <div class='alert alert-success' role='alert'>
            <strong>".$firstname." ".$lastname." added successfully!</strong>
            </div>
            <p><strong>First Name:</strong> ".$firstname."
            <br>
            <strong>Last Name:</strong> ".$lastname."
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
