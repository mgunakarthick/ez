<!DOCTYPE html>
<html>
<head>
<title>Eazy-pay - Bill Payment</title>
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
			<h1>Bill Payment</h1>
		<div class="row">
			<div class="col-12 mb30">
				 <div class="styled-input-single">
			        <input type="radio" name="fieldset-1" id="radio-example-one" checked="checked" />
			        <label for="radio-example-one">Electricity Boards</label>
			        
			      </div>
			      <div class="styled-input-single">
			      	<input type="radio" name="fieldset-1" id="radio-example-two" />
			        <label for="radio-example-two">BroadBand Payment</label>
			      </div>
			       <div class="styled-input-single">
			      	<input type="radio" name="fieldset-1" id="radio-example-three" />
			        <label for="radio-example-three">Gas Payment</label>
			      </div>
			</div>
			<div class="col-md-3 mb30">
				<div>
                <label>Select State / Operator <span class="color-red">*</span></label>
                    <select class="form-control">
	                 	 <option value="0">Andrapradesh</option>
	                     <option value="1">Kerala</option>
	                     <option value="2">Karnataka</option>
	                     <option value="3">Telungana</option>
	                     <option value="4">Tamilnadu</option>
                  </select>
               </div>
			</div>
			<div class="col-md-4 mb30">
				<div class="input-text">
					<label>Consumer / Bill Numer <span class="color-red">*</span></label>
					<input type="text" placeholder="Consumer Numer" />
					<p class="invalid">Consumer Number not valid</p>
				</div>
			</div>			
			
			<div class="col-md-2 mb30">
				<div  class="input-text">
	             	<label>Amount <span class="color-red">*</span></label>
					<input type="text" placeholder="Amount" value="0" />

				</div>
			</div>
			<div class="col-md-3 mb30">
				<div class="button">
					<form action="bill-payment.php">
						<input type="submit" class="btn" value="Proceed" />
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

