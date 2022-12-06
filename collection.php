<?php 
    include "header.php";
?>
<style>
    #form
    {
        display:none;
    }
    /* .cardtype
    {
        display: none;
    } */
</style>
</div>
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
                                <h4>Share Details for Ordering Product</h4>
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
                                    <input type="text" placeholder="Your number" required="" maxlength="10" id="contact" class="form-control" name="contact" required="" data-error="Please enter your number">
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
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="addpayment" name="samplenow" type="button" required="">Add Payment</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                    <div class="clearfix"></div>
                                      
                                </div>
                            </div>
                            
                        </div>            
                        
                        <div id="form">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#bycard">By Card</a></li>
                            <li><a data-toggle="tab" href="#cod">Cash On Delivery</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="bycard" class="tab-pane fade in active">
                                <h3>By Card</h3>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Card No</label>
                                        <input type="text" class="form-control" minlength="16" maxlength="16" id="name" required="" name="card_no" placeholder="Your Card No." required="" data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>                                 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">CVV No</label>
                                        <input type="text" class="form-control" id="name" required="" minlength="3" maxlength="3" name="cvv_no" placeholder="Your CVV No." required="" data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>                                 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Expiry Date</label>
                                        <input type="date" class="form-control" id="name" required="" name="exdate" placeholder="Expiry Date" required="" data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>                                 
                                </div>
                                <div class="col-md-6 cardtype">
                                    <div class="form-group">
                                        <label for="name">Card Type</label>
                                        <select name="cardtype" id="card_type" class="form-control">
                                            <option>Select</option>
                                            <option value="Debit Card">Debit Card</option>
                                            <option value="Credit Card">Credit Card</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>                                 
                                </div>
                            </div>
                            </div>
                            <div id="cod" class="tab-pane fade">
                                <h3>Cash On Delivery Not Available</h3>
                            </div>                           
                        </div>
                            
                        </div>
                            <div class="col-md-12">
                                <div class="submit-button">
                                    <button class="btn btn-common" id="booknow" name="samplenow" type="submit">Share Now</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                    <div class="clearfix"></div>
                            </div>
                        </form>
                        <?php 
if(isset($_POST["samplenow"])){

    $string = '1122334455667788991220212020584512154';
    $string_shuffled = str_shuffle($string);
    $otp = substr($string_shuffled, 1, 4);
   $name = $_POST["name"];
   $contact = $_POST["contact"];
   $email = $_POST["email"];
   $status_oc = "Pending";
   $address = $_POST["address"];
   $card_no = $_POST["card_no"];
   $cvv_no = $_POST["cvv_no"];
   $exdate = $_POST["exdate"];
   $cardtype = $_POST["cardtype"];
    $tm = 1; 
    $x = 0;
    $outpid = '';
    $outpname="";
    $outpamount="";
    if(isset($_COOKIE["cart"])){
    $cart_cookie=stripslashes($_COOKIE["cart"]);
    $cart_data=json_decode($_COOKIE["cart"],true); 
    // echo "<pre>";
    // print_r($cart_data);

    foreach($cart_data as $keys=>$values){
        $id=$cart_data[$keys]["pd_id"];      
        $quant=$cart_data[$keys]["pd_quant"]; 
        $fecth="SELECT * FROM products_tbl WHERE p_id = '$id'";
        $reslt=mysqli_query($conn,$fecth);        
        $rw2 = mysqli_fetch_assoc($reslt);         
        $tm++;   
        $x = $x+($quant*$rw2['p_regular_price']);        
        $outpid.=$rw2['p_id'].',';
        $outpname.= $rw2['p_name'].',';
        $outpamount.= $rw2['p_regular_price'].',';
        } 
       }             
        $outpidn= rtrim($outpid,",");        
        $outpnamen= rtrim($outpname,",") ;                
        $outpquantn= rtrim($quant,",") ;                
        $outpamountn= rtrim($outpamount,",") ;                
        $sql ="INSERT INTO order_collection (`oc_token_no`,`oc_name`,`oc_address`,`oc_contact`,`oc_email`,`oc_prid`,`oc_prname`,`oc_prquant`,`oc_pramount`,`oc_total_amount`,`oc_cardno`,`oc_cvvno`,`oc_exdate`,`oc_cardtype`,`oc_status`) VALUES ('$otp','$name','$address','$contact','$email','$outpidn','$outpnamen','$quant','$outpamountn','$x','$card_no','$cvv_no','$exdate','$cardtype','$status_oc') ";        
        if ($conn->query($sql) === TRUE) {
            $last_id = mysqli_insert_id($conn);
            echo "New record created successfully. Last inserted ID is: " . $last_id;
            echo "<script>window.location.replace('http://localhost/magnusnew/orderdetails.php?id=".$last_id."');</script>";
            // header(location:'orderdetails.php?id="'.$last_id.'"');
            echo "<script>alert('Thanks for Booking Order. \n We will contact you soon.');</script>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#addpayment").click(function(){
            $( "#form" ).show();
        });
        // $('select option["value=COD"]').on('change',function(){
            
        //         $('.cardtype').show();
        // });
    });
</script>