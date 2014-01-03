<?php
/**
*
* acp_permissions (phpBB Permission Set) [Ukrainian]
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Дії',
		'content'		=> 'Вміст',
		'forums'		=> 'Форуми',
		'misc'			=> 'Різне',
		'permissions'	=> 'Права доступа',
		'pm'			=> 'Приватні повідомлення',
		'polls'			=> 'Опитування',
		'post'			=> 'Розміщення повідомлень',
		'post_actions'	=> 'Дії з повідомленнями',
		'posting'		=> 'Повідомлення',
		'profile'		=> 'Профіль',
		'settings'		=> 'Параметри',
		'topic_actions'	=> 'Дії з темами',
		'user_group'	=> 'Користувачі',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Права доступу користувача',
		'a_'			=> 'Права доступу адміністратора',
		'm_'			=> 'Права доступу модератора',
		'f_'			=> 'Права доступа для форума',
		'global'		=> array(
			'm_'			=> 'Глобальні права модератора',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Може переглядати профілі, список користувачів і сторінку «Хто зараз на конференції»', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Може змінювати ім\'я', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Може змінювати пароль', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Може змінювати email-адрес', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Може змінювати аватар', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Може міняти групу за замовчуванням', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Може прикріплювати додаткові файли', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Може скачувати файли', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Може зберігати чернетки', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Може відключати автоцензор', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Може використовувати підпис', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Може посилати ПП', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Може розсилати ПП декільком користувачам', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Може розсилати ПП групам користувачів', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Може читати ПП', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Може редагувати власні ПП', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Може видаляти ПП зі своїх папок', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Може пересилати ПП', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Може відправляти ПП по email', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Може роздруковувати ПП', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Може прикріплювати дод. файли в ПП', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Може завантажувати файли з ПП', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Може використовувати BBCode в ПП', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Може використовувати смайлики в ПП', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Може використовувати тег [img] в ПП', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Може використовувати тег [flash] в ПП', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Може посилати email-повідомлення', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Може використовувати систему миттєвих повідомлень', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Може ігнорувати флуд-контроль', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Може ховати статус присутності', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Може бачити статус присутності', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Може використовувати пошук', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Може бачити форум', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Може читати форум', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Може створювати теми', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Може відповідати у темах', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Може використовувати значки тем і повідомлень', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Може створювати оголошення', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Може прикріплювати теми', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Може створювати опитування', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Може голосувати в опитуваннях', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'може переголосувати', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Може прикріплювати дод. файли', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Може завантажувати файли', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Може використовувати підпис', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Може використовувати BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Може використовувати смайли', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Може використовувати тег [img]', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Може використовувати тег [flash]', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Може редагувати власні повідомлення', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Може видаляти власні повідомлення', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Може закривати свої теми', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Може піднімати теми', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Може розміщувати скарги', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Може підписуватися на форуми', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Може роздруковувати теми', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Може повідомляти (другу) за email про тему', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Може використовувати пошук на форумі', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Може ігнорувати флуд-контроль', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Лічильник повідомлень включений<br /><em>Врахуйте, що дана установка ефективна тільки при створенні нових повідомлень.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Може розміщувати повідомлення без схвалення', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Може редагувати повідомлення', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Може видаляти повідомлення', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Може схвалювати повідомлення', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Може закривати і видаляти скарги', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Може міняти учасника повідомлень', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Може переміщати теми', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Може закривати теми', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Може розділяти теми', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Може об\'єднувати теми', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Може переглядати подробиці про повідомлення', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Може оголошувати попередження<br /><em>Це право може бути призначено лише глобально, а не на рівні форумів.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Може управляти блокуванням<br /><em>Це право може бути призначено лише глобально, а не на рівні форумів.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Може змінювати налаштування конференції та перевіряти оновлення', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Може змінювати параметри конфігурації сервера', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Може змінювати налаштування Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Може переглядати відомості про php', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Може управляти форумами', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Може створювати форуми', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Може видаляти форуми', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Може очищати форуми', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Може змінювати значки тим, повідомлень і смайли', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Може налаштовувати автоцензор', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Може визначати BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Може змінювати налаштування дод. файлів', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Може управляти користувачами<br /><em>Право також включає перегляд типу браузера користувачів в списку знаходяться на конференції.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Може видаляти користувачів', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Може управляти групами', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Може створювати групи', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Може видаляти групи', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Може управляти званнями', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Може управляти додатковими полями профілю', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Може управляти забороненими іменами', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Може управляти блокуванням', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Може переглядати права доступу', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Може змінювати права доступу для конкретної групи', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Може змінювати права доступу для конкретного користувача', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Може змінювати права доступу у форумах', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Може змінювати права доступу для модераторів', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Може змінювати права доступу для адміністраторів', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Може змінювати права доступу для користувачів', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Може управляти ролями', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Може змінювати інші права доступу', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Може управляти стилями', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Может просматривать логи', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Може очищати логи', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Може управляти модулями', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Може управляти мовними пакетами', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Може здійснювати масову розсилку пошти', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Может управлять ботами', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Може управляти списком скарг/причин', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Може зберігати / відновлювати базу даних', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Може управляти пошуковими індексами/установками пошуку', 'cat' => 'misc'),
));

?>