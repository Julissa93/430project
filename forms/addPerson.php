<?php
include('../db_functions/fcns.php');
?>
<!doctype html>
<html lang='en'>

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!------ Include the above in your HEAD tag ---------->
      
      <head>
      <link href="http://cdn.materialdesignicons.com/2.1.99/css/materialdesignicons.min.css" rel="stylesheet" />
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-4 mx-auto">
               <div class="card">
                  <div class="card-body">
                     <form method = "post" class="form-horizontal" role="form" action = "" id = "addPersonForm">
                        <div class="form-group">
                           <label for="firstName" class ="control-label">First Name<span class="text-danger">*</span></label>
                           <input name = "first_name" type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                           <label for="lastName" class ="control-label">Last Name <span class="text-danger">*</span></label>
                           <input name ="last_name" type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
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
                        <div class="form-group">
                        </div>
                        <button type="submit" class="btn btn-success btn-block" name = 'submit' id = "submit">Submit</button>
                     </form>
                  </div>
               </div>
            </div>
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
