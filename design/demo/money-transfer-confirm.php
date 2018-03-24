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
	<h1>Payment Confirmation</h1>
	<div class="row">			
			<div class="col-12 mb30">
					<div class="table-responsive">          
						  <table class="table">						    
						      <tr>
						        <th>Account Number</th>
						        <td>32455234266</td>
						      </tr>
						      <tr>
						        <th>Holder's Name</th>
						        <td>Suresh</td>						        					        
						      </tr>	
						      <tr>
						        <th>IFSC Code</th>
						        <td>NMG00003433</td>
						      </tr>						   
						      <tr>
						        <td>32455234266</td>
						        <td>Suresh</td>						        					        
						      </tr>	
						      <tr>
						        <th>Amount</th>
						        <td>12000</td>
						      </tr>						   
						      <tr>
						        <th>Note</th>
						        <td>For Rent</td>					        
						      </tr>					        
						    
						  </table>
				  	</div>
			</div>

			<div class="clearfix"></div>	
			<div class="col-12 mb30">
				<div class="button">
					<form action="otp-screen.php">
						<input type="submit" class="btn" value="Confirm" />
					</form>
				</div>
			</div>
	</div>
</section>


<?php include "footer.php" ?>
</body>
</html>

