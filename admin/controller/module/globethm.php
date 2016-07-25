<?php
/* 
Template: GLOBETHM
Author: John Amber
Website: http://www.globethm.com/
Version: 2.x
*/

class ControllerModuleGlobethm extends Controller {
	
	private $error = array(); 
	
	public function index() {   
	
		//Load the language file for this module
		$this->language->load('module/globethm');

		//Set the title from the language file $_['heading_title'] string
		$this->document->setTitle('Theme Options');
		
		//Load the settings model. You can also add any other models you want to load here.
		$this->load->model('setting/setting');
		
		// Multilanguage
		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		
		/* Konfiguracja kolorów */
		$data['colors_data'] = array(
			array(
				'name' => 'Body',
				'content' => array(
					array(
						'name' => 'Body text',
						'id'   => 'body_font_text'
					),
					array(
						'name' => 'Body links',
						'id'   => 'body_font_links'
					),
					array(
						'name' => 'Body links hover',
						'id'   => 'body_font_links_hover'
					),
					array(
						'name' => 'Border color',
						'id'   => 'body_border_color'
					),
					array(
						'name' => 'Page name color',
						'id'   => 'body_page_name_color'
					),
					array(
						'name' => 'Box heading color',
						'id'   => 'body_box_heading_color'
					),
					array(
						'name' => 'Box heading border bottom color',
						'id'   => 'body_box_heading_border_bottom_color'
					),
					array(
						'name' => 'Background color',
						'id'   => 'body_background_color'
					)
				)
			),
			
			array(
				'name' => 'Cart & Account',
				'content' => array(
				     array(
						'name' => 'Background color Cart',
						'id'   => 'cart_background_color'
					),
					array(
						'name' => 'Background color Account',
						'id'   => 'account_background_color'
					),
					array(
						'name' => 'Icon color Cart',
						'id'   => 'icon_color_cart'
					),
					array(
						'name' => 'Icon color Account',
						'id'   => 'icon_color_account'
					),
					array(
						'name' => 'Font color Cart & Account (p)',
						'id'   => 'cart_color_p'
					),
					array(
						'name' => 'Font color Cart & Account (span)',
						'id'   => 'cart_color_span'
					)
				)
			),
			
			array(
				'name' => 'Input',
				'content' => array(
				     array(
				     	'name' => 'Input focus border',
				     	'id'   => 'input_focus_border'
				     ),
				     array(
				     	'name' => 'Input focus box shadow',
				     	'id'   => 'input_focus_box_shadow'
				     )
				)
			),
			array(
				'name' => 'Product',
				'content' => array(
				     array(
				     	'name' => 'Product name',
				     	'id'   => 'body_product_name'
				     ),
				     array(
				     	'name' => 'Product name hover',
				     	'id'   => 'body_product_name_hover'
				     ),
				     array(
				     	'name' => 'Price text',
				     	'id'   => 'body_price_text'
				     ),
				     array(
				     	'name' => 'Price new text',
				     	'id'   => 'body_price_new_text'
				     ),
				     array(
				     	'name' => 'Price old text',
				     	'id'   => 'body_price_old_text'
				     ),
				     array(
				     	'name' => 'Background gradient top',
				     	'id'   => 'product_background_gradient_top'
				     ),
				     array(
				     	'name' => 'Background gradient bottom',
				     	'id'   => 'product_background_gradient_bottom'
				     ),
				     array(
				     	'name' => 'Border color',
				     	'id'   => 'product_border_color'
				     ),
				     array(
				     	'name' => 'Hover background gradient top',
				     	'id'   => 'product_hover_background_gradient_top'
				     ),
				     array(
				     	'name' => 'Hover background gradient bottom',
				     	'id'   => 'product_hover_background_gradient_bottom'
				     ),
				     array(
				     	'name' => 'Hover border color',
				     	'id'   => 'product_hover_border_color'
				     )
				)
			),
			array(
				'name' => 'Product Type 2',
				'content' => array(
				     array(
				     	'name' => 'Price color',
				     	'id'   => 'product_type_2_price_color'
				     ),
				     array(
				     	'name' => 'Price background gradient top',
				     	'id'   => 'product_type_2_price_background_gradient_top'
				     ),
				     array(
				     	'name' => 'Price background gradient bottom',
				     	'id'   => 'product_type_2_price_background_gradient_bottom'
				     ),
				     array(
				     	'name' => 'Price border color',
				     	'id'   => 'product_type_2_price_border_color'
				     )
				)
			),
			array(
				'name' => 'First box on columns',
				'content' => array(
					array(
						'name' => 'Heading color text',
						'id'   => 'first_box_heading_color_text'
					),
					array(
						'name' => 'Heading background gradient top',
						'id'   => 'first_box_heading_background_gradient_top'
					),
					array(
						'name' => 'Heading background gradient bottom',
						'id'   => 'first_box_heading_background_gradient_bottom'
					),
					array(
						'name' => 'Heading border color',
						'id'   => 'first_box_heading_border_color'
					)
				)
			),
			array(
				'name' => 'Second box on columns',
				'content' => array(
					array(
						'name' => 'Heading color text',
						'id'   => 'second_box_heading_color_text'
					),
					array(
						'name' => 'Heading background gradient top',
						'id'   => 'second_box_heading_background_gradient_top'
					),
					array(
						'name' => 'Heading background gradient bottom',
						'id'   => 'second_box_heading_background_gradient_bottom'
					),
					array(
						'name' => 'Heading border color',
						'id'   => 'second_box_heading_border_color'
					)
				)
			),
			array(
				'name' => 'Top Bar',
				'content' => array(
					array(
						'name' => 'Top bar text',
						'id'   => 'top_bar_text'
					),
					array(
						'name' => 'Top bar links',
						'id'   => 'top_bar_links'
					),
					array(
						'name' => 'Background gradient top',
						'id'   => 'top_bar_background_gradient_top'
					),
					array(
						'name' => 'Background gradient bottom',
						'id'   => 'top_bar_background_gradient_bottom'
					)
				)
			),
			array(
				'name' => 'Top',
				'content' => array(
					array(
						'name' => 'Menu links',
						'id'   => 'top_menu_links'
					),
					array(
						'name' => 'Cart icon background gradient top',
						'id'   => 'top_cart_icon_background_gradient_top'
					),
					array(
						'name' => 'Cart icon background gradient bottom',
						'id'   => 'top_cart_icon_background_gradient_bottom'
					),
					array(
						'name' => 'Cart block text',
						'id'   => 'top_cart_block_text'
					),
					array(
						'name' => 'Cart block price',
						'id'   => 'top_cart_block_price'
					),
					array(
						'name' => 'Search input border color',
						'id'   => 'top_search_input_border_color'
					),
					array(
						'name' => 'Search icon color',
						'id'   => 'top_icon_search_color'
					),
					array(
						'name' => 'Background color',
						'id'   => 'top_background_color'
					)
				)
			),
			array(
				'name' => 'Menu',
				'content' => array(
					array(
						'name' => 'Main links',
						'id'   => 'menu_main_links'
					),
					array(
						'name' => 'Main links hover',
						'id'   => 'menu_main_links_hover'
					),
					array(
						'name' => 'Background gradient top',
						'id'   => 'menu_background_gradient_top'
					),
					array(
						'name' => 'Background gradient bottom',
						'id'   => 'menu_background_gradient_bottom'
					),
					array(
						'name' => 'Border color',
						'id'   => 'menu_border_color'
					),
					array(
						'name' => 'Hover background gradient top',
						'id'   => 'menu_hover_background_gradient_top'
					),
					array(
						'name' => 'Hover background gradient bottom',
						'id'   => 'menu_hover_background_gradient_bottom'
					),
					array(
						'name' => 'Hover border color',
						'id'   => 'menu_hover_border_color'
					),
				)
			),
			array(
				'name' => 'Vertical Menu',
				'content' => array(
					array(
						'name' => 'Heading text',
						'id'   => 'vertical_menu_heading_text'
					),
					array(
						'name' => 'Heading background gradient top',
						'id'   => 'vertical_menu_heading_background_gradient_top'
					),
					array(
						'name' => 'Heading background gradient bottom',
						'id'   => 'vertical_menu_heading_background_gradient_bottom'
					),
					array(
						'name' => 'Heading border color',
						'id'   => 'vertical_menu_heading_border_color'
					)
				)
			),
			array(
				'name' => 'Pro Mega Menu Vertical',
				'content' => array(
					array(
						'name' => 'Heading background',
						'id'   => 'megamenu_container_bg'
					),
					array(
						'name' => 'Heading background hover',
						'id'   => 'megamenu_container_ul_li'
					),
					array(
						'name' => 'Link background hover',
						'id'   => 'megamenu_container_ul_li_a'
					),
				)
			),
			array(
				'name' => 'Slider',
				'content' => array(
					array(
						'name' => 'Bullets background color',
						'id'   => 'slider_bullets_background_color'
					),
					array(
						'name' => 'Bullet active background color',
						'id'   => 'slider_bullet_active_background_color'
					)
				)
			),
			array(
				'name' => 'Sale badges',
				'content' => array(
					array(
						'name' => 'Color text',
						'id'   => 'sale_color_text'
					),
					array(
						'name' => 'Background gradient top',
						'id'   => 'sale_background_gradient_top'
					),
					array(
						'name' => 'Background gradient bottom',
						'id'   => 'sale_background_gradient_bottom'
					)
				)
			),
			array(
				'name' => 'Ratings icon',
				'content' => array(
					array(
						'name' => 'Background gradient top',
						'id'   => 'ratings_background_gradient_top'
					),
					array(
						'name' => 'Background gradient bottom',
						'id'   => 'ratings_background_gradient_bottom'
					),
					array(
						'name' => 'Active background gradient top',
						'id'   => 'ratings_active_background_gradient_top'
					),
					array(
						'name' => 'Active background gradient bottom',
						'id'   => 'ratings_active_background_gradient_bottom'
					)
				)
			),
			array(
				'name' => 'Button',
				'content' => array(
					array(
						'name' => 'Color text',
						'id'   => 'buttons_color_text'
					),
					array(
						'name' => 'Background gradient top',
						'id'   => 'buttons_background_gradient_top'
					),
					array(
						'name' => 'Background gradient bottom',
						'id'   => 'buttons_background_gradient_bottom'
					),
					array(
						'name' => 'Border color',
						'id'   => 'buttons_border_color'
					)
				)
			),
			array(
				'name' => 'Second, Hover Button',
				'content' => array(
					array(
						'name' => 'Color text',
						'id'   => 'second_buttons_color_text'
					),
					array(
						'name' => 'Background gradient top',
						'id'   => 'second_buttons_background_gradient_top'
					),
					array(
						'name' => 'Background gradient bottom',
						'id'   => 'second_buttons_background_gradient_bottom'
					),
					array(
						'name' => 'Border color',
						'id'   => 'second_buttons_border_color'
					)
				)
			),
			array(
				'name' => 'Carousel Button',
				'content' => array(
					array(
						'name' => 'Background gradient top',
						'id'   => 'carousel_buttons_background_gradient_top'
					),
					array(
						'name' => 'Background gradient bottom',
						'id'   => 'carousel_buttons_background_gradient_bottom'
					)
				)
			),
			array(
				'name' => 'Carousel Bullets',
				'content' => array(
					array(
						'name' => 'Background gradient top',
						'id'   => 'carousel_bullets_background_gradient_top'
					),
					array(
						'name' => 'Background gradient bottom',
						'id'   => 'carousel_bullets_background_gradient_bottom'
					),
					array(
						'name' => 'Active bullet background gradient top',
						'id'   => 'carousel_active_bullets_background_gradient_top'
					),
					array(
						'name' => 'Active bullet background gradient bottom',
						'id'   => 'carousel_active_bullets_background_gradient_bottom'
					)
				)
			),
			array(
				'name' => 'Tables',
				'content' => array(
					array(
						'name' => 'Border color',
						'id'   => 'tables_border_color'
					),
					array(
						'name' => 'Heading background gradient top',
						'id'   => 'tables_heading_background_gradient_top'
					),
					array(
						'name' => 'Heading background gradient bottom',
						'id'   => 'tables_heading_background_gradient_bottom'
					)
				)
			),
			array(
				'name' => 'CustomFooter',
				'content' => array(
					array(
						'name' => 'Text color',
						'id'   => 'customfooter_color_text'
					),
					array(
						'name' => 'Heading color',
						'id'   => 'customfooter_color_heading'
					),
					array(
						'name' => 'Icon contact us color',
						'id'   => 'customfooter_color_icon_contact_us'
					),
					array(
						'name' => 'Background color',
						'id'   => 'customfooter_background_color'
					)
				)
			),
			array(
				'name' => 'CustomFooter Panels',
				'content' => array(
					array(
						'name' => 'Heading color',
						'id'   => 'customfooter_panels_heading_color'
					),
					array(
						'name' => 'Heading strong color',
						'id'   => 'customfooter_panels_heading_strong_color'
					),
					array(
						'name' => 'Content text color',
						'id'   => 'customfooter_panels_content_text_color'
					),
					array(
						'name' => 'Content background top',
						'id'   => 'customfooter_panels_content_background_top'
					),
					array(
						'name' => 'Content background bottom',
						'id'   => 'customfooter_panels_content_background_bottom'
					),
					array(
						'name' => 'Content border color',
						'id'   => 'customfooter_panels_content_border_color'
					),
					array(
						'name' => 'Social icons background color',
						'id'   => 'customfooter_panels_social_icons_background_color'
					),
					array(
						'name' => 'Contact strong text color',
						'id'   => 'customfooter_panels_contact_strong_text_color'
					)
				)
			),
			array(
				'name' => 'CustomFooter Panels Type 2, 3, 4',
				'content' => array(
				     array(
				     	'name' => 'Heading text color',
				     	'id'   => 'customfooter_panels2_heading_color'
				     ),
					array(
						'name' => 'Heading background gradient top',
						'id'   => 'customfooter_panels2_heading_background_gradient_top'
					),
					array(
						'name' => 'Heading background gradient bottom',
						'id'   => 'customfooter_panels2_heading_background_gradient_bottom'
					),
					array(
						'name' => 'Heading border color',
						'id'   => 'customfooter_panels2_heading_border_color'
					),
					array(
						'name' => 'Content text color',
						'id'   => 'customfooter_panels2_content_text_color'
					),
					array(
						'name' => 'Social icons background color',
						'id'   => 'customfooter_panels2_social_icons_background_color'
					),
					array(
						'name' => 'Contact background element',
						'id'   => 'customfooter_panels2_contact_background_element'
					),
					array(
						'name' => 'Contact element with background text color',
						'id'   => 'customfooter_panels2_contact_element_with_background_text_color'
					)
				)
			),
			array(
				'name' => 'CustomFooter Panels Type 5',
				'content' => array(
				     array(
				     	'name' => 'Heading text color',
				     	'id'   => 'customfooter_panels5_heading_color'
				     ),
				     array(
				     	'name' => 'Heading strong text color',
				     	'id'   => 'customfooter_panels5_heading_strong_text_color'
				     ),
					array(
						'name' => 'Content border color',
						'id'   => 'customfooter_panels5_content_border_color'
					),
					array(
						'name' => 'Content text color',
						'id'   => 'customfooter_panels5_content_text_color'
					),
					array(
						'name' => 'Social icons background color',
						'id'   => 'customfooter_panels5_social_icons_background_color'
					),
					array(
						'name' => 'Contact border color element',
						'id'   => 'customfooter_panels5_contact_border_color_element'
					)
				)
			),
			array(
				'name' => 'Footer',
				'content' => array(
					array(
						'name' => 'Text color',
						'id'   => 'footer_color_text'
					),
					array(
						'name' => 'Heading color',
						'id'   => 'footer_color_heading'
					),
					array(
						'name' => 'Bullets color',
						'id'   => 'footer_color_bullets'
					),
					array(
						'name' => 'Border color',
						'id'   => 'footer_border_color'
					),
					array(
						'name' => 'Background color',
						'id'   => 'footer_background_color'
					)
				)
			),
			array(
				'name' => 'Footer Fixed',
				'content' => array(
					array(
						'name' => 'Background gradient top',
						'id'   => 'footer_fixed_background_gradient_top'
					),
					array(
						'name' => 'Background gradient bottom',
						'id'   => 'footer_fixed_background_gradient_bottom'
					),
					array(
						'name' => 'Border color',
						'id'   => 'footer_fixed_border_color'
					),
					array(
						'name' => 'Heading border bottom color',
						'id'   => 'footer_fixed_heading_border_bottom_color'
					)
				)
			),
			array(
				'name' => 'Copyright',
				'content' => array(
					array(
						'name' => 'Text color',
						'id'   => 'copyright_color_text'
					),
					array(
						'name' => 'Background gradient top',
						'id'   => 'copyright_background_gradient_top'
					),
					array(
						'name' => 'Background gradient bottom',
						'id'   => 'copyright_background_gradient_bottom'
					)
				)
			)
		);
		
		foreach ($data['colors_data'] as $colors) {
			foreach($colors['content'] as $color) {
				$data[$color['id']] = false;
			}
		}
		
		// Konfiguracja zmiennych
		$config_data = array(
			'main_layout',
			'top_bar_layout',
			'header_layout',
			'slideshow_layout',
			'content_layout',
			'custom_footer_layout',
			'footer_layout',
			
			'page_width',
			'max_width',
			
			'responsive_design',
			
			'checkout_text',
			'continue_shopping_text',
			'confirmation_text',
			'shopping_cart_text',
			'home_text',
			'my_space',
			'welcome_text',
			'more_details_text',
			'quickview_text',
			'sale_text',
			
			'quick_search_autosuggest',
			
			'product_per_pow',
			'product_per_pow2',
			'product_scroll_latest',
			'product_scroll_featured',
			'product_scroll_bestsellers',
			'product_scroll_specials',
			'product_scroll_related',
			'quick_view',
			'display_text_sale',
			'type_sale',
			'product_image_effect',
			'display_add_to_cart',
			'display_rating',
			'default_list_grid',
			'refine_search_style',
			'refine_image_width',
			'refine_image_height',
			'refine_search_number',
			'product_image_zoom',
			'product_image_size',
			'position_image_additional',
			'product_social_share',
			
			'custom_block',
			
			'customfooter',
			
			'colors_status',
			
			'background_status',
			'body_background',
			'body_background_background',
			'body_background_subtle_patterns',
			'body_background_position',
			'body_background_repeat',
			'body_background_attachment',
			'header_background',
			'header_background_background',
			'header_background_subtle_patterns',
			'header_background_position',
			'header_background_repeat',
			'header_background_attachment',
			'customfooter_background',
			'customfooter_background_background',
			'customfooter_background_subtle_patterns',
			'customfooter_background_position',
			'customfooter_background_repeat',
			'customfooter_background_attachment',
			'content_headlines_background',
			'content_headlines_background_background',
			'footer_headlines_background',
			'footer_headlines_background_background',
			
			'border_radius',
			'search_style',
			'menu_style',
			'product_style',
			'button_style',
			'footer_style',
			'box_shadow',
						
			'font_status',
			'categories_bar',
			'categories_bar_weight',
			'categories_bar_px',
			'categories_bar_transform',
			'headlines',
			'headlines_weight',
			'headlines_px',
			'headlines_transform',
			'headlines_in_columns',
			'headlines_in_columns_weight',
			'headlines_in_columns_px',
			'headlines_in_columns_transform',
			'product_name',
			'product_name_weight',
			'product_name_big_px',
			'product_name_medium_px',
			'footer_headlines',
			'footer_headlines_weight',
			'footer_headlines_px',
			'footer_headlines_transform',
			'body_font',
			'body_font_px',
			'body_font_weight',
			'body_font_smaller_px',
			'page_name',
			'page_name_weight',
			'page_name_px',
			'page_name_transform',
			'button_font',
			'button_font_weight',
			'button_font_px',
			'button_transform',
			'custom_price',
			'custom_price_weight',
			'custom_price_px',
			'custom_price_px_medium',
			'custom_price_px_small',
			'custom_price_px_old_price',
			
			'product_image_zoom',
			
			'product_scroll_latest',
			'product_scroll_featured',
			'product_scroll_bestsellers',
			'product_scroll_specials',
			'product_scroll_related',
			
			'custom_code_css_status',
			'custom_code_css',
			'custom_code_javascript_status',
			'custom_code_js',
			
			'refine_image_width',
			'refine_image_height',
			
			'payment_status',
			'payment',
			
			'widget_facebook_status',
			'widget_facebook_id',
			'widget_facebook_position',
			'widget_twitter_status',
			'widget_twitter_id',
			'widget_twitter_user_name',
			'widget_twitter_position',
			'widget_twitter_limit',
			'widget_custom_status',
			'widget_custom_content',
			'widget_custom_position',
			
			'compressor_code_status'
		);
		
		foreach ($config_data as $conf) {
			$data[$conf] = false;
		}

		// Funkcja do usuwania katalogu
		function removeDir($path) { 
			$dir = new DirectoryIterator($path); 
			foreach ($dir as $fileinfo) { 
				if ($fileinfo->isFile() || $fileinfo->isLink()) { 
					unlink($fileinfo->getPathName()); 
				} elseif (!$fileinfo->isDot() && $fileinfo->isDir()) { 
					removeDir($fileinfo->getPathName()); 
				} 
			} 
			rmdir($path); 
		}
		
  		// globethm MUTLI STORE
  		
			if (isset($this->request->post['store_id'])) {
				$data['store_id'] = $this->request->post['store_id'];
			} else {
				$data['store_id'] = $this->config->get('d_store_id');
			}

			$data['stores'] = array();
			
			$this->load->model('setting/store');
			
			$results = $this->model_setting_store->getStores();
			
			$data['stores'][] = array(
				'name' => 'Default',
				'href' => '',
				'store_id' => 0
			);
				
			foreach ($results as $result) {
				$data['stores'][] = array(
					'name' => $result['name'],
					'href' => $result['url'],
					'store_id' => $result['store_id']
				);
			}		
			
			
			if(isset($_GET['store_id'])) {
				$data['store_id'] = $_GET['store_id'];
			} else {
				if (isset($_GET['submit'])) {
					$data['store_id'] = $data['store_id'];
				} else {
					if (isset($this->request->post['store_id'])) {
						$data['store_id'] = $this->request->post['store_id'];
					} else {
						$data['store_id'] = 0;
					}
				}
			}
			
			if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
				$data['array'] = array(
					'd_store_id' => $this->request->post['store_id']
				);
				$this->model_setting_setting->editSetting('d_id_store', $data['array']);	
			}
			
		// END MULTISTORE
		
		// Pobieranie informacji, która skórka jest włączona	
		$data['setting_skin'] = $this->model_setting_setting->getSetting('globethm_skin', $data['store_id']);
		
		// Nadanie nazw sklepom 
		if($data['store_id'] == 0) {
			$data['edit_skin_store'] = 'default';
		} else {
			$data['edit_skin_store'] = $data['store_id'];
		}
		
		// Aktywna skórka
		if(isset($data['setting_skin']['globethm_skin'])) {
			$data['active_skin'] = $data['setting_skin']['globethm_skin'];
		} else {
			$data['active_skin'] = 'default';
		}
		
		if(!file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin'].'')) {
			$data['active_skin'] = false;
		}
		
		// Tworzenie listy skórek
		if(file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/')) {
			$data['skins'] = array();
			$dir = opendir(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/');
			while(false !== ($file = readdir($dir))) {
				if(is_dir(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$file) && $file != '.' && $file != '..')  {
					$data['skins'][] = $file;
				}
			}
		}
		
		// Edycja skórki - sprawdzanie jaki szablon jest edytowany
		if(isset($data['setting_skin']['globethm_skin'])) {
			$data['active_skin_edit'] = $data['setting_skin']['globethm_skin'];
		} else {
			$data['active_skin_edit'] = 'default';
		}
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if(isset($_POST['button-edit']) || isset($_POST['button-delete'])){
				$data['active_skin_edit'] = $this->request->post['skin'];
			}
		}
		
		if(isset($this->request->post['save_skin']) && !isset($_POST['button-edit']) && !isset($_POST['button-delete'])) {
			$data['active_skin_edit'] = $this->request->post['save_skin'];
		}
		
		if(isset($_GET['skin_edit'])) {
			$data['active_skin_edit'] = $_GET['skin_edit'];
		}
			
		// Zmiana skórki
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if(isset($_POST['button-active'])){
				$save_globethm_skin = array(
					'globethm_skin' => $this->request->post['skin']
				);
				$this->model_setting_setting->editSetting('globethm_skin', $save_globethm_skin, $this->request->post['store_id']);	
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('module/globethm&submit=true', 'token=' . $this->session->data['token'], 'SSL'));
            }
		}
		
		// Dodawanie skórki
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if(isset($_POST['add-skin'])){
				if(is_writable(DIR_CATALOG . 'view/theme/globethm/skins/') && (is_writable(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/') || !file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'))) {
					// Sprawdzanie czy istnieje folder store_ 
					if(file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/') && filetype(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/') == 'dir') {
					} else {
						mkdir(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/', 0777);
					}
					
					// Dodawanie pliku z ustawieniami
					if($this->request->post['add-skin-name'] != '') {	
						if(!file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/')) {
							mkdir(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/', 0777);
							file_put_contents(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/settings.json', json_encode($config_data));
							mkdir(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/js/', 0777);
							file_put_contents(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/js/custom_code.js', ' ');
							mkdir(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/css/', 0777);
							file_put_contents(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/css/custom_code.css', ' ');
							$this->session->data['success'] = $this->language->get('text_success');
							$this->response->redirect($this->url->link('module/globethm&submit=true', 'token=' . $this->session->data['token'], 'SSL'));
						}
					}  
				}

				$this->session->data['error_warning'] = 'You need to set CHMOD 777 for all folder and subfolder in catalog/view/theme/globethm/skins!';
				$this->response->redirect($this->url->link('module/globethm&submit=true', 'token=' . $this->session->data['token'], 'SSL'));
		    }
		}
		
		// Zapisywanie skórki
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if(isset($_POST['button-save'])){
				if(is_writable(DIR_CATALOG . 'view/theme/globethm/skins') && is_writable(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store']) && is_writable(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'])) {
					// Sprawdzanie czy istnieje skórka
					if(file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/') && filetype(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/') == 'dir' && file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'')) {
						// Zapisywanie ustawien
						file_put_contents(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/settings.json', json_encode($this->request->post));  
						
						// Custom js
						file_put_contents(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/js/custom_code.js', $this->request->post['custom_code_js']);  
						
						// Custom css
						file_put_contents(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/css/custom_code.css', $this->request->post['custom_code_css']);  
						
						// Informacja o zapisaniu ustawien
						$this->session->data['success'] = $this->language->get('text_success');
						$this->response->redirect($this->url->link('module/globethm&submit=true&skin_edit=' . $data['active_skin_edit'] . '', 'token=' . $this->session->data['token'], 'SSL'));
					}
				}
				
				// Jezeli nie istnieje katalog skórki to pojawia się komunikat o błedzie
				$this->session->data['error_warning'] = 'You need to set CHMOD 777 for all folder and subfolder in catalog/view/theme/globethm/skins!';
				$this->response->redirect($this->url->link('module/globethm&submit=true', 'token=' . $this->session->data['token'], 'SSL'));
			}
		}
		
		// Usuwanie skórki
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if(isset($_POST['button-delete'])){
				if(is_writable(DIR_CATALOG . 'view/theme/globethm/skins')) {
					// Sprawdzanie czy istnieje skórka
					if(file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/') && filetype(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/') == 'dir' && file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'')) {
						// Sprawdzanie czy skórka jest ustawiona jako aktywna
						if($data['active_skin_edit'] != $data['active_skin']) {
							removeDir(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'');
							
							// Informacja o usunięciu skórki
							$this->session->data['success'] = $this->language->get('text_success');
							$this->response->redirect($this->url->link('module/globethm&submit=true', 'token=' . $this->session->data['token'], 'SSL'));
						}
					}
				} else {
					$this->session->data['error_warning'] = 'You need to set CHMOD 777 for all folder and subfolder in catalog/view/theme/globethm/skins!';
					$this->response->redirect($this->url->link('module/globethm&submit=true', 'token=' . $this->session->data['token'], 'SSL'));
				}
				
				// Jezeli nie usunięto szablonu to pojawia sie błąd
				$this->session->data['error_warning'] = $this->language->get('text_warning2');
				$this->response->redirect($this->url->link('module/globethm&submit=true', 'token=' . $this->session->data['token'], 'SSL'));
			}
		}
		
		// Pobieranie ustawień szablonu
		if(file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/settings.json')) {
			$template = json_decode(file_get_contents(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/settings.json'), true);
			if(isset($template)) {
				foreach ($template as $option => $value) { 
					if($option != 'store_id') {
						$data[$option] = $value;
					}
				}
			}
		}
				
		// Pobieranie ustawień szablon --> custom code js
		if(file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/js/custom_code.js')) {
			$data['custom_code_js'] = file_get_contents(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/js/custom_code.js');
		}
		
		// Pobieranie ustawień szablon --> custom code css
		if(file_exists(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/css/custom_code.css')) {
			$data['custom_code_css'] = file_get_contents(DIR_CATALOG . 'view/theme/globethm/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/css/custom_code.css');
		}
		
		$data['text_image_manager'] = 'Image manager';
		$data['token'] = $this->session->data['token'];		
		
		$text_strings = array('heading_title');
		
		foreach ($text_strings as $text) {
			$data[$text] = $this->language->get($text);
		}
		
		
		// Instalacja przykładowych danych
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {	
		     // Custom Module
		     if(isset($_POST['install_custom_module5'])){
		          $language_id = 2;
		          foreach($data['languages'] as $language) {
		          	if($language['language_id'] != 1) {
		          		$language_id = $language['language_id'];
		          	}
		          }
		          
		          $output = array();
		          $output["custom_module_module"] = array (
		            1 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;/div&gt;',
		              ),
		              'layout_id' => '1',
		              'position' => 'preface_fullwidth',
		              'status' => '1',
		              'sort_order' => '',
		            ),
		            2 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row customfooter-panels3&quot;&gt;
		               &lt;div class=&quot;col-sm-4&quot;&gt;
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;
		                         &lt;div class=&quot;content&quot;&gt;
		                              &lt;h3&gt;Welcome in our store&lt;/h3&gt;
		                              &lt;p&gt;Cras pharetra sapien sapien, et blandit nunc molestie ut. Ut malesuada lobortis elit, commodo.&lt;br&gt;&lt;br&gt;Curabitur sagittis tempus accumsan. Proin luctus placerat elit eget viverra. Suspendisse et risus sit amet ligula consequat semper eu sed odio.&lt;/p&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		               
		               &lt;div class=&quot;col-sm-4&quot;&gt;    
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;      
		                              &lt;div class=&quot;google-map&quot;&gt;               
		                                   &lt;a href=&quot;https://www.google.pl/maps/@49.7064649,20.422734,21z&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;catalog/view/theme/globethm/img/google-map5.png&quot; alt=&quot;Google map&quot;&gt;&lt;/a&gt;
		                              &lt;/div&gt;
		                              
		                              &lt;ul class=&quot;contact-details&quot;&gt;
		                                   &lt;li&gt;&lt;p&gt;Phone&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;155 658 9888&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;Email&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;contact@globethmtemplate.com&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;Address&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;Adress Downing Street 4,&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;5544-9699 Campville, England&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                              &lt;/ul&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		               
		               &lt;div class=&quot;col-sm-4&quot;&gt;       
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;   
		                         &lt;div class=&quot;heading&quot;&gt;               
		                              &lt;p&gt;&lt;span&gt;We are&lt;/span&gt; social&lt;/p&gt;
		                         &lt;/div&gt;
		                         
		                         &lt;div class=&quot;content&quot;&gt;
		                              &lt;p&gt;Cras non augue felis. Fusce non turpis massa. Class aptent taciti sociosqu ad litora torquent per onubia nostra, per inceptos himenaeos.&lt;/p&gt;
		                                   
		                              &lt;div class=&quot;social-icons&quot;&gt;                    
		                                   &lt;ul&gt;
		                                        &lt;li class=&quot;linkedin&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;LinkedIN&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;googleplus&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Google +r&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;twitter&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Twitter&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;facebook&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Facebook&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;youtube&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;YouTube&lt;/a&gt;&lt;/li&gt;
		                                   &lt;/ul&gt;
		                              &lt;/div&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		          &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row customfooter-panels3&quot;&gt;
		               &lt;div class=&quot;col-sm-4&quot;&gt;
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;
		                         &lt;div class=&quot;content&quot;&gt;
		                              &lt;h3&gt;Welcome in our store&lt;/h3&gt;
		                              &lt;p&gt;Cras pharetra sapien sapien, et blandit nunc molestie ut. Ut malesuada lobortis elit, commodo.&lt;br&gt;&lt;br&gt;Curabitur sagittis tempus accumsan. Proin luctus placerat elit eget viverra. Suspendisse et risus sit amet ligula consequat semper eu sed odio.&lt;/p&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		               
		               &lt;div class=&quot;col-sm-4&quot;&gt;    
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;      
		                              &lt;div class=&quot;google-map&quot;&gt;               
		                                   &lt;a href=&quot;https://www.google.pl/maps/@49.7064649,20.422734,21z&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;catalog/view/theme/globethm/img/google-map5.png&quot; alt=&quot;Google map&quot;&gt;&lt;/a&gt;
		                              &lt;/div&gt;
		                              
		                              &lt;ul class=&quot;contact-details&quot;&gt;
		                                   &lt;li&gt;&lt;p&gt;Phone&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;155 658 9888&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;Email&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;contact@globethmtemplate.com&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;Address&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;Adress Downing Street 4,&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;5544-9699 Campville, England&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                              &lt;/ul&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		               
		               &lt;div class=&quot;col-sm-4&quot;&gt;       
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;   
		                         &lt;div class=&quot;heading&quot;&gt;               
		                              &lt;p&gt;&lt;span&gt;We are&lt;/span&gt; social&lt;/p&gt;
		                         &lt;/div&gt;
		                         
		                         &lt;div class=&quot;content&quot;&gt;
		                              &lt;p&gt;Cras non augue felis. Fusce non turpis massa. Class aptent taciti sociosqu ad litora torquent per onubia nostra, per inceptos himenaeos.&lt;/p&gt;
		                                   
		                              &lt;div class=&quot;social-icons&quot;&gt;                    
		                                   &lt;ul&gt;
		                                        &lt;li class=&quot;linkedin&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;LinkedIN&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;googleplus&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Google +r&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;twitter&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Twitter&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;facebook&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Facebook&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;youtube&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;YouTube&lt;/a&gt;&lt;/li&gt;
		                                   &lt;/ul&gt;
		                              &lt;/div&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		          &lt;/div&gt;',
		              ),
		              'layout_id' => '99999',
		              'position' => 'customfooter_top',
		              'status' => '1',
		              'sort_order' => '',
		            ),
		            3 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
		                                                                                                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                                                                
		                                                                                
		                                                                                
		                                                                                
		                                                                                
		                                                                                                 &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
		                                                                                                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                                                                
		                                                                                
		                                                                                
		                                                                                
		                                                                                
		                                                                                                 &lt;/div&gt;',
		              ),
		              'layout_id' => '3',
		              'position' => 'column_left',
		              'status' => '1',
		              'sort_order' => '5',
		            ),
		            4 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                                                                                 &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                                                                                 &lt;/div&gt;',
		              ),
		              'layout_id' => '2',
		              'position' => 'column_left',
		              'status' => '1',
		              'sort_order' => '4',
		            ),
		          );
		          
		          $this->model_setting_setting->editSetting( "custom_module", $output );	
		          $this->session->data['success'] = $this->language->get('text_success');
		          $this->response->redirect($this->url->link('module/globethm', 'token=' . $this->session->data['token'], 'SSL'));
		     }
		     
		     // Custom Module
		     if(isset($_POST['install_custom_module4'])){
		          $language_id = 2;
		          foreach($data['languages'] as $language) {
		          	if($language['language_id'] != 1) {
		          		$language_id = $language['language_id'];
		          	}
		          }
		          
		          $output = array();
		          $output["custom_module_module"] = array (
		            1 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;/div&gt;',
		              ),
		              'layout_id' => '1',
		              'position' => 'preface_fullwidth',
		              'status' => '1',
		              'sort_order' => '',
		            ),
		            2 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row customfooter-panels2&quot;&gt;     &lt;div class=&quot;col-sm-4&quot;&gt;          &lt;div class=&quot;customfooter-panel&quot;&gt;               &lt;div class=&quot;heading&quot;&gt;                    &lt;p&gt;Welcome in our store&lt;/p&gt;
		                         &lt;/div&gt;
		                                        &lt;div class=&quot;content&quot;&gt;                    &lt;p&gt;Cras pharetra sapien sapien, et blandit nunc molestie ut. Ut malesuada lobortis elit, commodo.&lt;br&gt;&lt;br&gt;Curabitur sagittis tempus accumsan. Proin luctus placerat elit eget viverra. Suspendisse et risus sit amet ligula consequat semper eu sed odio.&lt;br&gt;&lt;br&gt;                              Commodo porttitor erat pharetra ac.&lt;/p&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		                    &lt;div class=&quot;col-sm-4&quot;&gt;                 &lt;div class=&quot;customfooter-panel&quot;&gt;                  &lt;div class=&quot;heading&quot;&gt;                                   &lt;p&gt;We are social&lt;/p&gt;
		                         &lt;/div&gt;
		                                        &lt;div class=&quot;content&quot;&gt;                    &lt;p&gt;Cras non augue felis. Fusce non turpis massa. Class aptent taciti sociosqu ad litora torquent per onubia nostra, per inceptos himenaeos.&lt;/p&gt;
		                                                       &lt;div class=&quot;social-icons&quot;&gt;                                             &lt;ul&gt;
		                                        &lt;li class=&quot;linkedin&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;LinkedIN&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;googleplus&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Google +r&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;twitter&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Twitter&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;facebook&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Facebook&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;youtube&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;YouTube&lt;/a&gt;&lt;/li&gt;
		                                   &lt;/ul&gt;
		                              &lt;/div&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		                    &lt;div class=&quot;col-sm-4&quot;&gt;              &lt;div class=&quot;customfooter-panel&quot;&gt;                     &lt;div class=&quot;content&quot;&gt;                    &lt;div class=&quot;google-map&quot;&gt;                                        &lt;a href=&quot;https://www.google.pl/maps/@49.7064649,20.422734,21z&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;catalog/view/theme/globethm/img/google-map4.png&quot; alt=&quot;Google map&quot;&gt;&lt;/a&gt;                    &lt;/div&gt;
		                                                  &lt;ul class=&quot;contact-details&quot;&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Phone&lt;/span&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;155 658 9888&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Email&lt;/span&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;contact@globethmtemplate.com&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Address&lt;/span&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;Adress Downing Street 4,&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;5544-9699 Campville, England&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                              &lt;/ul&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		          &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row customfooter-panels2&quot;&gt;     &lt;div class=&quot;col-sm-4&quot;&gt;          &lt;div class=&quot;customfooter-panel&quot;&gt;               &lt;div class=&quot;heading&quot;&gt;                    &lt;p&gt;Welcome in our store&lt;/p&gt;
		                         &lt;/div&gt;
		                                        &lt;div class=&quot;content&quot;&gt;                    &lt;p&gt;Cras pharetra sapien sapien, et blandit nunc molestie ut. Ut malesuada lobortis elit, commodo.&lt;br&gt;&lt;br&gt;Curabitur sagittis tempus accumsan. Proin luctus placerat elit eget viverra. Suspendisse et risus sit amet ligula consequat semper eu sed odio.&lt;br&gt;&lt;br&gt;                              Commodo porttitor erat pharetra ac.&lt;/p&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		                    &lt;div class=&quot;col-sm-4&quot;&gt;                 &lt;div class=&quot;customfooter-panel&quot;&gt;                  &lt;div class=&quot;heading&quot;&gt;                                   &lt;p&gt;We are social&lt;/p&gt;
		                         &lt;/div&gt;
		                                        &lt;div class=&quot;content&quot;&gt;                    &lt;p&gt;Cras non augue felis. Fusce non turpis massa. Class aptent taciti sociosqu ad litora torquent per onubia nostra, per inceptos himenaeos.&lt;/p&gt;
		                                                       &lt;div class=&quot;social-icons&quot;&gt;                                             &lt;ul&gt;
		                                        &lt;li class=&quot;linkedin&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;LinkedIN&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;googleplus&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Google +r&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;twitter&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Twitter&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;facebook&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Facebook&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;youtube&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;YouTube&lt;/a&gt;&lt;/li&gt;
		                                   &lt;/ul&gt;
		                              &lt;/div&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		                    &lt;div class=&quot;col-sm-4&quot;&gt;              &lt;div class=&quot;customfooter-panel&quot;&gt;                     &lt;div class=&quot;content&quot;&gt;                    &lt;div class=&quot;google-map&quot;&gt;                                        &lt;a href=&quot;https://www.google.pl/maps/@49.7064649,20.422734,21z&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;catalog/view/theme/globethm/img/google-map4.png&quot; alt=&quot;Google map&quot;&gt;&lt;/a&gt;                    &lt;/div&gt;
		                                                  &lt;ul class=&quot;contact-details&quot;&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Phone&lt;/span&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;155 658 9888&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Email&lt;/span&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;contact@globethmtemplate.com&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Address&lt;/span&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;Adress Downing Street 4,&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;5544-9699 Campville, England&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                              &lt;/ul&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		          &lt;/div&gt;',
		              ),
		              'layout_id' => '99999',
		              'position' => 'customfooter_top',
		              'status' => '1',
		              'sort_order' => '',
		            ),
		            3 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
		                                                                               &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                                              
		                                                              
		                                                              
		                                                              
		                                                              
		                                                                               &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
		                                                                               &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                                              
		                                                              
		                                                              
		                                                              
		                                                              
		                                                                               &lt;/div&gt;',
		              ),
		              'layout_id' => '3',
		              'position' => 'column_left',
		              'status' => '1',
		              'sort_order' => '5',
		            ),
		            4 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                                                               &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                                                               &lt;/div&gt;',
		              ),
		              'layout_id' => '2',
		              'position' => 'column_left',
		              'status' => '1',
		              'sort_order' => '4',
		            ),
		          );
		          
		          $this->model_setting_setting->editSetting( "custom_module", $output );	
		          $this->session->data['success'] = $this->language->get('text_success');
		          $this->response->redirect($this->url->link('module/globethm', 'token=' . $this->session->data['token'], 'SSL'));
		     }
		          
		     // Custom Module
		     if(isset($_POST['install_custom_module3'])){
		          $language_id = 2;
		          foreach($data['languages'] as $language) {
		          	if($language['language_id'] != 1) {
		          		$language_id = $language['language_id'];
		          	}
		          }
		          
		          $output = array();
		          $output["custom_module_module"] = array (
		            1 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;/div&gt;',
		              ),
		              'layout_id' => '1',
		              'position' => 'preface_fullwidth',
		              'status' => '1',
		              'sort_order' => '',
		            ),
		            2 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row customfooter-panels2&quot;&gt;     &lt;div class=&quot;col-sm-4&quot;&gt;          &lt;div class=&quot;customfooter-panel&quot;&gt;               &lt;div class=&quot;heading&quot;&gt;                    &lt;p&gt;Welcome in our store&lt;/p&gt;               &lt;/div&gt;                              &lt;div class=&quot;content&quot;&gt;                    &lt;p&gt;Cras pharetra sapien sapien, et blandit nunc molestie ut. Ut malesuada lobortis elit, commodo.&lt;br&gt;&lt;br&gt;Curabitur sagittis tempus accumsan. Proin luctus placerat elit eget viverra. Suspendisse et risus sit amet ligula consequat semper eu sed odio.&lt;br&gt;&lt;br&gt;                              Commodo porttitor erat pharetra ac.&lt;/p&gt;               &lt;/div&gt;          &lt;/div&gt;     &lt;/div&gt;          &lt;div class=&quot;col-sm-4&quot;&gt;                 &lt;div class=&quot;customfooter-panel&quot;&gt;                  &lt;div class=&quot;heading&quot;&gt;                                   &lt;p&gt;We are social&lt;/p&gt;               &lt;/div&gt;                              &lt;div class=&quot;content&quot;&gt;                    &lt;p&gt;Cras non augue felis. Fusce non turpis massa. Class aptent taciti sociosqu ad litora torquent per onubia nostra, per inceptos himenaeos.&lt;/p&gt;                                             &lt;div class=&quot;social-icons&quot;&gt;                                             &lt;ul&gt;                              &lt;li class=&quot;linkedin&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;LinkedIN&lt;/a&gt;&lt;/li&gt;                              &lt;li class=&quot;googleplus&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Google +r&lt;/a&gt;&lt;/li&gt;                              &lt;li class=&quot;twitter&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Twitter&lt;/a&gt;&lt;/li&gt;                              &lt;li class=&quot;facebook&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Facebook&lt;/a&gt;&lt;/li&gt;                              &lt;li class=&quot;youtube&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;YouTube&lt;/a&gt;&lt;/li&gt;                         &lt;/ul&gt;                    &lt;/div&gt;               &lt;/div&gt;          &lt;/div&gt;     &lt;/div&gt;          &lt;div class=&quot;col-sm-4&quot;&gt;              &lt;div class=&quot;customfooter-panel&quot;&gt;                     &lt;div class=&quot;content&quot;&gt;                    &lt;div class=&quot;google-map&quot;&gt;                                        &lt;a href=&quot;https://www.google.pl/maps/@49.7064649,20.422734,21z&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;catalog/view/theme/globethm/img/google-map3.png&quot; alt=&quot;Google map&quot;&gt;&lt;/a&gt;                    &lt;/div&gt;                                        &lt;ul class=&quot;contact-details&quot;&gt;                         &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Phone&lt;/span&gt;&lt;/p&gt;                              &lt;ul&gt;                                   &lt;li&gt;155 658 9888&lt;/li&gt;                              &lt;/ul&gt;                         &lt;/li&gt;                         &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Email&lt;/span&gt;&lt;/p&gt;                              &lt;ul&gt;                                   &lt;li&gt;contact@globethmtemplate.com&lt;/li&gt;                              &lt;/ul&gt;                         &lt;/li&gt;                         &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Address&lt;/span&gt;&lt;/p&gt;                              &lt;ul&gt;                                   &lt;li&gt;Adress Downing Street 4,&lt;/li&gt;                              &lt;/ul&gt;                         &lt;/li&gt;                         &lt;li&gt;&lt;p&gt;&lt;/p&gt;                              &lt;ul&gt;                                   &lt;li&gt;5544-9699 Campville, England&lt;/li&gt;                              &lt;/ul&gt;                         &lt;/li&gt;                    &lt;/ul&gt;               &lt;/div&gt;          &lt;/div&gt;     &lt;/div&gt;&lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row customfooter-panels2&quot;&gt;     &lt;div class=&quot;col-sm-4&quot;&gt;          &lt;div class=&quot;customfooter-panel&quot;&gt;               &lt;div class=&quot;heading&quot;&gt;                    &lt;p&gt;Welcome in our store&lt;/p&gt;               &lt;/div&gt;                              &lt;div class=&quot;content&quot;&gt;                    &lt;p&gt;Cras pharetra sapien sapien, et blandit nunc molestie ut. Ut malesuada lobortis elit, commodo.&lt;br&gt;&lt;br&gt;Curabitur sagittis tempus accumsan. Proin luctus placerat elit eget viverra. Suspendisse et risus sit amet ligula consequat semper eu sed odio.&lt;br&gt;&lt;br&gt;                              Commodo porttitor erat pharetra ac.&lt;/p&gt;               &lt;/div&gt;          &lt;/div&gt;     &lt;/div&gt;          &lt;div class=&quot;col-sm-4&quot;&gt;                 &lt;div class=&quot;customfooter-panel&quot;&gt;                  &lt;div class=&quot;heading&quot;&gt;                                   &lt;p&gt;We are social&lt;/p&gt;               &lt;/div&gt;                              &lt;div class=&quot;content&quot;&gt;                    &lt;p&gt;Cras non augue felis. Fusce non turpis massa. Class aptent taciti sociosqu ad litora torquent per onubia nostra, per inceptos himenaeos.&lt;/p&gt;                                             &lt;div class=&quot;social-icons&quot;&gt;                                             &lt;ul&gt;                              &lt;li class=&quot;linkedin&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;LinkedIN&lt;/a&gt;&lt;/li&gt;                              &lt;li class=&quot;googleplus&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Google +r&lt;/a&gt;&lt;/li&gt;                              &lt;li class=&quot;twitter&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Twitter&lt;/a&gt;&lt;/li&gt;                              &lt;li class=&quot;facebook&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Facebook&lt;/a&gt;&lt;/li&gt;                              &lt;li class=&quot;youtube&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;YouTube&lt;/a&gt;&lt;/li&gt;                         &lt;/ul&gt;                    &lt;/div&gt;               &lt;/div&gt;          &lt;/div&gt;     &lt;/div&gt;          &lt;div class=&quot;col-sm-4&quot;&gt;              &lt;div class=&quot;customfooter-panel&quot;&gt;                     &lt;div class=&quot;content&quot;&gt;                    &lt;div class=&quot;google-map&quot;&gt;                                        &lt;a href=&quot;https://www.google.pl/maps/@49.7064649,20.422734,21z&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;catalog/view/theme/globethm/img/google-map3.png&quot; alt=&quot;Google map&quot;&gt;&lt;/a&gt;                    &lt;/div&gt;                                        &lt;ul class=&quot;contact-details&quot;&gt;                         &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Phone&lt;/span&gt;&lt;/p&gt;                              &lt;ul&gt;                                   &lt;li&gt;155 658 9888&lt;/li&gt;                              &lt;/ul&gt;                         &lt;/li&gt;                         &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Email&lt;/span&gt;&lt;/p&gt;                              &lt;ul&gt;                                   &lt;li&gt;contact@globethmtemplate.com&lt;/li&gt;                              &lt;/ul&gt;                         &lt;/li&gt;                         &lt;li&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Address&lt;/span&gt;&lt;/p&gt;                              &lt;ul&gt;                                   &lt;li&gt;Adress Downing Street 4,&lt;/li&gt;                              &lt;/ul&gt;                         &lt;/li&gt;                         &lt;li&gt;&lt;p&gt;&lt;/p&gt;                              &lt;ul&gt;                                   &lt;li&gt;5544-9699 Campville, England&lt;/li&gt;                              &lt;/ul&gt;                         &lt;/li&gt;                    &lt;/ul&gt;               &lt;/div&gt;          &lt;/div&gt;     &lt;/div&gt;&lt;/div&gt;',
		              ),
		              'layout_id' => '99999',
		              'position' => 'customfooter_top',
		              'status' => '1',
		              'sort_order' => '',
		            ),
		            3 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
		                                                             &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                            
		                                            
		                                            
		                                            
		                                            
		                                                             &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
		                                                             &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                            
		                                            
		                                            
		                                            
		                                            
		                                                             &lt;/div&gt;',
		              ),
		              'layout_id' => '3',
		              'position' => 'column_left',
		              'status' => '1',
		              'sort_order' => '5',
		            ),
		            4 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                                             &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                                             &lt;/div&gt;',
		              ),
		              'layout_id' => '2',
		              'position' => 'column_left',
		              'status' => '1',
		              'sort_order' => '4',
		            ),
		          );
		          
		          $this->model_setting_setting->editSetting( "custom_module", $output );	
		          $this->session->data['success'] = $this->language->get('text_success');
		          $this->response->redirect($this->url->link('module/globethm', 'token=' . $this->session->data['token'], 'SSL'));
		     }
		     
		     // Custom Module
		     if(isset($_POST['install_custom_module2'])){
		          $language_id = 2;
		          foreach($data['languages'] as $language) {
		          	if($language['language_id'] != 1) {
		          		$language_id = $language['language_id'];
		          	}
		          }
		          
		          $output = array();
		          $output["custom_module_module"] = array (
		            1 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;/div&gt;',
		              ),
		              'layout_id' => '1',
		              'position' => 'preface_fullwidth',
		              'status' => '1',
		              'sort_order' => '',
		            ),
		            2 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row customfooter-panels2&quot;&gt;
		               &lt;div class=&quot;col-sm-4&quot;&gt;
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;
		                         &lt;div class=&quot;heading&quot;&gt;
		                              &lt;p&gt;Welcome in our store&lt;/p&gt;
		                         &lt;/div&gt;
		                         
		                         &lt;div class=&quot;content&quot;&gt;
		                              &lt;p&gt;Cras pharetra sapien sapien, et blandit nunc molestie ut. Ut malesuada lobortis elit, commodo.&lt;br&gt;&lt;br&gt;Curabitur sagittis tempus accumsan. Proin luctus placerat elit eget viverra. Suspendisse et risus sit amet ligula consequat semper eu sed odio.&lt;br&gt;&lt;br&gt;                              Commodo porttitor erat pharetra ac.&lt;/p&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		               
		               &lt;div class=&quot;col-sm-4&quot;&gt;       
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;   
		                         &lt;div class=&quot;heading&quot;&gt;               
		                              &lt;p&gt;We are social&lt;/p&gt;
		                         &lt;/div&gt;
		                         
		                         &lt;div class=&quot;content&quot;&gt;
		                              &lt;p&gt;Cras non augue felis. Fusce non turpis massa. Class aptent taciti sociosqu ad litora torquent per onubia nostra, per inceptos himenaeos.&lt;/p&gt;
		                                   
		                              &lt;div class=&quot;social-icons&quot;&gt;                    
		                                   &lt;ul&gt;
		                                        &lt;li class=&quot;linkedin&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;LinkedIN&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;googleplus&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Google +r&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;twitter&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Twitter&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;facebook&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Facebook&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;youtube&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;YouTube&lt;/a&gt;&lt;/li&gt;
		                                   &lt;/ul&gt;
		                              &lt;/div&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		               
		               &lt;div class=&quot;col-sm-4&quot;&gt;    
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;      
		                         &lt;div class=&quot;heading&quot;&gt;               
		                              &lt;p&gt;Contact detail&lt;/p&gt;
		                         &lt;/div&gt;
		                         
		                         &lt;div class=&quot;content&quot;&gt;
		                              &lt;div class=&quot;google-map&quot;&gt;               
		                                   &lt;a href=&quot;https://www.google.pl/maps/@49.7064649,20.422734,21z&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;catalog/view/theme/globethm/img/google-map2.png&quot; alt=&quot;Google map&quot;&gt;&lt;/a&gt;
		                              &lt;/div&gt;
		                              
		                              &lt;ul class=&quot;contact-details&quot;&gt;
		                                   &lt;li&gt;&lt;p&gt;Phone&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;155 658 9888&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;Email&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;contact@globethmtemplate.com&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;Address&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;Adress Downing Street 4,&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;5544-9699 Campville, England&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                              &lt;/ul&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		          &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row customfooter-panels2&quot;&gt;
		               &lt;div class=&quot;col-sm-4&quot;&gt;
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;
		                         &lt;div class=&quot;heading&quot;&gt;
		                              &lt;p&gt;Welcome in our store&lt;/p&gt;
		                         &lt;/div&gt;
		                         
		                         &lt;div class=&quot;content&quot;&gt;
		                              &lt;p&gt;Cras pharetra sapien sapien, et blandit nunc molestie ut. Ut malesuada lobortis elit, commodo.&lt;br&gt;&lt;br&gt;Curabitur sagittis tempus accumsan. Proin luctus placerat elit eget viverra. Suspendisse et risus sit amet ligula consequat semper eu sed odio.&lt;br&gt;&lt;br&gt;                              Commodo porttitor erat pharetra ac.&lt;/p&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		               
		               &lt;div class=&quot;col-sm-4&quot;&gt;       
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;   
		                         &lt;div class=&quot;heading&quot;&gt;               
		                              &lt;p&gt;We are social&lt;/p&gt;
		                         &lt;/div&gt;
		                         
		                         &lt;div class=&quot;content&quot;&gt;
		                              &lt;p&gt;Cras non augue felis. Fusce non turpis massa. Class aptent taciti sociosqu ad litora torquent per onubia nostra, per inceptos himenaeos.&lt;/p&gt;
		                                   
		                              &lt;div class=&quot;social-icons&quot;&gt;                    
		                                   &lt;ul&gt;
		                                        &lt;li class=&quot;linkedin&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;LinkedIN&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;googleplus&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Google +r&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;twitter&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Twitter&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;facebook&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Facebook&lt;/a&gt;&lt;/li&gt;
		                                        &lt;li class=&quot;youtube&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;YouTube&lt;/a&gt;&lt;/li&gt;
		                                   &lt;/ul&gt;
		                              &lt;/div&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		               
		               &lt;div class=&quot;col-sm-4&quot;&gt;    
		                    &lt;div class=&quot;customfooter-panel&quot;&gt;      
		                         &lt;div class=&quot;heading&quot;&gt;               
		                              &lt;p&gt;Contact detail&lt;/p&gt;
		                         &lt;/div&gt;
		                         
		                         &lt;div class=&quot;content&quot;&gt;
		                              &lt;div class=&quot;google-map&quot;&gt;               
		                                   &lt;a href=&quot;https://www.google.pl/maps/@49.7064649,20.422734,21z&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;catalog/view/theme/globethm/img/google-map2.png&quot; alt=&quot;Google map&quot;&gt;&lt;/a&gt;
		                              &lt;/div&gt;
		                              
		                              &lt;ul class=&quot;contact-details&quot;&gt;
		                                   &lt;li&gt;&lt;p&gt;Phone&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;155 658 9888&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;Email&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;contact@globethmtemplate.com&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;Address&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;Adress Downing Street 4,&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                                   &lt;li&gt;&lt;p&gt;&lt;/p&gt;
		                                        &lt;ul&gt;
		                                             &lt;li&gt;5544-9699 Campville, England&lt;/li&gt;
		                                        &lt;/ul&gt;
		                                   &lt;/li&gt;
		                              &lt;/ul&gt;
		                         &lt;/div&gt;
		                    &lt;/div&gt;
		               &lt;/div&gt;
		          &lt;/div&gt;',
		              ),
		              'layout_id' => '99999',
		              'position' => 'customfooter_top',
		              'status' => '1',
		              'sort_order' => '',
		            ),
		            3 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
		                                           &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                          
		                          
		                          
		                          
		                          
		                                           &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
		                                           &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                          
		                          
		                          
		                          
		                          
		                                           &lt;/div&gt;',
		              ),
		              'layout_id' => '3',
		              'position' => 'column_left',
		              'status' => '1',
		              'sort_order' => '5',
		            ),
		            4 => 
		            array (
		              'type' => '2',
		              'block_heading' => 
		              array (
		                1 => '',
		                $language_id => '',
		              ),
		              'block_content' => 
		              array (
		                1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		                $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
		              ),
		              'html' => 
		              array (
		                1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                           &lt;/div&gt;',
		                $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
		                                           &lt;/div&gt;',
		              ),
		              'layout_id' => '2',
		              'position' => 'column_left',
		              'status' => '1',
		              'sort_order' => '4',
		            ),
		          );
		          
		          $this->model_setting_setting->editSetting( "custom_module", $output );	
		          $this->session->data['success'] = $this->language->get('text_success');
		          $this->response->redirect($this->url->link('module/globethm', 'token=' . $this->session->data['token'], 'SSL'));
		     }
		     
			// Custom Module
			if(isset($_POST['install_custom_module'])){
			     $language_id = 2;
			     foreach($data['languages'] as $language) {
			     	if($language['language_id'] != 1) {
			     		$language_id = $language['language_id'];
			     	}
			     }
			     
				$output = array();
				$output["custom_module_module"] = array (
				  1 => 
				  array (
				    'type' => '2',
				    'block_heading' => 
				    array (
				      1 => '',
				      $language_id => '',
				    ),
				    'block_content' => 
				    array (
				      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
				      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
				    ),
				    'html' => 
				    array (
				      1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;/div&gt;',
				      $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;                 &lt;/div&gt;',
				    ),
				    'layout_id' => '1',
				    'position' => 'preface_fullwidth',
				    'status' => '1',
				    'sort_order' => '',
				  ),
				  2 => 
				  array (
				    'type' => '2',
				    'block_heading' => 
				    array (
				      1 => '',
				      $language_id => '',
				    ),
				    'block_content' => 
				    array (
				      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
				      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
				    ),
				    'html' => 
				    array (
				      1 => '&lt;div class=&quot;row customfooter-panels&quot;&gt;     &lt;div class=&quot;col-sm-4&quot;&gt;          &lt;div class=&quot;heading&quot;&gt;               &lt;img src=&quot;catalog/view/theme/globethm/img/welcome.png&quot; alt=&quot;Welcome in our store&quot;&gt;               &lt;p&gt;                    &lt;span&gt;Welcome in&lt;/span&gt;                    our store               &lt;/p&gt;          &lt;/div&gt;                    &lt;div class=&quot;content&quot;&gt;&lt;div class=&quot;overflow-content&quot;&gt;               &lt;p&gt;Cras pharetra sapien sapien, et blandit nunc molestie ut. Ut malesuada lobortis elit, commodo.&lt;br&gt;&lt;br&gt;                              Curabitur sagittis tempus accumsan. Proin luctus placerat elit eget viverra. Suspendisse et risus sit amet ligula consequat semper eu sed odio.&lt;br&gt;&lt;br&gt;                              Commodo porttitor erat pharetra ac.&lt;/p&gt;          &lt;/div&gt;&lt;/div&gt;     &lt;/div&gt;          &lt;div class=&quot;col-sm-4&quot;&gt;          &lt;div class=&quot;heading&quot;&gt;               &lt;img src=&quot;catalog/view/theme/globethm/img/we-are.png&quot; alt=&quot;We are online&quot;&gt;               &lt;p&gt;                    &lt;span&gt;We are&lt;/span&gt;                    online               &lt;/p&gt;          &lt;/div&gt;                    &lt;div class=&quot;content&quot;&gt;&lt;div class=&quot;overflow-content&quot;&gt;               &lt;p&gt;Cras non augue felis. Fusce non turpis massa. Class aptent taciti sociosqu ad litora torquent per onubia nostra, per inceptos himenaeos.&lt;/p&gt;               &lt;div class=&quot;social-icons&quot;&gt;                    &lt;ul&gt;                         &lt;li class=&quot;linkedin&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;LinkedIN&lt;/a&gt;&lt;/li&gt;                         &lt;li class=&quot;googleplus&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Google +r&lt;/a&gt;&lt;/li&gt;                         &lt;li class=&quot;twitter&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Twitter&lt;/a&gt;&lt;/li&gt;                         &lt;li class=&quot;facebook&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Facebook&lt;/a&gt;&lt;/li&gt;                         &lt;li class=&quot;youtube&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;YouTube&lt;/a&gt;&lt;/li&gt;                    &lt;/ul&gt;               &lt;/div&gt;          &lt;/div&gt;&lt;/div&gt;     &lt;/div&gt;          &lt;div class=&quot;col-sm-4&quot;&gt;          &lt;div class=&quot;heading&quot;&gt;               &lt;img src=&quot;catalog/view/theme/globethm/img/contact.png&quot; alt=&quot;Contact details&quot;&gt;               &lt;p&gt;                    &lt;span&gt;Contact&lt;/span&gt;                    details               &lt;/p&gt;          &lt;/div&gt;                    &lt;div class=&quot;google-map&quot;&gt;               &lt;a href=&quot;https://www.google.pl/maps/@49.7064649,20.422734,21z&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;catalog/view/theme/globethm/img/google-map.png&quot; alt=&quot;Google map&quot;&gt;&lt;/a&gt;          &lt;/div&gt;                    &lt;ul class=&quot;contact-details&quot;&gt;               &lt;li&gt;                    &lt;p&gt;Phone&lt;/p&gt;                    &lt;ul&gt;                         &lt;li&gt;155 658 9888&lt;/li&gt;                    &lt;/ul&gt;               &lt;/li&gt;               &lt;li&gt;                    &lt;p&gt;Email&lt;/p&gt;                    &lt;ul&gt;                         &lt;li&gt;contact@globethmtemplate.com&lt;/li&gt;                    &lt;/ul&gt;               &lt;/li&gt;               &lt;li&gt;                    &lt;p&gt;Address&lt;/p&gt;                    &lt;ul&gt;                         &lt;li&gt;Adress Downing Street 4,&lt;/li&gt;                         &lt;li&gt;5544-9699 Campville, England&lt;/li&gt;                    &lt;/ul&gt;               &lt;/li&gt;          &lt;/ul&gt;     &lt;/div&gt;&lt;/div&gt;',
				      $language_id => '&lt;div class=&quot;row customfooter-panels&quot;&gt;     &lt;div class=&quot;col-sm-4&quot;&gt;          &lt;div class=&quot;heading&quot;&gt;               &lt;img src=&quot;catalog/view/theme/globethm/img/welcome.png&quot; alt=&quot;Welcome in our store&quot;&gt;               &lt;p&gt;                    &lt;span&gt;Welcome in&lt;/span&gt;                    our store               &lt;/p&gt;          &lt;/div&gt;                    &lt;div class=&quot;content&quot;&gt;&lt;div class=&quot;overflow-content&quot;&gt;               &lt;p&gt;Cras pharetra sapien sapien, et blandit nunc molestie ut. Ut malesuada lobortis elit, commodo.&lt;br&gt;&lt;br&gt;                              Curabitur sagittis tempus accumsan. Proin luctus placerat elit eget viverra. Suspendisse et risus sit amet ligula consequat semper eu sed odio.&lt;br&gt;&lt;br&gt;                              Commodo porttitor erat pharetra ac.&lt;/p&gt;          &lt;/div&gt;&lt;/div&gt;     &lt;/div&gt;          &lt;div class=&quot;col-sm-4&quot;&gt;          &lt;div class=&quot;heading&quot;&gt;               &lt;img src=&quot;catalog/view/theme/globethm/img/we-are.png&quot; alt=&quot;We are online&quot;&gt;               &lt;p&gt;                    &lt;span&gt;We are&lt;/span&gt;                    online               &lt;/p&gt;          &lt;/div&gt;                    &lt;div class=&quot;content&quot;&gt;&lt;div class=&quot;overflow-content&quot;&gt;               &lt;p&gt;Cras non augue felis. Fusce non turpis massa. Class aptent taciti sociosqu ad litora torquent per onubia nostra, per inceptos himenaeos.&lt;/p&gt;               &lt;div class=&quot;social-icons&quot;&gt;                    &lt;ul&gt;                         &lt;li class=&quot;linkedin&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;LinkedIN&lt;/a&gt;&lt;/li&gt;                         &lt;li class=&quot;googleplus&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Google +r&lt;/a&gt;&lt;/li&gt;                         &lt;li class=&quot;twitter&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Twitter&lt;/a&gt;&lt;/li&gt;                         &lt;li class=&quot;facebook&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;Facebook&lt;/a&gt;&lt;/li&gt;                         &lt;li class=&quot;youtube&quot;&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;YouTube&lt;/a&gt;&lt;/li&gt;                    &lt;/ul&gt;               &lt;/div&gt;          &lt;/div&gt;&lt;/div&gt;     &lt;/div&gt;          &lt;div class=&quot;col-sm-4&quot;&gt;          &lt;div class=&quot;heading&quot;&gt;               &lt;img src=&quot;catalog/view/theme/globethm/img/contact.png&quot; alt=&quot;Contact details&quot;&gt;               &lt;p&gt;                    &lt;span&gt;Contact&lt;/span&gt;                    details               &lt;/p&gt;          &lt;/div&gt;                    &lt;div class=&quot;google-map&quot;&gt;               &lt;a href=&quot;https://www.google.pl/maps/@49.7064649,20.422734,21z&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;catalog/view/theme/globethm/img/google-map.png&quot; alt=&quot;Google map&quot;&gt;&lt;/a&gt;          &lt;/div&gt;                    &lt;ul class=&quot;contact-details&quot;&gt;               &lt;li&gt;                    &lt;p&gt;Phone&lt;/p&gt;                    &lt;ul&gt;                         &lt;li&gt;155 658 9888&lt;/li&gt;                    &lt;/ul&gt;               &lt;/li&gt;               &lt;li&gt;                    &lt;p&gt;Email&lt;/p&gt;                    &lt;ul&gt;                         &lt;li&gt;contact@globethmtemplate.com&lt;/li&gt;                    &lt;/ul&gt;               &lt;/li&gt;               &lt;li&gt;                    &lt;p&gt;Address&lt;/p&gt;                    &lt;ul&gt;                         &lt;li&gt;Adress Downing Street 4,&lt;/li&gt;                         &lt;li&gt;5544-9699 Campville, England&lt;/li&gt;                    &lt;/ul&gt;               &lt;/li&gt;          &lt;/ul&gt;     &lt;/div&gt;&lt;/div&gt;',
				    ),
				    'layout_id' => '99999',
				    'position' => 'customfooter_top',
				    'status' => '1',
				    'sort_order' => '',
				  ),
				  3 => 
				  array (
				    'type' => '2',
				    'block_heading' => 
				    array (
				      1 => '',
				      $language_id => '',
				    ),
				    'block_content' => 
				    array (
				      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
				      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
				    ),
				    'html' => 
				    array (
				      1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
				                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
				
				
				
				
				
				                 &lt;/div&gt;',
				      $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
				                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
				
				
				
				
				
				                 &lt;/div&gt;',
				    ),
				    'layout_id' => '3',
				    'position' => 'column_left',
				    'status' => '1',
				    'sort_order' => '5',
				  ),
				  4 => 
				  array (
				    'type' => '2',
				    'block_heading' => 
				    array (
				      1 => '',
				      $language_id => '',
				    ),
				    'block_content' => 
				    array (
				      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
				      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
				    ),
				    'html' => 
				    array (
				      1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
				                 &lt;/div&gt;',
				      $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;                 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
				                 &lt;/div&gt;',
				    ),
				    'layout_id' => '2',
				    'position' => 'column_left',
				    'status' => '1',
				    'sort_order' => '4',
				  ),
				); 
				
				$this->model_setting_setting->editSetting( "custom_module", $output );	
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('module/globethm', 'token=' . $this->session->data['token'], 'SSL'));
			}
			
			// Camera slider
			if(isset($_POST['install_camera_slider'])){
				$output = array();
				$output["camera_slider_module"] = array (
				  0 => 
				  array (
				    'slider_id' => '1',
				    'layout_id' => '1',
				    'position' => 'slideshow',
				    'sort_order' => '',
				    'status' => '1',
				  ),
				); 
				$this->model_setting_setting->editSetting( "camera_slider", $output );	
				
				include '../globethm_spl/globethm/camera_slider_query.php'; 
				
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('module/globethm', 'token=' . $this->session->data['token'], 'SSL'));
			}
			
			// Megamenu
			if(isset($_POST['install_megamenu'])){
				$output = array();
				$output["megamenu_module"] = array (
				  0 => 
				  array (
				    'module_id' => 0,
				    'layout_id' => '99999',
				    'position' => 'menu',
				    'status' => '1',
				    'display_on_mobile' => '0',
				    'sort_order' => 0,
				    'orientation' => '0',
				    'search_bar' => 0,
				    'navigation_text' => 
				    array (
				      1 => '',
				    ),
				    'home_text' => 
				    array (
				      1 => '',
				    ),
				    'full_width' => '0',
				    'home_item' => 'icon',
				    'animation' => 'shift-up',
				    'animation_time' => 150,
				    'status_cache' => 0,
				    'cache_time' => 1,
				  ),
				  1 => 
				  array (
				    'module_id' => '1',
				    'layout_id' => '99999',
				    'position' => 'column_left',
				    'status' => '1',
				    'display_on_mobile' => '0',
				    'sort_order' => 0,
				    'orientation' => '1',
				    'search_bar' => 0,
				    'navigation_text' => 
				    array (
				      1 => 'Categories',
				      1234567 => '',
				    ),
				    'home_text' => 
				    array (
				      1 => '',
				      1234567 => '',
				    ),
				    'full_width' => '0',
				    'home_item' => 'disabled',
				    'animation' => 'shift-left',
				    'animation_time' => 150,
				    'status_cache' => 0,
				    'cache_time' => 1,
				  ),
				);
				 
				$this->model_setting_setting->editSetting( "megamenu", $output );	

				include '../globethm_spl/globethm/megamenu_query.php'; 
				
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('module/globethm', 'token=' . $this->session->data['token'], 'SSL'));
			}
		}
		
		//This creates an error message. The error['warning'] variable is set by the call to function validate() in this controller (below)
		if (isset($this->session->data['error_warning'])) {
			$data['error_warning'] = $this->session->data['error_warning'];
			unset($this->session->data['error_warning']);
 		} elseif(isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
        if (isset($this->session->data['success'])) {
        	$data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
			$data['success'] = '';
        }

		$data['action'] = $this->url->link('module/globethm', 'token=' . $this->session->data['token'], 'SSL');
		$data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');
		
		$data['breadcrumbs'] = array();
		
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);
		
		$data['breadcrumbs'][] = array(
			'text' => 'Modules',
			'href' => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL')
		);
				
		$data['breadcrumbs'][] = array(
			'text' => 'Theme Options',
			'href' => $this->url->link('module/globethm', 'token=' . $this->session->data['token'], 'SSL')
		);
				
		// No image
		$this->load->model('tool/image');
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
				
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
				
		$this->response->setOutput($this->load->view('module/globethm.tpl', $data));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'module/globethm')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (!$this->error) {
			return TRUE;
		} else {
			return FALSE;
		}	
	}
}
?>