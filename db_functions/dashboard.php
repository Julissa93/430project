<?php
   session_start();
   include('fcns.php');
 
   ?>
<!doctype html>
  <html lang='en'>
     <head>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
       
         <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.10/css/all.css' integrity='sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg' crossorigin='anonymous'>
       
         <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' crossorigin='anonymous'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js'></script>
        <script src='../scripts/jquery-loading-overlay-master/src/loadingoverlay.js'></script>
    
         <link rel = 'stylesheet' href = '../style/style.css'>

        <!-- <style type='text/css'>
        body {
         background: url('https://images.pexels.com/photos/877695/pexels-photo-877695.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          background-size: cover;
          -o-background-size: cover;
        }

        </style>-->
         <title>Login</title>
</head>
<body class = "dashboard-body" >
<div class = "container-fluid">
 <div class="row">
        <div class="col-2">
            <div class="sidenav" style="background-color:#044652">
                <img src="../images/hat.png" class="rounded mx-auto d-block" alt="HOPE" width="180" height="180" style="margin-top:20px;">
                &nbsp;
                <?php echo "<h3 style = 'color: white; '> Hello, ".$_SESSION['valid_user']."</h2>"; ?>
           <small style="color:white">Manager</small>

      

        <!-- EMPLOYEE SECTION SHOULD ONLY BE SEEN BY ADMINS-->
        <button class="dropdown-btn" ><i class="fa fa-users" aria-hidden="true"></i> Employees
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
           <a href="#addPerson" id = "addPerson">Add</a>
           <a href="#searchUsers" id = "searchUsers">Search</a>
        </div>

        <!--STUDENT SECTION CAN BE SEEN BY ADMINS AND EMPLOYEES-->
        <button class="dropdown-btn"> <i class="fa fa-book" aria-hidden="true"></i> Students
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container" >
           <a href="#registerStudent" id = "registerStudent"> Add Student</a>
           <a href="#addClass" id = "addClass">Add Class</a>
           <a href="#bills" id = "bills">Billing</a>
        </div>

        <button class="dropdown-btn"><i class="fa fa-laptop" aria-hidden="true"></i> Submit
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container" >
           <a href="#attendance" id = "attendance">Attendance</a>
           <a href="#grades" id = "grades">Grades</a>
        </div>
        <button class="dropdown-btn"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Our Mission
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container" >
           <a href="#aboutUs" id="aboutUs">About Us</a>
           <a href="#hours" id = "hours">Hours of Operation</a>
           <a href="#semester" id = "semester">This Semester</a>
           <a href="#contact" id = "contact">Contact Us</a>
        </div>
        <hr />
        <div class="container">
          <button style="position: absolute; left: 20%; right: 20%; bottom: 2%;" type = "button" class = "btn btn-primary" onclick="window.location.href='logout.php'" ><i class="fas fa-sign-out-alt"></i> Sign Out</button><br><br>
        </div>
        <!--<div class="container">
          <button type = "button" class = "btn btn-primary float-left">Change Password</button>
        </div>-->
            </div>
            </div>
     </div>
</div>

<div class="main">
 <div class = "col-12">
      <div id = "display">
         <div class="row">
            <div class="col-sm-7 my-7">
                <div class="card">
                                     
                    <div class="card-body">
                      <iframe class = "center" src="https://calendar.google.com/calendar/embed?src=julissa.napoletano%40gmail.com&ctz=America%2FNew_York" style="border: 0" width="700" height="550" frameborder="0" scrolling="no" padding-top: "100px"; ></iframe>

                    </div>
                </div>
            </div>
   
  <div class="col-sm-4 my-4">
                <div class="card">
                                     
                    <div class="card-body">
                      <ul class="widget-area center" style = "float: right; ">
                        <li class="widget">
                             <h3 class="widget-title"><span class="widget-inner">News</span></h3>

                        <div class="widget-contents">Don't forget to submit all grading for all the classes you are teaching by the end of this week!</div>
</li>
                        <li class="widget">
                             <h3 class="widget-title"><span class="widget-inner">Tweets</span></h3>

                            <div class="widget-contents">Grades and attendance must be submitted correctly!</div>
                        </li>
                        <li class="widget">
                             <h3 class="widget-title"><span class="widget-inner">Resources</span></h3>

                            <div class="widget-contents"><a href = "#">How to Manage Time</a></div>
                            <div class="widget-contents"><a href = "#">Tutoring Resources</a></div>
</li>
                        <li class="widget">
                             <h3 class="widget-title"><span class="widget-inner">Contact Us</span></h3>

                          <div class="widget-contents">H.O.P.E<br>
                            2700 Sand Hill Rd<br>
                            Menlo Park, CA 94025<br>
                           
                            Details: <a href="#" target="_blank">Hope.com</a>
                         </div>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
    
      
  </div>
     </div>
     
</div>

</div>

<script>
      var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {

    dropdown[i].addEventListener("click", function () {

    var containers = document.getElementsByClassName("dropdown-container");

    for(var i=0; i<containers.length; i++){

    containers[i].style.display = "none";

    }

    this.classList.toggle("active");

    var dropdownContent = this.nextElementSibling;

    if (dropdownContent.style.display === "block") {

    dropdownContent.style.display = "none";

    } else {

    dropdownContent.style.display = "block";

    }

    });

    }

   jQuery(document).ready(function ($) { //noconflict wrapper
       var widget = {
           news : "rss",
           tweet : "twitter",
           event : "calendar",
           note : "pencil-square-o",
           download : "download",
           contact : "phone",
           setIcon : function(icon) {
               var myreturn;
               Object.keys(this).forEach(function (key) {
                   if(icon===key) {
                       myreturn = '<i class="fa fa-' + widget[key] + ' fa-fw">&nbsp;</i>';
                   }
               });
               return myreturn;
           }
       };

       $('h3:contains("News")').append(widget.setIcon('news'));
       $('.widget-title:contains("Tweets")').append(widget.setIcon('tweet'));
       $('.widget-title:contains("Resources")').append(widget.setIcon('download'));
       $('h3:contains("Contact")').append(widget.setIcon('contact'));

   }); //end noconflict

   $(document).ready(function(){
       $("#searchUsers").click(function(){
         $("#display").load("../forms/searchPerson.php");

       });
   });

   $(document).ready(function(){
     $('#addPerson').click(function(){
       $('#display').load("../forms/addPerson.php");
     });
   });

   $(document).ready(function(){
     $('#registerStudent').click(function(){
       $('#display').load("../forms/add_student.php");
     });
   });

   $(document).ready(function(){
     $('#addClass').click(function(){
       $('#display').load("../forms/register_for_classes.php");
     });
   });

   $(document).ready(function(){
     $('#bills').click(function(){
       $('#display').load("../forms/searchBill.php");
     });
   });

    $(document).ready(function(){
     $('#aboutUs').click(function(){
       $('#display').load("../html_files/aboutUs.html");
     });
   });

   $(document).ready(function(){
    $('#hours').click(function(){
      $('#display').load("../html_files/hoursOfOperation.html");
    });
  });

  $(document).ready(function(){
   $('#semester').click(function(){
     $('#display').load("../html_files/classInfo.html");
   });
 });

 $(document).ready(function(){
  $('#contact').click(function(){
    $('#display').load("../html_files/contact_us.html");
  });
});

   $(document).ready(function(){
    $('#attendance').click(function(){
      $('#display').load("../forms/submitAttendance.php");
    });
  });

  $(document).ready(function(){
   $('#grades').click(function(){
     $('#display').load("../forms/submitTestResults.php");
   });
 });



</script>

 </body>

</html>