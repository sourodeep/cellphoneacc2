<?php echo $header; 
$theme_options = $this->registry->get('theme_options');
$config = $this->registry->get('config'); 
include('catalog/view/theme/'.$config->get('config_template').'/template/new_elements/wrapper_top.tpl'); ?>

<?php echo $description; ?>

<?php include('catalog/view/theme/'.$config->get('config_template').'/template/new_elements/wrapper_bottom.tpl'); ?>
<?php echo $footer; ?>