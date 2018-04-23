<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <title>Register</title>
   </head>
   <body>
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
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>
