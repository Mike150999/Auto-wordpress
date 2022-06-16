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
 * * Настройки MySQL
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
define( 'DB_NAME', 'auto_bd' );

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
define( 'AUTH_KEY',         '_m8]RdLt2{tsZlZ3]yElZg;?,y7@N`t(4!I+aS)>>_O^f9]uw-7[:jEyK;4R|jT4' );
define( 'SECURE_AUTH_KEY',  'S&f wo-yxnVW-{.O/sZ=B`yJI3Bq1_},BTxBg Dkol8m`DgkvgMv?I*P4l-V!d(R' );
define( 'LOGGED_IN_KEY',    'il$A_7KFk+_7_3,>ca^+V]txt=z|D`(M~@E-yYbC3Q7h8jR 76[5}5)i%hzK/=b8' );
define( 'NONCE_KEY',        '2{p Oy=akop33fwQGMs2G+}H-~?a(AQ=R(g2hFlbD#)>Bab|*ZxHAFV``}b~*k/P' );
define( 'AUTH_SALT',        'HZ*2={u{Ni@31ijMr8~0+TMe~KY [X0n-u2a:X=0]elD,C-=U7=dX7%pLN9m*B_|' );
define( 'SECURE_AUTH_SALT', '10Oswd@qJVUJWQFtLe_!AEJ!I[7gEmDYxl#Qbs~`GHQmR*>Hm(>xBUpSH;_QEY8+' );
define( 'LOGGED_IN_SALT',   'wCf&<c@JUYl}`(A^.HLG+dSa(P8_,0iL7KIYit^qyb~bz`O(Yx,d%E!DCBF7A{&0' );
define( 'NONCE_SALT',       'u$G?/)VNn]@qenREg~kvQ;m-29Q({G7b_jq3?k#X`_+SLrp|U-fj$6~I(G{AX<)Q' );

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



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
