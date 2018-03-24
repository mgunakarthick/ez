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
<section class="container recharge">
	<div class="row">
		<div class="col-12">
			<h1>DTH Recharge</h1>      
	
		<div class="row">
			<div class="col-md-3 mb30">
				<div>
                <label>Operator <span class="color-red">*</span></label>
                    <select class="form-control">
	                 	 <option value="0">Airtel Digital TV</option>
	                     <option value="1">Dish TV</option>
	                     <option value="2">Sun Direct</option>
	                     <option value="3">D2H</option>
                  </select>
               </div>
			</div>
			<div class="col-md-4 mb30">
				<div class="input-text">
					<label>DTH Customer ID</label>
					<input type="text" placeholder="Customer ID" />
				</div>
			</div>			
		
			<div class="col-md-2 mb30">
				<div  class="input-text">
	             	<label>Amount</label>
					<input type="text" placeholder="Amount" value="0" />
				</div>
			</div>
			<div class="col-md-3 mb30 pt25">
				<div class="button">
					<form action="dth-payment.php">
						<input type="submit" class="btn" value="Proceed" />
					</form>
				</div>
			</div>
		</div>
		<h2>Browse Plans of Airtel Digital TV</h2>
			<ul class="nav nav-tabs responsive" id="myTab">
				  <li class="active"><a href="#1month">Monthly Pack</a></li>
				  <li><a href="#3month">3 Months Pack</a></li>
				  <li><a href="#6month">6 Months Pack</a></li>
				  <li><a href="#anual">Anuals Pack</a></li>
			</ul>

			<div class="tab-content responsive">
				  <div class="tab-pane active" id="1month">
				  		<div class="table-responsive">          
						  <table class="table">
						    <thead>
						      <tr>
						        <th>#</th>
						        <th>Validity</th>
						        <th>Description</th>
						        <th>Price</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>1</td>
						        <td>1 Month</td>						        
						        <td>Top up: Recharge with Rs 225 and get Rs 235 (Rs 10 extra) in your Airtel DigitalTV account (T&C:-* Customer has to recharge while being in the Active State. * Cash Back will be credited within 48 hours & is only applicable once a month)</td>
						        <td>
						        	<a href="#" class="btn">Rs.225</a>
						        </td>
						      </tr>
						        <tr>
						        <td>2</td>						        
						        <td>28 Days</td>
						        <td>Unlimited Local,STD & Roaming calls within India with Unlimited Data for 28 days.</td>
						        <td>
						        	<a href="#" class="btn">Rs.120</a>
						        </td>
						      </tr>
						    </tbody>
						  </table>
				  	</div>
				  </div>
				  <div class="tab-pane" id="3month">
				  		<div class="table-responsive">          
						  <table class="table">
						    <thead>
						      <tr>
						        <th>#</th>						        
						        <th>Validity</th>
						        <th>Description</th>
						        <th>Price</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>1</td>
						        <td>28 Days</td>
						        <td>Full Talktime</td>
						        <td>
						        	<a href="#" class="btn">Rs.120</a>
						        </td>
						      </tr>
						        <tr>
						        <td>2</td>
						        <td>28 Days</td>
						        <td>Rs.351 National Roaming Full Talktime + 10 Local Vodafone night mins</td>
						        <td>
						        	<a href="#" class="btn">Rs.120</a>
						        </td>
						      </tr>
						    </tbody>
						  </table>
				  	</div>
				  </div>
				  <div class="tab-pane" id="6month">
				  	<div class="table-responsive">          
						  <table class="table">
						    <thead>
						      <tr>
						        <th>#</th>
						        <th>Validity</th>
						        <th>Description</th>
						        <th>Price</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>1</td>
						        <td>28 Days</td>
						        <td>225 MB 2G data, Post free usage 4p/10KB</td>
						        <td>
						        	<a href="#" class="btn">Rs.120</a>
						        </td>
						      </tr>
						        <tr>
						        <td>2</td>
						        <td>28 Days</td>
						        <td>1GB -3G/4G - 5days; Post free usage 4p/10KB. Not additive to existing quota</td>
						        <td>
						        	<a href="#" class="btn">Rs.93</a>
						        </td>
						      </tr>
						    </tbody>
						  </table>
				  	</div>
				  </div>

				  <div class="tab-pane" id="anual">
				  	<div class="table-responsive">          
						  <table class="table">
						    <thead>
						      <tr>
						        <th>#</th>
						        <th>Validity</th>
						        <th>Description</th>
						        <th>Price</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>1</td>
						        <td>2 Days</td>
						        <td>45 MB 2G data, Post free usage 4p/10KB</td>
						        <td>
						        	<a href="#" class="btn">Rs.120</a>
						        </td>
						      </tr>
						        <tr>
						        <td>2</td>
						        <td>8 Days</td>
						        <td>500 MB 3G/4G Data, Post free usage 4p/10KB.</td>
						        <td>
						        	<a href="#" class="btn">Rs.220</a>
						        </td>
						      </tr>
						    </tbody>
						  </table>
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

