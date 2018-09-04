<?php
function connect()
{

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $db = "tutoring_mgmt_sys";

  /*$servername = "us-cdbr-iron-east-05.cleardb.net";
  $username = "bb5158a7d2a4ed";
  $password = "eec665f8";
  $db = "heroku_2178f16907ca82a";*/


  $result = new mysqli($servername, $username, $password, $db);
   if (mysqli_connect_errno())
   {
     throw new Exception('Could not connect to database server');
   }
   else
   {
    //echo "Connected successfully";
     return $result;
   }
}

function showHeader() //shows header html tags so you only have to call function instead of copying and pasting code again.
{
  echo"
  <!doctype html>
  <html lang='en'>
     <head>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
        <link rel = 'stylesheet' href = '../style/style.css'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.10/css/all.css' integrity='sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg' crossorigin='anonymous'>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' crossorigin='anonymous'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js'></script>
        <script src='../scripts/jquery-loading-overlay-master/src/loadingoverlay.js'></script>

         <!--<style type='text/css'>
        body {
         background: url('https://images.pexels.com/photos/877695/pexels-photo-877695.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          background-size: cover;
          -o-background-size: cover;
        }

        </style>-->

     </head>
        <body>
        ";
}

function showFooter() //shows footer html tags so you only have to call function instead of copying and pasting code again.
{
  echo"
  <div id='notificationBox'></div>
  </body>
</html>
  ";
}

function loginForm($errorMessage) //echos login form
{
     echo' <html>
     <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!--font awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
   </head>

    <body class = "bg">
      <div class="container-fluid" >
      <div class = "row justify-content-center " style = "padding: 10%; ">
      <div class = "card col-4 d-flex justify-content-center"  >
    	 <div class=" form row justify-content-center">
				<form role="form" action="index.php" method="post" class = "col-11">
        <br>
          <h4 class = "text-center">Sign In </h4>
            '.$errorMessage.'
						<div class="form-group">
							<input class="form-control" placeholder="Username" id="user_id" name="username" type="text" required autofocus>
						</div>
						<div class="form-group">
								<input class="form-control" placeholder="Password" name="pw" type="password" id ="pin" required value="">
						</div>

            <div class="form-group">
							<button type="submit" class="btn btn-block btn-primary btn-block" name = "submit">Log In</button>
						</div>
          </form> <!-- end form -->
				</div> <!--end row-->
        </div> <!-- end card -->
        </div> <!--end row2 -->
			</div> <!-- end container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>';
}

function showRegisterForClassesForm()
{
  echo"
  <form method = 'post' action = '../db_functions/registerStudentSql.php' id = 'myForm' onsubmit='return checkCheckboxes(); '>
    <div class = 'form-group'>
      <label for='id' class ='control-label'>Enter Student ID: </label>
      <input name = 'student_id' type='text' class='form-control' id='student_id' placeholder='Enter Student ID' required>
    </div>

    <fieldset id = 'checkbox_classes'>
       <legend>Classes the student will take this coming semester:</legend>
       <div class = 'd-inline'>
          <input type='checkbox' id='english' name='class[]' value='english'>
          <label for='english'>English</label>
          <select name='level[]' >
            <option value=''>Select Level</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>

          </select>
       </div>
       <div>
          <input type='checkbox' id='math' name='class[]' value='math'>
          <label for='math'>Math</label>
          <select name='level[]' >
            <option value=''>Select Level</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>

          </select>
       </div>
       <div>
          <input type='checkbox' id='writing' name='class[]' value='writing'>
          <label for='writing'>Writing</label>
          <select name='level[]' >
            <option value=''>Select Level</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>

          </select>
       </div>
       <div>
          <input type='checkbox' id='shsat' name='class[]' value='shsat'>
          <label for='shsat'>SHSAT</label>
          <select name='level[]' >
            <option value=''>Select Day</option>
            <option value='Saturday'>Saturday</option>
            <option value='Sunday'>Sunday</option>


          </select>
       </div>
       <div>
          <input type='checkbox' id='psat' name='class[]' value='psat'>
          <label for='psat'>PSAT</label>
          <select name='level[]'>
            <option value=''>Select Day</option>
            <option value='Saturday'>Saturday</option>
            <option value='Sunday'>Sunday</option>


          </select>
       </div>
       <div>
          <input type='checkbox' id='sat' name='class[]' value='sat'>
          <label for='sat'>SAT</label>
          <select name='level[]' >
            <option value=''>Select Day</option>
            <option value='Saturday'>Saturday</option>
            <option value='Sunday'>Sunday</option>


          </select>
       </div>
    </fieldset>

    <button type='submit' name = 'add_class' class='btn btn-primary form-control'>Register</button>
  </form>
  ";
}

function showSideNav()
{
  echo"
  <div class = 'row d-flex align-items-center'>
    <div class = 'col-2'>
       <div class='sidenav' style = 'background-color: #3a4651'>
          <div class = 'text-center text-primary'><i class='fas fa-graduation-cap fa-7x' ></i></div>
          &nbsp;


          <h2 style = 'color: white; '> Hello, ".$_SESSION['valid_user']."</h2>


          <!-- EMPLOYEE SECTION SHOULD ONLY BE SEEN BY ADMINS-->
          <button class='dropdown-btn' >Employees
            <i class='fa fa-caret-down'></i>
          </button>
          <div class='dropdown-container'>
             <a href='#addPerson' id = 'addPerson'>Add</a>
             <a href='#searchUsers' id = 'searchUsers'>Search</a>
             <a href='#'>Edit</a>
          </div>

          <!--STUDENT SECTION CAN BE SEEN BY ADMINS AND EMPLOYEES-->
          <button class='dropdown-btn'>Students
            <i class='fa fa-caret-down'></i>
          </button>
          <div class='dropdown-container' >
             <a href='#registerStudent' id = 'registerStudent'>Add Student</a>
             <a href='#searchBill' id = 'searchBill'>Add Class</a>
             <a href='#'>Billing</a>
          </div>

          <button class='dropdown-btn'>Submit
          <i class='fa fa-caret-down'></i>
          </button>
          <div class='dropdown-container' >
             <a href='#'>Attendance</a>
             <a href='#'>Grades</a>
          </div>
          <button class='dropdown-btn'>Our Mission
          <i class='fa fa-caret-down'></i>
          </button>
          <div class='dropdown-container' >
             <a href='aboutUs.html'>About Us</a>
             <a href='hoursOfOperation.html'>Hours of Operation</a>
             <a href='classInfo.html'>This Semester</a>
          </div>
          <button type = 'button' class = 'btn btn-primary float-left'  ><i class='fas fa-sign-out-alt'></i> Sign Out</button>
       </div>
    </div>

  ";
}
?>
