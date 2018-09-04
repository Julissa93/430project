<?php
   session_start();
   include('fcns.php');
   ?>
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
</head>

<body>

       <div class="sidenav" id = "sidenav">
         <img src="../images/hat.png" class="rounded-circle mx-auto d-block" alt="HOPE" width="125" height="125" >

         <div class = "sidenav_buttons">
         <button class="dropdown-btn" data-toggle="collapse" data-target="#links" aria-expanded="false" aria-controls="links1"><i class="fa fa-users" aria-hidden="true"></i> Employees
           <i class="fa fa-caret-down"></i>
         </button>
         <div class="collapse" id = "links">
            <a href="#addPerson" id = "addPerson">Add</a>
            <a href="#searchUsers" id = "searchUsers">Search</a>
         </div>

         <button class="dropdown-btn" data-toggle="collapse" data-target="#students" aria-expanded="false" aria-controls="links2"> <i class="fa fa-book" aria-hidden="true"></i> Students
           <i class="fa fa-caret-down"></i>
         </button>
         <div class="collapse" id = "students" >
            <a href="#registerStudent" id = "registerStudent"> Add Student</a>
            <a href="#addClass" id = "addClass">Add Class</a>
            <a href="#bills" id = "bills">Billing</a>
         </div>

         <button class="dropdown-btn" data-toggle="collapse" data-target="#submit" aria-expanded="false" aria-controls="links3"><i class="fa fa-laptop" aria-hidden="true"></i> Submit
         <i class="fa fa-caret-down"></i>
         </button>
         <div class="collapse" id = "submit" >
            <a href="#attendance" id = "attendance">Attendance</a>
            <a href="#grades" id = "grades">Grades</a>
         </div>

         <!--<button class="dropdown-btn" data-toggle="collapse" data-target="#mission" aria-expanded="false" aria-controls="links4"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Our Mission
         <i class="fa fa-caret-down"></i>
         </button>
         <div class="collapse" id = "mission" >
            <a href="#aboutUs" id="aboutUs">About Us</a>
            <a href="#hours" id = "hours">Hours of Operation</a>
            <a href="#semester" id = "semester">This Semester</a>
         </div>-->
       </div>

       </div>


  <div class = "dashboard-body">
    <nav class="navbar navbar-dark bg-dark">
      <button type="button" onclick='openNav()'>
        <i class="fas fa-bars"></i>
      </button>
      <ul class="nav navbar-nav ml-auto" >
        <li class="nav-item ">
          <a class="nav-link " href="#" onclick="window.location.href='logout.php'"><i class="fas fa-sign-out-alt"></i>Sign Out</a>
        </li>
      </ul>
    </nav>

    <div class="main" id = "main" style = "">
       <div class="row justify-content-center">
         <div class = "col-7">
            <iframe src="https://calendar.google.com/calendar/embed?src=julissa.napoletano%40gmail.com&ctz=America%2FNew_York" style=" z-index: 0; border: 0" width="700" height="550" frameborder="0" scrolling="no" padding-top: "100px"; ></iframe>
          </div>
        </div>
    </div>
  </div>



<script>
var navIsOpen = false;

   $(document).ready(function(){
       $("#searchUsers").click(function(){
         $("#main").load("../forms/searchPerson.php");

       });
   });

   $(document).ready(function(){
     $('#addPerson').click(function(){
       $('#main').load("../forms/addPerson.php");
     });
   });

   $(document).ready(function(){
     $('#registerStudent').click(function(){
       $('#main').load("../forms/add_student.php");
     });
   });

   $(document).ready(function(){
     $('#addClass').click(function(){
       $('#main').load("../forms/register_for_classes.php");
     });
   });

   $(document).ready(function(){
     $('#bills').click(function(){
       $('#main').load("../forms/searchBill.php");
     });
   });

    $(document).ready(function(){
     $('#aboutUs').click(function(){
       $('#main').load("../html_files/aboutUs.html");
     });
   });

   $(document).ready(function(){
    $('#hours').click(function(){
      $('#main').load("../html_files/hoursOfOperation.html");
    });
  });

  $(document).ready(function(){
   $('#semester').click(function(){
     $('#main').load("../html_files/classInfo.html");
   });
 });

 $(document).ready(function(){
  $('#contact').click(function(){
    $('#main').load("../html_files/contact_us.html");
  });
});

   $(document).ready(function(){
    $('#attendance').click(function(){
      $('#main').load("../forms/submitAttendance.php");
    });
  });

  $(document).ready(function(){
   $('#grades').click(function(){
     $('#main').load("../forms/submitTestResults.php");
   });
 });

function openNav(){
  document.getElementById("sidenav").style.width = "225px";
  document.getElementById("sidenav").style.display = "block";
  //document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

  $.when(this).then(function(){
    navIsOpen = true;
  });
}

$(document).click(function(e){
  if(navIsOpen){
    if(!(e.target.closest('.sidenav'))){
      closeNav();
      navIsOpen = false;
    }
  }
});

function closeNav(){
  document.getElementById("sidenav").style.display = "none";
  document.body.style.backgroundColor = "rgba(0,0,0,0)";
}

</script>

 </body>

</html>
