<!DOCTYPE html>
<html>
<head>
<title>Eazy-pay - Mobile Recharge</title>
<?php include "style.php" ?>
</head>
<body>
<section class="backimages">
	<?php include "header.php" ?>
</section>
<?php include "submenu.php"; ?>
<section class="container pay">
	<h1>Payment</h1>
	<div class="row">			
			<div class="col-md-3 mb30">
				 <div class="confirm">
	             	<label>Mobile</label>
	             	<p><strong>9884782112</strong></p>
	             </div>
			</div>
			<div class="col-md-3 mb30">
				  <div class="confirm">
	             	<label>Operator</label>
	             	<p><img src="images/aircel.jpg" width="100" /></p>
	             </div>
			</div>
			<div class="col-md-3 mb30">
				  <div class="confirm">
	             	<label>Amount</label>
	             	<p><strong>Rs. 20</strong></p>
	             </div>
			</div>
			<div class="col-md-3 mb30">
				 <div class="button">					
					<form action="login2.php">					
						<input type="submit" class="btn" value="Proceed to Pay" />
					 </form>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-12 mb30 coupon">
				<p class="valid"><span>Success:</span> 20% is Applied</p>
				<div class="input-text">
					<input type="text" placeholder="Apply Coupon Code">
					<input type="submit" class="btn" value="Apply" />
				</div>
				<p class="invalid">Invalid Coupon code</p>
			</div>
		
	</div>
</section>


<?php include "footer.php" ?>
</body>
</html>

