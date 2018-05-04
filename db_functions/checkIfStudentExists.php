<?php
include('fcns.php');
$conn = connect();
$student_id = trim($_POST['student_id']);

$student_id = htmlspecialchars($student_id);

$sql = "select student_id from student where student_id = $student_id";
$stmt = $conn->query($sql);
//$stmt->bind_param('s', $student_id);
//$stmt->execute();

if($stmt->num_rows > 0)
{
  echo "success"; 
}
else
{
  echo "fail";
}



?>
