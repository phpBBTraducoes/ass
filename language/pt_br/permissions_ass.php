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
	'ACL_CAT_PHPBB_STUDIO'	=> 'phpBB Studio',

	'ACL_A_ASS_OVERVIEW'	=> '<strong>Advanced Shop System</strong> - Pode ver a visão geral',
	'ACL_A_ASS_SETTINGS'	=> '<strong>Advanced Shop System</strong> - Pode gerenciar as configurações',
	'ACL_A_ASS_ITEMS'		=> '<strong>Advanced Shop System</strong> - Pode gerenciar os itens',
	'ACL_A_ASS_FILES'		=> '<strong>Advanced Shop System</strong> - Pode gerenciar os arquivos',
	'ACL_A_ASS_LOGS'		=> '<strong>Advanced Shop System</strong> - Pode gerenciar os logs',

	'ACL_U_ASS_CAN_PURCHASE'						=> '<strong>Advanced Shop System</strong> - Pode comprar',
	'ACL_U_ASS_CAN_VIEW_INACTIVE_SHOP'				=> '<strong>Advanced Shop System</strong> - Pode ver loja inativa',
	'ACL_U_ASS_CAN_VIEW_INACTIVE_ITEMS'				=> '<strong>Advanced Shop System</strong> - Pode ver itens inativos',
	'ACL_U_ASS_CAN_GIFT'							=> '<strong>Advanced Shop System</strong> - Pode presentear',
	'ACL_U_ASS_CAN_RECEIVE_GIFT'					=> '<strong>Advanced Shop System</strong> - Pode receber presente',
	'ACL_U_ASS_CAN_RECEIVE_STOCK_NOTIFICATIONS'		=> '<strong>Advanced Shop System</strong> - Pode receber notificações de estoque',
]);
