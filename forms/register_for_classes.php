<?php
include('../db_functions/fcns.php');
showHeader();
?>
<div class = "container">
  <div class = "row justify-content-center">
    <h1 class = "text-center">Add Classes</h1>
  </div>
  <div class = "row justify-content-center">

    <form method = "post" action = "../db_functions/registerStudentSql.php" id = "myForm" onsubmit="return checkCheckboxes(); ">
      <div class = "form-group">
        <label for="id" class ="control-label">Enter Student ID: </label>
        <input name = "student_id" type="text" class="form-control" id="student_id" placeholder="Enter Student ID" required>
      </div>

      <!--Can someone fix this to look like the other form groups? Not sure why we're using fieldset tags?-->
      <fieldset id = "checkbox_classes">
         <legend>Classes the student will take this coming semester:</legend>
         <div class = "d-inline">
            <input type="checkbox" id="english" name="class[]" value="english">
            <label for="english">English</label>
            <select name="level[]" >
              <option value="">Select Level</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>

            </select>
         </div>
         <div>
            <input type="checkbox" id="math" name="class[]" value="math">
            <label for="math">Math</label>
            <select name="level[]" >
              <option value="">Select Level</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>

            </select>
         </div>
         <div>
            <input type="checkbox" id="writing" name="class[]" value="writing">
            <label for="writing">Writing</label>
            <select name="level[]" >
              <option value="">Select Level</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>

            </select>
         </div>
         <div>
            <input type="checkbox" id="shsat" name="class[]" value="shsat">
            <label for="shsat">SHSAT</label>
            <select name="level[]" >
              <option value="">Select Day</option>
              <option value="Saturday">Saturday</option>
              <option value="Sunday">Sunday</option>


            </select>
         </div>
         <div>
            <input type="checkbox" id="psat" name="class[]" value="psat">
            <label for="psat">PSAT</label>
            <select name="level[]">
              <option value="">Select Day</option>
              <option value="Saturday">Saturday</option>
              <option value="Sunday">Sunday</option>


            </select>
         </div>
         <div>
            <input type="checkbox" id="sat" name="class[]" value="sat">
            <label for="sat">SAT</label>
            <select name="level[]" >
              <option value="">Select Day</option>
              <option value="Saturday">Saturday</option>
              <option value="Sunday">Sunday</option>


            </select>
         </div>
      </fieldset>

      <button type="submit" name = "add_class" class="btn btn-primary form-control">Register</button>
    </form>
  </div>
</div>
<script>

function checkCheckboxes()
{

  var atLeastOneIsChecked = $("input:checked").length;
  console.log(atLeastOneIsChecked);
  if(atLeastOneIsChecked > 0)
  {
    return true;
  }
  else
  {
    alert('Please select at least one class!')
    return false;
  }
  
}



</script>
<?php showFooter(); ?>
