<?php
/**
*
* memberlist [Ukrainian]
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
	'ABOUT_USER'			=> 'Профіль',
	'ACTIVE_IN_FORUM'		=> 'Найбільша активність в форумі',
	'ACTIVE_IN_TOPIC'		=> 'Найбільша активність в темі',
	'ADD_FOE'				=> 'Додати в недруги',
	'ADD_FRIEND'			=> 'Додати до друзів',
	'AFTER'					=> 'після',

	'ALL'					=> 'Все',

	'BEFORE'				=> 'до',

	'CC_EMAIL'				=> 'Вислати мені копію цього повідомлення.',
	'CONTACT_USER'			=> 'Контактна інформація',

	'DEST_LANG'				=> 'Мова',
	'DEST_LANG_EXPLAIN'		=> 'Виберіть мову одержувача повідомлення (якщо доступний).',

	'EMAIL_BODY_EXPLAIN'	=> 'Повідомлення буде відправлене як звичайний текст, без коду HTML або BBCode. В якості зворотної адреси буде встановлена ​​ваша адреса email.',
	'EMAIL_DISABLED'		=> 'Вибачте, але всі функції, пов\'язані з відправкою email, були відключені.',
	'EMAIL_SENT'			=> 'Повідомлення було відправлено.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Повідомлення буде відправлене як звичайний текст, без коду HTML або BBCode. Зверніть увагу, що інформація про тему вже включена в повідомлення. В якості зворотної адреси буде встановлена ​​ваша адреса email.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Ви повинні вказати правильну адресу email одержувача.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Ви повинні ввести текст повідомлення для відправки.',
	'EMPTY_MESSAGE_IM'		=> 'Ви повинні ввести текст повідомлення для відправлення.',
	'EMPTY_NAME_EMAIL'		=> 'Ви повинні ввести справжнє ім\'я одержувача.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Ви повинні вказати тему повідомлення.',
	'EQUAL_TO'				=> 'рівно',

	'FIND_USERNAME_EXPLAIN'	=> 'Тут ви можете здійснити пошук конкретних користувачів. Не обов\'язково заповнювати всі поля. Для пошуку за шаблоном використовуйте *. При введенні дат використовуйте формат <kbd>ГГГГ-ММ-ДД</kbd>, наприклад, <samp>2004-02-29</samp>. Позначте галочкою одного або більше користувачів (якщо попередня форма дозволяє це) і натисніть кнопку «Вибрати відмічених», щоб повернутися назад.',
	'FLOOD_EMAIL_LIMIT'		=> 'Ви не можете відправити ще один email відразу після попереднього. Будь ласка, спробуйте трохи пізніше.',

	'GROUP_LEADER'			=> 'Лідер групи',

	'HIDE_MEMBER_SEARCH'	=> 'Сховати пошук користувачів',

	'IM_ADD_CONTACT'		=> 'Додати до списку контактів',
	'IM_AIM'				=> 'Врахуйте, що для цього вам необхідна встановлена ​​програма AOL Instant Messenger.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Завантажити додаток',
	'IM_ICQ'				=> 'Врахуйте, що користувач міг відключити прийом миттєвих повідомлень від невідомих контактів.',
	'IM_JABBER'				=> 'Врахуйте, що користувач міг відключити прийом миттєвих повідомлень від невідомих контактів.',
	'IM_JABBER_SUBJECT'		=> 'Це автоматично згенероване повідомлення, на нього не треба відповідати! Повідомлення від користувача %1$s с %2$s.',
	'IM_MESSAGE'			=> 'Ваше повідомлення',
	'IM_MSNM'				=> 'Врахуйте, що для цього вам необхідна встановлена ​​програма Windows Messenger.',
	'IM_MSNM_BROWSER'		=> 'Ваш браузер не підтримує цю функцію.',
	'IM_MSNM_CONNECT'		=> 'Клієнт MSNM не відповідає.\n Для продовження необхідно встановити зв\'язок з клієнтом.',
	'IM_NAME'				=> 'Ваше ім\'я',
	'IM_NO_DATA'			=> 'Для цього користувача відсутня контактна інформація.',
	'IM_NO_JABBER'			=> 'Вибачте, відправка безпосередньо повідомлень користувачам Jabber не дозволені конференцією. Щоб зв\'язатися з цим користувачем, вам необхідно скористатися клієнтом Jabber.',
	'IM_RECIPIENT'			=> 'Одержувач',
	'IM_SEND'				=> 'Надіслати повідомлення',
	'IM_SEND_MESSAGE'		=> 'Надіслати повідомлення',
	'IM_SENT_JABBER'		=> 'Ваше повідомлення для %1$s було успішно надіслано.',
	'IM_USER'				=> 'Надіслати миттєве повідомлення',

	'LAST_ACTIVE'				=> 'Останнє відвідування',
	'LESS_THAN'					=> 'менше',
	'LIST_USER'					=> 'Користувачів: 1',
	'LIST_USERS'				=> 'Користувачів: %d',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Для перегляду списку нашої команди ви повинні бути авторизовані.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Для перегляду списку користувачів ви повинні бути авторизовані.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Для пошуку користувачів ви повинні бути авторизовані.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Для перегляду профілів ви повинні бути авторизовані.',

	'MORE_THAN'				=> 'більше',

	'NO_EMAIL'				=> 'Вам не дозволено посилати email цьому користувачеві.',
	'NO_VIEW_USERS'			=> 'У вас немає доступу до списку користувачів.',

	'ORDER'					=> 'Упорядкувати',
	'OTHER'					=> 'інша',

	'POST_IP'				=> 'IP/Хост',

	'REAL_NAME'				=> 'Ім\'я одержувача',
	'RECIPIENT'				=> 'Одержувач',
	'REMOVE_FOE'			=> 'Прибрати з недругів',
	'REMOVE_FRIEND'			=> 'Прибрати з друзів',

	'SELECT_MARKED'			=> 'Вибрати відмічених',
	'SELECT_SORT_METHOD'	=> 'Поле сортування',
	'SEND_AIM_MESSAGE'		=> 'Надіслати AIM-повідомлення',
	'SEND_ICQ_MESSAGE'		=> 'Надіслати ICQ-повідомлення',
	'SEND_IM'				=> 'Надіслати миттєве повідомлення',
	'SEND_JABBER_MESSAGE'	=> 'Надіслати Jabber-повідомлення',
	'SEND_MESSAGE'			=> 'Надіслати',
	'SEND_MSNM_MESSAGE'		=> 'Надіслати MSNM/WLM-повідомлення',
	'SEND_YIM_MESSAGE'		=> 'Надіслати YIM-повідомлення',
	'SORT_EMAIL'			=> 'email',
	'SORT_LAST_ACTIVE'		=> 'Останнє відвідування',
	'SORT_POST_COUNT'		=> 'Число повідомлень',

	'USERNAME_BEGINS_WITH'	=> 'Ім\'я користувача починається з',
	'USER_ADMIN'			=> 'Адмініструвати',
	'USER_BAN'				=> 'Блокування',
	'USER_FORUM'			=> 'Статистика користувача',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Немає нагадувань, відправлених в цей час',
		1		=> 'Надіслано %1$d нагадування<br />» %2$s',
	),
	'USER_ONLINE'			=> 'В мережі',
	'USER_PRESENCE'			=> 'Присутність на конференції',

	'VIEWING_PROFILE'		=> 'Профіль користувача %s',
	'VISITED'				=> 'Останнє відвідування',

	'WWW'					=> 'Сайт',
));

?>
