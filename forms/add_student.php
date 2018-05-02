<?php
include('../db_functions/fcns.php');
showHeader();
?>
      <div class="container text-left">
         <div class="row justify-content-center">
            <div class="col-lg-4">
               <h3>Register Student</h3>
               <!--QUERY HERE! we need the bill number to auto generate-->
               <form method="post" action="../db_functions/addNewStudentSql.php">
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
                   <fieldset>
                      <legend>Want the lunch package? </legend>
                      <div>
                         <input type="radio" id="wants_lunch" name="lunch" value="1">
                         <label for="wants_lunch">YES</label>
                      </div>
                      <div>
                         <input type="radio" id="wants_no_lunch" name="lunch" value="0">
                         <label for="wants_no_lunch">NO</label>
                      </div>
                   </fieldset>
                  <button type="submit" class="btn btn-primary form-control" name = "add_student">Add Student</button>

               </form>
            </div>
         </div>
      </div>
<?php showFooter(); ?>
