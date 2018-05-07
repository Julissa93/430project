<?php
//session_start();
include('fcns.php');


    $conn = connect();
    $userid = trim($_POST['search']);
    $userid = htmlspecialchars($userid);

    $sql = "select bill_id, bills.student_id_fk, student.firstname, student.lastname, bills.amount, bills.paid
    FROM bills, class_session, student
    where bills.student_id_fk = $userid and bills.student_id_fk = class_session.student_id_fk
    AND class_session.student_id_fk = student.student_id
    group by bill_id";
    $stmt = $conn->query($sql);


    if($stmt->num_rows > 0)
    {
      while($row = $stmt->fetch_assoc())
      {
        if($row['paid'] == 0)
        {
          $paid = "No";
          $str = "<button class = 'btn btn-primary' type = 'button' onClick = 'getBillInfo(this)'>
          <input type = 'hidden' value = ".$row['bill_id']." name = 'bill_id'>
          Pay</button>";
        }
        else
        {
          $paid = "Yes";
          $str = "<button class = 'btn btn-primary' type = 'button' onClick = 'getBillInfo(this)'>
          <input type = 'hidden' value = ".$row['bill_id']." name = 'bill_id'>
          View Receipt</button>";
        }
        echo"
        <form method = 'post' id = 'billform'>
            <tr>

              <td>".$row['bill_id']." </td>
              <td>".$row['firstname']."</td>
              <td>".$row['lastname']."</td>
              <td>".$row['amount']."</td>
              <td>".$paid."</td>
              <td>".$str."</td>
            </tr>
        </form>
        ";
      }
    }

?>
