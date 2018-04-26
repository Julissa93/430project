<?php
   session_start();
   include('fcns.php');
   showHeader();
   ?>
<div class = "row d-flex align-items-center" style = "background-color: #64F7B0; padding-right: 0 !important; margin-right: 0 !important;   ">
<div class = "col-2">
   <div class="sidenav"style = "background-color: #05B5BA">
      <div class = "text-center text-primary"><i class="fas fa-graduation-cap fa-7x" style = "background-color: #64F7B0"></i></div>
      &nbsp;
      <?php echo "<h2 style = 'color: white; '> Hello, ".$_SESSION['valid_user']."</h2>"; ?>
      <button class="dropdown-btn" >Users
      <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container" style = "background-color: #64F7B0">
         <a href="">Add Person</a>
         <a href="#searchUsers" id = "searchUsers">Search Person</a>
         <a href="#">Remove Person</a>
      </div>
      <button class="dropdown-btn">Billing
      <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container" style = "background-color: #64F7B0">
         <a href="#">Register</a>
         <a href="#">Edit</a>
         <a href="#">Refund</a>
      </div>
      <button class="dropdown-btn">Submit
      <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container" style = "background-color: #64F7B0">
         <a href="#">Attendance</a>
         <a href="#">Grades</a>
      </div>
      <button class="dropdown-btn">Our Mission
      <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container" style = "background-color: #64F7B0">
         <a href="aboutUs.html">About Us</a>
         <a href="hoursOfOperation.html">Hours of Operation</a>
         <a href="classInfo.html">This Semester</a>
      </div>
      <button type = "button" class = "btn btn-primary float-left"  ><i class="fas fa-sign-out-alt"></i> Sign Out</button>
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
         $("#display").load("/430project/searchPerson.php");
       });
   });
</script>
<?php showFooter();  ?>
