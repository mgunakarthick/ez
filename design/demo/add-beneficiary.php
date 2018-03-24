<!DOCTYPE html>
<html>
<head>
<title>Eazy-pay - Data Recharge</title>
<?php include "style.php" ?>
</head>
<body>
<section class="backimages">
	<?php include "header.php" ?>
</section>
<?php include "submenu.php"; ?>
<section class="container recharge">
	<div class="row">
		<div class="col-12">
			<h1>Add Beneficiary</h1>
     	
     	<h3>You can send money to any UPI address or Bank account IFSC code</h3>
		<div class="row">
			<div class="col-md-6 mb30">
				<div class="input-text">
					<label>Account Number</label>
					<input type="text" placeholder="Account Number" />
				</div>
			</div>
			<div class="col-md-6 mb30">
				<div class="input-text">
					<label>Account Holder's Name</label>
					<input type="text" placeholder="Account Name" />
				</div>
			</div>
			<div class="col-md-6 mb30">
				<div class="input-text">
					<label>IFSC Code</label>
					<input type="text" placeholder="IFSC Code" />
				</div>
			</div>		
			
			<div class="col-md-6 mb30">
				<div class="input-text">
					<label>Mobile Number</label>
					<input type="text" placeholder="Mobile" />
				</div>
			</div>
			<div class="col-12 mb30">
				<div class="button">
					<form action="money-transfer.php">
						<input type="submit" class="btn" value="Add" />
					</form>
				</div>
			</div>
		</div>
		
             
		</div>
	</div>
</section>


<?php include "footer.php" ?>
<script type="text/javascript" src="js/responsive-tabs.js"></script>
<script type="text/javascript">
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});
      ( function( $ ) {         
          fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
      } )( jQuery );
</script>
</body>
</html>

