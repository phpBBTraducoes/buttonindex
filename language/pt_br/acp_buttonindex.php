<?php
/**
*
* @package phpBB Extension - Button index
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.1] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BUTTONINDEX_ENABLE'				=> 'Ativar Button index',
	'BUTTONINDEX_ENABLE_EXPLAIN'		=> 'Ative a extensão Button on index extension.',
	'BUTTONINDEX_PLACEHOLDER'			=> 'http://www.google.com',
	'BUTTONINDEX_PLACEHOLDER_NAME'		=> 'Nome do botão',
	'BUTTONINDEX_REPOSITORY'			=> 'Definir URL',
	'BUTTONINDEX_REPOSITORY_EXPLAIN'	=> 'Adicione o URL e o nome do botão.<br /> O URL pode ser relativo como <em>viewforum.php?f=2</em>',
	'BUTTONINDEX_REPOSITORY_TEXT'		=> 'Nome do botão',
	'BUTTONINDEX_MORE_LINKS'			=> 'Adicionar botão',
	'BUTTONINDEX_SAVED'					=> 'Configurações do Button index salvas',
	'BUTTONINDEX_VERSION'				=> 'Versão',
));
