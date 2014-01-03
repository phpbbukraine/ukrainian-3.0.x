<?php
/**
*
* viewtopic [Ukrainian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
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
	'ATTACHMENT'						=> 'Додаткові файли',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Функція вкладень відключена.',

	'BOOKMARK_ADDED'		=> 'Тема успішно додана в закладки.',
	'BOOKMARK_ERR'			=> 'Спроба помістити тему в закладки не вдалася. Спробуйте ще раз.',
	'BOOKMARK_REMOVED'		=> 'Тема успішно видалена з закладок.',
	'BOOKMARK_TOPIC'		=> 'В закладки',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Видалити із закладок',
	'BUMPED_BY'				=> 'Тема піднімалась користувачем %1$s %2$s.',
	'BUMP_TOPIC'			=> 'Підняти тему',

	'CODE'					=> 'Код',
	'COLLAPSE_QR'			=> 'Приховати швидку відповідь',

	'DELETE_TOPIC'			=> 'Видалити тему',
	'DOWNLOAD_NOTICE'		=> 'У вас недостатньо прав для перегляду приєднаних до цього повідомлення.',

	'EDITED_TIMES_TOTAL'	=> 'Востаннє редагувалось %1$s %2$s, редаговано %3$d раз(а).',
	'EDITED_TIME_TOTAL'		=> 'Востаннє редагувалось %1$s %2$s, редаговано %3$d раз.',
	'EMAIL_TOPIC'			=> 'Повідомити друга',
	'ERROR_NO_ATTACHMENT'	=> 'Вибраного додаткового файлу більше не існує.',

	'FILE_NOT_FOUND_404'	=> 'Файл <strong>%s</strong> не існує.',
	'FORK_TOPIC'			=> 'Копіювати тему',
	'FULL_EDITOR'			=> 'Стандартна відповідь',

	'LINKAGE_FORBIDDEN'		=> 'Ви не авторизовані для перегляду або скачування файлів.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Ви отримали повідомлення про нове повідомлення в темі. Авторизуйтеся для його перегляду.',
	'LOGIN_VIEWTOPIC'		=> 'Необхідно авторизуватися для перегляду цієї теми.',

	'MAKE_ANNOUNCE'				=> 'Зробити оголошенням',
	'MAKE_GLOBAL'				=> 'Зробити важливою',
	'MAKE_NORMAL'				=> 'Зробити звичайною',
	'MAKE_STICKY'				=> 'Зробити прикріпленою',
	'MAX_OPTIONS_SELECT'		=> 'Можна вибрати до <strong>%d</strong> варіантів відповіді',
	'MAX_OPTION_SELECT'			=> 'Можна вибрати тільки <strong>1</strong> варіан відповіді',
	'MISSING_INLINE_ATTACHMENT'	=> 'Додатковий файл <strong>%s</strong> більше недоступно',
	'MOVE_TOPIC'				=> 'Перемістити тему',

	'NO_ATTACHMENT_SELECTED'=> 'Ви не обрали додатковий файл для скачування або перегляду.',
	'NO_NEWER_TOPICS'		=> 'У цьому форумі немає новіших тим.',
	'NO_OLDER_TOPICS'		=> 'У цьому форумі немає старіших тем.',
	'NO_UNREAD_POSTS'		=> 'У цій темі немає нових непрочитаних повідомлень.',
	'NO_VOTE_OPTION'		=> 'Необхідно вказати варіант відповіді при голосуванні.',
	'NO_VOTES'				=> 'Голосів немає',

	'POLL_ENDED_AT'			=> 'Опитування закінчилося %s',
	'POLL_RUN_TILL'			=> 'Опитування проводиться до %s',
	'POLL_VOTED_OPTION'		=> 'Ви голосували за цей варіант',
	'PRINT_TOPIC'			=> 'Версія для друку',

	'QUICK_MOD'				=> 'Швидкі дії',
	'QUICKREPLY'			=> 'Швидка відповідь',
	'QUOTE'					=> 'Цитата',

	'REPLY_TO_TOPIC'		=> 'Відповісти на тему',
	'RETURN_POST'			=> '%sПовернутися до повідомлення%s',

	'SHOW_QR'				=> 'Швидка відповідь',
	'SUBMIT_VOTE'			=> 'Проголосувати',

	'TOTAL_VOTES'			=> 'Всього голосів',

	'UNLOCK_TOPIC'			=> 'Відкрити тему',

	'VIEW_INFO'				=> 'Інформація про повідомлення',
	'VIEW_NEXT_TOPIC'		=> 'Наступ. тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Поперед. тема',
	'VIEW_RESULTS'			=> 'Результати голосування',
	'VIEW_TOPIC_POST'		=> '1 повідомлення',
	'VIEW_TOPIC_POSTS'		=> 'Повідомлень: %d',
	'VIEW_UNREAD_POST'		=> 'Перше нове повідомлення',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Дякуємо, ваш голос врахований.',
	'VOTE_CONVERTED'		=> 'Зміна голосів у сконвертування опитуваннях не дозволена.',

));

?>