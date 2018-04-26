<?php
session_start();
include('fcns.php');
showHeader();
?>

  <div class = "row d-flex align-items-center" style = "background-color: #111; padding-right: 0 !important; margin-right: 0 !important;   ">
    <div class = "col-8">
      <?php echo "<h1 class = 'text-center' style = 'color: white; '> Hello, ".$_SESSION['valid_user']."</h1>"; ?>
    </div>
    <div class = "col-2">
      <button type = "button" class = "btn btn-primary float-right"  ><i class="fas fa-sign-out-alt"></i> Sign Out</button>
    </div>
  </div>
  <div class = "row">
    <div class = "col-2">
      <div class="sidenav" >
        <div class = "text-center text-primary"><i class="fas fa-graduation-cap fa-7x"></i></div>
        &nbsp;
        <a href="#users" id = "users"><i class="fas fa-user"></i> Users</a>
        <button class="dropdown-btn"><i class="fas fa-money-bill-alt"></i> Billing
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="#">Search</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>

        <button class="dropdown-btn"><i class="far fa-chart-bar"></i> Submit
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="#">Attendance</a>
          <a href="#">Grades</a>
        </div>
        <a href="searchPerson.php"><i class="far fa-calendar-alt"></i> Calendar</a>
        <a href="searchPerson.php"><i class="fas fa-cog"></i> Settings</a>
      </div>
    </div>
    <div class = "col-10">
      <!--Display different pages here using jQuery-->
      <div id = "display">
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

$(document).ready(function(){
    $("#users").click(function(){
      //$("searchPerson.php .container").show();
      $("#display").load("/Applications/MAMP/htdocs/430project/searchPerson.php");
    });
});

</script>

<?php showFooter();  ?>
