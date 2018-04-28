<?php
include('../db_functions/fcns.php');
showHeader();
?>
      <div class="container" style="max-width:600px;padding:40px 20px;background:#ebeff2; ">
         <h3 class = "text-center">Add Person</h3>
         <form method = "post" class="form-horizontal" role="form" action = "add.php">
            <div class="form-group">
               <label for="firstName" class ="control-label col-sm-3">First name</label>
               <div class="col-sm-8">
                  <input name = "first_name" type="name" class="form-control" id="firstName" placeholder="First Name">
               </div>
            </div>
            <div class="form-group">
               <label for="lastName" class ="control-label col-sm-3">Last Name</label>
               <div class="col-sm-8">
                  <input name ="last_name" type="text" class="form-control" id="lastName" placeholder="Last Name">
               </div>
            </div>
            <div class="form-group">
               <label for="location" class ="control-label col-sm-3">Location</label>
               <div class="col-sm-8">
                  <select id = "location" class="form-control" name="location">
                     <option value="location1">Location 1</option>
                     <option value="location2">Location 2</option>
                     <option value="location3">Location 3</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label for="type" class ="control-label col-sm-3">Type of Person</label>
               <select id = "type" class="form-control" name="user_type" onchange = 'determineType(this.value);'>
                  <option style = "white-space: nowrap; ">Type of Person</option>
                  <option value="manager">Manager</option>
                  <option value="employee">Employee</option>
                  <option value = "student"> Student </option>
               </select>
            </div>
            <div class="form-group">
               <input type="email" style="display:none" class="form-control" id="email" placeholder="Enter email">
            </div>
            <br/>
            <div class="col-sm-offset-2 col-sm-8">
               <button type='submit' class='btn btn-primary' name = 'submit'>Submit</button>
            </div>
         </form>
      </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php showFooter(); ?>
   <script>
      function determineType(val) {
          var type_selected = document.getElementById('type');
          var email = document.getElementById("email");
          if (val == 'student'){
              email.style.display = "block";
          } else {
             email.style.display = "none";
          }
      }
   </script>
</html>
