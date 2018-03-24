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
			<h1>Datacard Recharge</h1>
      <div class="styled-input-single">
        <input type="radio" name="fieldset-1" id="radio-example-one" checked="checked" />
        <label for="radio-example-one">Postpaid</label>
        
      </div>
      <div class="styled-input-single">
      	<input type="radio" name="fieldset-1" id="radio-example-two" />
        <label for="radio-example-two">Prepaid</label>
      </div>
	
		<div class="row">
			<div class="col-md-4 mb30">
				<div class="input-text">
					<label>Datacard Number</label>
					<input type="text" placeholder="Datacard Number" />
				</div>
			</div>
			<div class="col-md-3 mb30">
				<div>
                <label>Operator <span class="color-red">*</span></label>
                    <select class="form-control">
	                 	 <option value="0">Airtel</option>
	                     <option value="1">Aircel</option>
	                     <option value="2">Vodafone</option>
	                     <option value="3">Jio</option>
	                     <option value="4">Idea</option>
                  </select>
               </div>
			</div>
			<div class="col-md-3 mb30">
				<div>
                <label>Circle <span class="color-red">*</span></label>
                    <select class="form-control">
	                 	 <option value="0">Chennai</option>
	                     <option value="1">Mumbai</option>
	                     <option value="2">Bangalore</option>
                  </select>
               </div>
			</div>
			<div class="col-md-2 mb30">
				<div  class="input-text">
	             	<label>Amount</label>
					<input type="text" placeholder="Amount" value="0" />
				</div>
			</div>
			<div class="col-md-3 mb30">
				<div class="button">
					<form action="data-payment.php">
						<input type="submit" class="btn" value="Proceed" />
					</form>
				</div>
			</div>
		</div>
		<h2>Browse Plans of Vodafone - Chennai</h2>
			<ul class="nav nav-tabs responsive" id="myTab">				  
				  <li><a href="#3gdata">3G/4G Data</a></li>
				  <li><a href="#2gdata">2G Data</a></li>
			</ul>

			<div class="tab-content responsive">				  
				  <div class="tab-pane active" id="3gdata">
				  	<div class="table-responsive">          
						  <table class="table">
						    <thead>
						      <tr>
						        <th>#</th>
						        <th>Talktime</th>
						        <th>Validity</th>
						        <th>Description</th>
						        <th>Price</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>1</td>
						        <td>100</td>
						        <td>28 Days</td>
						        <td>225 MB 2G data, Post free usage 4p/10KB</td>
						        <td>
						        	<a href="#" class="btn">Rs.120</a>
						        </td>
						      </tr>
						        <tr>
						        <td>2</td>
						        <td>0</td>
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

				  <div class="tab-pane" id="2gdata">
				  	<div class="table-responsive">          
						  <table class="table">
						    <thead>
						      <tr>
						        <th>#</th>
						        <th>Talktime</th>
						        <th>Validity</th>
						        <th>Description</th>
						        <th>Price</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>1</td>
						        <td>120</td>
						        <td>2 Days</td>
						        <td>45 MB 2G data, Post free usage 4p/10KB</td>
						        <td>
						        	<a href="#" class="btn">Rs.120</a>
						        </td>
						      </tr>
						        <tr>
						        <td>2</td>
						        <td>0</td>
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

