<?php if($theme_options->get( 'font_status' ) == '1' || $theme_options->get( 'colors_status' ) == '1') { ?>
<style type="text/css">
	<?php if($theme_options->get( 'colors_status' ) == '1') { ?>
		<?php if($theme_options->get( 'body_font_text' ) != '') { ?>
		body,
		.dropdown-menu,
		textarea, 
		input[type="text"], 
		input[type="password"], 
		input[type="datetime"], 
		input[type="datetime-local"], 
		input[type="date"], 
		input[type="month"], 
		input[type="time"], 
		input[type="week"], 
		input[type="number"], 
		input[type="email"], 
		input[type="url"], 
		input[type="search"], 
		input[type="tel"], 
		input[type="color"], 
		.uneditable-input,
		select,
		.search_form .button-search,
		.search_form .button-search2,
		.product-filter .options .button-group button,
		.custom-footer .pattern {
			color: <?php echo $theme_options->get( 'body_font_text' ); ?>;
		}
		
		.ui-autocomplete li a {
			color: <?php echo $theme_options->get( 'body_font_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_font_links' ) != '') { ?>
		a,
		.dropdown-menu a,
		.vertical ul.megamenu > li > a,
		.filter-product .filter-tabs ul > li.active > a,
		.filter-product .filter-tabs ul > li.active > a:hover,
		.filter-product .filter-tabs ul > li.active > a:focus {
			color: <?php echo $theme_options->get( 'body_font_links' ); ?>;
		}
		
		@media (max-width: 960px) {
			.responsive ul.megamenu > li > a {
				color: <?php echo $theme_options->get( 'body_font_links' ); ?> !important;
			}
		}
		
		@media (max-width: 767px) {
     		.responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li a, 
     		.responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li a {
     		     color: <?php echo $theme_options->get( 'body_font_links' ); ?>;
     		}
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_font_links_hover' ) != '') { ?>
		a:hover,
		.box-category ul li a.active,
		.product-list .actions > div ul,
		.product-grid .product .only-hover ul li a span,
		.hover-product .only-hover ul li a span,
		.product-list .name-desc .rating-reviews .reviews span,
		.product-list .actions > div ul,
		.main-content .content > ul li:before,
		.breadcrumb .container ul li:before,
		.category-wall .name a,
		.breadcrumb ul li:last-child a,
		ul.megamenu li .sub-menu .content .static-menu a.main-menu,
		.vertical ul.megamenu > li:hover > a {
			color: <?php echo $theme_options->get( 'body_font_links_hover' ); ?>;
		}
		
		.product-filter .options .button-group button:hover, 
		.product-filter .options .button-group .active {
			background: <?php echo $theme_options->get( 'body_font_links_hover' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_border_color' ) != '') { ?>
		.customfooter-panels2 .customfooter-panel .heading + .content,
		textarea, 
		input[type="text"], 
		input[type="password"], 
		input[type="datetime"], 
		input[type="datetime-local"], 
		input[type="date"], 
		input[type="month"], 
		input[type="time"], 
		input[type="week"], 
		input[type="number"], 
		input[type="email"], 
		input[type="url"], 
		input[type="search"], 
		input[type="tel"], 
		input[type="color"], 
		.uneditable-input,
		select,
		.col-sm-3 .box .box-content,
		.col-sm-4 .box .box-content,
		.col-md-3 .box .box-content,
		.col-md-4 .box .box-content,
		.col-sm-3 .blog-latest > div,
		.col-sm-4 .blog-latest > div,
		.col-md-3 .blog-latest > div,
		.col-md-4 .blog-latest > div,
		.box-category > ul > li,
		.box-category ul li ul li,
		.product-filter,
		.product-info .description, 
		.product-info .price, 
		.product-info .options, 
		.product-info .cart,
		.breadcrumb ul,
		#main .artblock,
		#main .artblock .name,
		#main .artblock .article-meta,
		.review-list .text,
		.mini-cart-info td,
		ul.megamenu li .sub-menu .content,
		ul.megamenu .sub-menu .content > .border,
		.dropdown-menu,
		.product-list .name-desc .rating-reviews,
		.vertical .megamenu-wrapper {
		     border-color: <?php echo $theme_options->get( 'body_border_color' ); ?>;
		}
		
		.review-list .text:before,
		ul.megamenu > li > .sub-menu > .content > .arrow:before,
		#top-bar .dropdown-menu:before,
		#top #cart_block .dropdown-menu:before {
		     border-bottom-color: <?php echo $theme_options->get( 'body_border_color' ); ?>;
		}
		
		.vertical ul.megamenu > li > .sub-menu > .content > .arrow:before {
		     border-right-color: <?php echo $theme_options->get( 'body_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_product_name' ) != '') { ?>
		.product-list .name-desc .name a,
		ul.megamenu li .product .name a,
		.product-grid .product .name a {
		     color: <?php echo $theme_options->get( 'body_product_name' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_product_name_hover' ) != '') { ?>
		.product-list .name-desc .name a:hover,
		ul.megamenu li .product .name a:hover,
		.product-grid .product .name a:hover,
		.col-sm-3 .products .row > div .product .name a, 
		.col-sm-4 .products .row > div .product .name a, 
		.col-md-3 .products .row > div .product .name a, 
		.col-md-4 .products .row > div .product .name a {
		     color: <?php echo $theme_options->get( 'body_product_name_hover' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_price_text' ) != '') { ?>
		.compare-info .price-new, 
		.product-grid .product .price, 
		.hover-product .price,
		.product-list .actions > div .price,
		.product-info .price .price-new,
		ul.megamenu li .product .price,
		.mini-cart-total td:last-child,
		.cart-total table tr td:last-child,
		.mini-cart-info td.total,
		#quickview .price .price-new {
			color: <?php echo $theme_options->get( 'body_price_text' ); ?>;
		}
		
		.ui-autocomplete li span.price {
			color: <?php echo $theme_options->get( 'body_price_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_price_new_text' ) != '') { ?>
		.product-list .actions > div .price .price-new,
		.product-grid .product .price .price-new,
		.compare-info .price-new {
		     color: <?php echo $theme_options->get( 'body_price_new_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_price_old_text' ) != '') { ?>
		.product-grid .product .price .price-old,
		.product-info .price .price-old,
		.product-list .actions > div .price .price-old,
		#quickview .price .price-old,
		.compare-info .price-old {
		     color: <?php echo $theme_options->get( 'body_price_old_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_page_name_color' ) != '') { ?>
		.breadcrumb h1 {
		     color: <?php echo $theme_options->get( 'body_page_name_color' ); ?>;
		}
		<?php } ?>
		
		
		<?php if($theme_options->get( 'cart_background_color' ) != '') { ?>
		#top #cart_block {
		     background: <?php echo $theme_options->get( 'cart_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'account_background_color' ) != '') { ?>
		.bkg {
		     background: <?php echo $theme_options->get( 'account_background_color' ); ?>;
		}
		<?php } ?>
		
		
		<?php if($theme_options->get( 'cart_color_p' ) != '') { ?>
		#top #cart_block .cart-heading p {
		    color: <?php echo $theme_options->get( 'cart_color_p' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'cart_color_span' ) != '') { ?>
		#top #cart_block .cart-heading span {
		    color: <?php echo $theme_options->get( 'cart_color_span' ); ?>;
		}
		<?php } ?>
		
		
		<?php if($theme_options->get( 'icon_color_cart' ) != '') { ?>
		#top #cart_block .cart-heading .cart-icon:before {
		    color: <?php echo $theme_options->get( 'icon_color_cart' ); ?>;
		}
		<?php } ?>
		
		
		<?php if($theme_options->get( 'icon_color_account' ) != '') { ?>
		#top #cart_block .cart-heading .cart-user:before {
		    color: <?php echo $theme_options->get( 'icon_color_account' ); ?>;
		}
		<?php } ?>
		
		
		<?php if($theme_options->get( 'body_box_heading_color' ) != '') { ?>
		.box .box-heading {
		     color: <?php echo $theme_options->get( 'body_box_heading_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_box_heading_border_bottom_color' ) != '') { ?>
		.box .box-content {
		     position: relative;
		     padding-top: 20px !important;
		}
		
		.box .box-heading {
		     margin-bottom: 20px;
		}
		
		.box .strip-line {
		     display: none;
		}
		
     		<?php if($theme_options->get( 'menu_style' ) != '2') { ?>
          		.box .box-content:before {
          		     content: '';
          		     width: 100%;
          		     height: 1px;
          		     top: 0%;
          		     left: 0;
          		     position: absolute;
          		     background: <?php echo $theme_options->get( 'body_box_heading_border_bottom_color' ); ?>;
          		}
          		
          		     .col-sm-3 .box .box-content:before,
          		     .col-sm-4 .box .box-content:before,
          		     .col-md-3 .box .box-content:before,
          		     .col-md-4 .box .box-content:before {
          		          display: none;
          		     }
          	<?php } else { ?>
          	     .box {
          	          padding-top: 20px;
          	     }
          	     
               	.box .box-heading {
               	     margin-bottom: 10px;
               	     padding-bottom: 10px;
               	     border-bottom: 2px solid <?php echo $theme_options->get( 'body_box_heading_border_bottom_color' ); ?>;
               	}
               	
               	@media (max-width: 767px) { 
               	     .responsive .box .box-heading {
               	          margin-bottom: 0px;
               	     }
               	}
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'body_background_color' ) != '') { ?>
		body {
			background: <?php echo $theme_options->get( 'body_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'product_background_gradient_top' ) != '' && $theme_options->get( 'product_background_gradient_bottom' ) != '') { ?>
		.product-grid .product .product-overflow,
		.product-list > div .product-list-overflow,
		ul.megamenu li .product .product-overflow,
		.product-style-2 .product-grid .product .product-overflow  {
			background: <?php echo $theme_options->get( 'product_background_gradient_top' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 66%, <?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(66%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?>), color-stop(100%,<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 66%,<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 66%,<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 66%,<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 100%); /* IE10+ */
			background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 66%,<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $theme_options->get( 'product_background_gradient_top' ); ?>', endColorstr='<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?>',GradientType=0 ); /* IE6-9 */
		}
		
		.product-style-1 .product-grid .product .product-overflow {
		     background: <?php echo $theme_options->get( 'product_background_gradient_top' ); ?>; /* Old browsers */
		     background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 25%, <?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 75%, <?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 75%, <?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 100%); /* FF3.6+ */
		     background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?>), color-stop(25%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?>), color-stop(75%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?>), color-stop(75%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?>), color-stop(100%,<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
		     background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 25%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 100%); /* Chrome10+,Safari5.1+ */
		     background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 25%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 100%); /* Opera 11.10+ */
		     background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 25%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 100%); /* IE10+ */
		     background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 25%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?> 100%); /* W3C */
		     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3f9f8', endColorstr='#f3f9f8',GradientType=0 ); /* IE6-9 */
		}
		
		.product-grid .product:before,
		.product-grid .product:after,
		.product-list > div:before,
		.product-list > div:after,
		ul.megamenu li .product:before,
		ul.megamenu li .product:after {
		     background: <?php echo $theme_options->get( 'product_background_gradient_bottom' ); ?>;
		}
		
		     <?php if($theme_options->get( 'product_background_gradient_bottom' ) == '#ffffff') { ?>
		          .product-grid .product:before,
		          .product-grid .product:after,
		          .product-list > div:before,
		          .product-list > div:after,
		          ul.megamenu li .product:before,
		          ul.megamenu li .product:after {
		               display: none;
		          }
		          
		          .product-grid .product {
		               margin-bottom: 2px;
		          }
		          
		          .product-grid .product,
		          .product-list > div,
		          ul.megamenu li .product {
		               -webkit-box-shadow: 0px 2px 1px -1px rgba(50, 50, 50, 0.2);
		               -moz-box-shadow: 0px 2px 1px -1px rgba(50, 50, 50, 0.2);
		               box-shadow: 0px 2px 1px -1px rgba(50, 50, 50, 0.2);
		          }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'product_border_color' ) != '') { ?>
		.product-grid .product .product-overflow ,
		.product-grid .product:before,
		.product-grid .product:after,
		.product-list > div .product-list-overflow,
		.product-list > div:before,
		.product-list > div:after,
		ul.megamenu li .product .product-overflow,
		ul.megamenu li .product:before,
		ul.megamenu li .product:after,
		.product-style-1 .product-grid .product .product-overflow,
		.product-style-2 .product-grid .product .product-overflow {
			border-color: <?php echo $theme_options->get( 'product_border_color' ); ?>;
		}
		
		.product-list .actions > div:before,
		.product-style-2 .product-grid .product .name:before {
		     background: <?php echo $theme_options->get( 'product_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'product_hover_background_gradient_top' ) != '' && $theme_options->get( 'product_hover_background_gradient_bottom' ) != '') { ?>
		.product-grid .product:hover .product-overflow,
		.product-list > div:hover .product-list-overflow,
		ul.megamenu li .product:hover .product-overflow {
			background: <?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 66%, <?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(66%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?>), color-stop(100%,<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 66%,<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 66%,<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 66%,<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 100%); /* IE10+ */
			background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 66%,<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?>', endColorstr='<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?>',GradientType=0 ); /* IE6-9 */
		}
		
		.product-style-1 .product-grid .product:hover .product-overflow {
		     background: <?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?>; /* Old browsers */
		     background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 25%, <?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 75%, <?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 75%, <?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 100%); /* FF3.6+ */
		     background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?>), color-stop(25%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?>), color-stop(75%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?>), color-stop(75%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?>), color-stop(100%,<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
		     background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 25%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 100%); /* Chrome10+,Safari5.1+ */
		     background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 25%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 100%); /* Opera 11.10+ */
		     background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 25%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 100%); /* IE10+ */
		     background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 25%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_hover_background_gradient_top' ); ?> 75%,<?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?> 100%); /* W3C */
		     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3f9f8', endColorstr='#f3f9f8',GradientType=0 ); /* IE6-9 */
		}
		
		.product-grid .product:hover:before,
		.product-grid .product:hover:after,
		.product-list > div:hover:before,
		.product-list > div:hover:after,
		ul.megamenu li .product:hover:before,
		ul.megamenu li .product:hover:after {
		     background: <?php echo $theme_options->get( 'product_hover_background_gradient_bottom' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'product_hover_border_color' ) != '') { ?>
		.product-grid .product:hover .product-overflow ,
		.product-grid .product:hover:before,
		.product-grid .product:hover:after,
		.product-list > div:hover .product-list-overflow,
		.product-list > div:hover:before,
		.product-list > div:hover:after,
		ul.megamenu li .product:hover .product-overflow,
		ul.megamenu li .product:hover:before,
		ul.megamenu li .product:hover:after {
			border-color: <?php echo $theme_options->get( 'product_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_box_heading_color_text' ) != '') { ?>
		.col-sm-3 .box .box-heading, 
		.col-sm-4 .box .box-heading, 
		.col-md-3 .box .box-heading, 
		.col-md-4 .box .box-heading {
			color: <?php echo $theme_options->get( 'second_box_heading_color_text' ); ?>;
			<?php if($theme_options->get( 'second_box_heading_color_text' ) != '#ffffff') { ?>
			text-shadow: none;
			<?php } ?>
		}
		<?php } ?>
		
          <?php if($theme_options->get( 'second_box_heading_background_gradient_top' ) != '' && $theme_options->get( 'second_box_heading_background_gradient_bottom' ) != '') { ?>
          .col-sm-3 .box .box-heading, 
          .col-sm-4 .box .box-heading, 
          .col-md-3 .box .box-heading, 
          .col-md-4 .box .box-heading {
               background: <?php echo $theme_options->get( 'second_box_heading_background_gradient_top' ); ?>; /* Old browsers */
               background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'second_box_heading_background_gradient_top' ); ?> 14%, <?php echo $theme_options->get( 'second_box_heading_background_gradient_bottom' ); ?> 87%); /* FF3.6+ */
               background: -webkit-gradient(linear, left top, left bottom, color-stop(14%,<?php echo $theme_options->get( 'second_box_heading_background_gradient_top' ); ?>), color-stop(87%,<?php echo $theme_options->get( 'second_box_heading_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
               background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'second_box_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'second_box_heading_background_gradient_bottom' ); ?> 87%); /* Chrome10+,Safari5.1+ */
               background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'second_box_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'second_box_heading_background_gradient_bottom' ); ?> 87%); /* Opera 11.10+ */
               background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'second_box_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'second_box_heading_background_gradient_bottom' ); ?> 87%); /* IE10+ */
               background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'second_box_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'second_box_heading_background_gradient_bottom' ); ?> 87%); /* W3C */
               filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $theme_options->get( 'second_box_heading_background_gradient_top' ); ?>', endColorstr='<?php echo $theme_options->get( 'second_box_heading_background_gradient_bottom' ); ?>',GradientType=0 ); /* IE6-9 */
          }
          <?php } ?>
		
		<?php if($theme_options->get( 'second_box_heading_border_color' ) != '') { ?>
		.col-sm-3 .box .box-heading, 
		.col-sm-4 .box .box-heading, 
		.col-md-3 .box .box-heading, 
		.col-md-4 .box .box-heading {
			border-color: <?php echo $theme_options->get( 'second_box_heading_border_color' ); ?>;
			<?php if($theme_options->get( 'second_box_heading_border_color' ) != '#ffffff') { ?>
			text-shadow: none;
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'first_box_heading_color_text' ) != '') { ?>
		.col-sm-3 .box:first-of-type .box-heading, 
		.col-sm-4 .box:first-of-type .box-heading, 
		.col-md-3 .box:first-of-type .box-heading, 
		.col-md-4 .box:first-of-type .box-heading {
			color: <?php echo $theme_options->get( 'first_box_heading_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'first_box_heading_background_gradient_top' ) != '' && $theme_options->get( 'first_box_heading_background_gradient_bottom' ) != '') { ?>
		.col-sm-3 .box:first-of-type .box-heading, 
		.col-sm-4 .box:first-of-type .box-heading, 
		.col-md-3 .box:first-of-type .box-heading, 
		.col-md-4 .box:first-of-type .box-heading {
		     background: <?php echo $theme_options->get( 'first_box_heading_background_gradient_top' ); ?>; /* Old browsers */
		     background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'first_box_heading_background_gradient_top' ); ?> 14%, <?php echo $theme_options->get( 'first_box_heading_background_gradient_bottom' ); ?> 87%); /* FF3.6+ */
		     background: -webkit-gradient(linear, left top, left bottom, color-stop(14%,<?php echo $theme_options->get( 'first_box_heading_background_gradient_top' ); ?>), color-stop(87%,<?php echo $theme_options->get( 'first_box_heading_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
		     background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'first_box_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'first_box_heading_background_gradient_bottom' ); ?> 87%); /* Chrome10+,Safari5.1+ */
		     background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'first_box_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'first_box_heading_background_gradient_bottom' ); ?> 87%); /* Opera 11.10+ */
		     background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'first_box_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'first_box_heading_background_gradient_bottom' ); ?> 87%); /* IE10+ */
		     background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'first_box_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'first_box_heading_background_gradient_bottom' ); ?> 87%); /* W3C */
		     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $theme_options->get( 'first_box_heading_background_gradient_top' ); ?>', endColorstr='<?php echo $theme_options->get( 'first_box_heading_background_gradient_bottom' ); ?>',GradientType=0 ); /* IE6-9 */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'first_box_heading_border_color' ) != '') { ?>
		.col-sm-3 .box:first-of-type .box-heading, 
		.col-sm-4 .box:first-of-type .box-heading, 
		.col-md-3 .box:first-of-type .box-heading, 
		.col-md-4 .box:first-of-type .box-heading {
			border-color: <?php echo $theme_options->get( 'first_box_heading_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'input_focus_border' ) != '') { ?>
		textarea:focus,
		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="time"]:focus,
		input[type="week"]:focus,
		input[type="number"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="search"]:focus,
		input[type="tel"]:focus,
		input[type="color"]:focus,
		.uneditable-input:focus {
			border-color: <?php echo $theme_options->get( 'input_focus_border' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'input_focus_box_shadow' ) != '') { ?>
		textarea:focus,
		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="time"]:focus,
		input[type="week"]:focus,
		input[type="number"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="search"]:focus,
		input[type="tel"]:focus,
		input[type="color"]:focus,
		.uneditable-input:focus {
		     -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px <?php echo $theme_options->get( 'input_focus_box_shadow' ); ?>;
		        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px <?php echo $theme_options->get( 'input_focus_box_shadow' ); ?>;
		             box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px <?php echo $theme_options->get( 'input_focus_box_shadow' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'product_type_2_price_color' ) != '') { ?>
		.product-style-1 .product-grid .product .left .price,
		.product-style-1 .product-grid .product .left .price .price-new {
			color: <?php echo $theme_options->get( 'product_type_2_price_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'product_type_2_price_border_color' ) != '') { ?>
		.product-style-1 .product-grid .product .left .price {
			border-color: <?php echo $theme_options->get( 'product_type_2_price_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'product_type_2_price_background_gradient_top' ) != '' && $theme_options->get( 'product_type_2_price_background_gradient_bottom' ) != '') { ?>
          .product-style-1 .product-grid .product .left .price {
               background: <?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?>;
               background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'product_type_2_price_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?> 99%);
               background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'product_type_2_price_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?>));
               background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_type_2_price_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?> 99%);
               background: -o-linear-gradient(top, <?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_type_2_price_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?> 99%);
               background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_type_2_price_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?> 99%);
               background: linear-gradient(to bottom, <?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'product_type_2_price_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'product_type_2_price_background_gradient_bottom' ); ?> 99%);
          }
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_text' ) != '') { ?>
		#top-bar .container {
			color: <?php echo $theme_options->get( 'top_bar_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_links' ) != '') { ?>
		#top-bar .container > div > div > div > a,
		#top-bar .container > div > div > form > div > a {
			color: <?php echo $theme_options->get( 'top_bar_links' ); ?>;
		}
		
		#top-bar .dropdown .caret {
			border-top: 4px solid <?php echo $theme_options->get( 'top_bar_links' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_background_gradient_top' ) != '' && $theme_options->get( 'top_bar_background_gradient_bottom' ) != '') { ?>
		#top-bar .background {
			background: <?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'top_bar_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_bar_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_menu_links' ) != '') { ?>
		#top .header-links li a {
			color: <?php echo $theme_options->get( 'top_menu_links' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_icon_background_gradient_top' ) != '' && $theme_options->get( 'top_cart_icon_background_gradient_bottom' ) != '') { ?>
		#top #cart_block .cart-heading .cart-icon {
			background: <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_text' ) != '') { ?>
		#top #cart_block .cart-heading p {
			color: <?php echo $theme_options->get( 'top_cart_block_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_price' ) != '') { ?>
		#top #cart_block .cart-heading span {
			color: <?php echo $theme_options->get( 'top_cart_block_price' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_border_color' ) != '') { ?>
		#top .search_form input {
			border-color: <?php echo $theme_options->get( 'top_search_input_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_icon_search_color' ) != '') { ?>
		.search_form .button-search, 
		.search_form .button-search2 {
			color: <?php echo $theme_options->get( 'top_icon_search_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_background_color' ) != '') { ?>
		#top .background {
			background: <?php echo $theme_options->get( 'top_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_main_links' ) != '') { ?>
		ul.megamenu > li > a,
		.megamenuToogle-wrapper .container {
			color: <?php echo $theme_options->get( 'menu_main_links' ); ?>;
			<?php if($theme_options->get( 'menu_main_links' ) != '#ffffff') { ?>
			text-shadow: none;
			<?php } ?>
		}
		
		.megamenuToogle-wrapper .container > div span {
			background: <?php echo $theme_options->get( 'menu_main_links' ); ?>;
			<?php if($theme_options->get( 'menu_main_links' ) != '#ffffff') { ?>
			box-shadow: none;
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_main_links_hover' ) != '') { ?>
		ul.megamenu > li:hover > a,
		ul.megamenu > li > a > .fa-home {
			color: <?php echo $theme_options->get( 'menu_main_links_hover' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_background_gradient_top' ) != '' && $theme_options->get( 'menu_background_gradient_bottom' ) != '') { ?>
		.megamenu-wrapper,
		.megamenuToogle-wrapper {
			background: <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'menu_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'menu_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_border_color' ) != '') { ?>
		ul.megamenu > li > a,
		.megamenu-wrapper,
		.megamenuToogle-wrapper {
			border-color: <?php echo $theme_options->get( 'menu_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_hover_background_gradient_top' ) != '' && $theme_options->get( 'menu_hover_background_gradient_bottom' ) != '') { ?>
		ul.megamenu > li > a:hover, 
		ul.megamenu > li.active > a, 
		ul.megamenu > li.home > a, 
		ul.megamenu > li:hover > a {
			background: <?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'menu_hover_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'menu_hover_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_hover_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_hover_border_color' ) != '') { ?>
		ul.megamenu > li > a:hover, 
		ul.megamenu > li.active > a, 
		ul.megamenu > li.home > a, 
		ul.megamenu > li:hover > a {
			border-color: <?php echo $theme_options->get( 'menu_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_heading_text' ) != '') { ?>
		.vertical .megamenuToogle-wrapper .container {
			color: <?php echo $theme_options->get( 'vertical_menu_heading_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_heading_background_gradient_top' ) != '' && $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ) != '') { ?>
		.vertical .megamenuToogle-wrapper {
			background: <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_heading_border_color' ) != '') { ?>
		.vertical .megamenuToogle-wrapper {
			border-color: <?php echo $theme_options->get( 'vertical_menu_heading_border_color' ); ?>;
		}
		<?php } ?>

		<?php if($theme_options->get( 'megamenu_container_bg' ) != '') { ?>
		.megamenu_container {
			background: <?php echo $theme_options->get( 'megamenu_container_bg' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'megamenu_container_ul_li' ) != '') { ?>
		.megamenu_container ul.megamenu > li:hover {
			background: <?php echo $theme_options->get( 'megamenu_container_ul_li' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'megamenu_container_ul_li_a' ) != '') { ?>
		.megamenu_container ul.megamenu > li > a {
			background: <?php echo $theme_options->get( 'megamenu_container_ul_li_a' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'slider_bullets_background_color' ) != '') { ?>
		.camera_wrap .owl-controls .owl-pagination span,
		.tp-bullets .bullet {
			background: <?php echo $theme_options->get( 'slider_bullets_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'slider_bullet_active_background_color' ) != '') { ?>
		.camera_wrap .owl-controls .owl-pagination .active span,
		.tp-bullets .selected, 
		.tp-bullets .bullet:hover {
			background: <?php echo $theme_options->get( 'slider_bullet_active_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'sale_color_text' ) != '') { ?>
		.sale {
			color: <?php echo $theme_options->get( 'sale_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'sale_background_gradient_top' ) != '' && $theme_options->get( 'sale_background_gradient_bottom' ) != '') { ?>
		.sale {
			background: <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'ratings_background_gradient_top' ) != '' && $theme_options->get( 'ratings_background_gradient_bottom' ) != '') { ?>
		.rating i {
			color: <?php echo $theme_options->get( 'ratings_background_gradient_top' ); ?>;
		}
		
		.rating i, 
		.rating i:before {
		    background: -webkit-gradient(linear, left top, left bottom, from(<?php echo $theme_options->get( 'ratings_background_gradient_top' ); ?>), to(<?php echo $theme_options->get( 'ratings_background_gradient_bottom' ); ?>));
		    -webkit-background-clip: text;
		    -webkit-text-fill-color: transparent;
		    display: initial;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'ratings_active_background_gradient_top' ) != '' && $theme_options->get( 'ratings_active_background_gradient_bottom' ) != '') { ?>
		.rating i.active {
			color: <?php echo $theme_options->get( 'ratings_active_background_gradient_top' ); ?>;
		}
		
		.rating i.active, 
		.rating i.active:before {
		    background: -webkit-gradient(linear, left top, left bottom, from(<?php echo $theme_options->get( 'ratings_active_background_gradient_top' ); ?>), to(<?php echo $theme_options->get( 'ratings_active_background_gradient_bottom' ); ?>));
		    -webkit-background-clip: text;
		    -webkit-text-fill-color: transparent;
		    display: initial;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_color_text' )) { ?>
		.button,
		.btn {
			color: <?php echo $theme_options->get( 'buttons_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_background_gradient_top' ) != '' && $theme_options->get( 'buttons_background_gradient_bottom' ) != '') { ?>
		.button,
		.btn {
			background: <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_border_color' )) { ?>
		.button,
		.btn {
			border-color: <?php echo $theme_options->get( 'buttons_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_color_text' )) { ?>
		.buttons .left .button, 
		.buttons .center .button,
		.btn-default,
		.input-group-btn .btn-primary,
		.button:hover,
		.btn:hover {
			color: <?php echo $theme_options->get( 'second_buttons_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_background_gradient_top' ) != '' && $theme_options->get( 'second_buttons_background_gradient_bottom' ) != '') { ?>
		.buttons .left .button, 
		.buttons .center .button,
		.btn-default,
		.input-group-btn .btn-primary,
		.button:hover,
		.btn:hover {
			background: <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_border_color' )) { ?>
		.buttons .left .button, 
		.buttons .center .button,
		.btn-default,
		.input-group-btn .btn-primary,
		.button:hover,
		.btn:hover {
			border-color: <?php echo $theme_options->get( 'second_buttons_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'carousel_buttons_background_gradient_top' ) != '' && $theme_options->get( 'carousel_buttons_background_gradient_bottom' ) != '') { ?>
		.tab-content .prev-button, 
		.tab-content .next-button,
		.box > .prev, 
		.box > .next,
		.carousel-brands .owl-prev, 
		.carousel-brands .owl-next {
			background: <?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'carousel_buttons_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'carousel_buttons_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_buttons_background_gradient_bottom' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'carousel_bullets_background_gradient_top' ) != '' && $theme_options->get( 'carousel_bullets_background_gradient_bottom' ) != '') { ?>
		.box-product .owl-pagination > div {
			background: <?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'carousel_bullets_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'carousel_bullets_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_bullets_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_bullets_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_bullets_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_bullets_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_bullets_background_gradient_bottom' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'carousel_active_bullets_background_gradient_top' ) != '' && $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ) != '') { ?>
		.box-product .owl-pagination > div.active {
			background: <?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'carousel_active_bullets_background_gradient_bottom' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'tables_border_color' ) != '') { ?>
		.htabs a,
		.center-column .tab-content,
		table.attribute,
		table.list,
		.wishlist-product table,
		.wishlist-info table,
		.compare-info,
		.cart-info table,
		.checkout-product table,
		.table,
		table.attribute td,
		table.list td,
		.wishlist-product table td,
		.wishlist-info table td,
		.compare-info td,
		.cart-info table td,
		.checkout-product table td,
		.table td,
		.manufacturer-list,
		.manufacturer-heading,
		.center-column .panel-heading,
		.center-column .panel-body,
		.product-filter {
			border-color: <?php echo $theme_options->get( 'tables_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'tables_heading_background_gradient_top' ) != '' && $theme_options->get( 'tables_heading_background_gradient_bottom' ) != '') { ?>
		.center-column .panel-heading,
		.manufacturer-heading,
		table.attribute thead td,
		table.list thead td,
		.wishlist-product table thead td,
		.wishlist-info table thead td,
		.compare-info thead td,
		.cart-info table thead td,
		.checkout-product table thead td,
		.table thead td,
		.htabs a,
		.product-filter {
		     background: <?php echo $theme_options->get( 'tables_heading_background_gradient_bottom' ); ?>;
		     background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'tables_heading_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'tables_heading_background_gradient_bottom' ); ?> 100%);
		     background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'tables_heading_background_gradient_top' ); ?>), color-stop(100%,<?php echo $theme_options->get( 'tables_heading_background_gradient_bottom' ); ?>));
		     background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'tables_heading_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'tables_heading_background_gradient_bottom' ); ?> 100%);
		     background: -o-linear-gradient(top, <?php echo $theme_options->get( 'tables_heading_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'tables_heading_background_gradient_bottom' ); ?> 100%);
		     background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'tables_heading_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'tables_heading_background_gradient_bottom' ); ?> 100%);
		     background: linear-gradient(to bottom, <?php echo $theme_options->get( 'tables_heading_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'tables_heading_background_gradient_bottom' ); ?> 100%);
		     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $theme_options->get( 'tables_heading_background_gradient_top' ); ?>', endColorstr='<?php echo $theme_options->get( 'tables_heading_background_gradient_bottom' ); ?>',GradientType=0 );
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_color_text' ) != '') { ?>
		.custom-footer .pattern,
		.custom-footer .pattern a,
		ul.contact-us li {
			color: <?php echo $theme_options->get( 'customfooter_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_color_heading' ) != '') { ?>
		.custom-footer h4 {
			color: <?php echo $theme_options->get( 'customfooter_color_heading' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_color_icon_contact_us' ) != '') { ?>
		ul.contact-us li i,
		.tweets li:before {
			color: <?php echo $theme_options->get( 'customfooter_color_icon_contact_us' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_background_color' ) != '') { ?>
		.custom-footer .background,
		.standard-body .custom-footer .background {
			background: <?php echo $theme_options->get( 'customfooter_background_color' ); ?>;
		}
		
		.custom-footer .pattern {
			background: none;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels_heading_color' ) != '') { ?>
		.customfooter-panels > div .heading p {
			color: <?php echo $theme_options->get( 'customfooter_panels_heading_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels_heading_strong_color' ) != '') { ?>
		.customfooter-panels > div .heading p span {
			color: <?php echo $theme_options->get( 'customfooter_panels_heading_strong_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels_content_text_color' ) != '') { ?>
		.customfooter-panels > div .content .overflow-content,
		.customfooter-panels > div .content .overflow-content a {
			color: <?php echo $theme_options->get( 'customfooter_panels_content_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels_content_background_top' ) != '' && $theme_options->get( 'customfooter_panels_content_background_bottom' ) != '') { ?>
		.customfooter-panels > div .content .overflow-content {
			background: <?php echo $theme_options->get( 'customfooter_panels_content_background_top' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'customfooter_panels_content_background_top' ); ?> 66%, <?php echo $theme_options->get( 'customfooter_panels_content_background_bottom' ); ?> 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(66%,<?php echo $theme_options->get( 'customfooter_panels_content_background_top' ); ?>), color-stop(100%,<?php echo $theme_options->get( 'customfooter_panels_content_background_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'customfooter_panels_content_background_top' ); ?> 66%,<?php echo $theme_options->get( 'customfooter_panels_content_background_bottom' ); ?> 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'customfooter_panels_content_background_top' ); ?> 66%,<?php echo $theme_options->get( 'customfooter_panels_content_background_bottom' ); ?> 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'customfooter_panels_content_background_top' ); ?> 66%,<?php echo $theme_options->get( 'customfooter_panels_content_background_bottom' ); ?> 100%); /* IE10+ */
			background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'customfooter_panels_content_background_top' ); ?> 66%,<?php echo $theme_options->get( 'customfooter_panels_content_background_bottom' ); ?> 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $theme_options->get( 'customfooter_panels_content_background_top' ); ?>', endColorstr='<?php echo $theme_options->get( 'customfooter_panels_content_background_bottom' ); ?>',GradientType=0 ); /* IE6-9 */
		}
		
		.customfooter-panels > div .content:before,
		.customfooter-panels > div .content:after {
		     background: <?php echo $theme_options->get( 'customfooter_panels_content_background_bottom' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels_content_border_color' ) != '') { ?>
		.customfooter-panels > div .content .overflow-content,
		.customfooter-panels > div .content:before,
		.customfooter-panels > div .content:after {
			border-color: <?php echo $theme_options->get( 'customfooter_panels_content_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels_social_icons_background_color' ) != '') { ?>
		.customfooter-panels .social-icons ul li a {
			background: <?php echo $theme_options->get( 'customfooter_panels_social_icons_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels_contact_strong_text_color' ) != '') { ?>
		.customfooter-panels .contact-details > li p {
			color: <?php echo $theme_options->get( 'customfooter_panels_contact_strong_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels2_heading_color' ) != '') { ?>
		.customfooter-panels2 .customfooter-panel .heading {
			color: <?php echo $theme_options->get( 'customfooter_panels2_heading_color' ); ?>;
			<?php if($theme_options->get( 'customfooter_panels2_heading_color' ) != '#ffffff') { ?>
			text-shadow: none;
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels2_heading_background_gradient_top' ) != '' && $theme_options->get( 'customfooter_panels2_heading_background_gradient_bottom' ) != '') { ?>
		.customfooter-panels2 .customfooter-panel .heading {
		     background: <?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_top' ); ?>; /* Old browsers */
		     background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_top' ); ?> 14%, <?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_bottom' ); ?> 87%); /* FF3.6+ */
		     background: -webkit-gradient(linear, left top, left bottom, color-stop(14%,<?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_top' ); ?>), color-stop(87%,<?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
		     background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_bottom' ); ?> 87%); /* Chrome10+,Safari5.1+ */
		     background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_bottom' ); ?> 87%); /* Opera 11.10+ */
		     background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_bottom' ); ?> 87%); /* IE10+ */
		     background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_bottom' ); ?> 87%); /* W3C */
		     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_top' ); ?>', endColorstr='<?php echo $theme_options->get( 'customfooter_panels2_heading_background_gradient_bottom' ); ?>',GradientType=0 ); /* IE6-9 */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels2_heading_border_color' ) != '') { ?>
		.customfooter-panels2 .customfooter-panel .heading {
			border-color: <?php echo $theme_options->get( 'customfooter_panels2_heading_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels2_content_text_color' ) != '') { ?>
		.customfooter-panels2 .customfooter-panel .content,
		.customfooter-panels2 .customfooter-panel .content a {
			color: <?php echo $theme_options->get( 'customfooter_panels2_content_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels2_social_icons_background_color' ) != '') { ?>
		.customfooter-panels2 .social-icons ul li a {
			background-color: <?php echo $theme_options->get( 'customfooter_panels2_social_icons_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels2_contact_background_element' ) != '') { ?>
		.customfooter-panels2 .contact-details > li:nth-child(2n) {
			background-color: <?php echo $theme_options->get( 'customfooter_panels2_contact_background_element' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels2_contact_element_with_background_text_color' ) != '') { ?>
		.customfooter-panels2 .contact-details > li:nth-child(2n) {
			color: <?php echo $theme_options->get( 'customfooter_panels2_contact_element_with_background_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels5_heading_color' ) != '') { ?>
		.customfooter-panels3 .customfooter-panel .content h3,
		.customfooter-panels3 .customfooter-panel .heading {
			color: <?php echo $theme_options->get( 'customfooter_panels5_heading_color' ); ?>;
			border-color: <?php echo $theme_options->get( 'customfooter_panels5_heading_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels5_heading_strong_text_color' ) != '') { ?>
		.customfooter-panels3 .customfooter-panel .heading span {
			color: <?php echo $theme_options->get( 'customfooter_panels5_heading_strong_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels5_content_border_color' ) != '') { ?>
		.customfooter-panels3 .customfooter-panel .content {
			border-color: <?php echo $theme_options->get( 'customfooter_panels5_content_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels5_content_text_color' ) != '') { ?>
		.customfooter-panels3 .customfooter-panel .content {
			color: <?php echo $theme_options->get( 'customfooter_panels5_content_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels5_social_icons_background_color' ) != '') { ?>
		.customfooter-panels3 .social-icons ul li a {
			background-color: <?php echo $theme_options->get( 'customfooter_panels5_social_icons_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_panels5_contact_border_color_element' ) != '') { ?>
		.customfooter-panels3 .contact-details > li:nth-child(2n) {
			border-color: <?php echo $theme_options->get( 'customfooter_panels5_contact_border_color_element' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_color_text' ) != '') { ?>
		.footer .pattern,
		.footer .pattern a {
			color: <?php echo $theme_options->get( 'footer_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_color_heading' ) != '') { ?>
		.footer h4 {
			color: <?php echo $theme_options->get( 'footer_color_heading' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_color_bullets' ) != '') { ?>
		.footer ul li a:before {
			color: <?php echo $theme_options->get( 'footer_color_bullets' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_border_color' ) != '') { ?>
		.footer .container > div > .row > div:before {
			background: <?php echo $theme_options->get( 'footer_border_color' ); ?> !important;
		}
		
		div.rounded .background {
		     border-color: <?php echo $theme_options->get( 'footer_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_background_color' ) != '') { ?>
		.footer .background,
		.standard-body .footer .background {
			background: <?php echo $theme_options->get( 'footer_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_fixed_border_color' ) != '') { ?>
		.footer-style-1 .footer .background-fixed {
			border-color: <?php echo $theme_options->get( 'footer_fixed_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_fixed_heading_border_bottom_color' ) != '') { ?>
		.footer-style-1 .footer h4 {
			border-color: <?php echo $theme_options->get( 'footer_fixed_heading_border_bottom_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_fixed_background_gradient_top' ) != '' && $theme_options->get( 'footer_fixed_background_gradient_bottom' ) != '') { ?>
		.footer-style-1 .footer .background-fixed {
		     background: <?php echo $theme_options->get( 'footer_fixed_background_gradient_top' ); ?>; /* Old browsers */
		     background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'footer_fixed_background_gradient_top' ); ?> 14%, <?php echo $theme_options->get( 'footer_fixed_background_gradient_bottom' ); ?> 87%); /* FF3.6+ */
		     background: -webkit-gradient(linear, left top, left bottom, color-stop(14%,<?php echo $theme_options->get( 'footer_fixed_background_gradient_top' ); ?>), color-stop(87%,<?php echo $theme_options->get( 'footer_fixed_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
		     background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'footer_fixed_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'footer_fixed_background_gradient_bottom' ); ?> 87%); /* Chrome10+,Safari5.1+ */
		     background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'footer_fixed_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'footer_fixed_background_gradient_bottom' ); ?> 87%); /* Opera 11.10+ */
		     background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'footer_fixed_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'footer_fixed_background_gradient_bottom' ); ?> 87%); /* IE10+ */
		     background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'footer_fixed_background_gradient_top' ); ?> 14%,<?php echo $theme_options->get( 'footer_fixed_background_gradient_bottom' ); ?> 87%); /* W3C */
		     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $theme_options->get( 'footer_fixed_background_gradient_top' ); ?>', endColorstr='<?php echo $theme_options->get( 'footer_fixed_background_gradient_bottom' ); ?>',GradientType=0 ); /* IE6-9 */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'copyright_color_text' ) != '') { ?>
		.copyright .pattern,
		.copyright .pattern a {
			color: <?php echo $theme_options->get( 'copyright_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'copyright_background_gradient_top' ) != '' && $theme_options->get( 'copyright_background_gradient_bottom' ) != '') { ?>
		.copyright .background,
		.standard-body .copyright .background {
		     border-top-color: <?php echo $theme_options->get( 'copyright_background_gradient_top' ); ?>;
			background: <?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'copyright_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'copyright_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'copyright_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'copyright_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'copyright_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'copyright_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'copyright_background_gradient_bottom' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
	<?php } ?>
			
	<?php if($theme_options->get( 'font_status' ) == '1') { ?>
		body,
		.vertical ul.megamenu > li > a strong {
			font-size: <?php echo $theme_options->get( 'body_font_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'body_font_weight' )*100; ?>;
			<?php if( $theme_options->get( 'body_font' ) != '' && $theme_options->get( 'body_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'body_font' ); ?>;
			<?php } ?>
		}
		
		@media (max-width: 991px) {
     		.responsive ul.megamenu > li > a strong {
     		     font-size: <?php echo $theme_options->get( 'body_font_px' ); ?>px !important;
     		     font-weight: <?php echo $theme_options->get( 'body_font_weight' )*100; ?> !important;
     		     <?php if( $theme_options->get( 'body_font' ) != '' && $theme_options->get( 'body_font' ) != 'standard' ) { ?>
     		     font-family: <?php echo $theme_options->get( 'body_font' ); ?> !important;
     		     <?php } ?>
     		     text-transform: none;
     		}
		}
		
		#top-bar .container, 
		#top .header-links li a,
		.sale,
		.product-grid .product .only-hover ul li a,
		.hover-product .only-hover ul li a {
			font-size: <?php echo $theme_options->get( 'body_font_smaller_px' ); ?>px;
		}
		
		ul.megamenu > li > a strong {
			font-size: <?php echo $theme_options->get( 'categories_bar_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'categories_bar_weight' )*100; ?>;
			<?php if( $theme_options->get( 'categories_bar' ) != '' && $theme_options->get( 'categories_bar' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_bar' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'categories_bar_transform' ) == '1') { ?>
			text-transform: uppercase;
			<?php } ?>
		}
		
		.megamenuToogle-wrapper .container {		     
			font-weight: <?php echo $theme_options->get( 'categories_bar_weight' )*100; ?>;
			<?php if( $theme_options->get( 'categories_bar' ) != '' && $theme_options->get( 'categories_bar' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_bar' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'categories_bar_transform' ) == '1') { ?>
			text-transform: uppercase;
			<?php } ?>
		}
		
		.vertical ul.megamenu > li > a strong {
			font-weight: <?php echo $theme_options->get( 'body_font_weight' )*100; ?>;
		}
		
		.product-grid .product .name a,
		.product-list .name-desc .name a,
		ul.megamenu li .product .name a {
		     font-weight: <?php echo $theme_options->get( 'product_name_weight' )*100; ?>;
		     <?php if( $theme_options->get( 'product_name' ) != '' && $theme_options->get( 'product_name' ) != 'standard' ) { ?>
		     font-family: <?php echo $theme_options->get( 'product_name' ); ?>;
		     <?php } ?>
		}
		
		.product-grid .product .name a,
		ul.megamenu li .product .name a {
		     font-size: <?php echo $theme_options->get( 'product_name_medium_px' ); ?>px;
		}
		
		.product-list .name-desc .name a {
		     font-size: <?php echo $theme_options->get( 'product_name_big_px' ); ?>px;
		}
		
		.box .box-heading,
		.customfooter-panels3 .customfooter-panel .content h3,
		.customfooter-panels3 .customfooter-panel .heading {
			font-size: <?php echo $theme_options->get( 'headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'headlines_weight' )*100; ?>;
			<?php if( $theme_options->get( 'headlines' ) != '' && $theme_options->get( 'headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'headlines' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'headlines_transform' ) == '1') { ?>
			text-transform: uppercase;
			<?php } ?>
		}

		.col-sm-3 .box .box-heading,
		.col-sm-4 .box .box-heading,
		.col-md-3 .box .box-heading,
		.col-md-4 .box .box-heading,
		.customfooter-panels2 .customfooter-panel .heading {
			font-size: <?php echo $theme_options->get( 'headlines_in_columns_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'headlines_in_columns_weight' )*100; ?>;
			<?php if( $theme_options->get( 'headlines_in_columns' ) != '' && $theme_options->get( 'headlines_in_columns' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'headlines_in_columns' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'headlines_in_columns_transform' ) == '1') { ?>
			text-transform: uppercase;
			<?php } else { ?>
			text-transform: none;
			<?php } ?>
		}
		
		.footer h4,
		.custom-footer h4 {
			font-size: <?php echo $theme_options->get( 'footer_headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'footer_headlines_weight' )*100; ?>;
			<?php if( $theme_options->get( 'footer_headlines' ) != '' && $theme_options->get( 'footer_headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'footer_headlines' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'footer_headlines_transform' ) == '1') { ?>
			text-transform: uppercase;
			<?php } ?>
		}
		
		.breadcrumb h1 {
			font-size: <?php echo $theme_options->get( 'page_name_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'page_name_weight' )*100; ?>;
			<?php if( $theme_options->get( 'page_name' ) != '' && $theme_options->get( 'page_name' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'page_name' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'page_name_transform' ) == '1') { ?>
			text-transform: uppercase;
			<?php } ?>
		}
		
		.button,
		.btn {
			font-size: <?php echo $theme_options->get( 'button_font_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'button_font_weight' )*100; ?>;
			<?php if( $theme_options->get( 'button_font' ) != '' && $theme_options->get( 'button_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'button_font' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'button_transform' ) == '1') { ?>
			text-transform: uppercase;
			<?php } ?>
		}
		
		<?php if( $theme_options->get( 'custom_price' ) != '' && $theme_options->get( 'custom_price' ) != 'standard' ) { ?>
		.product-grid .product .price, 
		.product-list .actions > div .price, 
		.product-info .price .price-new,
		ul.megamenu li .product .price {
			font-family: <?php echo $theme_options->get( 'custom_price' ); ?>;
		}
		<?php } ?>
		
		.product-grid .product .price,
		ul.megamenu li .product .price {
			font-size: <?php echo $theme_options->get( 'custom_price_px_small' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.product-info .price .price-new {
			font-size: <?php echo $theme_options->get( 'custom_price_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.product-list .actions > div .price {
			font-size: <?php echo $theme_options->get( 'custom_price_px_medium' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.product-grid .product .price .price-old,
		.product-list .actions > div .price .price-old,
		.product-info .price .price-old {
			font-size: <?php echo $theme_options->get( 'custom_price_px_old_price' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
	<?php } ?>
</style>
<?php } ?>

<?php if($theme_options->get( 'background_status' ) == 1) { ?>
<style type="text/css">
	<?php if($theme_options->get( 'body_background_background' ) == '1') { ?> 
	body { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body_background_background' ) == '2') { ?> 
	body { background-image:url(image/<?php echo $theme_options->get( 'body_background' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body_background_background' ) == '3') { ?> 
	body { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'body_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'header_background_background' ) == '1') { ?> 
	#top .pattern { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'header_background_background' ) == '2') { ?> 
	#top .pattern { background-image:url(image/<?php echo $theme_options->get( 'header_background' ); ?>);background-position:<?php echo $theme_options->get( 'header_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'header_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'header_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'header_background_background' ) == '3') { ?> 
	#top .pattern { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'header_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'header_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'header_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'header_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'customfooter_background_background' ) == '1') { ?> 
	.custom-footer .background, 
	.standard-body .custom-footer .background { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'customfooter_background_background' ) == '2') { ?> 
	.custom-footer .background, 
	.standard-body .custom-footer .background { background-image:url(image/<?php echo $theme_options->get( 'customfooter_background' ); ?>);background-position:<?php echo $theme_options->get( 'customfooter_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'customfooter_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'customfooter_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'customfooter_background_background' ) == '3') { ?> 
	.custom-footer .background, 
	.standard-body .custom-footer .background { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'customfooter_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'customfooter_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'customfooter_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'customfooter_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'content_headlines_background_background' ) == '1') { ?> 
	.box .strip-line,
	.breadcrumb .container .strip-line { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'content_headlines_background_background' ) == '2') { ?> 
	.box .strip-line,
	.breadcrumb .container .strip-line { background-image:url(image/<?php echo $theme_options->get( 'content_headlines_background' ); ?>); }
	<?php } ?>
	
	<?php if($theme_options->get( 'footer_headlines_background_background' ) == '1') { ?> 
	.footer .strip-line { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'footer_headlines_background_background' ) == '2') { ?> 
	.footer .strip-line { background-image:url(image/<?php echo $theme_options->get( 'footer_headlines_background' ); ?>); }
	<?php } ?>
</style>
<?php } ?>

<?php if($theme_options->get( 'border_radius' ) != '4' && $theme_options->get( 'border_radius' ) != '') { ?>
<style type="text/css">
     textarea, 
     input[type="text"], 
     input[type="password"], 
     input[type="datetime"], 
     input[type="datetime-local"], 
     input[type="date"], 
     input[type="month"], 
     input[type="time"], 
     input[type="week"], 
     input[type="number"], 
     input[type="email"], 
     input[type="url"], 
     input[type="search"], 
     input[type="tel"], 
     input[type="color"], 
     .uneditable-input,
     select,
     .dropdown-menu,
     .button,
     .btn,
     .button:before,
     .btn:before,
     .box > .prev, 
     .box > .next,
     .col-sm-3 .box .box-heading:before,
     .col-sm-4 .box .box-heading:before,
     .col-md-3 .box .box-heading:before,
     .col-md-4 .box .box-heading:before,
     .product-grid .product:before,
     .product-grid .product:after,
     .product-grid .product .product-overflow,
     .product-list > div .product-list-overflow,
     .product-list > div:before,
     .product-list > div:after,
     .product-filter,
     .product-filter:before,
     .product-filter .options .button-group button,
     .product-block,
     .customfooter-panels > div .content:before,
     .customfooter-panels > div .content:after,
     .customfooter-panels > div .content .overflow-content,
     .customfooter-panels .google-map,
     div.pagination-results ul li,
     .htabs a:before,
     .review-list .text,
     table.attribute,
     table.list,
     .wishlist-product table,
     .wishlist-info table,
     .compare-info,
     .cart-info table,
     .checkout-product table,
     .table,
     table.attribute thead:before,
     table.list thead:before,
     .wishlist-product table thead:before,
     .wishlist-info table thead:before,
     .compare-info thead:before,
     .cart-info table thead:before,
     .checkout-product table thead:before,
     .table thead:before,
     .manufacturer-list,
     .manufacturer-heading:before,
     .center-column .panel-heading,
     .center-column .panel-heading:before,
     .center-column .panel-body,
     .scrollup,
     .carousel-brands,
     .carousel-brands .owl-prev,
     .carousel-brands .owl-next,
     .megamenu-wrapper:before,
     .container-megamenu.container .megamenu-wrapper,
     .container-megamenu.container .megamenu-pattern,
     ul.megamenu li .sub-menu .content,
     ul.megamenu li .product:before,
     ul.megamenu li .product:after,
     ul.megamenu li .product .product-overflow,
     ul.manufacturer li a,
     ul.megamenu li .sub-menu .content .hover-menu .menu ul ul,
     .megamenuToogle-wrapper:before,
     .container-megamenu.container .megamenuToogle-wrapper,
     .container-megamenu.container .megamenuToogle-pattern,
     .modal-content,
     .customfooter-panels2 .customfooter-panel .heading:before,
     .footer-style-1 .footer .background-fixed,
     .footer-style-1 .footer .background-fixed:before,
     .menu-style-2 .megamenu-wrapper:before {
          border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px;
          -webkit-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px;
          -moz-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px;
     }
     
     .container-megamenu.container ul.megamenu > li:first-child > a,
     ul.megamenu > li.home > a:before {
     	border-radius:         <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px;
     	-moz-border-radius:    <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px;
     	-webkit-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px;
     }
     
     .ui-autocomplete {
          border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px !important;
          -webkit-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px !important;
          -moz-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px !important;
     }
     
     .col-sm-3 .box .box-heading,
     .col-sm-4 .box .box-heading,
     .col-md-3 .box .box-heading,
     .col-md-4 .box .box-heading,
     .htabs a,
     .vertical.container-megamenu.container .megamenuToogle-wrapper,
     .vertical.container-megamenu.container .megamenuToogle-pattern,
     .customfooter-panels2 .customfooter-panel .heading {
          border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px;
          -moz-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px;
          -webkit-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px;
     }
     
     .ui-autocomplete li:first-child a {
          border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px !important;
          -moz-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px !important;
          -webkit-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px !important;
     }
     
     .col-sm-3 .box .box-content,
     .col-sm-4 .box .box-content,
     .col-md-3 .box .box-content,
     .col-md-4 .box .box-content,
     .center-column .tab-content,
     .vertical ul.megamenu > li:last-child,
     .customfooter-panels2 .customfooter-panel .heading + .content {
          border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px;
          -webkit-border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px;
          -moz-border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px;
     }
     
     .vertical ul.megamenu > li:first-child {
           border-radius: 0px;
           -webkit-border-radius:0px;
          -moz-border-radius: 0px;
     }
	 
	 .megamenu_container {
           border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px 0px !important;
          -webkit-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px 0px !important;
          -moz-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px 0px !important;
	}
	
	#top #cart_block {
           border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px !important;
          -webkit-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?> !important;
          -moz-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px !important;
	}
     
     .vertical .megamenu-wrapper {
          border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px !important;
          -webkit-border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px !important;
          -moz-border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px !important;
     }
     
     .ui-autocomplete li:last-child a {
          border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px !important;
          -webkit-border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px !important;
          -moz-border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px !important;
     }
     
     .product-info .cart .add-to-cart .quantity #q_up {
          border-radius: 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px;
          -webkit-border-radius: 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px;
          -moz-border-radius: 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px 0px;
     }
     
     .product-info .cart .add-to-cart .quantity #q_down {
          border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px;
          -webkit-border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px;
          -moz-border-radius: 0px 0px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0px;
     }
     
     table.attribute thead td:first-child,
     table.list thead td:first-child,
     .wishlist-product table thead td:first-child,
     .wishlist-info table thead td:first-child,
     .compare-info thead td:first-child,
     .cart-info table thead td:first-child,
     .checkout-product table thead td:first-child,
     .table thead td:first-child {
         -moz-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0 0 0;
         -webkit-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0 0 0;
         border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0 0 0;
     }
     
     table.attribute thead td:last-child,
     table.list thead td:last-child,
     .wishlist-product table thead td:last-child,
     .wishlist-info table thead td:last-child,
     .compare-info thead td:last-child,
     .cart-info table thead td:last-child,
     .checkout-product table thead td:last-child,
     .table thead td:last-child {
         -moz-border-radius: 0 <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0 0;
         -webkit-border-radius: 0 <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0 0;
         border-radius: 0 <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0 0;
     }
     
     table.attribute thead td:only-child,
     table.list thead td:only-child,
     .wishlist-product table thead td:only-child,
     .wishlist-info table thead td:only-child,
     .compare-info thead td:only-child,
     .cart-info table thead td:only-child,
     .checkout-product table thead td:only-child,
     .table thead td:only-child {
         -moz-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0 0;
         -webkit-border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0 0;
         border-radius: <?php echo intval($theme_options->get( 'border_radius' )); ?>px <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0 0;
     }
     
     table.attribute tbody tr:last-child td:first-child,
     table.list tbody tr:last-child td:first-child,
     .wishlist-product table tbody tr:last-child td:first-child,
     .wishlist-info table tbody tr:last-child td:first-child,
     .compare-info tbody tr:last-child td:first-child,
     .cart-info table tbody tr:last-child td:first-child,
     .checkout-product table tbody tr:last-child td:first-child,
     .table tbody tr:last-child td:first-child {
         -moz-border-radius: 0 0 0 <?php echo intval($theme_options->get( 'border_radius' )); ?>px;
         -webkit-border-radius: 0 0 0 <?php echo intval($theme_options->get( 'border_radius' )); ?>px;
         border-radius: 0 0 0 4px;
     }
     
     table.attribute tbody tr:last-child td:last-child,
     table.list tbody tr:last-child td:last-child,
     .wishlist-product table tbody tr:last-child td:last-child,
     .wishlist-info table tbody tr:last-child td:last-child,
     .compare-info tbody tr:last-child td:last-child,
     .cart-info table tbody tr:last-child td:last-child,
     .checkout-product table tbody tr:last-child td:last-child,
     .table tbody tr:last-child td:last-child {
         -moz-border-radius: 0 0 <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0;
         -webkit-border-radius: 0 0 <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0;
         border-radius: 0 0 <?php echo intval($theme_options->get( 'border_radius' )); ?>px 0;
     } 
</style>
<?php } ?>