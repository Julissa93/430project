<?php
include('../db_functions/fcns.php');
showHeader();
?>
      <div class="container">
         <h3 class = "text-center">Add Person</h3>
         <div class = "row justify-content-center">
           <div class = "col-6">
           <form method = "post" class="form-horizontal" role="form" action = "" id = "addPersonForm">
              <div class="form-group">
                 <label for="firstName" class ="control-label">First name</label>

                    <input name = "first_name" type="name" class="form-control" id="firstName" placeholder="First Name">

              </div>
              <div class="form-group">
                 <label for="lastName" class ="control-label">Last Name</label>

                    <input name ="last_name" type="text" class="form-control" id="lastName" placeholder="Last Name">

              </div>
              <div class="form-group">
                 <label for="location" class ="control-label">Location</label>

                    <select id = "location" class="form-control" name="location">
                       <option value="location1">Location 1</option>
                       <option value="location2">Location 2</option>
                       <option value="location3">Location 3</option>
                    </select>

              </div>
              <div class="form-group">
                 <label for="type" class ="control-label">Type of Person</label>
                 <select id = "type" class="form-control" name="user_type" onchange = 'determineType(this.value);'>
                    <option style = "white-space: nowrap; ">Type of Person</option>
                    <option value="manager">Admin</option>
                    <option value="employee">Employee</option>
                 </select>
              </div>
              <div class="form-group">
                 <input type="email" style="display:none" class="form-control" id="email" placeholder="Enter email">
              </div>
              <br/>

                 <button type='submit' class='btn btn-primary' name = 'submit' id = "submit">Submit</button>

           </form>
          </div>
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

      /*$(document).ready(function(){
        $('#submit').click(function(){
          $('#display').load("../db_functions/add.php");
        });
      });*/
        $('#addPersonForm').submit(function () {
          event.preventDefault();
          $.ajax({
            type: 'post',
            url: '../db_functions/add.php',
            data: $('#addPersonForm').serialize(),
            success: function (data) {
              $("#display").html(data);

            }
          });
        });
   </script>
</html>
