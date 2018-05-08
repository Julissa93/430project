<?php
   session_start();
   include('fcns.php');
   showHeader();
   ?>
<body class = "dashboard-body">
<div class = "container-fluid">
<div class = "row d-flex align-items-center">
  <div class = "col-2">
     <div class="sidenav" style = "background-color: #3a4651">
        <div class = "text-center text-primary"><i class="fas fa-graduation-cap fa-7x" ></i></div>
        &nbsp;
        <div class="container">
              <?php echo "<h2 style = 'color: white; '> Hello, ".$_SESSION['valid_user']."</h2>"; ?>
        </div>
        <hr />

        <!-- EMPLOYEE SECTION SHOULD ONLY BE SEEN BY ADMINS-->
        <button class="dropdown-btn" >Employees
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
           <a href="#addPerson" id = "addPerson">Add</a>
           <a href="#searchUsers" id = "searchUsers">Search</a>
        </div>

        <!--STUDENT SECTION CAN BE SEEN BY ADMINS AND EMPLOYEES-->
        <button class="dropdown-btn">Students
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container" >
           <a href="#registerStudent" id = "registerStudent">Add Student</a>
           <a href="#addClass" id = "addClass">Add Class</a>
           <a href="#bills" id = "bills">Billing</a>
        </div>

        <button class="dropdown-btn">Submit
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container" >
           <a href="#attendance" id = "attendance">Attendance</a>
           <a href="#grades" id = "grades">Grades</a>
        </div>
        <button class="dropdown-btn">Our Mission
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
          <button type = "button" class = "btn btn-primary" onclick="window.location.href='../index.php'" ><i class="fas fa-sign-out-alt"></i> Sign Out</button><br><br>
        </div>
        <!--<div class="container">
          <button type = "button" class = "btn btn-primary float-left">Change Password</button>
        </div>-->


     </div>
  </div>
<div class = "col-10">
  <div id = "display">

    <iframe class = "center" src="https://calendar.google.com/calendar/embed?src=julissa.napoletano%40gmail.com&ctz=America%2FNew_York" style="border: 0" width="700" height="550" frameborder="0" scrolling="no" padding-top: "100px"; ></iframe>
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
<br>
Details: <a href="#" target="_blank">Hope.com</a>
</div>
    </li>
</ul>
  </div>
</div>

</div>
</div>
<script>
   //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
   var dropdown = document.getElementsByClassName("dropdown-btn");
   var i;

   for (i = 0; i < dropdown.length; i++) {
     dropdown[i].addEventListener("click", function() {
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
<?php showFooter();  ?>
