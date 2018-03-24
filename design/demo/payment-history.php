<!DOCTYPE html>
<html>
<head>
<title>Eazy-pay - Verify Mobile</title>
<?php include "style.php" ?>
</head>
<body>
<section class="backimages">
	<?php include "header.php" ?>
</section>
<?php include "submenu.php"; ?>
<section class="container account">
	<h1>Payment Summary</h1>
	<div class="row">
		<div class="col-md-4">
			<ul>
				<li><a href="Profile.php">My Profile</a></li>
				<li><a href="change-password.php">Change Password</a></li>
				<li><a href="Verify-mobile.php">Verify Mobile</a></li>
				<li class="active"><a href="payment-history.php">Payment History</a></li>
			</ul>
		</div>
		<div class="col-md-8">
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>s#</th>
						<th>Opt Service</th>
						<th>Paid Amount</th>
						<th>Mode of Payment</th>
						<th>Transaction ID</th>
						<th>Status</th>
					</tr>
					<tr>
						<td>1</td>
						<td>DTH - airtel Digital TV</td>
						<td>Rs. 230</td>
						<td>Credit Card</td>
						<td>34232342</td>
						<td><span class="status status-s">Success</span></td>
					</tr>
					<tr>
						<td>2</td>
						<td>ACT Broadband</td>
						<td>Rs. 230</td>
						<td>Credit Card</td>
						<td>34232342</td>
						<td><span class="status status-f">Failed</span></td>
					</tr>
				</table>
			</div>			
		</div>
	</div>
</section>


<?php include "footer.php" ?>
</body>
</html>

