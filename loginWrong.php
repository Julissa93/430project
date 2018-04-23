<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <title>Login</title>
   </head>
   <body>
      <div class="container text-center">
         <div class="row justify-content-center">
            <div class="col-lg-4">
               <div class="jumbotron" style="margin-top:150px">
                  <h3>Please Login</h3>
                  <font color="red"><small>Error: Login attempt failed.<br/> Please, try again.</small></font>
                  <form method="post" name="login" action=" ">
                     <div class="form-group">
                        <label for="user_id">User ID</label>
                        <input name="user_id" type="text" class="form-control"  id="user_id" placeholder="Enter ID" required>
                     </div>
                     <div class="form-group">
                        <label for="pin">Pin</label>
                        <input name="pin" type="password" class="form-control" id="pin" placeholder="Pin" required>
                     </div>
                     <button type="submit" class="btn btn-primary form-control">Login</button>
                  </form>
               </div>
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
