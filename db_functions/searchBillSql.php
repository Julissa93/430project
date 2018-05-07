<?php
//session_start();
include('fcns.php');


    $conn = connect();
    $userid = trim($_POST['search']);
    $userid = htmlspecialchars($userid);

    $sql = "select bill_id, student.firstname, student.lastname, bills.amount
    FROM bills, class_session, student
    where bills.student_id_fk = $userid and bills.student_id_fk = class_session.student_id_fk
    AND class_session.student_id_fk = student.student_id
    group by bill_id";
    $stmt = $conn->query($sql);


    if($stmt->num_rows > 0)
    {
      while($row = $stmt->fetch_assoc())
      {
        echo"

          <tr>
              <td>".$row['bill_id']." </td>
              <td>".$row['firstname']."</td>
              <td>".$row['lastname']."</td>

              <td>".$row['amount']."</td>
              </tr>
        ";
      }
    }

?>
