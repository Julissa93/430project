<?php
//session_start();
include('fcns.php');


    $conn = connect();
    $billid = trim($_POST['search']);
    $billid = htmlspecialchars($billid);

    $sql = "select * from bills, class_session where bill_id = $billid and bills.student_id_fk = class_session.student_id_fk";
    $stmt = $conn->query($sql);


    if($stmt->num_rows > 0)
    {
      while($row = $stmt->fetch_assoc())
      {
        echo"


              <td>Bill ID:".$row['bill_id']." </td>

              <td>Amount: ".$row['amount']."</td>

        ";
      }
    }

?>
