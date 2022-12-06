<?php 
    include "header.php";
?>
<div id="breadcrumb"> 
            <div class="container">
                <div class="le-breadcrumb inline"> 
                    <ul><li><a href="index.php" class="headerNavigation">Home</a></li><li><a href="mycart.php" class="headerNavigation">Cart</a></li><li><a href="mycart.php" class="headerNavigation">Order Collection</a></li></ul> 
                </div>
            </div> 
        </div> 
        <div class="container">
        <div class="main">
            <div class="row">
                <div class="main-content">
                    <div id="contentarea-wrapper">
                        <div id="centercontent-wrapper" class="col-lg-9 col-md-9" >
                            <header>
                                <h4>Contact Us</h4>
                            </header>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" required="" name="name" placeholder="Your Name" required="" data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>                                 
                                    </div>
							
							
							
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cnt_number">Contact</label>
                                            <input type="text" placeholder="Your number" required="" maxlength="10" minlength="10" id="contact" class="form-control" name="contact" required="" data-error="Please enter your number">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" placeholder="Your Email" required="" id="email" class="form-control" name="email" required="" data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
                                    <div class="col-md-12">
                                <div class="form-group"> 
								    <label for="addrss">Address</label>
                                    <textarea class="form-control" id="address" required="" name="address" placeholder="Your Address" rows="4" data-error="Please enter your address" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12">
                                <div class="submit-button">
                                    <button class="btn btn-common" id="booknow" name="submit" type="submit">Submit</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                    <div class="clearfix"></div>
                            </div>
</div>
</div>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST["name"];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $sql ="INSERT INTO contact (`c_name`,`c_phone`,`c_email`,`c_address`) values ('$name','$contact','$email','$address') ";        
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Contacted Successfully');</script>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>