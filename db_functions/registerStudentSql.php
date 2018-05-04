<?php
include('fcns.php');
showHeader();
//if(isset($_POST['add_class'])) //check if add class button is submitted
//{
  //if(isset($_POST['student_id']) && isset($_POST['class'])) //check if text boxes are filled in
  //{
    $conn = connect();
    $studentid = trim($_POST['student_id']);
    $studentid = htmlspecialchars($studentid);
    $class_name = $_POST['class'];
    $class_level = $_POST['level'];
    $levels = array();
    $class_ids = array();

    foreach($class_level as $level)
    {
      if(!empty($level))
      {
        array_push($levels, $level);
      }

    }

    $chosenClasses = array_combine($class_name, $levels);
    foreach($chosenClasses as $key => $value)
    {
      $sql = "select class_id from classes where classes.class_name = '".$key."' and classes.level = '".$value."'";
      $stmt = $conn->query($sql);

      if($stmt->num_rows > 0)
      {
        while($row = $stmt->fetch_assoc())
        {
          array_push($class_ids, $row['class_id']);
        }
      }
      else
      {
        echo"
          <div class='alert alert-danger' role='alert'>
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
          </div>
        ";
        Header('Location:register_for_class.php');

      }

    }//end foreach loop


    //loop through class_ids student registered for
    foreach($class_ids as $class_id)
    {
      echo $class_id;
      echo "<br>";
      $sql = "insert into class_session(student_id_fk, class_id_fk) values(? , ?) ";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ss', $studentid, $class_id);
      $stmt->execute();
    }


  /*}
  else
  {
    echo"
      <div class='alert alert-danger' role='alert'>
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>
    ";
  }
/*}
else
{
  Header('Location: ../forms/register_for_classes.php');
}*/

showFooter();
?>
