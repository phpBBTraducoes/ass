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
	'ASS_FILE'			=> 'Arquivo',
	'ASS_FILES'			=> 'Arquivos',
	'ASS_FILENAME'		=> 'Nome do arquivo',
	'ASS_FILETIME'		=> 'Data do arquivo',
	'ASS_FILESIZE'		=> 'Tamanho do arquivo',

	'ASS_FILE_DELETE'			=> 'Excluir arquivo',
	'ASS_FILE_DELETE_CONFIRM'	=> 'Tem certeza de que deseja excluir este arquivo?
									<br>Esta ação <u>não</u> pode ser revertida!',
	'ASS_FILE_DELETE_SUCCESS'	=> 'O arquivo foi excluído com sucesso.',

	'ASS_FOLDER'		=> 'Pasta',
	'ASS_FOLDERS'		=> 'Pastas',

	'ASS_FOLDER_DELETE'			=> 'Excluir pasta',
	'ASS_FOLDER_DELETE_CONFIRM'	=> 'Tem certeza de que deseja excluir esta pasta?
									<br>Isso também <strong>excluirá todas as pastas e arquivos dentro</strong>.
									<br>Esta ação <u>não</u> pode ser revertida!',
	'ASS_FOLDER_DELETE_SUCCESS'	=> 'A pasta foi excluída com sucesso.',
]);
