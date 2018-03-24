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
<section class="container">
	<div class="row">
		<div class="col-12">			
			<h1>My Wallet</h1>			
			<div class="mywallet"><small>Balance on Your Waller:</small><span>Rs 500.00</span></div>	
			<div class="msg">
				<p>Payment received sucessfully.</p>
				<p>Transaction ID: <strong>42342432</strong></p>
				<p>Paid amount: <strong>Rs. 500</strong>. Now Your wallet amount is Rs.500.</p>
			</div> 
			<div class="money">	
				<h3>Add Money to Wallet</h3>		  		
			  	<div class="row" id="offer">
			  		<div class="col-12 col-sm-4">
			  			<label>Enter the Amount</label>
			  			<input type="text" value="0.00" />
			  		</div>
			  		<div class="col-12 col-sm-4 btnsub">		  			
			  			<input type="submit" value="Add Money to Wallet" />
			  		</div>
			  	</div>
			  	<div class="table-responsive border">
			  		<h3>Balance Statement</h3>
			  		<table class="table">
			  			<tr>
			  				<td><strong>Merchant Name</strong></td>
			  				<td><strong>Witddrawl</strong></td>
			  				<td><strong>Deposit</strong></td>
			  				<td><strong>Status</strong></td>
			  				<td><strong>Comment</strong></td>
			  			</tr>
			  			<tr>
			  				<td>Suresh<br/>Transaction ID: 342342</td>
			  				<td>-</td>
			  				<td>Rs.500</td>
			  				<td>Success</td>
			  				<td>Amount add to Wallet</td>
			  			</tr>
			  			<tr>
			  				<td>Suresh<br/>Transaction ID: 342342</td>
			  				<td>Rs.300</td>
			  				<td>-</td>
			  				<td>Success</td>
			  				<td>-</td>
			  			</tr>
			  			<tr>
			  				<td>Suresh<br/>Transaction ID: 342342</td>
			  				<td>-</td>
			  				<td>Rs.125</td>
			  				<td>Success</td>
			  				<td>Order #4695447059 of Movie Tickets (Promocode: CHENNAI125).</td>
			  			</tr>	
			  					  			
			  		</table>
			  	</div>
			</div>		  
		</div>	
	</div>
</section>
<?php include "footer.php" ?>
<script type="text/javascript" src="js/responsive-tabs.js"></script>
</body>
</html>

