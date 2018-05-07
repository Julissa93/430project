<?php
include('fcns.php');
$conn = connect();

$bill_id = $_POST['billid'];
$sql = "select amount, paid from bills where bill_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $bill_id);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($amount, $paid);


while($stmt->fetch())
{


if($paid == 1)
{
  echo "
  <div class='container'>
  <div class='row'>
    <div class='well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3'>
        <div class='row'>
            <div class='col-xs-6 col-sm-6 col-md-6'>
                <address>

                </address>
            </div>
            <div class='col-xs-6 col-sm-6 col-md-6 text-right'>



            </div>
        </div>
        <div class='row'>
            <div class='text-center'>
                <h1>Receipt</h1>
            </div>
            </span>
            <table class='table table-hover'>
                <thead>
                    <tr>
                        <th>Class</th>
                        <th>#</th>
                        <th class='text-center'>Price</th>
                        <th class='text-center'>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class='col-md-9'><em>Class</em></h4></td>
                        <td class='col-md-1' style='text-align: center'> 1 </td>
                        <td class='col-md-1 text-center'>$100</td>
                        <td class='col-md-1 text-center'>$100</td>
                    </tr>

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td class='text-right'>
                        <p>
                            <strong>Subtotal: </strong>
                        </p>
                        <p>
                            <strong>Tax: </strong>
                        </p></td>
                        <td class='text-center'>
                        <p>
                            <strong>$100.00</strong>
                        </p>
                        <p>
                            <strong>$20.00</strong>
                        </p></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td class='text-right'><h4><strong>Total: </strong></h4></td>
                        <td class='text-center text-danger'><h4><strong>$120.00</strong></h4></td>
                    </tr>
                </tbody>
            </table>
        </td>
            ";
}
else
{
  echo "



        <!-- CREDIT CARD FORM STARTS HERE -->
      <div class = 'container'>
        <div class='panel panel-default credit-card-box'>
            <div class='panel-heading display-table' >
                <div class='row display-tr' >
                    <h3 class='panel-title display-td' >Payment Details</h3>
                    <div class='display-td' >
                        <img class='img-responsive pull-right' src='http://i76.imgup.net/accepted_c22e0.png'>
                    </div>
                </div>
            </div>
            <div class='panel-body'>
                <form role='form' id='payment-form' method='POST' action='javascript:void(0);'>
                    <div class='row'>
                        <div class='col-xs-12'>
                            <div class='form-group'>
                                <label for='cardNumber'>CARD NUMBER</label>
                                <div class='input-group'>
                                    <input
                                        type='tel'
                                        class='form-control'
                                        name='cardNumber'
                                        placeholder='Valid Card Number'
                                        autocomplete='cc-number'
                                        required autofocus
                                    />
                                    <span class='input-group-addon'><i class='fa fa-credit-card'></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-xs-7 col-md-7'>
                            <div class='form-group'>
                                <label for='cardExpiry'><span class='hidden-xs'>EXPIRATION</span><span class='visible-xs-inline'></span> DATE</label>
                                <input
                                    type='tel'
                                    class='form-control'
                                    name='cardExpiry'
                                    placeholder='MM / YY'
                                    autocomplete='cc-exp'
                                    required
                                />
                            </div>
                        </div>
                        <div class='col-xs-5 col-md-5 pull-right'>
                            <div class='form-group'>
                                <label for='cardCVC'>CV CODE</label>
                                <input
                                    type='tel'
                                    class='form-control'
                                    name='cardCVC'
                                    placeholder='CVC'
                                    autocomplete='cc-csc'
                                    required
                                />
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-xs-12'>
                            <div class='form-group'>
                                <label for='couponCode'>COUPON CODE</label>
                                <input type='text' class='form-control' name='couponCode' />
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-xs-12'>
                            <button class='subscribe btn btn-success btn-lg btn-block' id = 'payBillButton' onClick = 'payBill()' type='button'>Pay Bill</button>
                        </div>
                    </div>
                    <div class='row' style='display:none;'>
                        <div class='col-xs-12'>
                            <p class='payment-errors'></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
        <!-- CREDIT CARD FORM ENDS HERE -->




  ";
}

}
?>
