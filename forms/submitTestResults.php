<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <title>Submit Test Grades</title>
   </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
      <h3><label for="grade" class ="control-label">Grade:</label></h3>
      <select id = "grade" class="form-control" name="grade" onclick="reveal_options(value)">
         <option style = "white-space: nowrap; ">Grade</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="shsat">SHSAT</option>
         <option value="psat">PSAT</option>
         <option value="sat">SAT</option>
      </select>
      <h3><label for="subject" class ="control-label">Subject:</label></h3>
      <select id = "subject" class="form-control" name="subject">
         <option style = "white-space: nowrap; ">Subject</option>
         <option value="english">English</option>
         <option value="math">Math</option>
         <option value="writing">Writing</option>
      </select>
      <h3><label for="level" class ="control-label">Level:</label></h3>
      <select id = "level" class="form-control" name="level">
         <option style = "white-space: nowrap; ">Level</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
      </select>
      <h3><label for="day" class ="control-label">Day:</label></h3>
      <select id = "day" class="form-control" name="day">
         <option style = "white-space: nowrap; ">Day</option>
         <option value="1">Saturday</option>
         <option value="2">Sunday</option>
      </select>
      <h3><label for="location" class ="control-label">Location:</label></h3>
      <select id = "location" class="form-control" name="location">
         <option style = "white-space: nowrap; ">Location</option>
         <option value="location1">Location 1</option>
         <option value="location2">Location 2</option>
         <option value="location3">Location 3</option>
      </select>
      <h3>Submitting Test Grades For ___</h3>
      <form class="form-horizontal" role="form">
         <div class="form-group">
            <!--We need to query all students in the same class -->
            <!--We also need to see how we can put check boxes without titles in a single column after the name-->
         </div>
         <br/>
         <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-default">Submit</button>
         </div>
      </form>
      </div>
      </div>
      <div class = "row justify-content-center">
      <div class = "col-10">
      &nbsp;
      <table class = 'table'>
         <thead>
            <tr>
               <th scope='col'>ID</th>
               <th scope='col'>First</th>
               <th scope='col'>Last</th>
               <th scope='col'>Location</th>
               <th scope='col'>Score</th>
            </tr>
         </thead>
         <tbody id = "showUsers">
            <tr>
               <th scope='col'>123456789</th>
               <th scope='col'>John</th>
               <th scope='col'>Doe</th>
               <th scope='col'>1</th>
               <th><input type="text" id="grade" name="class[]"></input></th>
            </tr>
            <tr>
               <th scope='col'>569742368</th>
               <th scope='col'>Peter</th>
               <th scope='col'>Luger</th>
               <th scope='col'>1</th>
               <th><input type="text" id="grade" name="class[]"></input></th>
            </tr>
         </tbody>
      </table>
      <script>
         var x = 0;
                  function reveal_options(x) {
         	if(x == shsat || x == psat || x == sat)
                          document.getElementById("subject").style.visibility="none";
                          document.getElementById("level").style.visibility="none";
                  }
      </script>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>
