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
define('DB_NAME', 'test_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'mysql');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '/uJ7bD>#XQPh2EO8gbj59A r>9XVgWfh`+=x3&nz_!:DM< n+R8+.@g]|!0W]Fd,');
define('SECURE_AUTH_KEY',  'bA[&X#i|<29`@bc|.dto$8)BKg=hJ>cbG//D ;CV.V(uR} x/`/cU9S35<0c1V%^');
define('LOGGED_IN_KEY',    '7:4iC)Nx|#p`-E9%|3P(/f8?4!Kh[G8.CY=6zpc2TZDF.wYNSkQ]6{~owACmy[6[');
define('NONCE_KEY',        'h 4CEe08C(ULshzpVpT&<c*{ ~NPspYv=^gah}n*:YZ,@n##6sttK ~/JW- m8?m');
define('AUTH_SALT',        'xXA&S>9F|mO$TAB1fz!pE%Zr<Url4>84/fSYt:&@0/8:8zxCe_s7T|,z ?d~.!6T');
define('SECURE_AUTH_SALT', 'xf4xV?38<W0.MeD u(#U+j,,73%fIbZ1%i,Ab.ms Ww7.N`O`swRo$:z)w#zaqA<');
define('LOGGED_IN_SALT',   'W0Ujp&CFXmja5dyaw|r{h>`~NM5*qcSx&`-nNbfh{YKTwPxDtP.7b{BM=G%%)JLh');
define('NONCE_SALT',       '?9F7QnB?QX!F]o2gtqf]n0w2:*:|ixQ=RkWb8[/<Y; jqHQ6a/o>BOA*Rr~-Ffw4');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'test_wp_';

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
