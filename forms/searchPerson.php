<?php
include('../db_functions/fcns.php');
showHeader();
?>

     <div class = "container">
        <h3 class = "text-center">Search</h3>
        <div class = "row justify-content-center">
          <div class = "col-8">
            <form method = "post" action = "" id="theform">
               <div class="form-group" >
                  <label for="search_user_id" class ="control-label">Enter the ID of the person you want to find:</label>
                  <br>
                  <input type="text" class="form-control" id="search_user_id" name = "search" placeholder="Search">
               </div>
               <button type='submit' id = "searchButton" class='btn btn-primary' name = 'submit'>Submit</button>
             </form>
          </div>
        </div>
        <div class = "row justify-content-center" style = "height: 100%; ">
          <div class = "col-12" id = "showUsers">

          </div>
        </div>
      </div>

<?php showFooter(); ?>
      <script>
        $('#theform').submit(function () {
          event.preventDefault();
          $.ajax({
            type: 'post',
            url: '../db_functions/search.php',
            data: $('#theform').serialize(),
            success: function (data) {
              $("#showUsers").html(data)
            }
          });
        });
      </script>
   </body>
</html>
