<?php
include('fcns.php');
$conn = connect();

$bill_id = $_POST['billid'];
echo $bill_id;
$sql = "select amount, paid from bills where bill_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $bill_id);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($amount, $paid);
echo $amount;
echo $paid;

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
                    <strong>Elf Cafe</strong>
                    <br>
                    2135 Sunset Blvd
                    <br>
                    Los Angeles, CA 90026
                    <br>
                    <abbr title='Phone'>P:</abbr> (213) 484-6829
                </address>
            </div>
            <div class='col-xs-6 col-sm-6 col-md-6 text-right'>
                <p>
                    <em>Date: 1st November, 2013</em>
                </p>
                <p>
                    <em>Receipt #: 34522677W</em>
                </p>
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
                        <th>Product</th>
                        <th>#</th>
                        <th class='text-center'>Price</th>
                        <th class='text-center'>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class='col-md-9'><em>Baked Rodopa Sheep Feta</em></h4></td>
                        <td class='col-md-1' style='text-align: center'> 2 </td>
                        <td class='col-md-1 text-center'>$13</td>
                        <td class='col-md-1 text-center'>$26</td>
                    </tr>
                    <tr>
                        <td class='col-md-9'><em>Lebanese Cabbage Salad</em></h4></td>
                        <td class='col-md-1' style='text-align: center'> 1 </td>
                        <td class='col-md-1 text-center'>$8</td>
                        <td class='col-md-1 text-center'>$8</td>
                    </tr>
                    <tr>
                        <td class='col-md-9'><em>Baked Tart with Thyme and Garlic</em></h4></td>
                        <td class='col-md-1' style='text-align: center'> 3 </td>
                        <td class='col-md-1 text-center'>$16</td>
                        <td class='col-md-1 text-center'>$48</td>
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
                            <strong>$6.94</strong>
                        </p>
                        <p>
                            <strong>$6.94</strong>
                        </p></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td class='text-right'><h4><strong>Total: </strong></h4></td>
                        <td class='text-center text-danger'><h4><strong>$31.53</strong></h4></td>
                    </tr>
                </tbody>
            </table>
            <button type='button' class='btn btn-success btn-lg btn-block'>
                Pay Now   <span class='glyphicon glyphicon-chevron-right'></span>
            </button></td>
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
                                <label for='cardExpiry'><span class='hidden-xs'>EXPIRATION</span><span class='visible-xs-inline'>EXP</span> DATE</label>
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
                            <button class='subscribe btn btn-success btn-lg btn-block' type='button'>Pay Bill</button>
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
