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
	<h1>Verify Mobile</h1>
	<div class="row">
		<div class="col-md-4">
			<ul>
				<li><a href="Profile.php">My Profile</a></li>
				<li><a href="change-password.php">Change Password</a></li>
				<li class="active"><a href="Verify-mobile.php">Verify Mobile</a></li>
				<li><a href="payment-history.php">Payment History</a></li>
			</ul>
		</div>
		<div class="col-md-8">
			<div class="sus-msg">
				<p>Your Mobile Number has been updated successfully. We are sent OTP to your register mobile number. Kindly verify your mobile number.</p>
			</div>
			<div class="err-msg">
				<p>Some went wrong.Please try again some time.</p>
			</div>
			<div>
				<label>Mobile Number</label>
				<input type="text" value="9898765454" maxlength="10" />
			</div>
			<div>
				<input type="submit" value="Update" />
				<input type="submit" value="Send OTP" />
			</div>
			<div>
				<label>Enter OTP</label>
				<input type="text" />
			</div>
			<div>
				<input type="submit" value="Submit OTP" />
				<input type="submit" value="Re-Send OTP" />
			</div>
			
			
		</div>
	</div>
</section>


<?php include "footer.php" ?>
</body>
</html>

