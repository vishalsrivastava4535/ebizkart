
<?php 
include 'db.php';
if(isset($_POST['login-btn']))
{
	$username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM admin WHERE adm_username = '$username' AND adm_password='$password'";
    $run = mysqli_query($conn, $sql);
    if($run->num_rows>0)
    {
		session_start();
        $_SESSION['id']= $username;
        header("location:Admin/admin-dashboard.php");
    }
    else
    {
        echo "<script>alert('Wrong Username or Password!');</script>";
    }
}
if(isset($_POST['vendor-login-btn']))
{
	$username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM vendor WHERE v_username = '$username' AND v_password='$password'";
    $run = mysqli_query($conn, $sql);
    if($run->num_rows>0)
    {
		session_start();
        $_SESSION['vend_id']= $username;
        header("location:Vendor/vendor-dashboard.php");
    }
    else
    {
        echo "<script>alert('Wrong Username or Password!');</script>";
    }
}

if(isset($_POST['user-login-btn']))
{

	$username = $_POST['username'];
    $password = ($_POST['password']);
    $sql = "SELECT * FROM user_info WHERE email = '$username' AND user_password='$password'";
    $run = mysqli_query($conn, $sql);
    if($run->num_rows>0)
    {
		session_start();
        $_SESSION['id']= $username;
        header("location:User/user-dashboard.php");
    }
    else
    {
        echo "<script>alert('Wrong Username or Password!');</script>";
    }
}


?>

<!DOCTYPE HTML>
<html dir="ltr" lang="en">

<!-- Mirrored from magnusosc.perfectuswebinsights.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 09:47:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width" />
<title>Magnus</title>
<base  />
<link rel="shortcut icon" href="favicon.ico" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css' />
<!--Google Fonts Ends-->
<!-- Font Awesome CSS -->
<link rel="stylesheet" type="text/css" href="ext/css/font-awesome.min.css" />
<!-- Font Awesome CSS Ends -->
<!-- MailChimp CSS -->
<link href="../cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css" />
<!--Mail Chimp CSS Ends -->
<!-- custom js-->
<!-- custom js Ends-->
<!-- JS files -->
<script type="text/javascript" src="ext/jquery/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="ext/jquery/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="ext/jquery/ui/redmond/jquery-ui-1.10.4.min.css" />
<script type="text/javascript" src="ext/jquery/ui/jquery-ui-1.10.4.min.js"></script>
<script type="text/javascript" src="ext/jquery/menumaker.js"></script>
<!-- Homepage Tab JS -->
<script type="text/javascript" src="ext/jquery/easyResponsiveTabs.js"></script>
<!-- Homepage Tab JS Ends -->
<script type="text/javascript" src="ext/jquery/tabcontent.js"></script>
<script type="text/javascript" src="ext/jquery/css_browser_selector.js"></script>
<script  type="text/javascript" src="ext/jquery/jquery.colorbox.js"></script>
<script  type="text/javascript" src="ext/jquery/bootstrap.js"></script>	
<script  type="text/javascript" src="ext/jquery/wow.min.js"></script>
<script  type="text/javascript" src="ext/jquery/owl.carousel.js"></script>
<script  type="text/javascript" src="ext/jquery/jquery.elevateZoom-3.0.8.min.js"></script>


<!-- JS files ends -->




<link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>






<!-- CSS files -->
<link rel="stylesheet" type="text/css" href="ext/jquery/fancybox/jquery.fancybox-1.3.4.css" />
<link rel="stylesheet" type="text/css" href="ext/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="ext/css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="ext/css/menumaker.css" />
<link rel="stylesheet" type="text/css" href="ext/css/templatecss.css" />
<link rel="stylesheet" type="text/css" href="ext/css/devicecss.css" />
<!-- Animation CSS on Scroll -->
<link rel="stylesheet" type="text/css" href="ext/css/animate.css" />
<!-- Animation CSS on Scroll Ends -->
<link rel="stylesheet" type="text/css" href="ext/css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="ext/css/styles.css" />
<link rel="stylesheet" type="text/css" href="ext/css/default.css" />
<link rel="stylesheet" type="text/css" href="ext/css/colorbox.css" />
<!-- CSS files ends -->
<style type="text/css">
/* Body Font Color */
body {color:#323232}
.button:hover, input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover, .readmore:hover, button:hover, .billto-shipto .details:hover, .profile a:hover, .change_add:hover, #contactus-wrapper .contact_address .address:hover, #contactus-wrapper .contact_address .mail:hover, #contactus-wrapper .contact_address .phone:hover, .rectangle-list a:hover:before, #bottom-wrapper .top:hover, #reviewsInfo .cart_button span:hover, #reviewsWrite .cart_button span:hover, .group1.cboxElement:hover, .detailbutton-wrapper a:hover, #featuredproduct-wrapper .featured_products_details .productdetails-wrapper .prodprice, #topbar-wrapper .topbar_links .menu > li#logoff:hover, #topbar-wrapper .topbar_links .menu > li#login:hover, #topbar-wrapper .msg_callus .currencies li a:hover, #topbar-wrapper .msg_callus .languages > a:hover
{background-color:#C9364D;}
.signup-wrapper .button-set span > a:hover
{background-color:#C9364D !important;}
#bottom-wrapper .email_id a:hover, .loginarea .forgotpasswordarea > a:hover, .centerBoxContentsNew.centeredContent .product-wrapper .product_name a, .acc_trigger.active, .productinfo-wrapper .product_info_tab #view2 a:hover, .productinfo-rightwrapper #productinfodisplay-wrapper .product_title h3, .productinfo-rightwrapper #productinfodisplay-wrapper .productSpecialPrice, .tablecontent.newproductlisting.content_box td a:hover, .advanced_search .advance_search_help a:hover, #cart-wrapper .product_info_itemname:hover, #my_account .accountLinkList a:hover, .tablecontent.newproductlisting.content_box .product_name_details a:hover, #checkoutsucess .contentText > a:hover, #account_history .content_box td a:hover, .contentText a > h2:hover, .tablecontent.newproductlisting.content_box .product_name_details .product_list_price_new, #reviewsWrite .productinfo-rightwrapper .review_from, #reviewsWrite .productinfo-rightwrapper .product_title > h3, #reviewsInfo .productinfo-rightwrapper .product_title > h3, #reviewsInfo .review_prodinfo .product_price .productSpecialPrice, .bold.user_reviewer, .list-reviews span.date, .review_left .buttonSet .review_read_more > a:hover, .review_left .buttonSet .write_review span a:hover, .review_left .buttonSet .back span a:hover, #reviewsInfo .list-reviews .user_detail .bold, #reviewsRead .list-reviews .user_detail .bold, #reviewsRead .review .review_left .product_title > h3 a:hover, #checkoutConfirmation a span:hover, .createaccount-wrapper a u:hover, #createaccount-wrappersucess .contentText > a:hover, .jsn-mainnav.navbar .nav > li ul.nav-child li a:hover, .jsn-mainnav.navbar .nav > li ul.nav-child li a:active, #jsn-pos-mainnav li.submenu li a:hover, #jsn-pos-mainnav li.submenu li.submenu li a:hover, #jsn-pos-mainnav li .submenu a:hover, #jsn-pos-mainnav li.submenu li.submenu a:hover, #reviewsWrite .review_details .price_amount .productSpecialPrice, .jsn-mainnav.navbar .nav > li ul.nav-child li a, .product-name-desc .product_name > a
{color:#D05165;}
#topbar-wrapper #shopping_cart a.checkout, .rectangle-list a:hover
{color:#D05165!important;}
.acc_container
{border-bottom: 1px solid #C9364D;}
/*.tablecontent.newproductlisting.content_box:hover
{border-bottom:1px solid ;}*/
.rectangle-list a:hover:after 
{border-left-color: #C9364D;left:-0.5em;}
#brand-wrapper .manufacturer-wrapper h2, #maincontentarea-wrapper h2, .action-button.hover_info > .grid-icons-grid > i.fa, .loginarea .forgotpasswordarea > a:hover, .productinfo-wrapper .product_info_tab #view3 .also_purchased_product_name > a:hover {
	color:#C9364D;
}
.action-button.hover_info > .grid-icons-grid > i.fa:hover {
	background-color: #D05165;
	color: #FAFAFA;
	width:34px;	
}

/* Pagination Background*/
.pagination_product > strong, .pagination_product a:hover, #subcategories_names .subproduct_name_subcategories a:hover, #piGal .owl-buttons div i.fa:hover {
	background-color: #C9364D;
} 

.review_left .buttonSet .review_read_more, .review_left .buttonSet .write_review, .review_left .buttonSet .back 
{border-right:1px solid #D05165;}

/* Menu Hover */

#jsn-pos-mainnav li .nav-child.unstyled li a.current_parent:hover:before {
	 border-left: 4px solid #C9364D;	
}
#jsn-pos-mainnav li .nav-child.unstyled li:hover > a, .categories_sidebox .ui-widget-content.infoBoxContents ul li a:hover, #left-wrapper .ui-widget-content.infoBoxContents > a:hover, .createaccount-wrapper .contentContainer > h4, .categories_sidebox .ui-widget-content.infoBoxContents ul li:hover a, 
#left-wrapper .ui-widget-content.infoBoxContents > a:hover, #my_account .accountLinkList a:hover, #account_history .content_box td a:hover, #cart-wrapper .product_info_itemname:hover, #checkoutConfirmation a span:hover, #checkoutsucess .contentText > a:hover, #createaccount-wrappersucess .contentText > a:hover {
	color: #C9364D;
}
#header-wrapper #mainmenu-wrapper, .contact-us ul li:hover .fa, .aboutus_address .address:hover .fa, .newsletter #mc_embed_signup input.button, #footer-wrapper .top:hover {
	background-color:#C9364D;
}
#brand-wrapper .manufacturer-wrapper header:before, #maincontentarea-wrapper header:before, .createaccount-wrapper .contentContainer > h4:after {
	background:#C9364D;
}
#mainmenu-wrapper .jsn-mainnav-inner ul.nav-child {border-bottom: 2px solid #C9364D}

/* Header */

.header-container {
	background:#323232;
	border-top: 3px solid #D05165;
}
#lang-curr-container a:hover, .welcome-msg .cust-welcome .menu_txt span > a:hover, .language_topbarlinks .topbar_links li span a:hover, #contactus-wrapper .contact_address, .rectangle-list a:before, .button, input[type="submit"], input[type="reset"], input[type="button"], .readmore, button, #reviewsInfo .cart_button span, #reviewsWrite .cart_button span, #login-page .signup-wrapper .button-set a {
	background: #D05165;
}

/* Product Name on Hover & Price  & sideboxes */

.product-name-desc .product_name > a:hover, .prodprice .productSpecialPrice, .prodprice, .product_name_details .product_list_price, .ui-widget.infoBoxContainer a:hover, .tablecontent.newproductlisting.content_box .product_name_desc .product_list_name > a:hover, .checkoutprogress-wrapper a.checkoutBarFrom:hover span {
	color: #C9364D !important;		
}

/* Breadcrumb Color */
#breadcrumb-wrapper a {
	color: #D05165;
}
#breadcrumb-wrapper a:hover {
	border-bottom: 1px solid #C9364D;
	color: #C9364D;
}

.createaccount-wrapper .contentContainer > h4:after {
	background-color: #C9364D;	
}

.home-shopping-cart button:hover, .home-shopping-cart a:hover {
	background-color: #D05165;	
}

.categories_sidebox .ui-widget-content.infoBoxContents ul li:hover a, 
#left-wrapper .ui-widget-content.infoBoxContents > a:hover {
	border-left: 4px solid #C9364D;	
}

.product_name > a, .subproduct_name a, #bottom-wrapper .email_id a, .loginarea .forgotpasswordarea > a, .s_desc a, .s_desc a:hover, .s_desc a:active, .s_desc a:visited, .information .alert, .msgalert, #left-wrapper .ui-widget-content a, #right-wrapper .ui-widget-content a, .productinfo-wrapper .product_info_tab #view2 a, .productinfo-wrapper .product_info_tab #view3 .also_purchased_product_name > a, #cart-wrapper .product_info_itemname, #my_account .accountLinkList a, .tablecontent.newproductlisting .product_name_desc .product_list_description > a, .tablecontent.newproductlisting.content_box .product_name_desc .product_list_name > a, .tablecontent.newproductlisting.content_box .product_name_details a, .product_name_details .product_list_price del, .productdetails-wrapper .productprice-wrapper .prodprice .normalprice, #checkoutsucess .contentText > a, #account_history .content_box td a, .contentText a > h2, .tablecontent.newproductlisting.content_box .product_name_details a, .product_name_details .product_list_price .normalprice, .tablecontent.newproductlisting.content_box .product_name_details .product_list_price del, .bold.user_reviewer > strong, .list-reviews span.date > strong, .review_left .buttonSet .review_read_more > a, .review_left .buttonSet .write_review span a, .review_left .buttonSet .back span a, #reviewsInfo .list-reviews .user_detail .bold > strong, #reviewsRead .list-reviews .user_detail .bold > strong, #reviewsRead .review .review_left .product_title > h3 a
, #checkoutConfirmation a span, .createaccount-wrapper a u, .checkoutprogress-wrapper .checkoutBarFrom, .acc_trigger, .newsletter #mc_embed_signup input.email, .advanced_search .advance_search_help a, .tablecontent.newproductlisting.content_box td a, #createaccount-wrappersucess .contentText > a
{color: #D05165;}

.product-info-buttons .add_to_cart.cart-buttons:hover > input[type="submit"], .cart-buttons:hover input[type="submit"], #wishlist .cart-buttons a span:hover, #addressBookProcessDefault .cart-buttons.back-address a span:hover, #addressBookProcessDefault a.cart-buttons.back span:hover, #testimonialDefault .cart-buttons a span:hover, .cart-buttons:hover, 
#addressBookProcessDefault .cart-buttons.back-address:hover {
	background-color: #D05165;
}

/*************************************** NEW CSS *****************************************/
.dropdown-menu > li > a, #nav > li > a:active, .top-nav-holder .searchbox .search-button, .le-breadcrumb ul li a, .le-breadcrumb ul li, .product-info-ratings .rating-links > a, #product_info_display .desc-info p, #product_info_display .desc-info ul, .index-ratings a {
    color: #555555;
}

/* Header Part */
header .header-row, .main-menu-wrapper {
	background-color: #EAEAEA;
}
a:active, a:visited, a, .btn-group.le-dropdown a.dropdown-toggle, #nav li a, .btn-group a.login, .header-row .searchbox input[type="text"] {
	color: #000000;	
}
#nav li a:hover, #nav > li:hover > a, #nav li ul li:hover > a, #nav > li.tab_active > a {
	color: #D05165;
}
.nav li > ul > li:hover > a, .split-login .buttons-set .cart-buttons > span > a {
	color: #D05165 !important;	
}
#nav > li > a:after {
	background-color : transparent;
	content:"";
	height:2px;
	position:absolute;
	left:0;
	right:0;
	margin: 0 auto;
	width:0;
	bottom:0;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
#nav > li:hover > a:after, #nav > li.tab_active > a:after, 
#nav_1 > li:hover > a:after, #nav_1 > li.tab_active > a:after {
	background-color : #D05165;
	content:"";
	height:2px;
	position:absolute;
	left:0;
	right:0;
	margin: 0 auto;
	width:100%;
	bottom:0;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
.searchbox .form-search .button {
	background-color: #D05165;	
}
.top-nav-holder .basket-holder .basket .basket-icon svg path {
    fill: #D05165;
}
.searchbox .form-search .button:hover, .loginarea.buttons-set span button:hover {
	background-color:#C9364D;	
}
.cartmain .cartTopProductName > a:hover, .basket-holder .cart_table .cartTopProductRemove > a:hover i, .login-buttons a:hover, a:hover, .subcategories_list .subcat_img:hover a {
	color:#C9364D;
}
.product-review-default h4 a:hover {
	color:#C9364D !important;
}
/* Header Part Ends Here */

/* Buttons */
.cart-buttons, .change_address > a.cart-buttons, .login-buttons span button, #addressBookProcessDefault .content span > button, #addressBookProcessDefault .content span.button > span > a {
	color: #D05165;
	border:2px solid #D05165;	
}
.cart-buttons:visited, #addressBookProcessDefault .cart-buttons.back-address a, 
#indexCategories #subcategory_names .cart-buttons a, .cart-buttons span a {
	color: #D05165;
}
#wishlist .cart-buttons a span, #shoppingCartDefault .cart-buttons, #shoppingCartDefault .cart-buttons a, .product-info-buttons .add_to_cart.cart-buttons > input[type="submit"], .cart-buttons > input[type="submit"], #wishlist .cart-buttons a span, #addressBookProcessDefault .cart-buttons.back-address a span, #addressBookProcessDefault a.cart-buttons.back span, 
#testimonialDefault .cart-buttons a span {
	color: #D05165;
}
.product-info-buttons .add_to_cart.cart-buttons:hover > input[type="submit"], .cart-buttons:hover input[type="submit"], #wishlist .cart-buttons a span:hover, #addressBookProcessDefault .cart-buttons.back-address a span:hover, #addressBookProcessDefault a.cart-buttons.back span:hover, #testimonialDefault .cart-buttons a span:hover, .cart-buttons:hover, 
#addressBookProcessDefault .cart-buttons.back-address:hover {
	background-color: #D05165;
}
.button,input[type="reset"],input[type="button"],.readmore,button, #pageThree .buttonRow.back > a, #pageFour .buttonRow.back > a, #pageTwo .buttonRow.back > a, #discountcouponInfo .content .buttonRow.forward > a, .store-details h4::after, .contact-sample-text h4::after {
    background-color: #D05165;
}
.button:hover, input[type="reset"]:hover, input[type="button"]:hover, .readmore:hover, button:hover, .billto-shipto .details:hover , .profile a:hover, .change_address:hover, #pageThree .buttonRow.back > a:hover, #pageFour .buttonRow.back > a:hover, #pageTwo .buttonRow.back > a:hover, #discountcouponInfo .content .buttonRow.forward > a:hover, .support-footer div:hover .support-icon-image i.fa, .footer-social .social-links > li a:hover, .section-brands-slider .owl-next:hover, .section-brands-slider .owl-prev:hover, .login-buttons span button:hover {
	background-color: #C9364D;
}

#cssmenu > ul > li.has-sub:hover::before, #cssmenu > ul > li.tab_active.has-sub::before, #cssmenu_1 > ul > li.has-sub:hover::before, #cssmenu_1 > ul > li.tab_active.has-sub::before {
	border-top: 4px solid #C9364D;
}
#cssmenu > ul > li.has-sub:before, #cssmenu_1 > ul > li.has-sub:before {
 	border-top: 4px solid #323232;	
}
#cssmenu ul ul li.has-sub:before, #cssmenu_1 ul ul li.has-sub:before
{border-left:4px solid #323232;}
#cssmenu ul ul li.has-sub:hover:before, #cssmenu_1 ul ul li.has-sub:hover:before
{border-left:4px solid #C9364D;}
/* Buttons Ends Here */

/* Product Tab */
#horizontalTab .resp-tabs-list .resp-tab-item {
	color: #555555;
	border: 1px solid #555555;		
}
#horizontalTab .resp-tab-item.resp-tab-active {
	color: #D05165;
	border: 1px solid #D05165;	
}
/* Product Tab Ends Here */
	
/* Product Link Color */
.product_name h3 a {
	color: #555555;	
}  
.product_name h3 a:hover {
	color: #C9364D;	
} 
.head .merged-buttons .buttons {
	background-color: #888888;	
} 
.head .merged-buttons .buttons:hover {
	background-color: #C9364D;
}
/* Product Link Color Ends Here */

/*Price*/
.product-item .index_price .productSpecialPrice, .product-item .index_price .single_price, .featured-products .index_price .single_price, .featured-products .index_price .productSpecialPrice, .product-item .index_price .productSpecialPrice, .product-item .index_price, .split-login .buttons-set .cart-buttons > span > a{
    color: #D05165;
}
.product-item .index_price del, .product_sideboxname > a, .rectangle-list a, .product-item.wide .index_price .normalprice, .index_price .normalprice, .normalprice, .productSpecialPriceSale, .sidebox_price .normalprice, .sidebox_price .normalprice s, .sidebox_price .normal_price s {
	color: #555555;
}
.sidebox_price .productSpecialPrice, .sidebox_price .single_price, .sidebox_price .normal_price {
    color: #D05165;;
}
input[type="password"], input[type="email"], input[type="url"], textarea {
    color: #555555;;
}
.productPriceDiscount {
    color: ;
}
.sidebox_price .productPriceDiscount {
	color: ;
}
/* Price Ends Here */

/* Support Icon Border Footer */
.support-footer div:hover .support-icon-image i.fa, .section-brands-slider .owl-next:hover, .section-brands-slider .owl-prev:hover, .featured-products .box_heading header h2, #specialsDefault .special-inner-title, .centerBoxWrapper.alsoPurchased > h2 {
	border: 1px solid #C9364D;
}
/* Support Icon Border Footer Ends Here */

/* Heading Font Color */

.section-test-slider .test-heading h2:before {
	background-color: #000000;
}
.section-test-slider .test-heading h2, #centercontent-wrapper header > h4, .footer-social .social-title, .footer-right .brand-title, .footer-right .footer-title, .product_title h3#productName, #product_info_display .desc-info .desc-info-details h5, h4.rightBoxHeading, h4.leftBoxHeading {
	color: 	#000000;
}
.featured-products .box_heading header h2, #specialsDefault .special-inner-title, .centerBoxWrapper.alsoPurchased > h2 {
	color:#C9364D;
}
#centercontent-wrapper header > h4:after, h4.rightBoxHeading:after, h4.leftBoxHeading:after {
	border-bottom: 2px solid #D05165;
}
/* Heading Font Color Ends Here */

/* Footer Social Icon Border */
.footer-social .social-links > li a:hover {
	border: 1px solid #C9364D;
}
/* Footer Social Icon Border Ends Here */

/* Category Sidebox Background Color */
#categoriescssHeading.rightBoxHeading {
	background-color:#D05165;	
}
/* Category Sidebox Background Color Ends Here */

/* Link Hover Color */
.section-newsletter #mc_embed_signup input.button:hover, .home_button .cart-buttons a, #pageNotFound .notfound_title > p, #categoriescss #nav-cat li a:hover, #breadcrumb .le-breadcrumb.inline li a:hover, .header-row .link-list.inline a:hover, #shoppingcartContent .cartBoxTotal, #myAccountGen li a:hover, #accountDefault .my_accountpage .user-accountinfo a:hover, #accountHistInfo #orderTotals .amount, #accountDefault .my_accountpage .allorder_text > a:hover, #shoppingCartDefault .shopping-cart-page.box #cartSubTotal, #checkoutConfirmDefault #orderTotals, #checkoutConfirmDefault .total_price, 
#checkoutConfirmDefault a.table_edit_button:hover span, .product_sideboxname > a:hover, #left-column .leftBoxContainer .leftBoxHeading a:hover, #right-column .rightBoxContainer .rightBoxHeading a:hover {
	color: #C9364D;	
}
/* Link Hover Color Ends Here */

/* Footer */
.footer-support-icon, .section-footer {
	background-color: #F1EFE2;	
}
.footer-right .extra-links > li, .footer-right .extra-links > li a, .aboutus-social .aboutus-logo .aboutus-text, 
.footer-right .footer-contact p {
	color: #666666;	
}
.footer-right .extra-links > li:hover, .footer-right .extra-links > li:hover a {
	color: #C9364D;	
}
/* Footer Ends Here */

/* Copyright */
.section-copyright {
	background-color:#FFFFFF;	
}
.copyright a {
	color:#D05165;	
}
.copyright a:hover {
	color: #323232;
}
/* Copyright Ends Here */

/*Goto To top button*/
.goto-top {
    background-color: #D05165;
}
.goto-top:hover { 
	background-color: #C9364D;
}
/*Goto To top button*/

/*Pagination*/
.pagination-style a {
	background-color: #D05165;
}
.pagination-style > strong, .pagination-style a:hover {
	background-color: #C9364D;
}
/*Pagination*/

#cartImage > a:hover {
    color: #C9364D !important;
}

/* Product Info Color */

.single_price, .productSpecialPrice, .productprice-amount, .addtocart-info .add_to_cart span button {
	color:#D05165}
.product_info_tab .tabs {border-bottom: 3px solid #D05165;}
.addtocart-info .add_to_cart span button:hover, .cart-buttons:hover input[type="submit"], #addressBookProcessDefault .cart-buttons.back-address a span:hover, #addressBookProcessDefault a.cart-buttons.back span:hover, #testimonialDefault .cart-buttons a span:hover, .cart-buttons:hover, 
#addressBookProcessDefault .cart-buttons.back-address:hover, #addressBookProcessDefault .content span > button:hover, #addressBookProcessDefault .content span.button > span > a:hover {
	background-color: #D05165;
}
.product-next-prev .navNextPrevList > a, .product_info_tab .tabs li.selected a, #indexProductListCatDescription p:first-child:first-letter {
    background: none repeat scroll 0 0 #D05165;
}

.centerBoxWrapper .owl-theme .owl-controls .owl-buttons div.owl-next:hover, .centerBoxWrapper .owl-theme .owl-controls .owl-buttons div.owl-prev:hover {
	background-color: #C9364D;
	border: 1px solid #C9364D;
}

#cssmenu.small-screen #menu-button, #cssmenu.small-screen .submenu-button, #cssmenu_1.small-screen #menu-button, #cssmenu_1.small-screen .submenu-button, #cssmenu.small-screen #menu-button.menu-opened {
	background-color: #C9364D;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
/*Cart Quantity Inc/Dec*/
.addtocart-info .cart_quantity .fff:hover {
	background: none repeat scroll 0 0 #D05165;
}
/*Cart Quantity Inc/Dec*/
/* Slideshow Part */
#home-slider .item .caption .le-btn {
	background-color:#D05165;		
}
#home-slider .item .caption .le-btn:hover {
	background-color:#C9364D;	
}
/* Slideshow Part Ends Here */
/* Newsletter Part */
.section-newsletter {
	background-image:url(images/backend_image/newsletter/asd.jpg);
}
/* Newsletter Part Ends */
@media screen and (max-width: 979px) {
	#header-wrapper .navbar .nav > li:hover > a, .home-shopping-cart button:hover, .home-shopping-cart:hover a span button{color:#C9364D !important;}
	.jsn-mainnav.navbar .nav-collapse ul.nav li a{color:#D05165;
}}
</style>
 
<style type="text/css">
.section-newsletter {
    margin: 50px 0;
}
#centercontent-wrapper.col-lg-9.col-md-9{float:left}
@media only screen and (min-width:992px) and (max-width:3000px) {
	.wrappper > header > .main-menu-wrapper{opacity:0.8; position: absolute;box-shadow: 0 2px 0 0 rgba(0, 0, 0, 0.1);}
}
</style>
 
<style type="text/css">	
	.no_psno{display:none}
</style>

</head>

<body> <!--body area starts -->
	<div class="wrappper"> <!-- maincontent-wrapper -->
		
<!-- Header Container Starts -->
<header>
	<!-- Topbar Wrapper Starts -->
    <div class="header-row">
    	<div class="container">
        	<div class="row">
                <!-- Logo Container Starts -->
                <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
                    <div class="logo">
                                            <a href="index.php">
                            <H2>QUBIZCART</H2>
											<!-- <img src="images/backend_image/logo/logo.png" alt="logo" /> -->
                        </a>
                      	
                    </div>
                </div>
                <!-- Logo Container Ends -->
                <!-- Serach Container Starts -->
                <div class="col-xs-12 col-md-3 col-lg-4 col-sm-4">
                    <div class="searchbox">
                        <div class="field">
                            <form name="search" action="#" method="get">                                <div class="form-search">
                                    <input type="text" name="keywords" class="input-text" value=" Search entire store here.." 
                                    onblur="if(this.value=='') 
                                    this.value=' Search entire store here..'" onFocus="if(this.value ==' Search entire store here..'
                                     ) this.value=''" />
                                    <button class="button" title="Search" type="submit">
                                        <span><i class="fa fa-search"></i></span>		
                                    </button>
                                </div>
                            </form>    	
                        </div>
                    </div>
                </div>
                <!-- Serach Container Ends -->
                <!-- Links Container Starts -->
                <div class="col-xs-12 col-md-5 col-sm-4 col-lg-4">
                    <ul class="link-list inline">
                        <li class="btn-group">
                            <span class = "login"><span class="tdbLink"><a id="tdb1" href="admin-login.php">Admin</a></span><script type="text/javascript">$("#tdb1").button().addClass("ui-priority-secondary").parent().removeClass("tdbLink");</script></span> </li>
							<li class="btn-group">
							<span class = "login"><span class="tdbLink"><a id="tdb1" href="vendor-login.php">Vendor</a></span><script type="text/javascript">$("#tdb1").button().addClass("ui-priority-secondary").parent().removeClass("tdbLink");</script></span> </li>
							<li class="btn-group">
							<span class = "login"><span class="tdbLink"><a id="tdb1" href="user-login.php">User</a></span><script type="text/javascript">$("#tdb1").button().addClass("ui-priority-secondary").parent().removeClass("tdbLink");</script></span> </li>
                    </ul>
                </div>
                <!-- Links Container Ends -->
        	</div>
        </div>
    </div>
    <!-- Topbar Wrapper Ends -->
    <!-- Menu Wrapper Starts -->
    <div class="main-menu-wrapper">
        <div class="container">
            <div class="nav-maincontainer top-nav-holder">
                <div class="nav-container nav-menu top-menu-holder">
                    <div id="cssmenu">
                        <ul id="nav" class="nav">
                            <li id="home">
                                <a href="index.php">Home</a>
                            </li>
                            <!--Superfish Horizontal Navigation bar-->
                            <li class="selected_0"><a href="#" class="current_parent">KIDS</a>
<ul class="nav-child unstyled"><li class="selected_1"><a href="#">Accessories</a></li>
<li class="selected_1"><a href="#">Clothing</a></li>
<li class="selected_1"><a href="#">Footwear</a></li>
</ul>
<li class="selected_0"><a href="index9d98.html?cPath=34" class="current_parent">Men</a>
<ul class="nav-child unstyled"><li class="selected_1"><a href="#">Accessories</a></li>
<li class="selected_1"><a href="#">Clothing</a></li>
<li class="selected_1"><a href="#">Footwear</a></li>
</ul>
<li class="selected_0"><a href="#" class="current_parent">Women</a>
<ul class="nav-child unstyled"><li class="selected_1"><a href="#">Accessories</a></li>
<li class="selected_1"><a href="#">Clothing</a></li>
<li class="selected_1"><a href="#">Footwear</a></li>


		                            <!--end Superfish-->
                        </ul>
						
<li id="contact">
                                <a href="contact.php">Contact</a>
                            </li>
                    </div>
					<div class="basket-holder">
						<div class="basket">
							<div class="basket-icon">
								<a href="mycart.php">
								<img class="svg" alt="basket" src="ext/images/icons/basket.svg">
								My Cart <?php echo "wel";?>						</a>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
	<!-- Menu Wrapper Ends -->
    <!-- Sticky Header Content Starts -->
    <div class="sticky-header-wrapper header-content">
        <div class="container">
            <div class="nav-maincontainer top-nav-holder">
                <div class="row">
                    <div class="nav-container col-xs-12 col-md-9 col-lg-9 col-sm-7 nav-menu top-menu-holder">
                        <div class="sticky-header-content" id="cssmenu_1">
                            <ul id="nav_1" class="nav">
                                <li id="home_1">
									<a href="index.html">Home</a>
									<ul>
										<li><a href="http://magnus.perfectusinc.com/magnus/?layout=full">Full Layout</a></li>
										<li><a href="http://magnus.perfectusinc.com/magnus/?layout=box">Box Layout</a></li>
									</ul>
                            	</li>
                                <!--Superfish Horizontal Navigation bar-->
                                <li class="selected_0"><a href="index7b74.html?cPath=48" class="current_parent">Kids</a>
<ul class="nav-child unstyled"><li class="selected_1"><a href="indexd3f5.html?cPath=48_49">Accessories</a></li>
<li class="selected_1"><a href="index21d6.html?cPath=48_50">Clothing</a></li>
<li class="selected_1"><a href="indexa04c.html?cPath=48_51">Footwear</a></li>
</ul>
<li class="selected_0"><a href="index9d98.html?cPath=34" class="current_parent">Men</a>
<ul class="nav-child unstyled"><li class="selected_1"><a href="indexd3f5.html?cPath=48_49">Accessories</a></li>
<li class="selected_1"><a href="index21d6.html?cPath=48_50">Clothing</a></li>
<li class="selected_1"><a href="indexa04c.html?cPath=48_51">Footwear</a></li>
</ul>

<li class="selected_0"><a href="indexbab2.html?cPath=35" class="current_parent">Women</a>
<ul class="nav-child unstyled"><li class="selected_1"><a href="indexb344.html?cPath=35_44">Accessories</a></li>
<li class="selected_1"><a href="indexf4ec.html?cPath=35_47">Clothing</a></li>
<li class="selected_1"><a href="indexd52c.html?cPath=35_46">Footwear</a></li>

		                                <!--end Superfish-->
                            </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3 col-sm-5">
                        <div class="searchbox">
                            <div class="field">
                               <form name="search" action="https://magnusosc.perfectuswebinsights.com/advanced_search_result.php" method="get">                                    <div class="form-search">
                                        <input type="text" name="keywords" class="input-text" value=" Search entire store here.." 
                                        onblur="if(this.value=='') 
                                        this.value=' Search entire store here..'" onFocus="if(this.value ==' Search entire store here..'
                                         ) this.value=''" />
                                        <button class="button" title="Search" type="submit">
                                            <span><i class="fa fa-search"></i></span>		
                                        </button>
                                    </div>
                        		</form>    	
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sticky Header Content Ends -->
</header>
<!-- Header Container Ends -->
