<?php
include('../db_functions/fcns.php');
?>

<div class = "container">
  <h3 class = "text-center">Search</h3>


  <div class = "row justify-content-center">
    <div class = "col-6">
      <form method = "post" action = "" id="theform">
         <div class="form-group" >
            <label for="search_user_id" class ="control-label">Enter user ID:</label>
            <br>
            <input type="text" class="form-control" id="search_bill_id" name = "search" placeholder="Search">
         </div>
         <button type='submit' id = "searchButton" class='btn btn-block btn-primary' name = 'submit'>Submit</button>
       </form>
    </div>
  </div>

  <div class = "row justify-content-center" style = "height: 100%; ">
    <div class = "col-6" id = "">


          &nbsp;
                <table class = 'table table-hover'>
                  <thead>
                  <tr>
                    <th scope='col'>Bill ID</th>
                    <th scope='col'>First</th>
                    <th scope='col'>Last</th>
                    <th scope='col'>Amount</th>
                    <th scope='col'>Paid</th>
                    <th scope='col'></th>
                  </tr>
                </thead>
                <tbody id = "showBills">
                </tbody>
              </table>




    </div>
  </div>
</div>


      <!-- Modal -->
      <div class="modal fade" id="billModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModal3Label">Pay Bill</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div id = "notificationBox2"></div>
            <div class="modal-body" id = 'billstuff'>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
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

function getBillInfo(bill_id)
{
  var bill = $(bill_id).find('input[name=bill_id]').val();


    $.ajax({
      type: 'post',
      url: '../db_functions/displayBillSql.php',
      data: { billid : bill },
      success: function (data) {
        $("#billstuff").html(data);
        $('#billModal').modal('toggle');
      }
    });
}

function payBill()
{
  alert('success');
    $("#notificationBox2").html("<div class='alert alert-success'><strong>Success! </strong>Bill has been paid.</div>");


  setTimeout(function(){
                $("#notificationBox2").fadeOut(2500, function(){
                    $("#notificationBox2").html("");
                    $("#notificationBox2").show();
                });
              }, 3000);
}
</script>
