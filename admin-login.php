<?php include "header.php";?>
	
  <!-- if condition for slideshow ends -->  
 <!-- inclusion of header file -->
	</div>
    <!-- Condition check for breadcrumb -->
	 
        <!-- Breadcrumb Wrapper Starts -->
        <div id="breadcrumb"> 
            <div class="container">
                <div class="le-breadcrumb inline"> 
                    <ul><li><a href="index.html" class="headerNavigation">Home</a></li><li><a href="login.html" class="headerNavigation">Login</a></li></ul> 
                </div>
            </div> 
        </div> 
        <!-- Breadcrumb Wrapper Ends -->
     
    <!-- if condition for Breadcrumb Ends -->
    
    <!-- Container Wrapper Starts -->
    <div class="container"> 
        <div class="main">
            <div class="row">
                <div class="main-content">
                    <div id="contentarea-wrapper">
                        <div id="centercontent-wrapper" class="col-lg-9 col-md-9" > 
                 
	<!-- Main Wrapper Starts --> 
<div id="login-page">
<header><h4>Welcome, Please Sign In</h4></header>


<div class="row split-login">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 login">
	<div class="content">
  		<h4>Returning Admin</h4>
        <div class="contentText">
        	<div class="information">I am Admin.</div>
        	<form action="" method="post"><input type="hidden" name="formid" value="" />            	<label>Username:</label>
                <input type="text" name="username" />              	<label>Password:</label>
                <input type="password" name="password" maxlength="40" />        </div>
	</div>
    <div class="loginarea buttons-set">
        <div class="buttonRow forward login-buttons">
            <a class="forgot-password" href="password_forgotten.html">Forgot your password?</a>            <span class="tdbLink"><button id="login-btn" name="login-btn" type="submit">Sign In</button></span><script type="text/javascript">$("#tdb1").button({icons:{primary:"ui-icon-key"}}).addClass("ui-priority-primary").parent().removeClass("tdbLink");</script>        </div>
	</div>
    </form>
</div>


</div>
</div>

</div> <!-- bodyContent //-->

	<div id="right-column" class="col-lg-3 col-md-3"> 

<?php include "sidebar.php";?>

</div>

</div><!-- contentpart-wrapper endss -->
</div><!-- maincontentarea-wrapper ends --> 
</div>
</div>


<!-- Newsletter Section -->
<div id="newsletter" class="section-newsletter">
    <div class="overlay">
        <div class="container">
            <!-- Newsletter Text -->
            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 newsletter-text">
            	<div class="text">
            		<h2>sign up our newsletter</h2>
            	</div>
            </div>
            <!-- Newsletter Text Ends-->
            <!-- Newsletter Form -->
            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            	<!-- Begin MailChimp Signup Form -->
            	<div id="mc_embed_signup"> <form action="http://elegantdesignhub.us3.list-manage.com/subscribe/post?u=aec0ecc511b9e4dec6925a777&amp;id=be77ff1fb8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate> <div id="mc_embed_signup_scroll"> <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups--> <div style="position: absolute; left: -5000px;"><input type="text" name="b_aec0ecc511b9e4dec6925a777_be77ff1fb8" tabindex="-1" value=""></div> <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div> </div> </form> </div>            	<!--End mc_embed_signup-->
            </div>
            <!-- Newsletter Form Ends-->
        </div>
    </div>
</div>
<!-- Newsletter Section Ends -->
 <?php include "footer.php"; ?>