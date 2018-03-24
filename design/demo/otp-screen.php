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
		<h1>Enter Otp</h1> 
		<div class="col-12 mb30">
			<div class="pay-success">
				<h3>OTP for Fund Transfer</h3>
				<p class="otp-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem.</p>
				<label>Enter OTP</label>
				<input type="text" >
				<form action="sucess.php"><input type="submit" value="submit"></form>
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

