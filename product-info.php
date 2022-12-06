<?php include "header.php";

$prod_id= $_GET['product_id'];
$qery="SELECT * FROM products_tbl WHERE p_id = $prod_id ";
$result= mysqli_query($conn, $qery);
while($row=mysqli_fetch_assoc($result))
{
	 $product[]=$row; 
} 

?>
	</div>
	<!-- Condition check for breadcrumb -->
	<!-- Breadcrumb Wrapper Starts -->
	<div id="breadcrumb">
		<div class="container">
			<div class="le-breadcrumb inline">
				<ul>
					<li><a href="index.php" class="headerNavigation"></a></li>
					<li><a href="index61ba.html?manufacturers_id=20" class="headerNavigation">
                    </a></li>
					<li><a href="product_info4987.html?cPath=&amp;products_id=58" class="headerNavigation"></a></li>
				</ul>
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
						<div id="centercontent-wrapper" class="col-lg-9 col-md-9">
							<!-- Main Wrapper Starts -->
							<form name="cart_quantity" action="" method="post">
								<div class="product_info">
									<div class="contentContainer">
										<div class="contentText">
											<div class="productinfo-leftwrapper col-md-5 col-sm-5 hidden-xs">
												<div class="main_product_image"> <img src="Product_uploaded/<?php echo $product[0]['p_image']; ?>" alt="Excepteur sint occaecat" title="Excepteur sint occaecat" width="323" height="400" id="main_prodimage" class="product_info_gallery" />
													<div id="piGal" class="owl-carousel owl-theme">
														<div class="item"> <a href="Product_uploaded/<?php echo $product[0]['p_image']; ?>" target="_blank" data-image="Product_uploaded/<?php echo $product[0]['p_image']; ?>" data-zoom-image="Product_uploaded/<?php echo $product[0]['p_image']; ?>"><img src="Product_uploaded/<?php echo $product[0]['p_image']; ?>" alt="Excepteur sint occaecat" title="Excepteur sint occaecat" width="100" height="124"  id="main_prodimage" class="product_info_gallery" /></a> </div>
														<div class="item"><a href="Product_uploaded/<?php echo $product[0]['p_image']; ?>" target="_blank" data-image="Product_uploaded/<?php echo $product[0]['p_image']; ?>" data-zoom-image="Product_uploaded/<?php echo $product[0]['p_image']; ?>" class="gal-zoom"><img src="Product_uploaded/<?php echo $product[0]['p_image']; ?>" alt="" width="100" height="124"  class="product_info_gallery" /></a></div>
														<div class="item"><a href="Product_uploaded/<?php echo $product[0]['p_image']; ?>" target="_blank" data-image="Product_uploaded/<?php echo $product[0]['p_image']; ?>" data-zoom-image="Product_uploaded/<?php echo $product[0]['p_image']; ?>" class="gal-zoom"><img src="Product_uploaded/<?php echo $product[0]['p_image']; ?>" alt="" width="100" height="124"  class="product_info_gallery" /></a></div>
														<div class="item"><a href="Product_uploaded/<?php echo $product[0]['p_image']; ?>" target="_blank" data-image="Product_uploaded/<?php echo $product[0]['p_image']; ?>" data-zoom-image="Product_uploaded/<?php echo $product[0]['p_image']; ?>" class="gal-zoom"><img src="Product_uploaded/<?php echo $product[0]['p_image']; ?>" alt="" width="100" height="124"  class="product_info_gallery" /></a></div>
														<div class="item"><a href="Product_uploaded/<?php echo $product[0]['p_image']; ?>" target="_blank" data-image="Product_uploaded/<?php echo $product[0]['p_image']; ?>" data-zoom-image="Product_uploaded/<?php echo $product[0]['p_image']; ?>" class="gal-zoom"><img src="Product_uploaded/<?php echo $product[0]['p_image']; ?>" alt="" width="100" height="124"  class="product_info_gallery" /></a></div>
													</div>
													<script type="text/javascript">
													$(document).ready(function() {
														//initiate the plugin and pass the id of the div containing gallery images
														$("#main_prodimage").elevateZoom({
															gallery: 'piGal',
															cursor: 'pointer',
															galleryActiveClass: 'active',
															zoomWindowWidth: 300,
															zoomWindowHeight: 300,
															scrollZoom: true,
															imageCrossfade: true,
															loadingIcon: 'ext/images/spinner.gif'
														});
													});
													</script>
													<script type="text/javascript">
													$(document).ready(function() {
														//pass the images to Fancybox
														$("#main_prodimage").bind("click", function(e) {
															var ez = $('#main_prodimage').data('elevateZoom');
															$.fancybox(ez.getGalleryList());
															return false;
														});
													});
													</script>
												</div>
											</div>
											<div id="product_info_display" class="col-md-7 col-sm-7 productinfo-rightwrapper col-xs-12">
												<div class="product_title">
													<h3 id="productName" class="productGeneral"><?php echo $product[0]['p_name']; ?></h3> </div>
												<div class="mobile-gallery visible-xs">
													<div id="mobileGallery" class="owl-carousel owl-theme">
														<div class="item"> <img src="" alt="Excepteur sint occaecat" title="Excepteur sint occaecat" width="auto" height="auto" id="main_prodimage" class="product_info_gallery" /> </div>
														<div class="item"><img src="images/top_1.jpg" alt="" width="auto" height="auto" class="product_info_gallery" /></div>
														<div class="item"><img src="images/top_2.jpg" alt="" width="auto" height="auto" class="product_info_gallery" /></div>
														<div class="item"><img src="images/top_3.jpg" alt="" width="auto" height="auto" class="product_info_gallery" /></div>
														<div class="item"><img src="images/top_4.jpg" alt="" width="auto" height="auto" class="product_info_gallery" /></div>
													</div>
												</div>
												<div class="product-info-ratings">
													<div class="index-ratings"><img src="images/stars_5.gif" alt="5 of 5 Stars!" title="5 of 5 Stars!" width="66" height="14" /></div>
												</div>
												<div class="desc-info">
													<div class="desc-info-details">
														<div class="product_description">
															<h5>Quick Overview</h5>
															<p>
																<?php echo $product[0]['p_description']; ?>
															</p>
														</div>
														<div class="product_quantity">
															<h5>Additional Information</h5>
															<ul id="productDetailsList" class="floatingBox">
																<li>Model For:
																	<?php echo $product[0]['p_main_category']; ?>
																</li>
																<li>Sub Category:
																	<?php echo $product[0]['p_sub_level_category']; ?>
																</li>
																<li>Product Type :
																	<?php echo $product[0]['p_sub_category']; ?>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="product_price product-info-price">
													<div class="productprice-amount" style="display:inline-block"> <span class="normalprice"><?php echo $product[0]['p_regular_price']; ?></span> <span class="productSpecialPrice"><?php echo $product[0]['p_sale_price']; ?></span> </div>
												</div>
												<div class="addtocart-info">
													<div class="cart_quantity">
														<div class="qty_box"> <strong>Qty :</strong>
															<div class="sp-minus fff"> <span class="ddd minus"><i class="fa fa-minus"></i></span></div>
															<input type="text" name="cart_quantity" value="1" size="3" class="quantity-input" />
															<div class="sp-plus fff"><span class="ddd"><i class="fa fa-plus"></i></span></div>
														</div>
														<div class="add_to_cart cart-buttons">
															<input type="hidden" name="products_id" value="58" /><span class="tdbLink"><button id="tdb2" type="submit">Add to Cart</button></span>
															<script type="text/javascript">
															$("#tdb2").button({
																icons: {
																	primary: "ui-icon-cart"
																}
															}).addClass("ui-priority-primary").parent().removeClass("tdbLink");
															</script>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="product_info_tab">
										<ul class="tabs">
											<li><a href="#" rel="view1">Description</a></li>
											<li><a href="#" rel="view2">Reviews</a></li>
										</ul>
										<div class="tabcontents">
											<div id="view1" class="tabcontent">
												<?php                 
                 echo $product[0]['p_description']; ?>
													<br/> </div>
											<div id="view2" class="tabcontent"> <span class="tdbLink"><a id="tdb6" href="product_reviewsa478.html?manufacturers_id=20&amp;products_id=58&amp;language=en&amp;currency=USD">Reviews (2)</a></span>
												<script type="text/javascript">
												$("#tdb6").button({
													icons: {
														primary: "ui-icon-comment"
													}
												}).addClass("ui-priority-secondary").parent().removeClass("tdbLink");
												</script>
											</div>
										</div>
									</div>
								
								</div>
							</form>
						</div>
						<!-- bodyContent //-->
						<div id="right-column" class="col-lg-3 col-md-3"> </div>
					</div>
					<!-- contentpart-wrapper endss -->
				</div>
				<!-- maincontentarea-wrapper ends -->
			</div>
		</div>
		<?php include "footer.php"; ?>