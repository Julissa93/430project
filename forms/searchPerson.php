<?php include('../db_functions/fcns.php'); ?>


   <div class="container" style="background-color:white; margin-top:60px">
      <div class="row justify-content-center">
         <div class="col-6">
            <form action="" id = "theform" method="post">
              <div class = "form-group">
                  <h3><label for="search" class ="control-label">Search By:</label></h3>
                  <select id = "search" class="form-control" name="search_by" required>
                     <option style = "white-space: nowrap; ">Search By</option>
                     <option value="firstname">First Name</option>
                     <option value="lastname">Last Name</option>
                     <option value = "user_id">ID</option>
                     <option value = "location">Location</option>
                     <option value = "type"> Employee Type</option>
                  </select>
               </div>
               <div class="input-group">
                  <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                  <input type="text" class="form-control" id="search_user_id" name = "search" placeholder="Search" required>
                  <span class="input-group-btn">
                    <button type='submit' id = "searchButton" class='btn btn-primary' name = 'submit'> Submit</button>

                  </span>
               </div>
            </form>
         </div>

      </div>
      <div class = "row justify-content-center">
        <div class = "col-10">
          &nbsp;
                <table class = 'table table-hover'>
                  <thead>
                  <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>First</th>
                    <th scope='col'>Last</th>
                    <th scope='col'>Location</th>
                    <th scope='col'>Type</th>
                  </tr>
                </thead>
                <tbody id = "showUsers">
                </tbody>
              </table>

        </div>
      </div>
   </div>
   <script>
      /*$(document).ready(function() {
          var activeSystemClass = $('.list-group-item.active');

          //something is entered in search form
          $('#system-search').keyup( function() {
             var that = this;
              // affect all table rows on in systems table
              var tableBody = $('.table-list-search tbody');
              var tableRowsClass = $('.table-list-search tbody tr');
              $('.search-sf').remove();
              tableRowsClass.each( function(i, val) {

                  //Lower text for case insensitive
                  var rowText = $(val).text().toLowerCase();
                  var inputText = $(that).val().toLowerCase();
                  if(inputText != '')
                  {
                      $('.search-query-sf').remove();
                      tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                          + $(that).val()
                          + '"</strong></td></tr>');
                  }
                  else
                  {
                      $('.search-query-sf').remove();
                  }

                  if( rowText.indexOf( inputText ) == -1 )
                  {
                      //hide rows
                      tableRowsClass.eq(i).hide();

                  }
                  else
                  {
                      $('.search-sf').remove();
                      tableRowsClass.eq(i).show();
                  }
              });
              //all tr elements are hidden
              if(tableRowsClass.children(':visible').length == 0)
              {
                  tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
              }
          });
      });*/




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
