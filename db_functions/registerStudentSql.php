<?php
include('fcns.php');

if(isset($_POST['add_class']))
{
  if(isset($_POST['student_id']) && isset($_POST['class']))
  {
    $studentid = trim($_POST['student_id']);
    $studentid = htmlspecialchars($studentid);
    $class_name = $_POST['class'];
    $class_level = $_POST['level'];

    echo sizeof($class_name);
    echo " ";
    echo sizeof($class_level);

    foreach($class_name as $class)
    {
      echo $class;
      echo "<br>";
    }

    foreach($class_level as $level)
    {
      echo $level;
      echo "<br>"; 
    }

  }
  else
  {
    echo"
      <div class='alert alert-danger' role='alert'>
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>
    ";
  }
}
else
{
  Header('Location: ../forms/register_for_classes.php');
}
?>
