<?php include "header.php"; ?>

	
<!-- if condition for slideshow ends -->  
<!-- inclusion of header file -->

  <!-- Condition check for breadcrumb -->
   
      <!-- Breadcrumb Wrapper Starts -->
      <div id="breadcrumb"> 
          <div class="container">
              <div class="le-breadcrumb inline"> 
                  <ul><li><a href="index.php" class="headerNavigation">Home</a></li><li><a href="user-registration.php" class="headerNavigation">Create an Account</a></li></ul> 
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
<script type="text/javascript"><!--
var form = "";
var submitted = false;
var error = false;
var error_message = "";

function check_input(field_name, field_size, message) {
if (form.elements[field_name] && (form.elements[field_name].type != "hidden")) {
  var field_value = form.elements[field_name].value;

  if (field_value.length < field_size) {
    error_message = error_message + "* " + message + "\n";
    error = true;
  }
}
}

function check_radio(field_name, message) {
var isChecked = false;

if (form.elements[field_name] && (form.elements[field_name].type != "hidden")) {
  var radio = form.elements[field_name];

  for (var i=0; i<radio.length; i++) {
    if (radio[i].checked == true) {
      isChecked = true;
      break;
    }
  }

  if (isChecked == false) {
    error_message = error_message + "* " + message + "\n";
    error = true;
  }
}
}

function check_select(field_name, field_default, message) {
if (form.elements[field_name] && (form.elements[field_name].type != "hidden")) {
  var field_value = form.elements[field_name].value;

  if (field_value == field_default) {
    error_message = error_message + "* " + message + "\n";
    error = true;
  }
}
}

function check_password(field_name_1, field_name_2, field_size, message_1, message_2) {
if (form.elements[field_name_1] && (form.elements[field_name_1].type != "hidden")) {
  var password = form.elements[field_name_1].value;
  var confirmation = form.elements[field_name_2].value;

  if (password.length < field_size) {
    error_message = error_message + "* " + message_1 + "\n";
    error = true;
  } else if (password != confirmation) {
    error_message = error_message + "* " + message_2 + "\n";
    error = true;
  }
}
}

function check_form(form_name) {
if (submitted == true) {
  alert("This form has already been submitted. Please press Ok and wait for this process to be completed.");
  return false;
}

error = false;
form = form_name;
error_message = "Errors have occured during the process of your form.\n\nPlease make the following corrections:\n\n";

check_radio("gender", "Please select your Gender.");

check_input("firstname", 2, "Your First Name must contain a minimum of 2 characters.");
check_input("lastname", 2, "Your Last Name must contain a minimum of 2 characters.");

check_input("dob", 10, "Your Date of Birth must be in this format: MM/DD/YYYY (eg 05/21/1970)");

check_input("email_address", 6, "Your E-Mail Address must contain a minimum of 6 characters.");
check_input("street_address", 5, "Your Street Address must contain a minimum of 5 characters.");
check_input("postcode", 4, "Your PIN Code must contain a minimum of 4 characters.");
check_input("city", 3, "Your City must contain a minimum of 3 characters.");

check_input("state", 2, "Your State must contain a minimum of 2 characters.");

check_select("country", "", "You must select a country from the Countries pull down menu.");

check_input("telephone", 3, "Your Telephone Number must contain a minimum of 3 characters.");

check_password("password", "confirmation", 5, "Your Password must contain a minimum of 5 characters.", "The Password Confirmation must match your Password.");
check_password("password_new", "password_confirmation", 5, "Your new Password must contain a minimum of 5 characters.", "The Password Confirmation must match your new Password.");

if (error == true) {
  alert(error_message);
  return false;
} else {
  submitted = true;
  return true;
}
}
//--></script>

<div class="createaccount-wrapper">
  <header><h4>My Account Information</h4></header>
  <span class="inputRequirement create-account-alert">* Required information</span>
      <form name="create_account" action="" method="post" onsubmit="return check_form(create_account);"><input type="hidden" name="formid" value="62336245993dd3b676ec233d29b16d1a" /><input type="hidden" name="action" value="process" />    <div class="row create-account-page">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address-details">
          <div class="content">
              <h4>Your Personal Details</h4> 
                                  <input type="radio" name="gender" value="Male" />&nbsp;&nbsp;Male&nbsp;&nbsp;<input type="radio" name="gender" value="Female" />&nbsp;&nbsp;Female&nbsp;<span class="inputRequirement alert-text">*</span>                                <br class="clearBoth">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 first-name">
                      <label class="inputLabel">
                          First Name:                        	<span class="inputRequirement alert-text">*</span>
                      </label>
                      <input type="text" name="firstname" />                    </div>
                  
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 last-name"> 
                      <label class="inputLabel">
                          Last Name:                        	<span class="inputRequirement alert-text">*</span>
                      </label>
                      <input type="text" name="lastname" />                    </div>
                  
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dob">
                      <label class="inputLabel">
                          Date of Birth:                        	<span class="inputRequirement alert-text">* (eg. 05/21/1970)</span>
                      </label>
                      <input type="text" name="dob" id="dob" /><script type="text/javascript">$('#dob').datepicker({dateFormat: 'mm/dd/yy', changeMonth: true, changeYear: true, yearRange: '-100:+0'});</script>
                  </div>
                                     
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 emailaddress">
                      <label class="inputLabel">
                          E-Mail Address:                        	<span class="inputRequirement alert-text">* </span>
                      </label>
                      <input type="text" name="email_address" />            		</div>
                  
                                        
                                      <div class="street-add1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4>Your Address</h4>
                      <label class="inputLabel">
                          Street Address:                        	<span class="inputRequirement alert-text">*</span>
                      </label>
                      <input type="text" name="street_address" />                    </div>
                                      
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zip-code">
                        <label class="inputLabel">
                          PIN Code:                        	<span class="inputRequirement alert-text">*</span>
                      </label>
                      <input type="text" name="postcode" />                    </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 city">
                        <label class="inputLabel">
                          City:                        	<span class="inputRequirement alert-text">*</span>
                      </label>
                      <input type="text" name="city" />                    </div>
          
                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 statezone">
                      <label class="inputLabel">
                          State:                        	<span class="inputRequirement alert-text">*</span>                        </label>					
                      <input type="text" name="state" />                    </div>    
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 country">
                      <label class="inputLabel">
                          Country:                        	<span class="inputRequirement alert-text">*</span>
                      </label>
                      <select name="country">
                      <option value="" selected="selected">Please Select</option>
                      <option value="Afghanistan">Afghanistan</option>
                      <option value="Albania">Albania</option>
                      <option value="Algeria">Algeria</option>
                      <option value="American Samoa">American Samoa</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Angola">Angola</option>
                      <option value="Anguilla">Anguilla</option>
                      <option value="Antarctica">Antarctica</option>
                      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Armenia">Armenia</option>
                      <option value="Aruba">Aruba</option>
                      <option value="Australia">Australia</option>
                      <option value="Austria">Austria</option>
                      <option value="INDIA">INDIA</option>
                      <option value="Bahamas">Bahamas</option>
                      <option value="Bahrain">Bahrain</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Barbados">Barbados</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Belgium">Belgium</option>
                      <option value="Belize">Belize</option>
                      <option value="Benin">Benin</option>
                      <option value="Bermuda">Bermuda</option>
                      <option value="Bhutan">Bhutan</option>
                      <option value="Bolivia">Bolivia</option>
                      <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                      <option value="Botswana">Botswana</option>
                      <option value="Bouvet Island">Bouvet Island</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Zambia">Zambia</option>
                      <option value="Zimbabwe">Zimbabwe</option></select>              		</div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 telephone">
                      <h4>Your Contact Information</h4>
                        <label class="inputLabel">
                          Contact Number:                        	<span class="inputRequirement alert-text">*</span>
                      </label>
                      <input type="text" name="telephone" />                    </div>
                                                           
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 password-entry">
                        <h4>Your Password</h4>
                        <label class="inputLabel">
                          Password:                        	<span class="inputRequirement alert-text">*</span>
                      </label>
                      <input type="password" name="password" maxlength="40" />                    </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 confirm-password">
                      <label class="inputLabel">
                          Password Confirmation:                        	<span class="inputRequirement alert-text">
                              *                            </span>
                      </label>
                      <input type="password" name="confirmation" maxlength="40" />            		</div>
          </div>
          </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit-info">
          <div class="buttonSet">
              <span class="cart-buttons">
                  <span class="tdbLink"><button id="tdb2" name="tdb2" type="submit">Continue</button></span><script type="text/javascript">$("#tdb2").button({icons:{primary:"ui-icon-person"}}).addClass("ui-priority-primary").parent().removeClass("tdbLink");</script>                </span>
          </div>
      </div>
  </div>
</div>
</form>
<?php 
if(isset($_POST["tdb2"])){

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$gender =$_POST["gender"];
$dob = $_POST["dob"];
$email_address =$_POST["email_address"];
$street_address = $_POST["street_address"];
$pincode= $_POST["postcode"];
$city =$_POST["city"];
$state =$_POST["state"];
$country =$_POST["country"];
$telephone =$_POST["telephone"];
$password =$_POST["password"];


  
  
      


$stmt = $conn-> prepare("INSERT INTO vendor_info (`first_name`,`last_name`,`gender`,`d_o_b`,`email`,`street_address`,`pin_code`,`city`,`state`,`country`,`contact_no`,`vendor_password`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt -> bind_param("ssssssdsssss", $ufirstname, $ulastname, $ugender, $udob, $uemail_address, $ustreet_address,$upincode, $ucity, $ustate, $ucountry, $utelephone,$upassword);

// set parameters and execute
$ufirstname = $firstname;
$ulastname = $lastname;
$ugender = $gender;
$udob =$dob;
$uemail_address = $email_address;
$ustreet_address= $street_address;
$upincode = $pincode;
$ucity = $city;
$ustate = $state;
$ucountry = $country;
$utelephone =$telephone;
$upassword = $password;

$stmt -> execute();


echo "<script>alert('Account Created successfully...');
alert('Login with your Username and Password...');
alert('After Admin Approval...');
window.location = 'http://localhost/magnusnew/vendor-login.php';
</script>";
//header("location:../../user-login.php");
$stmt -> close();


}
?>

</div> <!-- bodyContent //-->

  <div id="right-column" class="col-lg-3 col-md-3"> 
  <!-- right-wrapper starts -->
         <!-- right-wrapper ends -->
</div>

</div><!-- contentpart-wrapper endss -->
</div><!-- maincontentarea-wrapper ends --> 
</div>
</div>

<?php include "footer.php"; ?>