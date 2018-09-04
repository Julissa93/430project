<?php
include('../db_functions/fcns.php');
?>

<div class="row justify-content-center register" >
  <div class="col-6">
    <h3 class = "text-center">Register Employee</h3>
      <form method = "post" class="form-horizontal" role="form" action = "" id = "addPersonForm">
        <div class = "form-row">
          <div class="form-group col-6">
             <label for="firstName" class ="control-label">First Name<span class="text-danger">*</span></label>
             <input name = "first_name" type="text" class="form-control" id="firstName" placeholder="Enter First Name">
          </div>

          <div class="form-group col-6" >
             <label for="lastName" class ="control-label">Last Name <span class="text-danger">*</span></label>
             <input name ="last_name" type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
          </div>
        </div>

        <div class = "form-row">
          <div class="form-group col-6">
              <label for="userName" class ="control-label">Username <span class="text-danger">*</span></label>
              <input name ="user_name" type="text" class="form-control" id="userName" placeholder="Enter User Name">
           </div>

           <div class="form-group col-6">
              <label for="pin" class ="control-label">Password<span class="text-danger">*</span></label>
              <input name ="pin" type="password" class="form-control" id="pin" placeholder="Enter Password">
           </div>

        </div>


          <div class="form-group">
             <label for="location" class ="control-label">Location <span class="text-danger">*</span></label>
             <select id = "location" class="form-control" name="location">
                <option value="location1">Location 1</option>
                <option value="location2">Location 2</option>
                <option value="location3">Location 3</option>
             </select>
          </div>

          <div class="form-group">
             <label for="type" class ="control-label">Type of Person<span class="text-danger">*</span></label>
             <select id = "type" class="form-control" name="user_type" onchange = 'determineType(this.value);'>
                <option style = "white-space: nowrap; ">Type of Person</option>
                <option value="manager">Admin</option>
                <option value="employee">Employee</option>
             </select>
          </div>



          <button type="submit" class="btn btn-primary btn-block" name = 'submit' id = "submit">Submit</button>

       </form>
  </div>
</div>
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
