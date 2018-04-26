<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <title>Search</title>
   </head>
   <body>
     <div class = "container">
        <h3 class = "text-center">Search By</h3>
        <form method = "post" action = "search.php" class="form-horizontal" role="form">
            <div class="form-group">
            <label for="search" class ="control-label col-sm-4">Search By:</label>
            <select id = "search" class="form-control" name="search_by">
               <option style = "white-space: nowrap; ">Search By</option>
               <option value="first_name">First Name</option>
               <option value="last_name">Last Name</option>
               <option value = "id">ID</option>
               <option value = "class">Class</option>
               <option value = "location">Location</option>
               <option value = "type">Type of Person</option>
            </select>
            <div class="col-sm-offset-2 col-sm-8">
               <label for="search_user_id" class ="control-label col-sm-3"></label>
               <div class="col-sm-8">
                  <input type="text" class="form-control" id="search_user_id" placeholder="Search">
               </div>
            </div>
            <div class="col-sm-offset-2 col-sm-8">
               <button type="submit" class="btn btn-default">Search</button>
            </div>
        </form>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>
