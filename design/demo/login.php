<!DOCTYPE html>
<html>
<head>
<title>Eazy-pay - Online Recharge Portal</title>
<?php include "style.php" ?>
<link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>
<section class="backimages">
    <?php include "header.php" ?>
</section>
  	<div class="container user-regiser">
    	<div class="row">        	
            <div class="col-md-6 mb30">
            	<h1>Sign In / Login</h1>
                <div class="row">
                	<div class="col-sm-12">
                    	<div>
                        	<label>Email ID</label><br/>
                            <input type="email" placeholder="Enter Email Id" />
                        </div>
                        <div>
                        	<label>Password</label><br/>
                            <input type="password" placeholder="Enter Password" /><br/>
                            <a id="FP">Forgot Password?</a>
                        </div>
                        <div id="send">
                        	<p>Password reset link will be sent to the register email ID</p>
                        	<input type="email" placeholder="E-Mail" />
                            <div class="ac"><input type="submit" value="Send" class="forgot-pwd" /></div>
                        </div>
                    </div>
                    <div class="col-sm-12"><form action="profile.php"><input type="submit" value="Enter" /></form></div>
                    <div class="clearfix"></div>
                    <div class="col-12 reg-social">
                    	<p><span>Or</span>Login via your social account</p>
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                         <a href="#"><i class="fa fa-twitter-square"></i></a>
                    </div>
                    <div class="col-12 registerNow">
                        <p>New to eazy-pay.com! <a href="user-registration.php">Register Now</a>
                    </div>
                    
                </div>
            </div>
             <div class="col-md-5 col-md-offset-1 ques">
                <h1>Offer &amp; Benefits</h1>
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <label>Lorem Ipsum is simply dummy text of the printing and typesetting industry.?</label><br/>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <label>Lorem Ipsum is simply dummy text of the printing?</label><br/>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                       
                    </div>                    
                    
                </div>
            </div>
        </div>
    </div>
	
    <?php include "footer.php"; ?>
   <script>
  $("#send").hide();
   $("#FP").click(function(){
		$("#send").slideToggle();
   });
   </script>
</body>
</html>

