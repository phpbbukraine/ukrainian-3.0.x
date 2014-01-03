<?php
/**
*
* ucp [Ukrainian]
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Реєструючись на конфренції «%1$s» (надалі «ми», «наш», «%1$s», «%2$s»), ви підтверджуєте свою згоду з наступними умовами. Якщо ви не згодні з ними, будь ласка, не заходьте і не користуйтесь форумами «%1$s». Ми залишаємо за собою право змінювати ці правила будь-коли і зробимо все можливе, щоб проінформувати вас про це, однак з вашої сторони було б розумно переглядати періодично цей текст на предмет змін, оскільки користування конференцією «%1$s» після оновлення/виправлення умов користування означає вашу згоду з ними.<br />
	<br />
	Наші форуми працюють на базі програмного забезпечення для створення конференцій phpBB (надалі «вони», «програмне забезпечення phpBB», «www.phpbb.com», «phpBB Group», «phpBB Teams»), випущеного за ліцензією «<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>» (надалі «GPL»). Завантажити його можна за адресою <a href="http://www.phpbb.com/">www.phpbb.com</a>. Обмеження ліцензії GPL для програмного забезпечення phpBB суворо пов\'язані з організацією і підтримкою інтернет-конференцій і phpBB Group не несе відповідальності за те, що забороняється адміністрацією конференції визначає в якості допустимого вмісту та/або поведінки в них. За додатковою інформацією про phpBB звертайтеся за адресою <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Ви погоджуєтесь не розміщувати образливих, загрозливих, наклепницьких повідомлень, порнографічних повідомлень, закликів до національної ворожнечі і інших повідомлень, які можуть порушувати закони вашої країни, країни, яка надає послуги хостингу для форуму «%1$s» чи міжнародне право. Спроби розміщення таких повідомлень можуть привести до вашого негайного відключення від конференції, при цьому ваш провайдер буде поставлено до відома, якщо ми будемо вважати це за потрібне. IP-адреси усіх повідомлень зберігаються для можливості проведення такої політики. Ви погоджуєтеся з тим, що адміністратори конференції «%1$s» мають право видаляти, редагувати, переносити та закривати будь-яку тему в будь-який час на свій розсуд. Як користувач ви згодні з тим, що введена Вами інформація буде зберігатися в базі даних. Хоча ця інформація не буде відкрита третім особам без вашої згоди, ні адміністрація конференції «%1$s», ні phpBB Group не може бути відповідальна за дії хакерів, які можуть призвести до несанкціонованого доступу до неї.
	',

	'PRIVACY_POLICY'		=> 'Ця політика детально пояснює, як «%1$s» і його підрозділи (надалі «ми», «наш», «%1$s», «%2$s») и phpBB (надалі «вони», «програмне забезпечення phpBB», «www.phpbb.com», «phpBB Group», «phpBB Teams») використовують інформацію, отриману під час будь-якої вашої сесії (надалі «інформація про вас»).<br />
	<br />
	Ваша інформація збирається двома способами. По-перше, перегляд «%1$s» призведе до створення програмним забезпеченням phpBB певного числа cookies (невеликих текстових файлів, які завантажуються в папку тимчасових файлів вашого браузера). Перші дві cookie містять лише ідентифікатор користувача (надалі «user-id») і ідентифікатор анонімної сесії (надалі «session-id»), які автоматично присвоюються вам програмним забезпеченням phpBB. Третя cookie буде створено після перегляду однієї з тем конференції «%1$s» і буде використовуватися для зберігання інформації про прочитаних вами темах, збільшуючи зручність користування форумом.<br />
	<br />
	Також під час перегляду конференції «%1$s» ми можемо встановити cookies, зовнішні по відношенню до програмного забезпечення phpBB, однак вони виходять за рамки цього документу, метою якого є розгляд сторінок, створені програмним забезпеченням phpBB. Друге джерело одержання інформації є дані, які ви відсилаєте. Цими даними можуть бути, але не вичерпуються такі дані: повідомлення розміщені під обліковим записом Гостя (надалі «анонімні повідомлення»), дані вказані при реєстрації на конференції «%1$s» (надалі «ваш обліковий запис») і повідомлення, розміщені вами після реєстрації і авторизації (надалі «ваші повідомлення»).<br />
	<br />
	Ваш обліковий запис буде містити, як мінімум, однозначно ідентифікується ім\'я (надалі «ваше ім\'я користувача»), індивідуальний пароль для входу під вашим обліковим записом (далі «ваш пароль») і реальна адреса email (надалі «ваш адресу email») . Ваша інформація про ваш обліковий запис на «%1$s» охороняється законами про захист інформації, застосовуваними в країні, яка надає нам послуги хостингу. Будь-яка інформація, запитувана при реєстрації у конференції «%1$s», окрім вашого імені користувача, вашого паролю і вашої адреси email, може бути як необхідної, так і необов\'язковою, на розсуд адміністрації конференції «%1$s». У будь-якому випадку у вас є можливість вибрати, яка інформація про ваш обліковий запис буде загальнодоступною. Крім того, у вас є можливість погодитися/відмовитися від отримання повідомлень, які розсилаються програмним забезпеченням phpBB.<br />
	<br />
	Ваш пароль надійно зашифровано (одностороннім хешем). Проте не рекомендується використовувати цей же самий пароль, реєструючись на інших сайтах. Ваш пароль є єдиним способом доступу до вашого облікового запису на форумах «%1$s», буд-ласка, тримайте його в таємниці, і при яких обставинах ніхто з представників «%1$s», ні phpBB Group, ні треті особи, не мають права запитати ваш пароль. У випадку, якщо ви забудете ваш пароль до вашого облікового запису, ви зможете скористатися функцією відновлення пароля "Забули пароль", яка передбачена програмним забезпеченням phpBB. Вам буде необхідно ввести ваше ім\'я користувача та ваш email, після чого програмне забезпечення phpBB згенерує новий пароль до вашого облікового запису.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Ваш обліковий запис було активовано. Дякуємо за реєстрацію.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Ваш обліковий запис було активовано.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Ваш обліковий запис успішно було повторно активовано.',
	'ACCOUNT_ADDED'					=> 'Дякуємо за реєстрацію, обліковий запис було створено. Ви можете увійти в систему, використовуючи ваші ім\'я та пароль.',
	'ACCOUNT_COPPA'					=> 'Ваш обліковий запис було створено, але тепер вона повинна бути схвалена, більш детальна інформація була вислана вам по email.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Ваш обліковий запис була оновлена​​. Однак на цій конференції необхідно повторно активувати обліковий запис при зміні адреси email. Ключ для активування був відправлений на зазначений вами нову адресу email. Перевірте свою електронну пошту для отримання детальнішої інформації.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Ваш обліковий запис була оновлена​​. Однак на цій конференції необхідно повторне активування облікового запису адміністратором при зміні адреси email. Повідомлення email було надіслано адміністратору. Ви будете повідомлені, коли ваш обліковий запис буде повторно активована.',
	'ACCOUNT_INACTIVE'				=> 'Обліковий запис було створено. Однак на цій конференції потрібна активація облікового запису, ключ для активації був висланий на введений вами адресу. Перевірте свою електронну пошту для отримання детальнішої інформації.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Обліковий запис було створено. Однак на цій конференції потрібна активація нового облікового запису групою адміністраторів. Їм було відправлено повідомлення email. Ви будете повідомлені, коли ваш обліковий запис буде активовано.',
	'ACTIVATION_EMAIL_SENT'			=> 'Лист для активації облікового запису було вислано на вашу адресу email.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Листи для активації облікового запису були вислані на адреси email адміністраторів.',
	'ADD'							=> 'Добавити',
	'ADD_BCC'						=> 'Добавити [Копія]',
	'ADD_FOES'						=> 'Додати нових недругів',
	'ADD_FOES_EXPLAIN'				=> 'Ви можете ввести декілька імен користувачів, кожне на окремому рядку.',
	'ADD_FOLDER'					=> 'Добавити папку',
	'ADD_FRIENDS'					=> 'Добавити нових друзів',
	'ADD_FRIENDS_EXPLAIN'			=> 'Ви можете ввести декілька імен користувачів, кожне на окремому рядку.',
	'ADD_NEW_RULE'					=> 'Додати нове правило',
	'ADD_RULE'						=> 'Додати правило',
	'ADD_TO'						=> 'Добавити [Кому]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Тут ви можете додавати нових користувачів до групи. Ви можете вибрати, чи стане ця група групою за замовчуванням для доданих до неї користувачів. Вводите кожне ім\'я користувача на окремому рядку.',
	'ADMIN_EMAIL'					=> 'Отримувати email-розсилки адміністрації',
	'AGREE'							=> 'Я погоджуюся з цими умовами',
	'ALLOW_PM'						=> 'Дозволити користувачам надсилати вам приватні повідомлення',
	'ALLOW_PM_EXPLAIN'				=> 'Врахуйте, що адміністратори і модератори завжди зможуть посилати вам повідомлення.',
	'ALREADY_ACTIVATED'				=> 'Ви вже активували свій обліковий запис.',
	'ATTACHMENTS_EXPLAIN'			=> 'Це список додаткових файлів в повідомленнях, надісланих на цій конференції.',
	'ATTACHMENTS_DELETED'			=> 'Додаткові файли успішно видалені.',
	'ATTACHMENT_DELETED'			=> 'Додатковий файл успішно видалено.',
	'AVATAR_CATEGORY'				=> 'Категорія',
	'AVATAR_EXPLAIN'				=> 'Максимальні розміри в пікселах; ширина: %1$d, висота: %2$d, розмір файла: %3$.2f КБ.',
	'AVATAR_FEATURES_DISABLED'		=> 'Аватари в даний час відключені.',
	'AVATAR_GALLERY'				=> 'Галерея аватар',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Неможливо закачати аватару в %s.',
	'AVATAR_NOT_ALLOWED'			=> 'Ваша аватара не може бути відображена, оскільки аватари заборонені.',
	'AVATAR_PAGE'					=> 'Сторінка',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Ваша поточна аватара не може бути відображена, оскільки її тип заборонений.',

	'BACK_TO_DRAFTS'			=> 'Повернутися до збережених чернеток',
	'BACK_TO_LOGIN'				=> 'Повернутися на сторінку входу',
	'BIRTHDAY'					=> 'День народження',
	'BIRTHDAY_EXPLAIN'			=> 'Якщо ви вкажете рік народження, ваш вік буде відображатися на форумі.',
	'BOARD_DATE_FORMAT'			=> 'Формат дати',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Синтаксис ідентичний функції <a href="http://www.php.net/date">date()</a> мови PHP.',
	'BOARD_DST'					=> 'Зараз діє літній час',
	'BOARD_LANGUAGE'			=> 'Мова',
	'BOARD_STYLE'				=> 'Стиль конференції',
	'BOARD_TIMEZONE'			=> 'Часовий пояс',
	'BOOKMARKS'					=> 'Закладки',
	'BOOKMARKS_EXPLAIN'			=> 'Ви можете додавати теми у закладки для майбутнього звернення. Встановіть прапорець для будь закладки, яку ви хочете видалити, потім натисніть кнопку <em>Видалити відмічені закладки</em>.',
	'BOOKMARKS_DISABLED'		=> 'Закладки на цій конференції відключені.',
	'BOOKMARKS_REMOVED'			=> 'Закладки були успішно видалені.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Ви більше не можете відредагувати або видалити дане повідомлення.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Повідомлення не можуть бути переміщені в папку, яку ви збираєтеся видалити.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Повідомлення не можуть бути видалені з папки «Вихідні».',
	'CANNOT_RENAME_FOLDER'		=> 'Ця папка не може бути перейменована.',
	'CANNOT_REMOVE_FOLDER'		=> 'Ця папка не може бути видалена.',
	'CHANGE_DEFAULT_GROUP'		=> 'Змінити групу за замовчуванням',
	'CHANGE_PASSWORD'			=> 'Змінити пароль',
	'CLICK_GOTO_FOLDER'			=> '%1$sПерейти в папку «%3$s»%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sПовернутися в папку «%3$s»%2$s',
	'CONFIRMATION'				=> 'Підтвердження реєстрації',
	'CONFIRM_CHANGES'			=> 'Підтвердіть зміни',
	'CONFIRM_EMAIL'				=> 'Підтвердіть email',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Вказуйте email тільки якщо ви хочете його поміняти.',
	'CONFIRM_EXPLAIN'			=> 'Для запобігання автоматичних реєстрацій на конференції потрібно ввести код підтвердження. Код зображений на картинці, яка знаходиться нижче. Якщо ви не бачите код на зображенні, то зверніться до %sадминистратору%s.',
	'VC_REFRESH'				=> 'Оновити код підтвердження',
	'VC_REFRESH_EXPLAIN'		=> 'Якщо неможливо прочитати даний код, ви можете запросити новий, натиснувши на цю кнопку.',

	'CONFIRM_PASSWORD'			=> 'Підтвердіть новий пароль',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Вказуйте пароль тільки якщо ви змінили його вище.',
	'COPPA_BIRTHDAY'			=> 'Для продовження реєстрації, будь ласка, вкажіть дату народження.',
	'COPPA_COMPLIANCE'			=> 'Згоду щодо COPPA',
	'COPPA_EXPLAIN'				=> 'Врахуйте, що ваш обліковий запис буде створена після відправки форми. Тим не менше вона не буде активована до тих пір, поки батько або опікун не схвалить вашу реєстрацію. Вам буде вислана копія email з необхідною формою і вказівками, куди її потрібно відправити.',
	'CREATE_FOLDER'				=> 'Додати папку…',
	'CURRENT_IMAGE'				=> 'Поточне зображення',
	'CURRENT_PASSWORD'			=> 'Поточний пароль',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Якщо ви хочете змінити ім\'я користувача або адресу email, ви повинні вказати поточний пароль.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'Якщо ви хочете змінити пароль, адресу email або ім\'я користувача, ви повинні вказати поточний пароль.',
	'CUR_PASSWORD_EMPTY'		=> 'Ви не ввели свій поточний пароль.',
	'CUR_PASSWORD_ERROR'		=> 'Введений вами пароль не співпадає з поточним паролем',
	'CUSTOM_DATEFORMAT'			=> 'Інший…',

	'DEFAULT_ACTION'			=> 'Дія за замовчуванням',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Ця дія буде виконано, якщо жодне з вищевказаних правил не може бути застосовано.',
	'DEFAULT_ADD_SIG'			=> 'Завжди використовувати ваш підпис',
	'DEFAULT_BBCODE'			=> 'BBCode завжди включений',
	'DEFAULT_NOTIFY'			=> 'Завжди повідомляти мене про відповіді',
	'DEFAULT_SMILIES'			=> 'Смайли завжди включені',
	'DEFINED_RULES'				=> 'Певні правила',
	'DELETED_TOPIC'				=> 'Тема була видалена.',
	'DELETE_ATTACHMENT'			=> 'Видалити додатковий файл',
	'DELETE_ATTACHMENTS'		=> 'Видалити додаткові файли',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Ви впевнені, що хочете видалити даний додатковий файл?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Ви впевнені, що хочете видалити дані додаткві файли?',
	'DELETE_AVATAR'				=> 'Видалити зображення',
	'DELETE_COOKIES_CONFIRM'	=> 'Ви впевнені, що хочете видалити всі cookie, встановлені даними форумом?',
	'DELETE_MARKED_PM'			=> 'Видалити відмічене',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Ви впевнені, що хочете видалити всі позначені повідомлення?',
	'DELETE_OLDEST_MESSAGES'	=> 'Видалити найстаріші повідомлення',
	'DELETE_MESSAGE'			=> 'Видалити повідомлення',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ви впевнені, що хочете видалити це повідомлення?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Видалити всі повідомлення, які містяться у видаляємій папці',
	'DELETE_RULE'				=> 'Видалити правило',
	'DELETE_RULE_CONFIRM'		=> 'Ви впевнені, що хочете видалити дане правило?',
	'DEMOTE_SELECTED'			=> 'Відмовитися від лідерства',
	'DISABLE_CENSORS'			=> 'Дозволити автоцензор',
	'DISPLAY_GALLERY'			=> 'Показати галерею',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Введений домен email не має коректної поштового запису в DNS (MX record).',
	'DOWNLOADS'					=> 'Завантажування',
	'DRAFTS_DELETED'			=> 'Усі відзначені чернетки були успішно видалені.',
	'DRAFTS_EXPLAIN'			=> 'Тут ви можете переглянути, відредагувати і видалити ваші збережені чернетки.',
	'DRAFT_UPDATED'				=> 'Чернетку було успішно оновлено.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Тут ви можете редагувати чернетку. Чернетки не містять вкладень і опитувань.',
	'EMAIL_BANNED_EMAIL'		=> 'Введений адресу email заборонений до використання.',
	
	'EMAIL_REMIND'				=> 'Адреса email, пов\'язаний з вашим обліковим записом. Якщо ви не змінили його у Ваших налаштувань, то це адреса e-mail, зазначена вами при реєстрації.',
	'EMAIL_TAKEN_EMAIL'			=> 'Введена адреса email вже використовується іншим користувачем.',
	'EMPTY_DRAFT'				=> 'Ви повинні ввести повідомлення, щоб підтвердити зміни.',
	'EMPTY_DRAFT_TITLE'			=> 'Ви повинні ввести назву чернетки.',
	'EXPORT_AS_XML'				=> 'Експорт в XML',
	'EXPORT_AS_CSV'				=> 'Експорт в CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Експорт в CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Експорт в TXT',
	'EXPORT_AS_MSG'				=> 'Експорт в MSG',
	'EXPORT_FOLDER'				=> 'Цей список',

	'FIELD_REQUIRED'					=> 'Не заповнено поле «%s».',
	'FIELD_TOO_SHORT'					=> 'Значення поля «%1$s» занадто коротке, мінімально допустима довжина становить %2$d символів.',
	'FIELD_TOO_LONG'					=> 'Значення поля «%1$s» занадто довге, максимально допустима довжина становить %2$d символів.',
	'FIELD_TOO_SMALL'					=> 'Значення поля «%1$s» надто маленьке, мінімально допустимим значенням є %2$d.',
	'FIELD_TOO_LARGE'					=> 'Значення поля «%1$s» занадто велике, максимально допустимим значенням є %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Поле «%s» містить недопустимі символи, дозволені тільки цифри.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Поле «%s» містить недопустимі символи, дозволені тільки буквено-цифрові символи.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Поле «%s» містить недопустимі символи, дозволені тільки буквено-цифрові символи, пробіли, а також символи -+_[].',
	'FIELD_INVALID_DATE'				=> 'Поле «%s» містить недопустиму дату.',
	'FIELD_INVALID_VALUE'				=> 'Поле «%s» містить неприпустиме значення.',

	'FOE_MESSAGE'				=> 'Повідомлення від недруга',
	'FOES_EXPLAIN'				=> 'Недруги - це користувачі, які будуть ігноруватися за замовчуванням. Повідомлення цих користувачів будуть приховані. Однак приватні повідомлення від недругів дозволені. Врахуйте, що ви не можете ігнорувати модераторів або адміністраторів.',
	'FOES_UPDATED'				=> 'Список недругів було успішно оновлено.',
	'FOLDER_ADDED'				=> 'Папка була успішно додана.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d из %2$d повідомлень',
	'FOLDER_NAME_EMPTY'			=> 'Необхідно ввести ім\'я для цієї папки.',
	'FOLDER_NAME_EXIST'			=> 'Папка <strong>%s</strong> вже існує.',
	'FOLDER_OPTIONS'			=> 'Властивості папки',
	'FOLDER_RENAMED'			=> 'Папка була успішно перейменована.',
	'FOLDER_REMOVED'			=> 'Папка була успішно видалена.',
	'FOLDER_STATUS_MSG'			=> 'Папка заповнена на %1$d%% (%2$d із %3$d повідомлень)',
	'FORWARD_PM'				=> 'Переслати ПП',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Для подальшого використання конференції вам необхідно змінити свій пароль.',
	'FRIEND_MESSAGE'			=> 'Повідомлення від друга',
	'FRIENDS'					=> 'Друзі',
	'FRIENDS_EXPLAIN'			=> 'Список друзів дозволяє вам одержати швидкий доступ до користувачів, з якими ви часто спілкуєтеся. За наявності відповідної підтримки в стилі форуму, всі повідомлення ваших друзів будуть виділені при перегляді.',
	'FRIENDS_OFFLINE'			=> 'Не в мережі',
	'FRIENDS_ONLINE'			=> 'В мережі',
	'FRIENDS_UPDATED'			=> 'Список друзів був успішно оновлено.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Дія, що виконується у разі переповнення папки, змінено.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Вихідне повідомлення --------',
	'FWD_SUBJECT'				=> 'Тема: %s',
	'FWD_DATE'					=> 'Дата: %s',
	'FWD_FROM'					=> 'Від: %s',
	'FWD_TO'					=> 'Кому: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Важлива',

	'HIDE_ONLINE'				=> 'Приховати моє перебування на конференції',
	'HIDE_ONLINE_EXPLAIN'		=> 'Зміна налаштування набуде чинності тільки з наступного відвідування конференції.',
	'HOLD_NEW_MESSAGES'			=> 'Не приймати нові повідомлення [нові повідомлення будуть відкладені до появи достатньої кількості вільного місця]',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Нові повідомлення будуть відкладені',

	'IF_FOLDER_FULL'			=> 'Якщо папка заповнена',
	'IMPORTANT_NEWS'			=> 'Важливі оголошення',
	'INVALID_USER_BIRTHDAY'		=> 'Введена дата дня народження має невірний формат.',
	'INVALID_CHARS_USERNAME'	=> 'Ім\'я користувача містить заборонені символи.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Пароль не містить необхідних символів.',
	'ITEMS_REQUIRED'			=> 'Поля свого профілю, відмічені *, обов\'язкові до заповнення.',

	'JOIN_SELECTED'				=> 'Вступити в обрану',

	'LANGUAGE'					=> 'Мова',
	'LINK_REMOTE_AVATAR'		=> 'Зовнішнє посилання',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Введіть URL, за яким знаходиться файл із зображенням, він буде використаний в якості вашої аватари.',
	'LINK_REMOTE_SIZE'			=> 'Розміри аватари',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Вкажіть висоту і ширину аватари або залиште поля порожніми для їх автоматичної перевірки.',
	'LOGIN_EXPLAIN_UCP'			=> 'Будь ласка, увійдіть, для входу в ваш особистий розділ.',
	'LOGIN_REDIRECT'			=> 'Ви успішно увійшли в систему.',
	'LOGOUT_FAILED'				=> 'Ви не вийшли з конференції, так як запит не відповідав параметрам вашої сесії. Зв\'яжіться з адміністратором конференції, якщо проблема повториться.',
	'LOGOUT_REDIRECT'			=> 'Ви успішно вийшли з системи.',

	'MARK_IMPORTANT'				=> 'Помітити / зняти позначку',
	'MARKED_MESSAGE'				=> 'Позначене повідомлення',
	'MAX_FOLDER_REACHED'			=> 'Досягнуто максимальну кількість користувальницьких папок.',
	'MESSAGE_BY_AUTHOR'				=> '',
	'MESSAGE_COLOURS'				=> 'Кольори повідомлень',
	'MESSAGE_DELETED'				=> 'Повідомлення успішно видалено.',
	'MESSAGE_EDITED'				=> 'Повідомлення успішно відредаговано.',
	'MESSAGE_HISTORY'				=> 'Історія повідомлень',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Це повідомлення було видалено автором.',
	'MESSAGE_SENT_ON'				=> 'від',
	'MESSAGE_STORED'				=> 'Ваше повідомлення успішно відправлено.',
	'MESSAGE_TO'					=> 'Кому',
	'MESSAGES_DELETED'				=> 'Повідомлення успішно видалені',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Перемістити повідомлення з видаленої папки в папку',
	'MOVE_DOWN'						=> 'Перемістити вниз',
	'MOVE_MARKED_TO_FOLDER'			=> 'Перемістити відмічені в папку %s',
	'MOVE_PM_ERROR'					=> 'Під час переміщення повідомлень в нову папку сталася помилка, перенесено повідомлень: %1d из %2d.',
	'MOVE_TO_FOLDER'				=> 'Перемістити в папку',
	'MOVE_UP'						=> 'Перемістити вверх',

	'NEW_EMAIL_CONFIRM_EMPTY'		=> 'Ви не ввели підтвердження адреси email.',
	'NEW_EMAIL_ERROR'				=> 'Введені вами адреси email не збігаються.',
	'NEW_FOLDER_NAME'				=> 'Нове ім\'я папки',
	'NEW_PASSWORD'					=> 'Новий пароль',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'Ви не ввели підтвердження пароля.',
	'NEW_PASSWORD_ERROR'			=> 'Введені вами паролі не збігаються.',
	'NOTIFY_METHOD'					=> 'Спосіб сповіщення',
	'NOTIFY_METHOD_BOTH'			=> 'Обидва способи',
	'NOTIFY_METHOD_EMAIL'			=> 'Тільки email',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Засіб відправки повідомлень, що посилаються цими форумами.',
	'NOTIFY_METHOD_IM'				=> 'Тільки Jabber',
	'NOTIFY_ON_PM'					=> 'Повідомляти мене про нові приватні повідомлення',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Ви не можете додати гостя в список друзів.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Ви не можете додати бота в список друзів.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Ви не можете додавати користувачів зі списку недругів до списку друзів.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Ви не можете додати самого себе в список друзів.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Ви не можете додавати адміністраторів і модераторів до списку недругів.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Ви не можете додати гостя в список недругів.',
	'NOT_ADDED_FOES_BOTS'			=> 'Ви не можете додати бота в список недругів.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Ви не можете додавати користувачів зі списку друзів у список недругів.',
	'NOT_ADDED_FOES_SELF'			=> 'Ви не можете додати самого себе в список недругів.',
	'NOT_AGREE'						=> 'Я не згоден з цими умовами',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Папка-одержувач «%s» заповнена. Дія яку ви хотіли, не було виконано.',
	'NOT_MOVED_MESSAGE'				=> 'Папка з вашими особистими повідомленнями заповнена. Відкладених повідомлень: 1.',
	'NOT_MOVED_MESSAGES'			=> 'Папка з вашими особистими повідомленнями заповнена. Відкладених повідомлень: %d.',
	'NO_ACTION_MODE'				=> 'Не обрано дію для повідомлення.',
	'NO_AUTHOR'						=> 'Не вказаний автор повідомлення',
	'NO_AVATAR_CATEGORY'			=> 'Ні',

	'NO_AUTH_DELETE_MESSAGE'		=> 'У вас немає доступу до видалення особистих повідомлень.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'У вас немає доступу до редагування особистих повідомлень.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'У вас немає доступу до пересилання особистих повідомлень.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'У вас немає доступу до відправки особистих повідомлень у групи.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'У вас немає доступу до отримання нового пароля.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'У вас немає доступу до читання відкладених особистих повідомлень.',
	'NO_AUTH_READ_MESSAGE'			=> 'У вас немає доступу до читання особистих повідомлень.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Ви не можете прочитати це повідомлення, тому що воно було видалено його автором.',
	'NO_AUTH_SEND_MESSAGE'			=> 'У вас немає доступу до відправки особистих повідомлень.',
	'NO_AUTH_SIGNATURE'				=> 'У вас немає доступу до редагування підпису.',

	'NO_BCC_RECIPIENT'			=> 'Ні',
	'NO_BOOKMARKS'				=> 'У вас немає закладок.',
	'NO_BOOKMARKS_SELECTED'		=> 'Ви не відзначили закладки.',
	'NO_EDIT_READ_MESSAGE'		=> 'Приватне повідомлення не може бути змінено, оскільки вже було прочитано.',
	'NO_EMAIL_USER'				=> 'Введена інформація про email / імені користувача не знайдена.',
	'NO_FOES'					=> 'Список недругів порожній',
	'NO_FRIENDS'				=> 'Список друзів порожній',
	'NO_FRIENDS_OFFLINE'		=> 'Немає друзів поза мережі',
	'NO_FRIENDS_ONLINE'			=> 'Немає друзів в мережі',
	'NO_GROUP_SELECTED'			=> 'Група не вибрана.',
	'NO_IMPORTANT_NEWS'			=> 'Немає важливих оголошень.',
	'NO_MESSAGE'				=> 'Приватне повідомлення не знайдено.',
	'NO_NEW_FOLDER_NAME'		=> 'Ви повинні вказати нове ім\'я папки.',
	'NO_NEWER_PM'				=> 'Немає нових повідомлень.',
	'NO_OLDER_PM'				=> 'Немає старих повідомлень.',
	'NO_PASSWORD_SUPPLIED'		=> 'Ви не можете увійти без пароля.',
	'NO_RECIPIENT'				=> 'Одержувач повідомлення не обраний.',
	'NO_RULES_DEFINED'			=> 'Правил не встановлено.',
	'NO_SAVED_DRAFTS'			=> 'Немає збережених чернеток.',
	'NO_TO_RECIPIENT'			=> 'Ні',
	'NO_WATCHED_FORUMS'			=> 'Ви не підписані на які-небудь форуми.',
	'NO_WATCHED_SELECTED'		=> 'Ви не обрали тем чи форумів, на які підписані.',
	'NO_WATCHED_TOPICS'			=> 'Ви не підписані на які-небудь теми.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Пароль повинен бути довжиною від %1$d до %2$d знаків, містити літери різних регістрів і цифри.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Повинен бути довжиною від %1$d до %2$d знаків.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Пароль повинен бути довжиною від %1$d до %2$d знаків і містити букви різних регістрів.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Пароль повинен бути довжиною від %1$d до %2$d знаків і містити букви різних регістрів, цифри і символи.',
	'PASSWORD'					=> 'Пароль',
	'PASSWORD_ACTIVATED'		=> 'Ваш новий пароль активовано.',
	'PASSWORD_UPDATED'			=> 'Новий пароль успішно відправлений на ваш реєстраційний адресу email.',
	'PERMISSIONS_RESTORED'		=> 'Ваші права доступу відновлені.',
	'PERMISSIONS_TRANSFERRED'	=> 'Імітація прав доступу, встановлених для <strong>%s</strong>, успішно проведена. Зараз ви можете переглядати конференцію з обмеженнями, встановленими для даного користувача.<br />Будь-ласка, пам\'ятайте, що права адміністратора відключені. Ви можете перервати імітацію в будь-який час.',
	'PM_DISABLED'				=> 'Приватні повідомлення на цій конференції відключені.',
	'PM_FROM'					=> 'Від',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Це повідомлення від користувача, облікового запису якого видалено.',
	'PM_ICON'					=> 'Значок ПП',
	'PM_INBOX'					=> 'Вхідні',
	'PM_NO_USERS'				=> 'Запитувані для додавання користувачі не існують.',
	'PM_OUTBOX'					=> 'Вихідні',
	'PM_SENTBOX'				=> 'Відправлені',
	'PM_SUBJECT'				=> 'Тема повідомлення',
	'PM_TO'						=> 'Кому',
	'PM_USERS_REMOVED_NO_PM'	=> 'Деякі користувачі не можуть бути додані, так як вони відключили одержання особистих повідомлень.',
	'POPUP_ON_PM'				=> 'Спливаюче вікно при отриманні приватного повідомлення',
	'POST_EDIT_PM'				=> 'Редагувати',
	'POST_FORWARD_PM'			=> 'Переслати',
	'POST_NEW_PM'				=> 'Створити повідомлення',
	'POST_PM_LOCKED'			=> 'Приватне повідомлення заблоковане.',
	'POST_PM_POST'				=> 'Цитувати',
	'POST_QUOTE_PM'				=> 'Цитувати повідомлення',
	'POST_REPLY_PM'				=> 'Відповісти',
	'PRINT_PM'					=> 'Для друку',
	'PREFERENCES_UPDATED'		=> 'Особистий розділ оновлений.',
	'PROFILE_INFO_NOTICE'		=> 'Будь ласка, пам\'ятайте, що ця інформація може бути доступна іншим користувачам. Будьте обережні при виборі вказуються персональних даних. Будь-які поля, позначені зірочкою (*), мають бути заповнені.',
	'PROFILE_UPDATED'			=> 'Ваш профіль оновлено.',

	'RECIPIENT'							=> 'Одержувач',
	'RECIPIENTS'						=> 'Одержувачі',
	'REGISTRATION'						=> 'Реєстрація',
	'RELEASE_MESSAGES'					=> '%sДодати всі відкладені повідомлення%s… які будуть розсортовані у відповідній папці за наявності вільного місця',
	'REMOVE_ADDRESS'					=> 'Видалити адрес',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Видалити вибрані закладки',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Ви впевнені, що хочете видалити всі вибрані закладки?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Видалити відмічені закладки',
	'REMOVE_FOLDER'						=> 'Видалити папку',
	'REMOVE_FOLDER_CONFIRM'				=> 'Ви впевнені, що хочете видалити цю папку?',
	'RENAME'							=> 'Перейменувати',
	'RENAME_FOLDER'						=> 'Перейменувати папку',
	'REPLIED_MESSAGE'					=> 'Позначені повідомлення',
	'REPLY_TO_ALL'						=> 'Відповідь відправникові та всім одержувачам.',
	'REPORT_PM'							=> 'Поскаржитися на приватне повідомлення',
	'RESIGN_SELECTED'					=> 'Покинути обрану',
	'RETURN_FOLDER'						=> '%1$sПовернутися в попередню папку%2$s',
	'RETURN_UCP'						=> '%sПовернутися в Особистий розділ%s',
	'RULE_ADDED'						=> 'Правило успішно додано.',
	'RULE_ALREADY_DEFINED'				=> 'Таке правило вже було додано раніше.',
	'RULE_DELETED'						=> 'Правило успішно видалено.',
	'RULE_LIMIT_REACHED'				=> 'Неможливо додати правило, так як досягнуто максимально можлива їх кількість.',
	'RULE_NOT_DEFINED'					=> 'Правило вказано некоректно.',
	'RULE_REMOVED_MESSAGE'				=> 'Фільтрами ПП було видалено особистих повідомлень: 1',
	'RULE_REMOVED_MESSAGES'				=> 'Фільтрами ПП було видалено особистих повідомлень: %d',

	'SAME_PASSWORD_ERROR'		=> 'Введений вами новий пароль збігається з вашим поточним.',
	'SEARCH_YOUR_POSTS'			=> 'Показати ваші повідомлення',
	'SEND_PASSWORD'				=> 'Відіслати пароль',
	'SENT_AT'					=> 'Відправлено',
	'SHOW_EMAIL'				=> 'Показувати мою адресу email',
	'SIGNATURE_EXPLAIN'			=> 'Це текст, який може автоматично додаватися до ваших повідомлень. Максимальна довжина в символах: %d.',
	'SIGNATURE_PREVIEW'			=> 'Ваш підпис в повідомленнях буде виглядати так',
	'SIGNATURE_TOO_LONG'		=> 'Ви ввели занадто довгий підпис.',
	'SORT'						=> 'Сортувати',
	'SORT_COMMENT'				=> 'Коментарі',
	'SORT_DOWNLOADS'			=> 'Скачування',
	'SORT_EXTENSION'			=> 'Розширення',
	'SORT_FILENAME'				=> 'Назва файлу',
	'SORT_POST_TIME'			=> 'Час',
	'SORT_SIZE'					=> 'Розмір',

	'TIMEZONE'					=> 'Часовий пояс',
	'TO'						=> 'Кому',
	'TOO_MANY_RECIPIENTS'		=> 'Ви спробували відправити приватне повідомлення занадто великому числу одержувачів.',
	'TOO_MANY_REGISTERS'		=> 'Ви вичерпали граничну кількість спроб реєстрації для цієї сесії. Повторіть спробу пізніше.',

	'UCP'						=> 'Особистий розділ',
	'UCP_ACTIVATE'				=> 'Активувати обліковий запис',
	'UCP_ADMIN_ACTIVATE'		=> 'Зверніть увагу на те, що ви повинні ввести правильну адресу електронної пошти перед активацією. Адміністратор перевірить ваш обліковий запис і відправить на вказану адресу лист, що містить посилання для активації облікового запису.',
	'UCP_AIM'					=> 'AIM',
	'UCP_ATTACHMENTS'			=> 'Додаткові файли',
	'UCP_COPPA_BEFORE'			=> 'До %s',
	'UCP_COPPA_ON_AFTER'		=> '%s і після',
	'UCP_EMAIL_ACTIVATE'		=> 'Зверніть увагу на те, що ви повинні ввести правильну адресу електронної пошти перед активацією. На вказану вами адресу прийде лист, що містить посилання для активації облікового запису.',
	'UCP_ICQ'					=> 'ICQ',
	'UCP_JABBER'				=> 'Jabber',

	'UCP_MAIN'					=> 'Огляд',
	'UCP_MAIN_ATTACHMENTS'		=> 'Додаткові файли',
	'UCP_MAIN_BOOKMARKS'		=> 'Закладки',
	'UCP_MAIN_DRAFTS'			=> 'Чернетки',
	'UCP_MAIN_FRONT'			=> 'Початок',
	'UCP_MAIN_SUBSCRIBED'		=> 'Підписки',

	'UCP_MSNM'					=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Ви не створили жодного вкладення.',

	'UCP_PREFS'					=> 'Особисті налаштування',
	'UCP_PREFS_PERSONAL'		=> 'Загальні налаштування',
	'UCP_PREFS_POST'			=> 'Відправлення повідомлень',
	'UCP_PREFS_VIEW'			=> 'Налаштування відображення',

	'UCP_PM'					=> 'Приватні повідомлення',
	'UCP_PM_COMPOSE'			=> 'Нове повідомлення',
	'UCP_PM_DRAFTS'				=> 'Управління чернетками',
	'UCP_PM_OPTIONS'			=> 'Правила, папки і налаштування',
	'UCP_PM_POPUP'				=> 'Приватні повідомлення',
	'UCP_PM_POPUP_TITLE'		=> 'Спливаюче вікно про нове приватне повідомлення',
	'UCP_PM_UNREAD'				=> 'Непрочитані повідомлення',
	'UCP_PM_VIEW'				=> 'Перегляд повідомлень',

	'UCP_PROFILE'				=> 'Профіль',
	'UCP_PROFILE_AVATAR'		=> 'Аватар',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Особисті дані',
	'UCP_PROFILE_REG_DETAILS'	=> 'Реєстраційні дані',
	'UCP_PROFILE_SIGNATURE'		=> 'Підпис',

	'UCP_USERGROUPS'			=> 'Групи',
	'UCP_USERGROUPS_MEMBER'		=> 'Участь у групах',
	'UCP_USERGROUPS_MANAGE'		=> 'Управління групами',

	'UCP_REGISTER_DISABLE'			=> 'Створення нового облікового запису на поточний момент неможливо.',
	'UCP_REMIND'					=> 'Відіслати пароль',
	'UCP_RESEND'					=> 'Відіслати лист для активації облікового запису',
	'UCP_WELCOME'					=> 'Ласкаво просимо у ваш особистий розділ. Звідси ви можете переглядати і змінювати налаштування, інформацію про себе та підписку на форуми і теми. Також, якщо вам це дозволено, ви можете посилати приватні повідомлення (ПП) іншим користувачам. Перед тим як продовжити, переконайтеся, що ви прочитали всі оголошення адміністрації.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Друзі та недруги',
	'UCP_ZEBRA_FOES'				=> 'Список недругів',
	'UCP_ZEBRA_FRIENDS'				=> 'Список друзів',
 	'UNDISCLOSED_RECIPIENT'			=> 'Невідомий одержувач',
	'UNKNOWN_FOLDER'				=> 'Невідома папка',
	'UNWATCH_MARKED'				=> 'Відписатися від виділеного',
	'UPLOAD_AVATAR_FILE'			=> 'Завантажити з вашого комп\'ютера',
	'UPLOAD_AVATAR_URL'				=> 'Завантажити з URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Введіть URL, за яким знаходиться файл із зображенням. Воно буде скопійовано на цей сайт.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Ім\'я користувача має бути від %1$d до %2$d знаків і має містити тільки букви.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Ім\'я користувача має бути від %1$d до %2$d знаків і має містити тільки літери, пробіл або символи -+_[]',
	'USERNAME_ASCII_EXPLAIN'		=> 'Ім\'я користувача має бути від %1$d до %2$d знаків і має містити тільки символи ASCII, без спеціальних символів.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Ім\'я користувача має бути від %1$d до %2$d знаків і має містити тільки букви або цифри.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Ім\'я користувача має бути від %1$d до %2$d знаків і має містити тільки букви, цифри, пробіл або символи -+_[]',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Ім\'я користувача має бути %1$d и до %2$d знаків.',
	'USERNAME_TAKEN_USERNAME'		=> 'Вибачте, користувач з таким ім\'ям вже існує',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Введене вами ім\'я користувача було заборонено або містить заборонене слово. Виберіть інше ім\'я.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Введене вами ім\'я користувача не знайдено, або даний користувач ще не пройшов процедуру активації.',

	'VIEW_AVATARS'				=> 'Показувати аватари',
	'VIEW_EDIT'					=> 'Переглянути/змінити',
	'VIEW_FLASH'				=> 'Показувати Flash-анімацію',
	'VIEW_IMAGES'				=> 'Показувати зображення в повідомленнях',
	'VIEW_NEXT_HISTORY'			=> 'Наступне ПП в архіві',
	'VIEW_NEXT_PM'				=> 'Наступне ПП',
	'VIEW_PM'					=> 'Переглянути повідомлення ',
	'VIEW_PM_INFO'				=> 'Інформація',
	'VIEW_PM_MESSAGE'			=> 'Повідомлень: 1',
	'VIEW_PM_MESSAGES'			=> 'Повідомлень: %d',
	'VIEW_PREVIOUS_HISTORY'		=> 'Попереднє ПП в архіві',
	'VIEW_PREVIOUS_PM'			=> 'Попереднє ПП',
	'VIEW_SIGS'					=> 'Показувати підписи',
	'VIEW_SMILIES'				=> 'Замінювати смайли зображеннями',
	'VIEW_TOPICS_DAYS'			=> 'Показувати теми за',
	'VIEW_TOPICS_DIR'			=> 'Порядок сортування тем',
	'VIEW_TOPICS_KEY'			=> 'Поле сортування тем',
	'VIEW_POSTS_DAYS'			=> 'Показувати повідомлення за',
	'VIEW_POSTS_DIR'			=> 'Порядок сортування повідомлень',
	'VIEW_POSTS_KEY'			=> 'Поле сортування повідомлень',

	'WATCHED_EXPLAIN'			=> 'Нижче розташований список форумів і тем, на які ви підписані. Ви будете сповіщені про появу в них нових повідомлень. Щоб відписатися від них, виділіть форум або тему і натисніть кнопку <em>Відписатися від виділеного</em>.',
	'WATCHED_FORUMS'			=> 'Ваші підписки на форуми',
	'WATCHED_TOPICS'			=> 'Ваші підписки на теми',
	'WRONG_ACTIVATION'			=> 'Ключ активації, зазначений вами, відсутній в базі даних.',

	'YOUR_DETAILS'				=> 'Ваша активність на форумах',
	'YOUR_FOES'					=> 'Ваші недруги',
	'YOUR_FOES_EXPLAIN'			=> 'Щоб прибрати користувачів зі списку, виділіть їх і натисніть «Відправити».',
	'YOUR_FRIENDS'				=> 'Ваші друзі',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Щоб прибрати користувачів зі списку, виділіть їх і натисніть «Відправити».',
	'YOUR_WARNINGS'				=> 'Отримано попереджень',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Помістити в папку',
		'MARK_AS_READ'		=> 'Помітити як прочитане',
		'MARK_AS_IMPORTANT'	=> 'Помітити як важливе',
		'DELETE_MESSAGE'	=> 'Видалити повідомлення'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Тема',
		'SENDER'	=> 'Відправник',
		'MESSAGE'	=> 'Повідомлення',
		'STATUS'	=> 'Статус повідомлення',
		'TO'		=> 'Одержувач'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'містить',
		'IS_NOT_LIKE'	=> 'не містить',
		'IS'			=> 'відповідає',
		'IS_NOT'		=> 'не соответствует',
		'BEGINS_WITH'	=> 'починається з',
		'ENDS_WITH'		=> 'починається на',
		'IS_FRIEND'		=> 'друг',
		'IS_FOE'		=> 'недруг',
		'IS_USER'		=> 'користувач',
		'IS_GROUP'		=> 'входить в групу',
		'ANSWERED'		=> 'Прийняті',
		'FORWARDED'		=> 'відправлене',
		'TO_GROUP'		=> 'в мою групу за замовчуванням',
		'TO_ME'			=> 'мені'
	),


	'GROUPS_EXPLAIN'	=> 'Групи дають адміністратору конференції більше можливостей з управління користувачами. За замовчуванням ви поміщені в певну групу. Від того, в якій із груп ви перебуваєте за замовчуванням, залежить ваше відображення у конференції: колір вашого імені, аватара, звання і т. п. Залежно від того, чи дозволено це адміністратором, ви можете змінити задану за замовчуванням групу. Ви можете бути поміщені або вам може бути дозволено вступити в іншу групу. Участь в деяких групах може давати додаткові права доступу до розділів форуму або інші можливості.',
	'GROUP_LEADER'		=> 'Лідер групи',
	'GROUP_MEMBER'		=> 'Учасник групи',
	'GROUP_PENDING'		=> 'Кандидат на вступ до групи',
	'GROUP_NONMEMBER'	=> 'Не перебуває у групах',
	'GROUP_DETAILS'		=> 'Інформація про групи',

	'NO_LEADER'		=> 'Немає лідерів групи',
	'NO_MEMBER'		=> 'Немає членів групи',
	'NO_PENDING'	=> 'Немає кандидатів у члени групи',
	'NO_NONMEMBER'	=> 'Немає порожніх груп',
));

?>
