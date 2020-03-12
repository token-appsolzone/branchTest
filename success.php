<html>
<head>
<title>PayPal Subscription Button for Recurring Payments</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
if (!empty($_REQUEST)) {
echo $product_no = $_REQUEST['item_number']; // Product ID
echo $product_transaction = $_REQUEST['tx']; // Paypal transaction ID
echo $product_price = $_REQUEST['amt']; // Paypal received amount value
echo $product_currency = $_REQUEST['cc']; // Paypal received currency type
echo $product_status = $_REQUEST['st']; // Paypal product status
}
?>
<div id="main">
<h1 style="margin-left: -6%;">PayPal Subscription Button for Recurring Payments</h1>

<div id="return">

<h2>News paper Subscription</h2>
<hr/>
<?php
//Rechecking the product price and currency details
if ($_REQUEST['st'] == 'Completed') {
echo "<h3 id='success'>Payment SuccessFul</h3>";
echo "<P>Transaction Status - " . $product_status . "</P>";
echo "<P>Transaction Id - " . $product_transaction . "</P>";
echo "<div class='back_btn'><a href='index.php' id= 'btn'><< Back</a></div>";
} else {
echo "<h3 id='fail'>Payment Failed</h3>";
echo "<P>Transaction Status - Inompleted</P>";
echo "<P>Transaction Id - " . $product_transaction . "</P>";
echo "<div class='back_btn'><a href='index.php' id= 'btn'><< Back</a></div>";
}
?>
</div>
<!-- Right side div -->
<div id="formget">
<a href=https://www.formget.com/app><img src="images/formget.jpg" alt="Online Form Builder"/></a>
</div>
</div>
</body>
</html>