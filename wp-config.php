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
define( 'DB_NAME', 'vhojuvit' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';(F*y~/yJzi%)uBLM`!ML(+EU59e[A*uxcup{S9W9+xYu7:^J|iMJXBM!O)ly<P;');
define('SECURE_AUTH_KEY',  '7]{>v;CxI|H(sqU+y::Ud~DTWbG1MZc-k`^;W+06(VYF&y?L 5F,CBg**+$QgQVN');
define('LOGGED_IN_KEY',    'IL]&ns1h@P|<meM6fyMhOoQ0-n+B-!UB5g.*8l+gSm-kz ZQ MclC&M( EB9o4kV');
define('NONCE_KEY',        '67MY(/_Nu|!`~-[h|MPw;IGlE!T)U(mQE&Ti.!o%)#2Q)@nRY.BcT2&Q8I<+}!i|');
define('AUTH_SALT',        '6#0Eh2uNf:z(IpY-W58$f%]g7W||o+vEM|:/9;OHW6N,S30=8WhZd]8;AIBv?DV,');
define('SECURE_AUTH_SALT', 'qOJ%:{2O$q09VXm &C*Ugii(7[;D  ?#f-0/{vQhcH*qs|+}c.@|TsS&|2{FC;UJ');
define('LOGGED_IN_SALT',   'RHnHXPnaV9^*i#0oykf*wx5]n|]w)j.Tbv!JjW[gl/fpz+k|K3Cz/9S;4iFi<C|p');
define('NONCE_SALT',       'b %!gQ|R4Qcf=W|rU7RF4U5_{Lu!P$=dyE%5d#^lgUiA!*,6qb,?8b$-yb_s8|Ol');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
