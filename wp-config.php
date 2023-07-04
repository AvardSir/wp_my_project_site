<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'my_project' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')BbV.-Dd/2rAw?MzTm !D9==!FvEWK?+.msy+stz_-it6qc:UU&zvbW<%--O&o`V' );
define( 'SECURE_AUTH_KEY',  'P+TD#|#9(b)%QovnvG6vL[%Mm4w%:7|4Q]}rKoA$rN`t3$6mL)DtG3PXA_@x#F%t' );
define( 'LOGGED_IN_KEY',    '$9&-R/URoSO0/k#DSwvlQfBo*j?LuoO%<CUv_y^H*TQ3(3^TOZ/**_ffg<tq+&)-' );
define( 'NONCE_KEY',        '(Ehw%`/nu<}WTR?arPRNTrIdW~p4 }YwG9M2*Z>Dcdbv8K<%_.0tdb+K!9lL<%ut' );
define( 'AUTH_SALT',        '.gW)BllZS5&wrCU}V]JV%D>w&q>k86c}1b`P:j42Bd+UPEONx&c7k/uOo#qVeNN}' );
define( 'SECURE_AUTH_SALT', 'n;TV-3,@lyE@F_CKM.ZXm,0f#!& [{9b7;EfVVg^XqPgVEJ#VeQ/{a@#%;yYhU:l' );
define( 'LOGGED_IN_SALT',   '=d0]L3ud}@c!zEWlQ:ZBtRZ<o9f2S|<Bu@dg&vBHQ},W!xVA-)qucy9,XY0III_D' );
define( 'NONCE_SALT',       'xVQjhOTAQ,E4%:&X]lqfN1n#wKpjFx)t!0n<bOD.YglM-flA<rsh@Q}c.IBGTovA' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */


define ('ALLOW_UNFILTERED_UPLOADS', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
