<?php echo $header; 
$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); 
include('catalog/view/theme/' . $config->get($config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>

<div style="padding-bottom: 10px"><?php echo $description; ?></div>

<?php include('catalog/view/theme/' . $config->get($config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
<?php echo $footer; ?>