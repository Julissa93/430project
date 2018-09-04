<?php include('../db_functions/fcns.php'); ?>


   <div class="container" >
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
               <div class="form-group">
                  <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                  <input type="text" class="form-control" id="search_user_id" name = "search" placeholder="Search" required>

                </div>
                <div class = "form-group">
                  <button type='submit' id = "searchButton" class='btn btn-primary btn-block' name = 'submit'> Submit</button>
                </div>



            </form>
         </div>

      </div>
      <div class = "row justify-content-center">
        <div class = "col-6">
          &nbsp;
                <table class = 'table table-hover'>
                  <thead>
                  <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>First</th>
                    <th scope='col'>Last</th>
                    <th scope='col'>Location</th>
                    <th scope='col'>Type</th>
                    <th scope='col'></th>
                  </tr>
                </thead>
                <tbody id = "showUsers">
                </tbody>
              </table>

        </div>
      </div>
   </div>


<!-- Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalBody">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="edit_user()">Save changes</button>
      </div>
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


function getUser(id)
{
         //$('.user_row_form').click( function(){
         var user = $(id).find('input[name=user_id]').val();
           //alert(user);
           $.ajax({
             type: 'post',
             url: '../db_functions/getUserSql.php',
             data: { user_id : user },
             success: function(data)
             {

               $('#modalBody').html(data);
               $('#editUserModal').modal('toggle');
             }

           });
         //});
}

function edit_user()
{
  $.ajax({
    type: 'post',
    url: '../db_functions/editUserSql.php',
    data: $('#get_user_form').serialize(),
    success: function(data)
    {
      $('#editUserModal').modal('toggle');
      $("#notificationBox").html("<div class='alert alert-success'><strong>Success! </strong>User has been updated.</div>");
      setTimeout(function(){
        $("#notificationBox").fadeOut(2500, function(){
            $("#notificationBox").html("");
            $("#notificationBox").show();
        });
      }, 3000);
    }
  });
}

   </script>
