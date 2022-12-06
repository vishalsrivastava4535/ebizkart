<?php include "header.php"; 

include "cartcookie.php";
?>
	
  <!-- if condition for slideshow ends -->  
 <!-- inclusion of header file -->
	</div>
    <!-- Condition check for breadcrumb -->
	 
        <!-- Breadcrumb Wrapper Starts -->
        <div id="breadcrumb"> 
            <div class="container">
                <div class="le-breadcrumb inline"> 
                    <ul><li><a href="index.php" class="headerNavigation">Home</a></li><li><a href="mycart.php" class="headerNavigation">Cart Contents</a></li></ul> 
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




<form name="cart_quantity" action="" method="post"><div id="shoppingCartDefault" class="centerColumn">
<header><h4>Your Cart</h4></header>
<div class="shopping-cart-page box">
  <div class="table-responsive">


    <table border="0" width="100%" cellspacing="0" cellpadding="10" class="table" id="cartContentsDisplay">
    	<tbody>
        	<tr class="tableHeading">
            	<th>Item Name</th>
                <th>Qty.</th>
				<th>Delete</th>
                <th>Total</th>
            </tr>
            <?php
            $sum =0;
            if (isset($_COOKIE["cart"])){
                $cart_cookie=stripslashes($_COOKIE["cart"]);
                $cart_data=json_decode($_COOKIE["cart"],true);
                foreach($cart_data as $keys=>$values)
                {
                $id=$cart_data[$keys]["pd_id"];
                $quant=$cart_data[$keys]["pd_quant"];
                $fecth="SELECT * FROM products_tbl WHERE p_id=$id";
                $reslt=mysqli_query($conn,$fecth);
                $rw2=mysqli_fetch_assoc($reslt);
                $pd1 = $quant * $rw2['p_regular_price'];
                $total = $rw2['p_regular_price'];
                $sum += $pd1;
                echo $sum;
                }
            ?>


     	<tr class="tablecontent">
             
	    	<td align="center" class="cartProductDisplay" width="20%">
                    <span id="cartImage" class="back">
					<img src="Product_uploaded/<?php echo $rw2['p_image']?>" alt="Expression Contrasted Saw" title="Expression Contrasted Saw" width="100" height="124" />                    <a href="#">
                    	Expression Contrasted Saw                    </a>
                </span>
            </td>
      		<td align="center" class="cartQuantity">
				<input type="text" name="cart_quantity[]" id="getquantity" value="<?php echo $quant; ?>" size="4" /><input type="hidden" name="products_id[]" value="95" />            </td>
      		<!-- <td align="center" class="cartQuantityUpdate">
				<span class="tdbLink"><button id="tdb2" type="submit"><img csr="ext/images/refresh.png"></button></span><script type="text/javascript">$("#tdb2").button({icons:{primary:"ui-icon-refresh"}}).addClass("ui-priority-secondary").parent().removeClass("tdbLink");</script>            
            </td> -->
      		<td align="center" class=""> 
                <i class="fa fa-times deleteitem" id="<?php echo $rw2['p_id'];?>">
                <!-- <img src="images/cross.png" alt="" width="16" height="16" /> -->
                </i>
            </td>
      		<td align="center" valign="middle" class="cartTotalDisplay">
				<?php $price = $rw2['p_regular_price'];
                 $x = $price * $quant;
                echo $price * $quant;
                ?>          
            </td>
       </tr>
   		     	<?php                       
            }
                
                ?>
   		        </tbody>
    </table>
</div>
    <div id=""> Total: <input type="text" name="cartprc" id="cartSubTotal" class="text-center font-weight-bold" size="10" 
    value="<?php if(isset($x)){echo $sum;} else{ echo '0';} ?>" disabled>     </div>

	    <p class="stockWarning" align="center">Products marked with *** dont exist in desired quantity in our stock.<br />You can buy them anyway and check the quantity we have in stock for immediate deliver in the checkout process.</p>
	    <br class="clearBoth">
    <div class="buttonSet">
        <span class="cart-buttons ckpc">
			<span class="tdbLink"><a id="tdb22" href="collection.php">Checkout</a></span><script type="text/javascript">$("#tdb22").button({icons:{primary:"ui-icon-triangle-1-e"}}).addClass("ui-priority-primary").parent().removeClass("tdbLink");</script>        </span>
                 <span class="alternate_text">- OR - </span>
        <span class="cart-buttons ckpc">
                 <span class="tdbLink" id="samplebtn"><a href="index.php">Continue Shopping</a></span><script type="text/javascript">$("#tdb22").button({icons:{primary:"ui-icon-triangle-1-e"}}).addClass("ui-priority-primary").parent().removeClass("tdbLink");</script>        </span>
         <span class="other_options"> <a href="#"><img src="../www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png" border="0" alt="" title="Check Out with PayPal" /></a></span>
         	</div>
</div>
  


</div>
</div>
</form>
</div> <!-- bodyContent //-->

	<div id="right-column" class="col-lg-3 col-md-3"> 
</div>

</div><!-- contentpart-wrapper endss -->
</div><!-- maincontentarea-wrapper ends --> 
</div>
</div>

<?php include "footer.php"; ?>
