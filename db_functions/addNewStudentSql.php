<?php
session_start(); 
include('fcns.php');
if(isset($_POST['add_student']))
{
  if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['location']) && isset($_POST['lunch']))
  {
    $conn = connect();
    $firstname = trim($_POST['first_name']);
    $firstname = htmlspecialchars($firstname);
    $lastname = trim($_POST['last_name']);
    $lastname = htmlspecialchars($lastname);
    $email = trim($_POST['email']);
    $email = htmlspecialchars($email);
    $lunch = $_POST['lunch'];

    $sql = "insert into student (firstname, lastname, email, gets_lunch) values(?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $firstname, $lastname, $email, $lunch);
    $stmt->execute();

    if($stmt)
    {
      showHeader();
      showSideNav();
      echo"
      <div class = 'col-10'>
        <div id = 'display'>

          <div class = 'container'>
            <div class = 'row justify-content-center'>
              <div class = 'col-12'>
                <div class='alert alert-success' role='alert'>
                  ".$firstname." ".$lastname." was successfully added as a student!
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
      ";
      showFooter();
    }
    else
    {
      showHeader();

      echo"

      ";

      showFooter();

    }

  }
}
?>
