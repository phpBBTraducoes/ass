<?php
/**
 *
 * phpBB Studio - Advanced Shop System. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.1.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2019, phpBB Studio, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

/**
 * Some characters you may want to copy&paste: ’ » “ ” …
 */
$lang = array_merge($lang, [
	'ASS_DISABLE_EXTENDED'	=> 'Desativar o Advanced Shop System não é possível, pois ele ainda está sendo estendido por outra extensão. Nome da extensão: %s',
	'ASS_REQUIRES_APS'		=> 'A extensão <strong>“Advanced Shop System”</strong> exige que a extensão <strong>“Advanced Points System”</strong> esteja ativada.',
]);
