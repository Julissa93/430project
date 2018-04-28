<?php
include('../db_functions/fcns.php');
showHeader();
?>
      <div class="container text-left">
         <div class="row justify-content-center">
            <div class="col-lg-4">
               <h3>Bill #1</h3>
               <!--QUERY HERE! we need the bill number to auto generate-->
               <form method="post" name="register" action="bill_preview.html">
                  <div class="form-group">
                     <label for="user_id">Student ID</label>
                     <input name="user_id" type="text" class="form-control"  id="user_id" placeholder="Enter ID" required>
                  </div>
                  <fieldset>
                     <legend>Classes the student will take this coming semester:</legend>
                     <div>
                        <input type="checkbox" id="english" name="class" value="english">
                        <label for="english">English</label>
                     </div>
                     <div>
                        <input type="checkbox" id="math" name="class" value="math">
                        <label for="math">Math</label>
                     </div>
                     <div>
                        <input type="checkbox" id="writing" name="class" value="writing">
                        <label for="writing">Writing</label>
                     </div>
                     <div>
                        <input type="checkbox" id="shsat" name="class" value="shsat">
                        <label for="shsat">SHSAT</label>
                     </div>
                     <div>
                        <input type="checkbox" id="psat" name="class" value="psat">
                        <label for="psat">PSAT</label>
                     </div>
                     <div>
                        <input type="checkbox" id="sat" name="class" value="sat">
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
               </form>
            </div>
         </div>
      </div>
<?php showFooter(); ?>
