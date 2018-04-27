<?php
//session_start();
include('fcns.php');


    $conn = connect();
    $billid = trim($_POST['search']);
    $billid = htmlspecialchars($userid);

    $sql = "select * from bills where bill_id = $userid";
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
            <div class = 'col-12'>
            <p class = 'text-center align-middle'>

              <strong>Bill id: </strong>".$row['bill_id']."

              <strong>Amount: </strong> ".$row['amount']."</p>
            </div>
          </div>
        ";
        //showFooter();
      }
    }

?>
