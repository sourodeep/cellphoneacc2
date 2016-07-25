<?php

$changes = 0;
$writes = 0;

require('ugrsr.class.php');

$path = realpath(dirname(__FILE__) . '/../') . '/';
if(!$path) die('COULD NOT DETERMINE CORRECT FILE PATH');

if(!is_writeable($path.'index.php')) {
	die('index.php not writeable');
}

$theme_install = new UGRSR($path);
$theme_install->file_search = false;

$theme_install->addFile('index.php');
$theme_install->addPattern('~// Url~', '//Unlimited colors theme
$theme = $config->get( $config->get( \'config_template\') . \'_skin\'  );
$store = \'default\';
if($config->get( \'config_store_id\' ) == 0) { 
	$store = \'default\';
} else {
	$store = $config->get( \'config_store_id\' );
}

require_once(DIR_SYSTEM . \'library/themeoptions.php\');
$theme_options = new ThemeOptions($config->get(\'config_template\'), $store, $theme);
$registry->set(\'theme_options\', $theme_options);

');

$result = $theme_install->run();
$writes += $result['writes'];
$changes += $result['changes'];

if(!$changes) die('<div align="center" style="height:300px;">
<span style="color: #fff; background-color: #428bca; border: 1px solid #D6E9C6; padding: 15px 10px; font-size: 14px; font-weight: 700; line-height: 1.1; text-align: center; border-radius: 4px; text-align:center; display:block; width:30%; margin-top:100px;">GLOBETHM already installed!</span>
<a href="../index.php" style="color: #333; border: 1px solid #DDD; padding: 8px 8px; font-size: 12px; font-weight: 700; line-height: 1.1; display:block; width:10%; margin-top:50px;">Back Home</a>
</div>');
if($writes != 1) die('<div align="center" style="height:300px;">
<span style="color: #fff; background-color: #d9534f; border: 1px solid #D6E9C6; padding: 15px 10px; font-size: 14px; font-weight: 700; line-height: 1.1; text-align: center; border-radius: 4px; text-align:center; display:block; width:30%; margin-top:100px;">One or more files could not be written!</span>
<a href="../index.php" style="color: #333; border: 1px solid #DDD; padding: 8px 8px; font-size: 12px; font-weight: 700; line-height: 1.1; display:block; width:10%; margin-top:50px;">Back Home</a>
</div>');
die('<div align="center" style="height:300px;">
<span style="color: #fff; background-color: #5cb85c; border: 1px solid #D6E9C6; padding: 15px 10px; font-size: 14px; font-weight: 700; line-height: 1.1; text-align: center; border-radius: 4px; text-align:center; display:block; width:30%; margin-top:100px;">GLOBETHM template has been installed!</span>
<a href="../index.php" style="color: #333; border: 1px solid #DDD; padding: 8px 8px; font-size: 12px; font-weight: 700; line-height: 1.1; display:block; width:10%; margin-top:50px;">Back Home</a>
</div>');