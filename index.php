<?php include "header.php"; include "db.php";
$sql1="SELECT * FROM products_tbl WHERE p_sub_level_category='New' " ;
$result= mysqli_query($conn, $sql1); 
while($row=mysqli_fetch_assoc($result))
{
	$names[]=$row; 
} 
$sql2="SELECT * FROM products_tbl WHERE p_sub_level_category='special' " ; 
$result2=mysqli_query($conn, $sql2); 
while($row2=mysqli_fetch_assoc($result2))
{ 
	$names2[]=$row2; 
} 
$sql3="SELECT * FROM products_tbl WHERE p_sub_level_category='Featured' " ; 
$result3=mysqli_query($conn, $sql3); 
while($row3=mysqli_fetch_assoc($result3))
{ 
	$names3[]=$row3; 
} 
	/* $sql2="SELECT * FROM product_tbl WHERE p_category='special' " ; $result2=m ysqli_query($conn, $sql2); while($row2=mysqli_fetch_assoc($result2)){ $names2[]=$row2; } */ ?>
<!-- if condition for slideshow starts -->
<!-- Slideshow Wrapper Starts -->
<div id="home-slider">
	<div id="main-slideshow" class="owl-carousel owl-theme">
		<div class="item">
			<div class="caption bottom-left">
				<div class="container">
					<h3 class="small fadeInDown-1">Fashion show 2021</h3>
					<h4 class="med fadeInDown-3">new trend this summer!</h4>
					<a class="fadeInDown-3 le-btn medium" href="#">shop now</a> 
				</div>
			</div>
			<img src="images/backend_image/slideshow/Slide-1.jpg" alt="slideshow" />
		</div>
		<div class="item">
			<div class="caption bottom-left">
				<div class="container">
					<h3 class="small fadeInDown-1 text-center">Fashion show 2021</h3>
					<h4 class="med fadeInDown-3 text-center">new trend this summer!</h4> 
				</div>
			</div>
			<img src="images/backend_image/slideshow/Slide-2.jpg" alt="slideshow" />
		</div>
		<div class="item">
			<div class="caption bottom-left">
				<div class="container">
					<h3 class="small fadeInDown-1">Fashion show 2021</h3>
					<h4 class="med fadeInDown-3">new trend this summer!</h4>
					<a class="fadeInDown-3 le-btn medium" href="#">shop now</a> 
				</div>
			</div>
			<img src="images/backend_image/slideshow/Slide-3.jpg" alt="slideshow" />
		</div>
	</div>
</div>
<!-- Slideshow wrapper Ends -->
<!-- Top Banners Start -->
<div id="banners-mosaic">
	<div class="no-padding mosaic-holder">
		<div class="col-xs-12 col-md-4 col-sm-4">
			<div class="mosaic-banner wow fadeInUp">
				<a href="#">
					<div class="overlay"></div>
					<img src="images/backend_image/banner/banner-1.jpg" alt="banner1" />
					<div class="caption">
						<h1>
<span class="light">very unique</span>
<br>collection</h1>
					</div>
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4 col-sm-4">
			<div class="mosaic-banner wow fadeInUp">
				<a href="#">
					<div class="overlay"></div>
					<img src="images/backend_image/banner/banner-2.jpg" alt="banner2" />
					<div class="caption">
						<h1>
<span class="light">best style</span>
<br>for party</h1>
					</div>
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4 col-sm-4">
			<div class="mosaic-banner wow fadeInUp">
				<a href="#">
					<div class="overlay"></div>
					<img src="images/backend_image/banner/banner-3.jpg" alt="banner3" />
					<div class="caption">
						<h1>
<span class="light">vintage</span>
<br>style</h1>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- Top Banners Ends -->
<!-- if condition for slideshow ends -->
<!-- inclusion of header file -->
</div>
<!-- Condition check for breadcrumb -->
<!-- if condition for Breadcrumb Ends -->
<!-- Container Wrapper Starts -->
<div class="container">
	<div class="main">
		<div class="row">
			<div class="main-content">
				<div id="contentarea-wrapper">
					<div id="centercontent-wrapper" class="col-lg-9 col-md-9">
						<!-- Main Wrapper Starts -->
						<div id="horizontalTab">
							<ul class="resp-tabs-list">
								<li>New</li>
								<li>Special</li>
							</ul>
							<div class="resp-tabs-container">
								<div id="newproduct-wrapper" class="centerBoxWrapper">
									<div class="contentText row">
										<?php foreach($names as $nm){ ?>
										<div class="item centerBoxContentsNew centeredContent product-item col-xs-4 col-sm-4 col-md-4 col-lg-4 back med_siz">
											<div class="productinfo-wrapper">
												<div class="head">
													<div class='le-ribbon right blue' title=''><span>New</span>
													</div>
													<div class="thumb"> <a href="product-info.php?product_id=<?php echo $nm['p_id']; ?>"><img src="Product_uploaded/<?php echo $nm['p_image']; ?>" alt="<?php echo $nm['p_name']; ?>" title="<?php echo $nm['p_name']; ?>" width="MEDIUM_IMAGE_WIDTH" height="MEDIUM_IMAGE_HEIGHT" /></a>
														<div class="merged-buttons">
														<button class="add_to_cart_link le-btn buttons tdb2"  value="<?php echo $nm['p_id']; ?>">
															<div class="add_to_cart_link le-btn buttons tdb2"><span class="tdbLink"><a id="tdb2"><i title="Add to Cart" class="fa fa-shopping-cart fa-lg"></i></a></span>
																<script type="text/javascript">
																	 $("#tdb2").button().addClass("ui-priority-secondary").parent().removeClass("tdbLink");
																</script>
															</div></button>
															<div class="le-btn buttons"> <a class="detailbutton-wrapper group1 cboxElement" title="Zoom" href="Product_uploaded/<?php echo $nm['p_image'];?>"><i class="fa fa-eye fa-lg"></i></a>
															</div>
															<div class="le-btn buttons"> <a class="detailbutton-wrapper" title="Product Detail" href="product-info.php?product_id=<?php echo $nm['p_id']; ?>"><i class="fa fa-link fa-lg"></i></a>
															</div>
														</div>
													</div>
												</div>
												<div class="body">
													<div class="product_name">
														<h3><a href="product-info.php?product_id=<?php echo $nm['p_id']; ?>"><?php echo $nm['p_name']; ?></a></h3>
													</div>
													<div class="index-ratings">
														<img src="images/stars_5.gif" alt="5 of 5 Stars!" title="5 of 5 Stars!" width="66" height="14" />
													</div>
													<div class="index_price">
														<div class="single_price">
															<?php echo $nm[ 'p_regular_price']; ?>₨</div>
													</div>
												</div>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
								
								<div id="specialproduct-wrapper" class="centerBoxWrapper">
									<div class="contentText row">
										<?php foreach($names2 as $nm2){ ?>
										<div class="item centerBoxContentsSpecials centeredContent product-item col-xs-4 col-sm-4 col-md-4 col-lg-4 back med_siz">
											<div class="productinfo-wrapper">
												<div class="head">
													<div class='le-ribbon right orange' title=''><span>Sale</span>
													</div>
													<div class="thumb"> <a href="product-info.php?product_id=<?php echo $nm2['p_id']; ?>"><img src="Product_uploaded/<?php echo $nm2['p_image']; ?>" alt="<?php echo $nm2['p_name']; ?>" title="<?php echo $nm2['p_name']; ?>" width="MEDIUM_IMAGE_WIDTH" height="MEDIUM_IMAGE_HEIGHT" /></a>
														<div class="merged-buttons">
														<button class="add_to_cart_link le-btn buttons tdb2" value="<?php $nm2['p_id'];?>">
															<div class="add_to_cart_link le-btn buttons tdb2"><span class=""><a id="tdb2"><i title="Add to Cart" class="fa fa-shopping-cart fa-lg tdb2"></i></a></span>
																<script type="text/javascript">
																	 $("#tdb2").button().addClass("ui-priority-secondary").parent().removeClass("tdbLink");
																</script>
															</div></button>
															<div class="le-btn buttons"> <a class="detailbutton-wrapper group1 cboxElement" title="Zoom" href="Product_uploaded/<?php echo $nm2['p_image'];?>"><i class="fa fa-eye fa-lg"></i></a>
															</div>
															<div class="le-btn buttons"> <a class="detailbutton-wrapper" title="Product Detail" href="product-info.php?product_id=<?php echo $nm2['p_id']; ?>"><i class="fa fa-link fa-lg"></i></a>
															</div>
														</div>
													</div>
												</div>
												<div class="body">
													<div class="product_name">
														<h3><a href="product-info.php?product_id=<?php echo $nm2['p_id']; ?>"><?php echo $nm2['p_name']; ?></a></h3>
													</div>
													<div class="index-ratings"><span class="tdbLink"><a id="tdb15" href="login.html">Write Review</a></span>
														<script type="text/javascript">
															$("#tdb15").button({icons:{primary:"ui-icon-comment"}}).addClass("ui-priority-primary").parent().removeClass("tdbLink");
														</script>
													</div>
													<div class="index_price"> <span class="normalprice"><?php echo $nm2['p_regular_price']; ?></span>
														<span class="productSpecialPrice"><?php echo $nm2['p_sale_price']; ?></span>
													</div>
												</div>
											</div>
										</div>
                                        <?php } ?>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<!-- bodyContent //-->
					<div id="right-column" class="col-lg-3 col-md-3">
						<?php include "sidebar.php"; ?>
					</div>
				</div>
			</div>
			<!-- contentpart-wrapper endss -->
		</div>
		<!-- maincontentarea-wrapper ends -->
	</div>
</div>
<!-- Newsletter Section -->
<div id="newsletter" class="section-newsletter">
	<div class="overlay">
		<div class="container">
			<!-- Newsletter Text -->
			<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 newsletter-text">
				<div class="text">
					<h2>sign up our News Letter</h2>
				</div>
			</div>
			<!-- Newsletter Text Ends-->
			<!-- Newsletter Form -->
			<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
					<form action="http://elegantdesignhub.us3.list-manage.com/subscribe/post?u=aec0ecc511b9e4dec6925a777&amp;id=be77ff1fb8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;">
								<input type="text" name="b_aec0ecc511b9e4dec6925a777_be77ff1fb8" tabindex="-1" value="">
							</div>
							<div class="clear">
								<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
							</div>
						</div>
					</form>
				</div>
				<!--End mc_embed_signup-->
			</div>
			<!-- Newsletter Form Ends-->
		</div>
	</div>
</div>
<!-- Newsletter Section Ends -->
<div class="featured-products">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="featuredProducts" class="centerBoxWrapper">
					<div class="box_heading box_heading_featured">
						<header>
							<h2>Featured</h2>
						</header>
					</div>
					<div class="contentText row">
						<div id="featured-slider" class="owl-carousel owl-theme">
							<?php foreach($names3 as $nm3){ ?>
							<div class="item centerBoxContentsFeatured centeredContent back">
								<div class="productinfo-wrapper">
									<div class="head">
										<div class="thumb">
											<div class='le-ribbon right red' title=''><span>hot</span>
											</div>
											<h3><a href="product-info.php?product_id=<?php echo $nm3['p_id']; ?>"><img src="Product_uploaded/<?php echo $nm3['p_image']; ?>" alt="<?php echo $nm3['p_name']; ?>" title="<?php echo $nm3['p_name']; ?>" width="MEDIUM_IMAGE_WIDTH" height="MEDIUM_IMAGE_HEIGHT" /></a></h3>
											<div class="merged-buttons">
											<button class="add_to_cart_link le-btn buttons tdb2" value="<?php echo $nm3['p_id'];?>">
															<div class="add_to_cart_link le-btn buttons tdb2"><span class=""><a id="tdb2"><i title="Add to Cart" class="fa fa-shopping-cart fa-lg"></i></a></span>
																<script type="text/javascript">
																	 $("#tdb2").button().addClass("ui-priority-secondary").parent().removeClass("tdbLink");
																</script>
															</div></button>
												<div class="le-btn buttons"> <a class="group1 cboxElement detailbutton-wrapper" title="Zoom" href="Product_uploaded/<?php echo $nm3['p_image'];?>"><i class="fa fa-eye fa-lg"></i></a>
												</div>
												<div class="le-btn buttons"> <a class="detailbutton-wrapper" title="Product Detail" href="product-info.php?product_id=<?php echo $nm3['p_id']; ?>"><i class="fa fa-link fa-lg"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="body">
										<div class="product_name">
											<h3><a href="product-info.php?product_id=<?php echo $nm3['p_id']; ?>"><?php echo $nm3['p_name']; ?></a></h3>
										</div>
										<div class="index-ratings"><span class="tdbLink"><a id="tdb18" href="login.html">Write Review</a></span>
											<script type="text/javascript">
												$("#tdb18").button({icons:{primary:"ui-icon-comment"}}).addClass("ui-priority-primary").parent().removeClass("tdbLink");
											</script>
										</div>
										<div class="index_price">
											<div class="single_price">
												<?php echo $nm3[ 'p_regular_price']; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "footer.php"; ?>