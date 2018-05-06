<?php
include('fcns.php');
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
    $class_price = array();
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
      $sql = "select class_id, class_price from classes where classes.class_name = '".$key."' and classes.level = '".$value."'";
      $stmt = $conn->query($sql);

      if($stmt->num_rows > 0)
      {
        while($row = $stmt->fetch_assoc())
        {
          array_push($class_ids, $row['class_id']);
          array_push($class_price, $row['class_price']);
        }

        //$class_price = $conn->query("select class_price from classes where class_name = '".$key."' and class_level = '".$value."' ");
      }
      else
      {
        echo"
          <div class='alert alert-danger' role='alert'>
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
          </div>
        ";
      //  Header('Location:register_for_class.php');

      }

    }//end foreach loop


    //loop through class_ids student registered for
    $classIDandPrices = array_combine($class_ids, $class_price);
    foreach($classIDandPrices as $key => $value)
    {
      echo $key;
      echo "<br>";
      echo $value;
      $sql = "insert into class_session(student_id_fk, class_id_fk) values(?, ?) ";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ss', $studentid, $key);
      $stmt->execute();

      if($stmt->execute()) //if student was successfully added to the class add them to bill table.
      {

          echo "stmt1 success";
          $paid = 0;
          $sql2 = "insert into bills(student_id_fk, class_id_fk, amount, paid) values (?, ?, ?, ? )";
          $stmt2 = $conn->prepare($sql2);
          $stmt2->bind_param('sssi', $studentid, $key, $value, $paid);
          $stmt2->execute();
          if($stmt->execute())
          {
            echo "stmt2 success";
          }

      }
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

?>
