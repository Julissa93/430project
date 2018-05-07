<?php
include('../db_functions/fcns.php');
?>

     <div class = "container">
        <h3 class = "text-center">Search</h3>


        <div class = "row justify-content-center">
          <div class = "col-8">
            <form method = "post" action = "" id="theform">
               <div class="form-group" >
                  <label for="search_user_id" class ="control-label">Enter user ID:</label>
                  <br>
                  <input type="text" class="form-control" id="search_bill_id" name = "search" placeholder="Search">
               </div>
               <button type='submit' id = "searchButton" class='btn btn-primary' name = 'submit'>Submit</button>
             </form>
          </div>
        </div>

        <div class = "row justify-content-center" style = "height: 100%; ">
          <div class = "col-10" id = "showBills">


                &nbsp;
                      <table class = 'table'>
                        <thead>
                        <tr>
                          <th scope='col'>Bill ID</th>
                          <th scope='col'>First</th>
                          <th scope='col'>Last</th>
                          <th scope='col'>View Bill</th>
                        </tr>
                      </thead>
                      <tbody id = "showUsers">
                      </tbody>
                    </table>




          </div>
        </div>
      </div>

<script>
$('#theform').submit(function () {

  event.preventDefault();


  $.ajax({
    type: 'post',
    url: 'searchBillSql.php',
    data: $('#theform').serialize(),
    success: function (data) {
      $("#showBills").html(data)
    }
  });

});
</script>
