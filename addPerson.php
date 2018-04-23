<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <title>Add Person</title>
   </head>
   <body>
      <div class="container" style="max-width:600px;padding:40px 20px;background:#ebeff2">
         <h3>Add Person</h3>
         <form class="form-horizontal" role="form">
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
               <label for="id" class ="control-label col-sm-3">ID</label>
               <div class="col-sm-8">
                  <input name = "id" type="text" class="form-control" id="id" placeholder="Enter ID">
               </div>
            </div>
            <div class="form-group">
               <label for="dob" class ="control-label col-sm-3">DOB</label>
               <div class="col-sm-8">
                  <input name = "dob" type="date" class="form-control" id="dob">
               </div>
            </div>
            <div class="form-group">
               <label for="pin" class ="control-label col-sm-3">PIN</label>
               <div class="col-sm-8">
                  <input name = "pin" type="password" class="form-control" id="pin" placeholder="Enter PIN">
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
                  <option>Type of Person</option>
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
               <button type="submit" class="btn btn-default">Add Person</button>
            </div>
         </form>
      </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
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
