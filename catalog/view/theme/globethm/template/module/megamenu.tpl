<?php if($this->registry->has('theme_options') == true) { 
$theme_options = $this->registry->get('theme_options');
$id = rand(0, 5000)*rand(0, 5000); ?>

<div id="megamenu_<?php echo $id; ?>" class="container-megamenu <?php if($ustawienia['full_width'] != '1') { echo 'container'; } ?> <?php if($ustawienia['orientation'] == 1) { echo 'vertical'; } else { echo 'horizontal'; } if($ustawienia['display_on_mobile'] == 1) { echo ' mobile-disabled'; } ?>">
	<?php if($ustawienia['orientation'] == 1) { ?>
	<div id="menuHeading">
		<div class="megamenuToogle-wrapper">
			<div class="megamenuToogle-pattern">
				<div class="container">
					<?php echo $navigation_text; ?>
				</div>
			</div>
		</div>
	</div>
	<?php } else { ?>
	<div class="megaMenuToggle">
		<div class="megamenuToogle-wrapper">
			<div class="megamenuToogle-pattern">
				<div class="container">
					<div><span></span><span></span><span></span></div>
					<?php echo $navigation_text; ?>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="megamenu-wrapper <?php if($ustawienia['home_item'] == 'icon' || $ustawienia['home_item'] == 'text') { ?>enabled-menu<?php } ?>">
		<div class="megamenu-pattern">
			<div class="container">
				<ul class="megamenu <?php if($ustawienia['animation'] != '') { echo $ustawienia['animation']; } ?>">
					<?php if($ustawienia['home_item'] == 'icon' || $ustawienia['home_item'] == 'text') { ?>
					<li class="home"><!--<a href="<?php echo $home; ?>"><?php if($ustawienia['home_item'] == 'icon') { ?><i class="fa fa-home"></i><?php } else { echo '<span><strong>'.$home_text.'</strong></span>'; } ?></a>--></li>
					<?php } ?>
					<?php if($ustawienia['search_bar'] == 1) { ?>
					<li class="search pull-right">
						<!-- Search -->
						<div class="search_form">
							<div class="button-search2"></div>
							<input type="text" class="input-block-level search-query" name="search2" placeholder="<?php echo $text_search; ?>" id="search_query2" value="<?php echo $search; ?>" />
							
							<?php if($theme_options->get( 'quick_search_autosuggest' ) != '0') { ?>
							<div id="autocomplete-results2" class="autocomplete-results"></div>
							
							<script type="text/javascript">
							$(document).ready(function() {
								$('#search_query2').autocomplete({
									delay: 0,
									appendTo: "#autocomplete-results2",
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
					</li>
					<?php } ?>
					<?php
						foreach($menu as $row) {
							$class = '';
							$class_link = 'clearfix';
							$title = false;
							$target = false;
							if($row['description'] != '') { $class_link .= ' description'; }
							if(is_array($row['submenu']) && !empty($row['submenu'])) { $class .= ' with-sub-menu'; if($row['submenu_type'] == 1) { $class .= ' click'; } else { $class .= ' hover'; } }
							if($row['display_on_mobile'] == 1) { $class .= ' mobile-disabled'; }
							if($row['position'] == 1) { $class .= ' pull-right'; }
							if($row['submenu_type'] == 2) { $title = 'title="hover-intent"'; }
							if($row['new_window'] == 1) { $target = 'target="_blank"'; }
							if(!isset($row['name'][$lang_id])) { $row['name'][$lang_id] = 'Set name'; }
							echo "<li class='".$class."' ".$title."><p class='close-menu'></p><p class='open-menu'></p>";
							echo "<a href='".$row['link']."' class='" . $class_link ."' ".$target."><span><strong>".$row['icon'].html_entity_decode($row['name'][$lang_id]).html_entity_decode($row['description'])."</strong></span></a>";
								if(is_array($row['submenu']) && !empty($row['submenu'])) {
									if($ustawienia['orientation'] == '1' && $row['submenu_width'] == '100%') { $row['submenu_width'] = '337%'; }
									$background_image = false;
									if($row['submenu_background'] != '') {
										$background_image = 'style="background-image:url(image/' . $row['submenu_background'] . ');background-position: ' . $row['submenu_background_position'] . ';background-repeat: ' . $row['submenu_background_repeat'] . ';"';
									}
									echo '<div class="sub-menu" style="width:'.$row['submenu_width'].'">';
										echo '<div class="content" ' . $background_image . '><p class="arrow"></p>';
											echo '<div class="row">';
												$row_fluid = 0;
												foreach($row['submenu'] as $submenu) {
													if(($row_fluid+$submenu['content_width']) > 12) {
														$row_fluid = $submenu['content_width'];
														echo '</div><div class="border"></div><div class="row">';
													} else {
														$row_fluid = $row_fluid+$submenu['content_width'];
													}
													echo '<div class="col-sm-'.$submenu['content_width'].'  ' . ($submenu['display_on_mobile'] == '1' ? 'mobile-disabled' : 'mobile-enabled') . '">';
														if($submenu['content_type'] == '0') {
															echo $submenu['html'];
														} elseif($submenu['content_type'] == '1') {
															if(is_array($submenu['product'])) {
																echo '<div class="product"><div class="product-overflow clearfix">';
																	echo '<div class="image"><a href="'.$submenu['product']['link'].'"><img src="'.$submenu['product']['image'].'" alt=""></a></div>';
																	echo '<div class="right"><div class="name"><a href="'.$submenu['product']['link'].'">'.$submenu['product']['name'].'</a></div>';
																	echo '<div class="price">';
																		if (!$submenu['product']['special']) {
																			echo $submenu['product']['price'];
																		} else {
																			echo $submenu['product']['special'];
																		}
																	echo '</div></div>';
																echo '</div></div>';
															}
														} elseif($submenu['content_type'] == '2') {
															echo $submenu['categories'];
														}
													echo '</div>';
												}
											echo '</div>';
										echo '</div>';
									echo '</div>';
								}
							echo "</li>";
							echo "\n";
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
#megamenu_<?php echo $id; ?> ul.megamenu > li > .sub-menu > .content {
	-webkit-transition: all <?php if($ustawienia['animation_time'] > 0 && $ustawienia['animation_time'] < 5000) { echo $ustawienia['animation_time']; } else { echo 300; } ?>ms ease-out !important;
	-moz-transition: all <?php if($ustawienia['animation_time'] > 0 && $ustawienia['animation_time'] < 5000) { echo $ustawienia['animation_time']; } else { echo 300; } ?>ms ease-out !important;
	-o-transition: all <?php if($ustawienia['animation_time'] > 0 && $ustawienia['animation_time'] < 5000) { echo $ustawienia['animation_time']; } else { echo 300; } ?>ms ease-out !important;
	-ms-transition: all <?php if($ustawienia['animation_time'] > 0 && $ustawienia['animation_time'] < 5000) { echo $ustawienia['animation_time']; } else { echo 300; } ?>ms ease-out !important;
	transition: all <?php if($ustawienia['animation_time'] > 0 && $ustawienia['animation_time'] < 5000) { echo $ustawienia['animation_time']; } else { echo 300; } ?>ms ease-out !important;
}
</style>
<?php } ?>