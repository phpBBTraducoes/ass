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
	'ACP_ASS_SYSTEM'		=> 'Sistema Avançado de Loja',
	'ACP_ASS_CATEGORIES'	=> 'Categorias',
	'ACP_ASS_FILES'			=> 'Arquivos',
	'ACP_ASS_INVENTORY'		=> 'Inventário',
	'ACP_ASS_ITEMS'			=> 'Itens',
	'ACP_ASS_LOGS'			=> 'Logs',
	'ACP_ASS_OVERVIEW'		=> 'Visão geral',
	'ACP_ASS_SETTINGS'		=> 'Configurações',

	'LOG_ACP_ASS_CATEGORY_ADDED'		=> '<strong>Advanced Shop System &mdash;</strong> Categoria adicionada<br>» %s',
	'LOG_ACP_ASS_CATEGORY_DELETED'		=> '<strong>Advanced Shop System &mdash;</strong> Categoria excluida<br>» %s',
	'LOG_ACP_ASS_CATEGORY_EDITED'		=> '<strong>Advanced Shop System &mdash;</strong> Categoria editada<br>» %s',

	'LOG_ACP_ASS_ITEM_ADDED'			=> '<strong>Advanced Shop System &mdash;</strong> Item adicionado<br>» %s',
	'LOG_ACP_ASS_ITEM_DELETED'			=> '<strong>Advanced Shop System &mdash;</strong> Item excluido<br>» %s',
	'LOG_ACP_ASS_ITEM_EDITED'			=> '<strong>Advanced Shop System &mdash;</strong> Item editado<br>» %s',

	'LOG_ACP_ASS_ITEM_RESOLVED'			=> '<strong>Advanced Shop System &mdash;</strong> Conflito do item resolvido<br>» %s',

	'LOG_ACP_ASS_INVENTORY_ADD'			=> '<strong>Advanced Shop System &mdash;</strong> Itens adicionados aos inventários dos usuários.<br>» Itens (%1$s): %2$s<br>» Usuários (%3$s): %4$s',
	'LOG_ACP_ASS_INVENTORY_ADD_USER'	=> '<strong>Advanced Shop System &mdash;</strong> Itens adicionados ao inventário de um usuário.<br>» Itens (%1$s): %2$s<br>» Nome de usuário: %3$s',
	'LOG_ACP_ASS_INVENTORY_DELETE'		=> '<strong>Advanced Shop System &mdash;</strong> Itens excluídos dos inventários dos usuários.<br>» Itens (%1$s): %2$s<br>» Usuários (%3$s): %4$s',
	'LOG_ACP_ASS_INVENTORY_DELETE_USER'	=> '<strong>Advanced Shop System &mdash;</strong> Item excluído do inventário de um usuário.<br>» Item: %1$s<br>» Nome de usuário: %2$s',

	'LOG_ACP_ASS_LOG_DELETED_ALL'		=> '<strong>Advanced Shop System &mdash;</strong> Excluídas todas as entradas de log',
	'LOG_ACP_ASS_LOG_DELETED_ENTRY'		=> '<strong>Advanced Shop System &mdash;</strong> Excluiu uma entrada de log',
	'LOG_ACP_ASS_LOG_DELETED_ENTRIES'	=> '<strong>Advanced Shop System &mdash;</strong> Excluídas várias entradas de log',

	'LOG_ACP_ASS_ITEM_TYPE_ERROR'		=> '<strong>Advanced Shop System &mdash;</strong> Ocorreu um erro ao ativar um item:<br>» %1$s › %2$s',
]);
