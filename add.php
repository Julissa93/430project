<?php
include('fcns.php');
echo "HEY WHATSUP";
if(isset($_POST['submit']))
{
  if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['location']) && isset($_POST['user_type']) )
  {
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

  }
  else
  {
    echo "error ";
  }
}
?>
