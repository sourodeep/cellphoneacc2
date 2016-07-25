<?php 
if($this->registry->has('theme_options') == false) { 
	header("location: globethm/index.php"); 
	exit; 
} 

$theme_options = $this->registry->get('theme_options');
$config = $this->registry->get('config');

require_once( DIR_TEMPLATE.$config->get('config_template')."/lib/module.php" );
$modules = new Modules($this->registry);
?>
<!DOCTYPE html>
<!--[if IE 7]> <html lang="<?php echo $lang; ?>" class="ie7 <?php if($theme_options->get( 'responsive_design' ) == '0') { echo 'no-'; } ?>responsive"> <![endif]-->  
<!--[if IE 8]> <html lang="<?php echo $lang; ?>" class="ie8 <?php if($theme_options->get( 'responsive_design' ) == '0') { echo 'no-'; } ?>responsive"> <![endif]-->  
<!--[if IE 9]> <html lang="<?php echo $lang; ?>" class="ie9 <?php if($theme_options->get( 'responsive_design' ) == '0') { echo 'no-'; } ?>responsive"> <![endif]-->  
<!--[if !IE]><!--> <html lang="<?php echo $lang; ?>" class="<?php if($theme_options->get( 'responsive_design' ) == '0') { echo 'no-'; } ?>responsive"> <!--<![endif]-->  
<head>
	<title><?php echo $title; ?></title>
	<base href="<?php echo $base; ?>" />

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<?php if($theme_options->get( 'responsive_design' ) != '0') { ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php } ?>
	<?php if ($description) { ?>
	<meta name="description" content="<?php echo $description; ?>" />
	<?php } ?>
	<?php if ($keywords) { ?>
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<?php } ?>
	
	<?php if ($icon) { ?>
	<link href="<?php echo $icon; ?>" rel="icon" />
	<?php } ?>
	<?php foreach ($links as $link) { ?>
	<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
	<?php } ?>
	
	<!-- Google Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:800,700,600,500,400,300" rel="stylesheet" type="text/css">
	<?php 
	if( $theme_options->get( 'font_status' ) == '1' ) {
		$lista_fontow = array();
		if( $theme_options->get( 'body_font' ) != '' && $theme_options->get( 'body_font' ) != 'standard' && $theme_options->get( 'body_font' ) != 'Arial' && $theme_options->get( 'body_font' ) != 'Georgia' && $theme_options->get( 'body_font' ) != 'Times New Roman' ) {
			$font = $theme_options->get( 'body_font' );
			$lista_fontow[$font] = $font;
		}
		
		if( $theme_options->get( 'categories_bar' ) != '' && $theme_options->get( 'categories_bar' ) != 'standard' && $theme_options->get( 'categories_bar' ) != 'Arial' && $theme_options->get( 'categories_bar' ) != 'Georgia' && $theme_options->get( 'categories_bar' ) != 'Times New Roman' ) {
			$font = $theme_options->get( 'categories_bar' );
			if(!isset($lista_fontow[$font])) {
				$lista_fontow[$font] = $font;
			}
		}
		
		if( $theme_options->get( 'product_name' ) != '' && $theme_options->get( 'product_name' ) != 'standard' && $theme_options->get( 'product_name' ) != 'Arial' && $theme_options->get( 'product_name' ) != 'Georgia' && $theme_options->get( 'product_name' ) != 'Times New Roman' ) {
			$font = $theme_options->get( 'product_name' );
			if(!isset($lista_fontow[$font])) {
				$lista_fontow[$font] = $font;
			}
		}
		
		if( $theme_options->get( 'headlines_in_columns' ) != '' && $theme_options->get( 'headlines_in_columns' ) != 'standard' && $theme_options->get( 'headlines_in_columns' ) != 'Arial' && $theme_options->get( 'headlines_in_columns' ) != 'Georgia' && $theme_options->get( 'headlines_in_columns' ) != 'Times New Roman' ) {
			$font = $theme_options->get( 'headlines_in_columns' );
			if(!isset($lista_fontow[$font])) {
				$lista_fontow[$font] = $font;
			}
		}
		
		if( $theme_options->get( 'headlines' ) != '' && $theme_options->get( 'headlines' ) != 'standard' && $theme_options->get( 'headlines' ) != 'Arial' && $theme_options->get( 'headlines' ) != 'Georgia' && $theme_options->get( 'headlines' ) != 'Times New Roman' ) {
			$font = $theme_options->get( 'headlines' );
			if(!isset($lista_fontow[$font])) {
				$lista_fontow[$font] = $font;
			}
		}
		
		if( $theme_options->get( 'footer_headlines' ) != '' && $theme_options->get( 'footer_headlines' ) != 'standard'  && $theme_options->get( 'footer_headlines' ) != 'Arial' && $theme_options->get( 'footer_headlines' ) != 'Georgia' && $theme_options->get( 'footer_headlines' ) != 'Times New Roman' ) {
			$font = $theme_options->get( 'footer_headlines' );
			if(!isset($lista_fontow[$font])) {
				$lista_fontow[$font] = $font;
			}
		}
		
		if( $theme_options->get( 'page_name' ) != '' && $theme_options->get( 'page_name' ) != 'standard' && $theme_options->get( 'page_name' ) != 'Arial' && $theme_options->get( 'page_name' ) != 'Georgia' && $theme_options->get( 'page_name' ) != 'Times New Roman' ) {
			$font = $theme_options->get( 'page_name' );
			if(!isset($lista_fontow[$font])) {
				$lista_fontow[$font] = $font;
			}
		}
		
		if( $theme_options->get( 'button_font' ) != '' && $theme_options->get( 'button_font' ) != 'standard' && $theme_options->get( 'button_font' ) != 'Arial' && $theme_options->get( 'button_font' ) != 'Georgia' && $theme_options->get( 'button_font' ) != 'Times New Roman' ) {
			$font = $theme_options->get( 'button_font' );
			if(!isset($lista_fontow[$font])) {
				$lista_fontow[$font] = $font;
			}
		}
		
		if( $theme_options->get( 'custom_price' ) != '' && $theme_options->get( 'custom_price' ) != 'standard' && $theme_options->get( 'custom_price' ) != 'Arial' && $theme_options->get( 'custom_price' ) != 'Georgia' && $theme_options->get( 'custom_price' ) != 'Times New Roman' ) {
			$font = $theme_options->get( 'custom_price' );
			if(!isset($lista_fontow[$font])) {
				$lista_fontow[$font] = $font;
			}
		}
		
		foreach($lista_fontow as $font) {
			echo '<link href="//fonts.googleapis.com/css?family=' . $font . ':800,700,600,500,400,300" rel="stylesheet" type="text/css">';
			echo "\n";
		}
	}
	?>
	
	<?php $lista_plikow = array(
			'catalog/view/theme/'.$config->get( 'config_template' ).'/css/bootstrap.css',
			'catalog/view/theme/'.$config->get( 'config_template' ).'/css/stylesheet.css',
			'catalog/view/theme/'.$config->get( 'config_template' ).'/css/responsive.css',
			'catalog/view/theme/'.$config->get( 'config_template' ).'/css/menu.css',
			'catalog/view/theme/'.$config->get( 'config_template' ).'/css/owl.carousel.css',
			'catalog/view/theme/'.$config->get( 'config_template' ).'/css/font-awesome.min.css'
	); 
	
	// Full screen background slider
	if($config->get( 'full_screen_background_slider_module' ) != '') $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/css/jquery.vegas.css';
	
	// Category wall
	if($config->get( 'category_wall_module' ) != '') $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/css/category_wall.css';
	
	// Filter product
	if($config->get( 'filter_product_module' ) != '') $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/css/filter_product.css';
	
	// Revolution slider
	if($config->get( 'revolution_slider_module' ) != '') $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/css/slider.css';
	
	// Carousel brands
	if($config->get( 'carousel_module' ) != '') $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/css/carousel.css';
	
	// Wide width		
	if($theme_options->get( 'page_width' ) == 1) $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/css/wide-grid.css';
	
	// Normal width
	if($theme_options->get( 'page_width' ) == 3) $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/css/standard-grid.css';

	echo $theme_options->compressorCodeCss( $config->get( 'config_template' ), $lista_plikow, $theme_options->get( 'compressor_code_status' ), HTTP_SERVER ); 
	
	// Custom colors, fonts and backgrounds
	include('catalog/view/theme/'.$config->get( 'config_template' ).'/css/custom_colors.php'); ?>
	
	<?php if($theme_options->get( 'custom_code_css_status' ) == 1) { ?>
	<link rel="stylesheet" href="catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/skins/store_<?php echo $theme_options->get( 'store' ); ?>/<?php echo $theme_options->get( 'skin' ); ?>/css/custom_code.css">
	<?php } ?>
	
	<?php foreach ($styles as $style) { ?>
		<?php if(strpos($style['href'], "mf/jquery-ui.min.css") == true) { ?>
			<link rel="<?php echo $style['rel']; ?>" type="text/css" href="catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/css/jquery-ui.min.css" media="<?php echo $style['media']; ?>" />
		<?php } elseif(strpos($style['href'], "mf/style.css") == true) { ?>
			<link rel="<?php echo $style['rel']; ?>" type="text/css" href="catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/css/mega_filter.css" media="<?php echo $style['media']; ?>" />
		<?php } elseif(strpos($style['href'], "blog-news") == true) { ?>
			<link rel="<?php echo $style['rel']; ?>" type="text/css" href="catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/css/blog.css" media="<?php echo $style['media']; ?>" />
		<?php } elseif($style['href'] != 'catalog/view/javascript/jquery/owl-carousel/owl.carousel.css') { ?>
			<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
		<?php } ?>
	<?php } ?>
	
	<?php if($theme_options->get( 'page_width' ) == 2 && $theme_options->get( 'max_width' ) > 900) { ?>
	<style type="text/css">
		.standard-body .full-width .container {
			max-width: <?php echo $theme_options->get( 'max_width' ); ?>px;
			<?php if($theme_options->get( 'responsive_design' ) == '0') { ?>
			width: <?php echo $theme_options->get( 'max_width' ); ?>px;
			<?php } ?>
		}
		
		.standard-body .fixed .background,
		.main-fixed {
			max-width: <?php echo $theme_options->get( 'max_width' )-40; ?>px;
			<?php if($theme_options->get( 'responsive_design' ) == '0') { ?>
			width: <?php echo $theme_options->get( 'max_width' )-40; ?>px;
			<?php } ?>
		}
	</style>
	<?php } ?>
	    
    <?php $lista_plikow = array(); 
    
    $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/js/jquery-2.1.1.min.js';
    if(file_exists('catalog/view/javascript/mf/jquery-ui.min.js')) $lista_plikow[] = 'catalog/view/javascript/mf/jquery-ui.min.js';
    $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/js/jquery-migrate-1.2.1.min.js';
    $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/js/jquery.easing.1.3.js';
    $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/js/bootstrap.min.js';
    $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/js/twitter-bootstrap-hover-dropdown.js';
    $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/js/common.js';
    $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/js/tweetfeed.min.js';
    
    // Carousel brands
    if($config->get( 'carousel_module' ) != '') $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/js/jquery.jcarousel.min.js';
    
    // Banner module
    if($config->get( 'banner_module' ) != '') $lista_plikow[] = 'catalog/view/theme/'.$config->get( 'config_template' ).'/js/jquery.cycle2.min.js';
    
    echo $theme_options->compressorCodeJs( $config->get( 'config_template' ), $lista_plikow, $theme_options->get( 'compressor_code_status' ), HTTP_SERVER ); ?>
    
    <?php // Full screen background slider
    if($config->get( 'full_screen_background_slider_module' ) != '') { ?>
        <script type="text/javascript" src="catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/js/jquery.vegas.min.js"></script>
    <?php } ?>
    
    <?php // Revolution slider 
    if($config->get( 'revolution_slider_module' ) != '') { ?>
	    <script type="text/javascript" src="catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/js/jquery.themepunch.tools.min.js"></script>
	    <script type="text/javascript" src="catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/js/jquery.themepunch.revolution.min.js"></script>
    <?php } ?>
    
    <script type="text/javascript" src="catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/js/owl.carousel.min.js"></script>
    
    <?php if($theme_options->get( 'quick_search_autosuggest' ) != '0') { ?>
    	<script type="text/javascript" src="catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
    <?php } ?>
	
	<script type="text/javascript">
		var responsive_design = '<?php if($theme_options->get( 'responsive_design' ) == '0') { echo 'no'; } else { echo 'yes'; } ?>';
	</script>
	
	<?php foreach ($scripts as $script) { ?>
		<?php if($script != 'catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js') { ?>
			<script type="text/javascript" src="<?php echo $script; ?>"></script>
		<?php } ?>
		<?php if(strpos($script, "mega_filter.js") == true) { ?>
			<script type="text/javascript">
				function display_MFP(view) {
					if (localStorage.getItem('display') == 'list') {
						display('list');
					} else {
						display('grid');
					}
				}
			</script>
		<?php } ?>
	<?php } ?>
	
	<?php if($theme_options->get( 'custom_code_javascript_status' ) == 1) { ?>
		<script type="text/javascript" src="catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/skins/store_<?php echo $theme_options->get( 'store' ); ?>/<?php echo $theme_options->get( 'skin' ); ?>/js/custom_code.js"></script>
	<?php } ?>
	
	<?php echo $google_analytics; ?>    
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/js/respond.min.js"></script>
	<![endif]-->
</head>	
<body class="<?php echo $class; ?> <?php if($theme_options->get( 'search_style' ) > 0) { echo ' search-style-' . $theme_options->get( 'search_style' ); } if($theme_options->get( 'menu_style' ) > 0) { echo ' menu-style-' . $theme_options->get( 'menu_style' ); } if($theme_options->get( 'product_style' ) > 0) { echo ' product-style-' . $theme_options->get( 'product_style' ); } if($theme_options->get( 'button_style' ) > 0) { echo ' button-style-' . $theme_options->get( 'button_style' ); } if($theme_options->get( 'footer_style' ) > 0) { echo ' footer-style-' . $theme_options->get( 'footer_style' ); } if($theme_options->get( 'box_shadow' ) == 1) { echo ' without-shadows'; } ?>">

<?php if($theme_options->get( 'widget_facebook_status' ) == 1) { ?>
<div class="facebook_<?php if($theme_options->get( 'widget_facebook_position' ) == 1) { echo 'left'; } else { echo 'right'; } ?> hidden-xs hidden-sm">
	<div class="facebook-icon"></div>
	<div class="facebook-content">
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<div class="fb-like-box fb_iframe_widget" profile_id="<?php echo $theme_options->get( 'widget_facebook_id' ); ?>" data-colorscheme="light" data-height="370" data-connections="16" fb-xfbml-state="rendered"></div>
	</div>
	
	<script type="text/javascript">    
	$(function() {  
		$(".facebook_right").hover(function() {            
			$(".facebook_right").stop(true, false).animate({right: "0"}, 800, 'easeOutQuint');        
		}, function() {            
			$(".facebook_right").stop(true, false).animate({right: "-300"}, 800, 'easeInQuint');        
		}, 1000);    
	
		$(".facebook_left").hover(function() {            
			$(".facebook_left").stop(true, false).animate({left: "0"}, 800, 'easeOutQuint');        
		}, function() {            
			$(".facebook_left").stop(true, false).animate({left: "-300"}, 800, 'easeInQuint');        
		}, 1000);    
	});  
	</script>
</div>
<?php } ?>

<?php if($theme_options->get( 'widget_twitter_status' ) == 1) { ?>
<div class="twitter_<?php if($theme_options->get( 'widget_twitter_position' ) == 1) { echo 'left'; } else { echo 'right'; } ?> hidden-xs hidden-sm">
	<div class="twitter-icon"></div>
	<div class="twitter-content">
		<a class="twitter-timeline"  href="https://twitter.com/@<?php echo $theme_options->get( 'widget_twitter_user_name' ); ?>" data-chrome="noborders" data-tweet-limit="<?php echo $theme_options->get( 'widget_twitter_limit' ); ?>"  data-widget-id="<?php echo $theme_options->get( 'widget_twitter_id' ); ?>" data-theme="light" data-related="twitterapi,twitter" data-aria-polite="assertive">Tweets by @<?php echo $theme_options->get( 'widget_twitter_user_name' ); ?></a>
	</div>
	
	<script type="text/javascript">    
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	$(function() {  
		$(".twitter_right").hover(function() {            
			$(".twitter_right").stop(true, false).animate({right: "0"}, 800, 'easeOutQuint');        
		}, function() {            
			$(".twitter_right").stop(true, false).animate({right: "-300"}, 800, 'easeInQuint');        
		}, 1000);    
	
		$(".twitter_left").hover(function() {            
			$(".twitter_left").stop(true, false).animate({left: "0"}, 800, 'easeOutQuint');        
		}, function() {            
			$(".twitter_left").stop(true, false).animate({left: "-300"}, 800, 'easeInQuint');        
		}, 1000);    
	});  
	</script>
</div>
<?php } ?>

<?php if($theme_options->get( 'widget_custom_status' ) == 1) { ?>
<div class="custom_<?php if($theme_options->get( 'widget_custom_position' ) == 1) { echo 'left'; } else { echo 'right'; } ?> hidden-xs hidden-sm">
	<div class="custom-icon"></div>
	<div class="custom-content">
		<?php $lang_id = $config->get( 'config_language_id' ); ?>
		<?php $custom_content = $theme_options->get( 'widget_custom_content' ); ?>
		<?php if(isset($custom_content[$lang_id])) echo html_entity_decode($custom_content[$lang_id]); ?>
	</div>
	
	<script type="text/javascript">    
	$(function() {  
		$(".custom_right").hover(function() {            
			$(".custom_right").stop(true, false).animate({right: "0"}, 800, 'easeOutQuint');        
		}, function() {            
			$(".custom_right").stop(true, false).animate({right: "-300"}, 800, 'easeInQuint');        
		}, 1000);    
	
		$(".custom_left").hover(function() {            
			$(".custom_left").stop(true, false).animate({left: "0"}, 800, 'easeOutQuint');        
		}, function() {            
			$(".custom_left").stop(true, false).animate({left: "-300"}, 800, 'easeInQuint');        
		}, 1000);    
	});  
	</script>
	
</div>
<?php } ?>

<div id="notification" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php if($theme_options->get( 'confirmation_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'confirmation_text', $config->get( 'config_language_id' ) ); } else { echo 'Confirmation'; } ?></h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default button-continue-shopping" data-dismiss="modal"><?php if($theme_options->get( 'continue_shopping_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'continue_shopping_text', $config->get( 'config_language_id' ) ); } else { echo 'Continue shopping'; } ?></button>
                <a href="<?php echo $checkout; ?>" class="btn btn-primary button-checkout"><?php if($theme_options->get( 'checkout_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'checkout_text', $config->get( 'config_language_id' ) ); } else { echo 'Checkout'; } ?></a>
            </div>
        </div>
    </div>
</div>

<div id="quickview" class="modal fade bs-example-modal-lg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Product</h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
        </div>
    </div>
</div>

<?php if($theme_options->get( 'quick_view' ) == 1) { ?>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/magnific/magnific-popup.css" media="screen" />
<script type="text/javascript" src="catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
	$('body').on('click', '.quickview a', function () {
		$('#quickview .modal-header .modal-title').html($(this).attr('title'));
		$('#quickview .modal-body').load($(this).attr('rel') + ' #quickview_product' ,function(result){
		    $('#quickview').modal('show');
		    $('#quickview .popup-gallery').magnificPopup({
		    	delegate: 'a',
		    	type: 'image',
		    	tLoading: 'Loading image #%curr%...',
		    	mainClass: 'mfp-img-mobile',
		    	gallery: {
		    		enabled: true,
		    		navigateByImgClick: true,
		    		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		    	},
		    	image: {
		    		tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		    		titleSrc: function(item) {
		    			return item.el.attr('title');
		    		}
		    	}
		    });
		});
		return false;
	});
	
	$('#quickview').on('click', '#button-cart', function () {
		$('#quickview').modal('hide');
		cart.add($(this).attr("rel"));
	});
</script>
<?php } ?>

<div class="<?php if($theme_options->get( 'main_layout' ) == 2) { echo 'fixed-body'; } else { echo 'standard-body'; } ?>">
	<div id="main" class="<?php if($theme_options->get( 'main_layout' ) == 2) { echo 'main-fixed'; } ?>">
		<!-- HEADER
			================================================== -->
		<header>
			<div class="background-header"></div>
			<div class="slider-header">
				<!-- Top Bar -->
				<div id="top-bar" class="<?php if($theme_options->get( 'top_bar_layout' ) == 2) { echo 'fixed'; } else { echo 'full-width'; } ?>">
					<div class="background-top-bar"></div>
					<div class="background">
						<div class="shadow"></div>
						<div class="pattern">
							<div class="container">
								<div class="row">
									<!-- Top Bar Left -->
									<div class="col-sm-6">
										<!-- Welcome text -->
										<div class="welcome-text">
                                            <i class="fa fa-info"></i>&nbsp;
											<?php if($theme_options->get( 'welcome_text', $config->get( 'config_language_id' ) ) != '') { echo html_entity_decode($theme_options->get( 'welcome_text', $config->get( 'config_language_id' ) )); } else { echo 'Your text message'; } ?>
										</div>
									</div>
									
									<!-- Top Bar Right -->
									<div class="col-sm-6" id="top-bar-right">
										<?php echo $currency.$language; ?>
                                        <!-- Login Start -->
                                        <div class="dropdown disable-account-top">
                                        <a href="<?php echo $account; ?>" title="<?php echo $text_account; ?>" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                        <i class="fa fa-user sizeic"></i>
                                        <span>
                                        <?php echo $text_account; ?>
                                        </span> 
                                        <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                        <?php if ($logged) { ?>
                                        <li><a href="<?php echo $account; ?>"><i class="fa fa-inbox font-l"></i>&nbsp; <?php echo $text_account; ?></a></li>
                                        <li><a href="<?php echo $order; ?>"><i class="fa fa-file-pdf-o"></i>&nbsp; <?php echo $text_order; ?></a></li>
                                        <li><a href="<?php echo $transaction; ?>"><i class="fa fa-credit-card"></i>&nbsp; <?php echo $text_transaction; ?></a></li>
                                        <li><a href="<?php echo $download; ?>"><i class="fa fa-cloud-download"></i>&nbsp; <?php echo $text_download; ?></a></li>
                                        <li><a href="<?php echo $logout; ?>"><i class="fa fa-sign-out font-l"></i>&nbsp; <?php echo $text_logout; ?></a></li>
                                        <?php } else { ?>
                                        <li><a href="<?php echo $login; ?>"><i class="fa fa-user font-l"></i>&nbsp; <?php echo $text_login; ?></a></li>
                                        <li><a href="<?php echo $register; ?>"><i class="fa fa-pencil-square-o font-m"></i>&nbsp; <?php echo $text_register; ?></a></li>
                                        <?php } ?>
                                        </ul>
                                        </div>
                                        <!-- Login End -->
                                        <!-- Top Bar wishlist -->
                                        <form>
                                        <div class="dropdown">
                                        <i class="fa fa-heart"></i>
                                        <a href="<?php echo $wishlist; ?>" id="wishlist-total"><?php echo $text_wishlist; ?></a>
                                        </div>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Top of pages -->
				<div id="top" class="<?php if($theme_options->get( 'header_layout' ) == 1) { echo 'full-width'; } else { echo 'fixed'; } ?>">
					<div class="background-top"></div>
					<div class="background">
						<div class="shadow"></div>
						<div class="pattern">
							<div class="container">
								<div class="row">
									<!-- Header Left -->
									<div class="col-sm-3" id="header-left">
										<?php if ($logo) { ?>
										<!-- Logo -->
										<div class="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a></div>
										<?php } ?>
									</div>
									
									<!-- Header Center -->
									<div class="col-sm-5" id="header-center">									
										<!-- Search -->
										<div class="search_form">
											<div class="button-search"></div>
											<input type="text" class="input-block-level search-query" name="search" placeholder="<?php echo $search; ?>" id="search_query" value="" />
											
											<?php if($theme_options->get( 'quick_search_autosuggest' ) != '0') { ?>
												<div id="autocomplete-results" class="autocomplete-results"></div>
												
												<script type="text/javascript">
												$(document).ready(function() {
													$('#search_query').autocomplete({
														delay: 0,
														appendTo: "#autocomplete-results",
														source: function(request, response) {		
															$.ajax({
																url: 'index.php?route=search/autocomplete&filter_name=' +  encodeURIComponent(request.term),
																dataType: 'json',
																success: function(json) {
																	response($.map(json, function(item) {
																		return {
																			label: item.name,
																			value: item.product_id,
																			href: item.href,
																			thumb: item.thumb,
																			desc: item.desc,
																			price: item.price
																		}
																	}));
																}
															});
														},
														select: function(event, ui) {
															document.location.href = ui.item.href;
															
															return false;
														},
														focus: function(event, ui) {
													      	return false;
													   	},
													   	minLength: 2
													})
													.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
													  return $( "<li>" )
													     .append( "<a><img src='" + item.thumb + "' alt=''>" + item.label + "<br><span class='description'>" + item.desc + "</span><br><span class='price'>" + item.price + "</span></a>" )
													    .appendTo( ul );
													};
												});
												</script>
											<?php } ?>
										</div>
										
										<!-- Links
										<ul class="header-links">
											<li><a href="<?php echo $wishlist; ?>" id="wishlist-total"><?php echo $text_wishlist; ?></a></li>
											<li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
											<li><a href="<?php echo $shopping_cart; ?>"><?php echo $text_shopping_cart; ?></a></li>
											<li><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></li>
										</ul>-->
									</div>
									
									<!-- Header Right -->
									<div class="col-sm-4" id="header-right">
                                    
                                    <!-- Account block -->
                                    <div id="cart_block" class="dropdown bkg disable-account-down">
	                                    <div class="cart-heading dropdown-toogle" data-toggle="dropdown" data-hover="dropdown">
		                                    <i class="cart-user"></i> 
		                                    <p><?php echo $text_account; ?></p>
		                                    <span><?php if($theme_options->get( 'my_space', $config->get( 'config_language_id' ) ) != '') { echo html_entity_decode($theme_options->get( 'my_space', $config->get( 'config_language_id' ) )); } else { echo 'my space'; } ?></span>
	                                    </div>
	
	                                    <div class="dropdown-menu wh">
                                       
                                        <div class="link-space">
                                        <?php if ($logged) { ?>
                                        <li><a href="<?php echo $account; ?>"><i class="fa fa-inbox font-l"></i>&nbsp; <?php echo $text_account; ?></a></li>
                                        <li><a href="<?php echo $order; ?>"><i class="fa fa-file-pdf-o"></i>&nbsp; <?php echo $text_order; ?></a></li>
                                        <li><a href="<?php echo $transaction; ?>"><i class="fa fa-credit-card"></i>&nbsp; <?php echo $text_transaction; ?></a></li>
                                        <li><a href="<?php echo $download; ?>"><i class="fa fa-cloud-download"></i>&nbsp; <?php echo $text_download; ?></a></li>
                                        <li><a href="<?php echo $logout; ?>"><i class="fa fa-sign-out font-l"></i>&nbsp; <?php echo $text_logout; ?></a></li>
                                        <?php } else { ?>
                                        <li><a href="<?php echo $login; ?>"><i class="fa fa-user font-l"></i>&nbsp; <?php echo $text_login; ?></a></li>
                                        <li><a href="<?php echo $register; ?>"><i class="fa fa-pencil-square-o font-m"></i>&nbsp; <?php echo $text_register; ?></a></li>
                                        <?php } ?>
                                        </div>
	                                  
                                      </div>
                                    </div>
                                    <!-- Account block -->
                                    
										<?php echo $cart; ?>
									</div>
								</div>
							</div>
                            
                            <div class="container" style="padding-top: 0px !important; padding-bottom: 0px !important;">
                            <?php 
				            $preface_fullwidth = $modules->getModules('preface_fullwidth');
				            if( count($preface_fullwidth) ) { ?>
				            <div class="row">
					            <div class="col-sm-12">
						            <?php
							            foreach ($preface_fullwidth as $module) {
								            echo $module;
							            }
						            ?>
					            </div>
				            </div>
			                <?php } ?>
                            </div>

							<?php 
							$menu = $modules->getModules('menu');
							if( count($menu) ) {
								foreach ($menu as $module) {
									echo $module;
								}
							} elseif($categories) {
							?>
							<div class="container-megamenu container horizontal">
								<div class="megaMenuToggle">
									<div class="megamenuToogle-wrapper">
										<div class="megamenuToogle-pattern">
											<div class="container">
												<div><span></span><span></span><span></span></div>
												Navigation
											</div>
										</div>
									</div>
								</div>
								
								<div class="megamenu-wrapper">
									<div class="megamenu-pattern">
										<div class="container">
											<ul class="megamenu shift-up">
												<li class="home"><a href="<?php echo $home; ?>"><i class="fa fa-home"></i></a></li>
												<?php foreach ($categories as $category) { ?>
												<?php if ($category['children']) { ?>
												<li class="with-sub-menu hover"><p class="close-menu"></p><p class="open-menu"></p>
													<a href="<?php echo $category['href'];?>"><span><strong><?php echo $category['name']; ?></strong></span></a>
												<?php } else { ?>
												<li>
													<a href="<?php echo $category['href']; ?>"><span><strong><?php echo $category['name']; ?></strong></span></a>
												<?php } ?>
													<?php if ($category['children']) { ?>
													<?php 
														$width = '100%';
														$row_fluid = 3;
														if($category['column'] == 1) { $width = '220px; right: auto;'; $row_fluid = 12; }
														if($category['column'] == 2) { $width = '500px; right: auto;'; $row_fluid = 6; }
														if($category['column'] == 3) { $width = '700px; right: auto;'; $row_fluid = 4; }
													?>
													<div class="sub-menu" style="width: <?php echo $width; ?>">
														<div class="content">
															<p class="arrow"></p>
															<div class="row hover-menu">
																<?php for ($i = 0; $i < count($category['children']);) { ?>
																<div class="col-sm-<?php echo $row_fluid; ?> mobile-enabled">
																	<div class="menu">
																		<ul>
																		  <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
																		  <?php for (; $i < $j; $i++) { ?>
																		  <?php if (isset($category['children'][$i])) { ?>
																		  <li><a href="<?php echo $category['children'][$i]['href']; ?>" onclick="window.location = '<?php echo $category['children'][$i]['href']; ?>';"><?php echo $category['children'][$i]['name']; ?></a></li>
																		  <?php } ?>
																		  <?php } ?>
																		</ul>
																	</div>
																</div>
																<?php } ?>
															</div>
														</div>
													</div>
													<?php } ?>
												</li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>

			
			<?php $slideshow = $modules->getModules('slideshow'); ?>
			<?php  if(count($slideshow)) { ?>
			<!-- Slider -->
			<div id="slider" class="<?php if($theme_options->get( 'slideshow_layout' ) == 1) { echo 'full-width'; } else { echo 'fixed'; } ?>">
				<div class="background-slider"></div>
				<div class="background">
					<div class="shadow"></div>
					<div class="pattern">
						<?php foreach($slideshow as $module) { ?>
						<?php echo $module; ?>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</header>