<?php
include('../db_functions/fcns.php');
showHeader();
?>
      <div class="container text-left">
         <div class="row justify-content-center">
            <div class="col-lg-4">
               <h3>Register Student</h3>
               <!--QUERY HERE! we need the bill number to auto generate-->
               <form method="post" name="register" action="../db_functions/registerStudentSql.php">
                 <div class = "form-group">
                   <label for="user">Are you registering a new student?</label>
                   <div class="input-group">
                    <select name = "student_type" class="custom-select" id="student_type" onchange="onSelectChange()">
                      <option selected>Choose...</option>
                      <option value="1">Yes</option>
                      <option value="2">No</option>
                    </select>
                    <div class="input-group-append">
                      <button id = "checkIfNewStudent"class="btn btn-outline-secondary" type="button">Submit</button>
                    </div>
                  </div>
                 </div>

                 <div class = "form_part2">
                   <div class = "form-group">
                     <label for="first_name">First Name:</label>
                     <input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name" required>
                   </div>
                   <div class = "form-group">
                     <label for="last_name">Last Name:</label>
                     <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name" required>
                   </div>
                   <div class = "form-group">
                     <label for="email">Email:</label>
                     <input name="email" type="text" class="form-control" id="email" placeholder="Email" required>
                   </div>
                   <div class="form-group">
                      <label for="location" class ="control-label">Location</label>
                         <select id = "location" class="form-control" name="location" onchange="">
                            <option value="location1">Location 1</option>
                            <option value="location2">Location 2</option>
                            <option value="location3">Location 3</option>
                         </select>
                   </div>
                 </div>

                 <div class = "form_part3">
                  <fieldset>
                     <legend>Classes the student will take this coming semester:</legend>
                     <div>
                        <input type="checkbox" id="english" name="class[]" value="english">
                        <label for="english">English</label>
                     </div>
                     <div>
                        <input type="checkbox" id="math" name="class[]" value="math">
                        <label for="math">Math</label>
                     </div>
                     <div>
                        <input type="checkbox" id="writing" name="class[]" value="writing">
                        <label for="writing">Writing</label>
                     </div>
                     <div>
                        <input type="checkbox" id="shsat" name="class[]" value="shsat">
                        <label for="shsat">SHSAT</label>
                     </div>
                     <div>
                        <input type="checkbox" id="psat" name="class[]" value="psat">
                        <label for="psat">PSAT</label>
                     </div>
                     <div>
                        <input type="checkbox" id="sat" name="class[]" value="sat">
                        <label for="sat">SAT</label>
                     </div>
                  </fieldset>
                  <fieldset>
                     <legend>Want the lunch package? </legend>
                     <div>
                        <input type="radio" id="wants_lunch" name="lunch" value="wants_lunch">
                        <label for="wants_lunch">YES</label>
                     </div>
                     <div>
                        <input type="radio" id="wants_no_lunch" name="lunch" value="wants_no_lunch">
                        <label for="wants_no_lunch">NO</label>
                     </div>
                  </fieldset>
                  <button type="submit" class="btn btn-primary form-control">Register</button>
                </div>
               </form>
            </div>
         </div>
      </div>
<?php showFooter(); ?>

<script>
  $(".form_part2").hide();
  $(".form_part3").hide();

  function onSelectChange()
  {
      if($("#student_type").val() ==  1)
      {
        $('.form_part2').show();
        $('.form_part3').show();
      }
      else
      {
        $('.form_part2').hide();
        $('.form_part3').show();
      }
  }

</script>
