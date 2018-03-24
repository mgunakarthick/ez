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
<section class="container pay">
	<h1>Bill Payment</h1>
	<div class="row">			
			<div class="col-md-3 mb30">
				 <div class="confirm">
	             	<label>State</label>
	             	<p><strong>Tamilnadu</strong></p>
	             </div>
			</div>
			<div class="col-md-3 mb30">
				  <div class="confirm">
	             	<label>Consumer Number</label>
	             	<p><strong>98847824112</strong></p>
	             </div>
			</div>
			<div class="col-md-3 mb30">
				  <div class="confirm">
	             	<label>Amount</label>
	             	<p><strong>Rs. 200</strong></p>
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
	</div>
</section>


<?php include "footer.php" ?>
</body>
</html>

