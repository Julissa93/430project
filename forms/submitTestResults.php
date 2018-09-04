
<div class = "row justify-content-center">
  <div class = "col-6">
    <h3 class = "text-center">Submit Grades</h3>
      <div class = "section1">
        <label for="grade" class ="control-label">Please select a class to submit grades: </label>
        <select id = "grade" class="form-control" name="grade" onchange="reveal_options()">
           <option style = "white-space: nowrap; ">Select Class</option>
           <option value="Writing">Writing</option>
           <option value="Math">Math</option>
           <option value="English">English</option>
           <option value="shsat">SHSAT</option>
           <option value="psat">PSAT</option>
           <option value="sat">SAT</option>
        </select>
      </div>
      <div class = "section2">
        <label for="level" class ="control-label">Level:</label>
        <select id = "level" class="form-control" name="level">
           <option style = "white-space: nowrap; ">Level</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
        </select>
      </div>
      <div class = "section3">
        <label for="day" class ="control-label">Day:</label>
        <select id = "day" class="form-control" name="day">
           <option style = "white-space: nowrap; ">Day</option>
           <option value="1">Saturday</option>
           <option value="2">Sunday</option>
        </select>
      </div>
      <div class = "section4">
        <label for="location" class ="control-label">Location:</label>
        <select id = "location" class="form-control" name="location" onchange = 'showAttendance()'>
           <option style = "white-space: nowrap; ">Location</option>
           <option value="location1">Location 1</option>
           <option value="location2">Location 2</option>
           <option value="location3">Location 3</option>
        </select>
      </div>
      <div class = "section5">
        &nbsp;
        <form class="form-horizontal" role="form">
           <div class="form-group">
              <!--We need to query all students in the same class -->
              <!--We also need to see how we can put check boxes without titles in a single column after the name-->
           </div>
           <br/>
        </form>

        &nbsp;
        <table class = 'table'>
           <thead>
              <tr>
                 <th scope='col'>ID</th>
                 <th scope='col'>First</th>
                 <th scope='col'>Last</th>
                 <th scope='col'>Location</th>
                 <th scope='col'>Grade</th>
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
        <div class="col-sm-offset-2 col-sm-8">
           <button id = "submit_grade" type="button" class="btn btn-primary">Submit</button>
        </div>


      </div>
</div>
</div> <!--end row-->
<script>
$(document).ready(function(){
  $('.section2').hide();
  $('.section3').hide();
  $('.section4').hide();
  $('.section5').hide();

  $( "#submit_grade" ).click(function() {
    $.LoadingOverlay("show", {
      image       : "",
      background:"rgba(13, 13, 13, 0.8)",
      fontawesomeColor        : "#f2f2f2",
      fontawesomeAnimation: "1000ms rotate_right",
      fontawesome : "fa fa-sync-alt ",
      fontawesomeResizeFactor: 0.5,
    });

    setTimeout(function(){
        $.LoadingOverlay("hide");
    }, 1500);

    setTimeout(function(){
      $("#notificationBox").html("<div class='alert alert-success'><strong>Success! </strong>Grades were submitted!</div>");
    }, 1600);

    setTimeout(function(){
      $("#notificationBox").fadeOut(2500, function(){
          $("#notificationBox").html("");
          $("#notificationBox").show();
      });
    }, 3000);
});
});

function reveal_options()
{
  var selectedClass = $('#grade').val() ;

	if(selectedClass == 'shsat' || selectedClass == 'psat' || selectedClass == 'sat')
  {
    $('.section3').show();
    $('.section4').show();
  }
  else
  {
    $('.section2').show();
    $('.section4').show();

  }
}

function showAttendance()
{
  $('.section5').show();
}
</script>


</body>
</html>
