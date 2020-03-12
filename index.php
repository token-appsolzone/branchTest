<html>
<head>
<title>PayPal Subscription Button for Recurring Payments</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="main">
<center><h1>PayPal Subscription Button for Recurring Payments</h1></center>
<div id="container">
<h2>News paper Subscription</h2>
<hr/>
<div id="book_container">
<center> <h3>Times News</h3></center>
<img src="images/9.jpg" id="product_img" />
<hr class="type_1">
<form action="process.php" method="POST">
<div class="fgrow">
<span>Select a Plan :-</span>
<select id="select_plan" name="select_plan">
<option value="Daily">Daily
</option>
<option value="Weekly">Weekly
</option>
<option value="Monthly">Monthly
</option>
<option value="Yearly">Yearly
</option>
</select>
</div>
<div class="fgrow">
<span>After How Many Cycles Should Billing Stop ?</span>
<select id="select_cycles" name="select_cycles">
<option value="">Never
</option>
<?php for ($i = 2; $i <= 30; $i++) { ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?>
</option>
<?php } ?>
</select>
</div>
<input type="submit" value="Subscrive ($5/Day)" name="submit" id="subscribe">
</form>
</div>
<div id="book_container">
<center> <h3>Times News Paper Subscription Details</h3></center>
<hr class="type_1">
<ul>
<li><b>Daily</b></li>
<P class="mrtpbt">If you pay daily,<br>Then Paper Cost is <b>$0.01/Day.</b></P>
<li><b>Weekly</b></li>
<P class="mrtpbt">If you pay Weekly,<br>Then Paper Cost is <b>$0.02/Week.</b></P>
<li><b>Monthly</b></li>
<P class="mrtpbt">If you pay Monthly,<br>Then Paper Cost is <b>$0.03/Month.</b></P>
<li><b>Yearly</b></li>
<P class="mrtpbt">If you pay Yearly,<br>Then Paper Cost is <b>$0.04/Year.</b></P>
</ul>
<br>
<i> Note : Amount will take 1st day of every Month/Year/Week</i>
</div>
</div>
<img id="paypal_logo" style="margin-top: -30;" src="images/secure-paypal-logo.jpg">
</div>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#select_plan').on('change', function() {
if (this.value === 'Daily') {
$('input#subscribe').val('Subscrive ($0.01/Day)');
} else if (this.value === 'Weekly') {

$('input#subscribe').val('Subscrive ($0.02/Week)');
} else if (this.value === 'Monthly') {

$('input#subscribe').val('Subscrive ($0.03/Month)');
} else if (this.value === 'Yearly') {
$('input#subscribe').val('Subscrive ($0.04/Year)');
}
});
});
</script>
</body>
</html>