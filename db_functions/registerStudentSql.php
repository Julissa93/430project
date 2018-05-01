<?php
include('fcns.php');

$conn = connect();
//$studentType = $_POST['student_type'];

/*if($studentType == 1) //if new student
{
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $location = $_POST['location'];


}*/

$class = $_POST['class'];
foreach($class as $class_section  )
{
  echo $class_section;
  echo "<br>";
}
?>
