<?php
//if (isset($_POST['submit'])) {
//$total_cycle = $_POST['select_cycles'];
//$total_cycle = "";
$product_name = $_POST['select_plan'];
$product_currency = 'USD';

$cycle = 'M';
$cycle_amount = 0.01;

// if ($_POST['select_plan'] == 'Silver') {
// $cycle_amount = 0.01;

// } else if ($_POST['select_plan'] == 'Gold') {
// $cycle_amount = 0.02;

// } else if ($_POST['select_plan'] == 'Monthly') {
// $cycle_amount = 0.03;

// } else if ($_POST['select_plan'] == 'Yearly') {
// $cycle_amount = 0.04;

// }
//Here we can use PayPal URL or sandbox URL.
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
//Here we can used seller email id.
$merchant_email = 'sb-iegd51047215@business.example.com';
//here we can put cancel URL when payment is not completed.
$cancel_return = "http://localhost/test/paypal/index.php";
//here we can put cancel URL when payment is Successful.
$success_return = "http://localhost/test/paypal/success.php";
?>
<div style="margin-left: 38%"><img src="Spinner-1s-200px.gif"/></div>
<form name = "myform" action = "<?php echo $paypal_url; ?>" method = "post" target = "_top">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type = "hidden" name = "business" value = "<?php echo $merchant_email; ?>">
<input type="hidden" name="lc" value="IN">
<input type = "hidden" name = "item_name" value = "<?php echo $product_name; ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="src" value="1">

<input type="hidden" name="a3" value="<?php echo $cycle_amount; ?>">
<input type="hidden" name="p3" value="1">
<input type="hidden" name="t3" value="<?php echo $cycle; ?>">
<input type="hidden" name="invoice" value="userSId">
<input type="hidden" name="currency_code" value="<?php echo $product_currency; ?>">
<input type = "hidden" name = "cancel_return" value = "<?php echo $cancel_return ?>">
<input type = "hidden" name = "return" value = "<?php echo $success_return; ?>">
<input type="hidden" name="bn" value="PP-SubscriptionsBF:btn_subscribeCC_LG.gif:NonHostedGuest">
</form>
<script type="text/javascript">
document.myform.submit();
</script>
<?php //}
?>