<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'autodealer');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ff+XG47LbjP#f<_Hb7X~f^Z{jV`wp0*`sO9vr-OY1*G-s/1i[#XP Wp@J^.Qt(H#');
define('SECURE_AUTH_KEY',  '%2,*4&lepC{,-B/ mY{,bq/,2q&e%1SmIG,k#RF%4w:@?a(DqZN&8oEPx<z0Y{B-');
define('LOGGED_IN_KEY',    '^b[$_0L zcAlADh)zwpPja;XQyk*_O}4[ux<Re!FWuKzc*L@~cL@Ge0LhHVN&=x|');
define('NONCE_KEY',        'CrU)[fC`ffty6/q/c$WzJvzs,K;RHjaarPEP8r9l7(=~F m)I8@e[:CpA@0-qyo5');
define('AUTH_SALT',        '91B/D53v3k:27p9lpcbo.r]hnJ^e[TUy%earvVXrOCZzh8Gl(=4`8S>%_RYq3/^f');
define('SECURE_AUTH_SALT', 'f(Luw6]06T$>TRo7 s=+:*%B_~zoHkLS{Bf4a)>IOW3c(?&1AZ4:!x+/<&zd2TS6');
define('LOGGED_IN_SALT',   'HR<ZDaborktUP$pC):dlZ=^#L{EVmHv_^lb/=o(&x~{W@ec@+5!f4&7P4bPvm7!R');
define('NONCE_SALT',       '`od/Fo~Y>Ii5jI1+t$K mF6X<+a$qmB=AXBF@H| gad;!.OOr3Wm29/jWfE3YV-/');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
