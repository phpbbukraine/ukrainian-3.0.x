<?php
/**
*
* acp_prune [Ukrainian]
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Тут ви можете видаляти або відключати користувачів конференції. Облікові записи можуть бути відфільтровані різними способами - за кількістю повідомлень, за часом останнього відвідування і так далі. Критерії можуть бути об\'єднані з метою скорочення облікових записів, до яких буде застосована очищення. Наприклад, ви можете видалити користувачів, які не відвідували конференцію після 01.01.2002, та мають менше десяти повідомлень. Також ви можете повністю пропустити вибір критеріїв, вручну ввівши бажаних користувачів (кожного на окремому рядку) в текстове поле. Будьте обережні з цим інструментом - видалених користувачів відновити неможливо!',
	'DEACTIVATE_DELETE'			=> 'Деактивувати або видалити',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Виберіть дію, яку буде застосовано до користувачів. Пам\'ятайте, що видалених користувачів відновити неможливо!',
	'DELETE_USERS'				=> 'Видалити',
	'DELETE_USER_POSTS'			=> 'Видалити також їх повідомлення',
	'DELETE_USER_POSTS_EXPLAIN' => 'УВидаляє користувачів разом з їх повідомленнями. Не працює, якщо обрана деактивація користувачів.',

	'JOINED_EXPLAIN'			=> 'Введіть дату у форматі <kbd>РРРР-ММ-ДД</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Введіть дату у форматі <kbd>РРРР-ММ-ДД</kbd>. Введіть <kbd>0000-00-00</kbd> для очищення користувачів, які ніколи не входили на конференцію, <em>до</em> і <em>після</em> ігнорування умов.',

	'PRUNE_USERS_LIST'				=> 'Список очищення',
	'PRUNE_USERS_LIST_DELETE'		=> 'За заданими критеріями очищення будуть вилучені наступні облікові записи користувачів.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'За заданими критеріями очищення будуть деактивовані наступні облікові записи користувачів.',

	'SELECT_USERS_EXPLAIN'		=> 'Введіть у це поле імена конкретних користувачів, в цьому випадку задані вище критерії не будуть використані. Примітка: засновники не можуть бути вилучені або відключені.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Відібрані користувачі успішно деактивовані.',
	'USER_DELETE_SUCCESS'		=> 'Відібрані користувачі успішно видалені.',
	'USER_PRUNE_FAILURE'		=> 'Немає користувачів, відповідних під зазначені критерії.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Неприпустимий формат дати. Дата має бути у форматі <kbd>РРРР-ММ-ДД</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Будуть вилучені всі теми, в які не писали і які не переглядали вказану кількість днів. Якщо ви не введете число днів, то будуть видалені всі теми. За замовчуванням теми, в яких тривають опитування, а також прикріплені теми та оголошення не будуть видалені.',

	'FORUM_PRUNE'		=> 'Очищення форумів',

	'NO_PRUNE'			=> 'Очищення форумів не зроблена.',

	'SELECTED_FORUM'	=> 'Вибраний форум',
	'SELECTED_FORUMS'	=> 'Вибрані форуми',

	'POSTS_PRUNED'					=> 'Повідомлень видалено',
	'PRUNE_ANNOUNCEMENTS'			=> 'Видаляти оголошення',
	'PRUNE_FINISHED_POLLS'			=> 'Видаляти закінчені опитування',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Видаляти теми, в яких опитування завершені.',
	'PRUNE_FORUM_CONFIRM'			=> 'Відновити видалені теми та повідомлення неможливо. Ви дійсно хочете очистити вибрані форуми за заданими критеріями?',
	'PRUNE_NOT_POSTED'				=> 'Днів з останнього повідомлення',
	'PRUNE_NOT_VIEWED'				=> 'Днів з останнього перегляду',
	'PRUNE_OLD_POLLS'				=> 'Видаляти старі опитування',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Видаляти теми, в опитуваннях яких не було голосів за вказану вище кількість днів.',
	'PRUNE_STICKY'					=> 'Видаляти прикріплені теми',
	'PRUNE_SUCCESS'					=> 'Очистка форумов успешно произведена',

	'TOPICS_PRUNED'		=> 'Тем видалено',
));

?>
