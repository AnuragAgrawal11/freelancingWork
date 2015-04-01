<?php session_start(); ?>
<?php


define('IN_SCRIPT',true);

require('settings.php');
require($settings['language']);

/* Template path to use */
$settings['tpl_path'] = './templates/'.$settings['template'].'/';

/* Get file with emoticons settings */
require($settings['tpl_path'].'emoticons.php');

$list_emoticons = '';
foreach ($settings['emoticons'] as $code => $image)
{
	$list_emoticons .= '<a href="javascript:void(0)" onclick="Javascript:insertSmiley(\''.$code.'\');return false;"><img src="'.$settings['tpl_path'].'images/emoticons/'.$image.'" alt="'.$code.'" title="'.$code.'" class="gbook_emoticon" /></a> ';
}

require($settings['tpl_path'].'emoticons_popup.php');
exit();
?>
