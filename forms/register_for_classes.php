<?php
include('../db_functions/fcns.php');
?>
<div class = "container">
<div class="row align-items-center justify-content-center" >
 <div class="col-6 mx-auto">


            <h3>Add Classes</h3>
            <div class = "result">
            </div>

            <form method = "post" action = "../db_functions/registerStudentSql.php" id = "myForm" onsubmit="return checkCheckboxes(); ">

               <div class = "form-group">
                <label for="id" class ="control-label">Enter Student ID:<span class="text-danger">*</span></label>
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
                      <option value="1">Saturday</option>
                      <option value="2">Sunday</option>

                    </select>
                 </div>

                   <div>
                    <input type="checkbox" id="psat" name="class[]" value="psat">
                    <label for="psat">PSAT</label>
                    <select name="level[]">
                      <option value="">Select Day</option>
                      <option value="1">Saturday</option>
                      <option value="2">Sunday</option>
                    </select>
                 </div>

                 <div>
                    <input type="checkbox" id="sat" name="class[]" value="sat">
                    <label for="sat">SAT</label>
                    <select name="level[]" >
                      <option value="">Select Day</option>
                      <option value="1">Saturday</option>
                      <option value="2">Sunday</option>
                    </select>
                 </div>
              </fieldset>

              <button type="submit" name = "add_class" class="btn btn-primary form-control">Register</button>
            </form>


     </div>
    </div>
</div>
</div>


<script>

function checkCheckboxes()
{

  var atLeastOneIsChecked = $("input:checked").length;

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



$('#myForm').submit(function(){
  event.preventDefault();

    $.ajax({
      type:'post',
      url:'../db_functions/checkIfStudentExists.php',
      data:$('#myForm').serialize(),
      success: function(response)
      {
        if(response)
        {

          $.ajax({
            type:'post',
            url:'../db_functions/registerStudentSql.php',
            data:$('#myForm').serialize(),
            success: function(data)
            {
              $.LoadingOverlay("show", {
                image       : "",
                background:"rgba(13, 13, 13, 0.8)",
                fontawesomeColor        : "#f2f2f2",
                fontawesomeAnimation: "1000ms rotate_right",
                fontawesome : "fa fa-sync-alt ",
                fontawesomeResizeFactor: 0.5,
              });

              setTimeout(function(){
                  $.LoadingOverlay("hide");
              }, 1500);

              setTimeout(function(){
                $("#notificationBox").html("<div class='alert alert-success'><strong>Success! </strong>Class has been added to Database</div>");
              }, 1600);

              setTimeout(function(){
                $("#notificationBox").fadeOut(2500, function(){
                    $("#notificationBox").html("");
                    $("#notificationBox").show();
                });
              }, 3000);

            }
          });//end 2nd ajax

      }
      else
      {
        alert('User does not exist.')
      }
    }

    });//end 1st ajax

});//end fcn.



</script>
