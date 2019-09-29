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
	'ASS_INVENTORY'			=> 'Inventário',
	'ASS_SHOP'				=> 'Loja',

	'ASS_NOTIFICATION_GROUP'		=> 'Notificações da loja',
	'ASS_NOTIFICATION_TYPE_GIFT'	=> 'Alguém te deu um presente',
	'ASS_NOTIFICATION_TYPE_STOCK'	=> 'Um item atingiu seu limite de baixo estoque',

	'ASS_NOTIFICATION_GIFT'			=> '<strong>Você recebeu um presente</strong> de %s',
	'ASS_NOTIFICATION_STOCK'		=> '<strong>Um item está com pouco estoque:</strong><br>&raquo; %s',
]);
