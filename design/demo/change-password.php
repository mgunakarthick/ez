<!DOCTYPE html>
<html>
<head>
<title>Eazy-pay - Change Password</title>
<?php include "style.php" ?>
</head>
<body>
<section class="backimages">
	<?php include "header.php" ?>
</section>
<?php include "submenu.php"; ?>
<section class="container account">
	<h1>Change Password</h1>
	<div class="row">
		<div class="col-md-4">
			<ul>
				<li><a href="Profile.php">My Profile</a></li>
				<li class="active"><a href="change-password.php">Change Password</a></li>
				<li><a href="Verify-mobile.php">Verify Mobile</a></li>
				<li><a href="payment-history.php">Payment History</a></li>
			</ul>
		</div>
		<div class="col-md-8">
			<div class="sus-msg">
				<p>Your password has been updated successfully.</p>
			</div>
			<div class="err-msg">
				<p>Some went wrong.Please try again some time.</p>
			</div>
			<div>
				<label>Old Password</label>
				<input type="Password" />
			</div>
			<div>
				<label>New Password</label>
				<input type="Password" />
			</div>
			<div>
				<label>Confirm Password</label>
				<input type="Password"  />
			</div>
			
			<div>
				<input type="submit" value="Save" />
			</div>
		</div>
	</div>
</section>


<?php include "footer.php" ?>
</body>
</html>

