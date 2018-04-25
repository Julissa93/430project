<?php
function connect()
{
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $db = "tutoring_mgmt_sys";

/*  $servername = "us-cdbr-iron-east-05.cleardb.net";
  $username = "bb5158a7d2a4ed";
  $password = "eec665f8";
  $db = "heroku_2178f16907ca82a";
  */

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
        <link rel = 'stylesheet' href = 'style.css'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.10/css/all.css' integrity='sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg' crossorigin='anonymous'>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
        <script src = '/jSignature/flashcanvas.js'></script>

        <title>Login</title>
     </head>
        <body>
        ";
}

function showFooter() //shows footer html tags so you only have to call function instead of copying and pasting code again.
{
  echo"
  </body>
</html>
  ";
}

function loginForm($errorMessage) //echos login form
{
  showHeader();

  echo"
    <div class='container'>
       <div class='row'>
          <div class='col-sm'>
             <h1>Login</h1>
          </div>
       </div>
       <div class='row'>
          <div class='col-sm'>
             <form method='post' action='index.php'>
                <div class='form-group'>
                   <label for='user_id'>User ID</label>
                   <input type='text' class='form-control' id='user_id' name = 'username' placeholder='Enter ID'>
                </div>
                <div class='form-group'>
                   <label for='pin'>Pin</label>
                   <input type='password' class='form-control' id='pin' name = 'pw' placeholder='Pin'>

                </div>
                <br>
            ".$errorMessage."<br>
                <button type='submit' class='btn btn-primary' name = 'submit'>Submit</button>
             </form>
          </div>
       </div>
    </div>
    ";

    showFooter();
}
?>
