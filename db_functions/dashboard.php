<?php
   session_start();
   include('fcns.php');
   showHeader();
   ?>
<div class = "row d-flex align-items-center">
  <div class = "col-2">
     <div class="sidenav" style = "background-color: #3a4651">
        <div class = "text-center text-primary"><i class="fas fa-graduation-cap fa-7x" ></i></div>
        &nbsp;
        <?php echo "<h2 style = 'color: white; '> Hello, ".$_SESSION['valid_user']."</h2>"; ?>
        <!-- EMPLOYEE SECTION SHOULD ONLY BE SEEN BY ADMINS-->
        <button class="dropdown-btn" >Employees
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
           <a href="#addPerson" id = "addPerson">Add</a>
           <a href="#searchUsers" id = "searchUsers">Search</a>
           <a href="#">Edit</a>
        </div>

        <!--STUDENT SECTION CAN BE SEEN BY ADMINS AND EMPLOYEES-->
        <button class="dropdown-btn">Students
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container" >
           <a href="#registerStudent" id = "registerStudent">Add Student</a>
           <a href="#addClass" id = "addClass">Add Class</a>
           <a href="#">Billing</a>
        </div>

        <button class="dropdown-btn">Submit
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container" >
           <a href="#">Attendance</a>
           <a href="#">Grades</a>
        </div>
        <button class="dropdown-btn">Our Mission
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container" >
           <a href="#aboutUs" id="aboutUs">About Us</a>
           <a href="hoursOfOperation.html">Hours of Operation</a>
           <a href="classInfo.html">This Semester</a>
           <a href="contact_us.html">Contact Us</a>
        </div>
        <button type = "button" class = "btn btn-primary float-left"  ><i class="fas fa-sign-out-alt"></i> Sign Out</button><br><br>
		  <button type = "button" class = "btn btn-primary float-left">Change Password</button>
     </div>
  </div>
<div class = "col-10">
  <div id = "display">
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
     $('#aboutUs').click(function(){
       $('#display').load("../html_files/aboutUs.html");
     });
   });



</script>
<?php showFooter();  ?>
