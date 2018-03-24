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
			<div class="rechwallet"><a href="#"><img src="images/money-transfer-b.png" width="40" /> Rs.0</a></div>  
		<h1>Money Transfer</h1> 

		<ul class="nav nav-tabs responsive" id="myTab">
			<li class="active"><a href="#talktime">Transfer Fund</a></li>
			<li><a href="#offer">Add Money</a></li>
			<li><a href="#benelist">Beneficiary List</a></li>
			
		</ul>

		<div class="tab-content responsive money">
		 
		  <div class="tab-pane active" id="talktime">
		  		<h3>Money Transfer to Other account</h3>
		  		<div class="sus-msg">
					<p>Money added successfully.</p>
				</div>
				<div class="err-msg">
					<p>Some went wrong.Please try again some time.</p>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div>
				  			<label>Mobile Number</label>
				  			<input type="text" value="" />
				  		</div>
				  		<div>
				  			<label>Amount</label>
				  			<input type="text" value="0.00" />
				  		</div>
					</div>
					<div class="col-md-6">
						<div>
				  			<label>Select Beneficiary</label>
				  			<select>
				  				<option>Select Beneficiary Name</option>
				  				<option>Name 1</option>
				  				<option>Name 2</option>
				  			</select>
				  		</div>
						<div>
				  			<label>Beneficiary Account Number</label>
				  			<input type="text" value="" />
				  			<div class="Beneficiary"><a href="add-beneficiary.php" class="bene">Add Beneficiary</a></div>
				  		</div>
					</div>
				</div>		  		
		  		<div>
		  			<form action="money-transfer-confirm.php">		  			
		  				<input type="submit" value="Transfer Money" />
		  			</form>
		  		</div>
		  	</div>
		 
		  <div class="tab-pane " id="offer">
		  		<h3>Add Money to Wallet for Transfer</h3>
		  		<div class="sus-msg">
					<p>Money added successfully.</p>
				</div>
				<div class="err-msg">
					<p>Some went wrong.Please try again some time.</p>
				</div>		  		
		  		<div>
		  			<label>Amount</label>
		  			<input type="text" value="0.00" />
		  		</div>
		  		<div>		  			
		  			<input type="submit" value="Add Money" />
		  		</div>
		  	</div>

		  	 <div class="tab-pane" id="benelist">
		  	 			<div class="Beneficiary"><a href="add-beneficiary.php" class="bene">Add Beneficiary</a></div>
				  		<div class="table-responsive">          
						  <table class="table">
						    <thead>
						      <tr>
						        <th>#</th>
						        <th>Mbile Number</th>
						        <th>Name</th>
						        <th>Account Number</th>
						        <th>Edit</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>1</td>
						        <td>5345334534</td>
						        <td>Suresh</td>
						        <td>00989989990033</td>
						        <td>
						        	<a href="#" data-toggle="modal" data-target="#delete"><img src="images/dustbin.png" width="25"></a>
						        </td>
						      </tr>
						        <tr>
						        <td>2</td>
						        <td>7878909090</td>
						        <td>Suresh</td>
						        <td>00989989990033</td>
						        <td>
						        	<a href="#" data-toggle="modal" data-target="#delete"><img src="images/dustbin.png" width="25"></a>
						        </td>
						      </tr>
						    </tbody>
						  </table>
				  	</div>
				  </div>
		  </div>		  
		</div>
	
		</div>
	</div>
</section>


<?php include "footer.php" ?>
<!-- Modal -->
<div id="delete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Beneficiary</h4>
      </div>
      <div class="modal-body">
        <p class="names">Beneficiary Name: <strong>Suresh</strong></p>
   		<p class="delete">Are you sure want to delete this beneficiary</p>
   		<div class="beneBtn">
   			<a class="yes" href="#">Yes</a>
   			<a class="no" href="#">No</a>
   		</div>
      </div>     
    </div>

  </div>
</div>

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

