<?php
/**
*
* topic_preview [English]
*
* @package language
* @version $Id: topic_preview.php, 7 2010-06-13 23:47:11GMT VSE $
* @copyright (c) 2010 Matt Friedman
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
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

$lang = array_merge($lang, array(
	'TOPIC_PREVIEW'			=> 'Dlugosc tresci podgladu tematu.',
	'TOPIC_PREVIEW_EXPLAIN'	=> 'Pokaze jakis tekst zx pierwszego tematu w okienku kiedy kursor najedzie na jego tytul. Wpisz ilosc znakow do wyswietlenia w podgladzie (domyslnie 150). Ustawienie na 0 wylacza.',
	'CHARS'   				=> 'Znaki',
	'DISPLAY_TOPIC_PREVIEW' => 'Wyswietl podglad tematu.',	
	'TOPIC_PREVIEW_STRIP'			=> 'BBcodes do zchowania w Podgladzie Tematu',
	'TOPIC_PREVIEW_STRIP_EXPLAIN'	=> 'Wylistuj BBcodes z zawartoscia ktora chcesz usunac z podgladu (spoilery i urkyte BBcodes, na przyklad). Oddziel wielokrotne BBcodes uzywajac znaku | , na przyklad: spoiler|hide|code',

	// Installation language vars (UMIL)
	'TP_MOD'	=> 'Topic Preview',
));

?>