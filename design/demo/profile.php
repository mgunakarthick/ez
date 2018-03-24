<!DOCTYPE html>
<html>
<head>
<title>Eazy-pay - DTH Recharge</title>
<?php include "style.php" ?>
</head>
<body>
<section class="backimages">
	<?php include "header.php" ?>
</section>
<?php include "submenu.php"; ?>
<section class="container account">
	<h1>My Profile</h1>
	<div class="row">
		<div class="col-md-4">
			<ul>
				<li class="active"><a href="Profile.php">My Profile</a></li>
				<li><a href="change-password.php">Change Password</a></li>
				<li><a href="Verify-mobile.php">Verify Mobile</a></li>
				<li><a href="payment-history.php">Payment History</a></li>
			</ul>
		</div>
		<div class="col-md-8">
			<div class="sus-msg">
				<p>Your Dara has been updated successfully.</p>
			</div>
			<div class="err-msg">
				<p>Some went wrong.Please try again some time.</p>
			</div>
			<div>
				<label>First Name</label>
				<input type="text" />
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" />
			</div>
			<div>
				<label>Email ID</label>
				<input type="text" value="somename@gmail.com" readonly="" />
			</div>
			<div>
				<label>Mobile Number</label>
				<input type="text" />
			</div>
			<div>
				<label>Gender</label>
				<div class="styled-input-single">
			        <input type="radio" name="gender" id="radio-example-one" checked="checked" />
			        <label for="radio-example-one">Male</label>
			     </div>
			     <div class="styled-input-single">
			        <input type="radio" name="gender" id="radio-example-two" checked="checked" />
			        <label for="radio-example-two">Female</label>
			      </div>
			      <div class="styled-input-single">
			        <input type="radio" name="gender" id="radio-example-three" checked="checked" />
			        <label for="radio-example-three">Third Gender</label>
			      </div>
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

