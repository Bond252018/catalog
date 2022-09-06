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
define( 'DB_NAME', 'catalog' );

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
define( 'AUTH_KEY',         'E5w1II?yn:b(?8Mq+7ry,F^y{oOX9+L^54adC,AU&M7wQEwm4zmH!l}*D$h%sN0j' );
define( 'SECURE_AUTH_KEY',  'hX.jSQ}uHLfP=+v/_,=~D4Tg0<-)lR*`w4:*==p3M!h=ANx8ZA-S5T&``a@&qld>' );
define( 'LOGGED_IN_KEY',    'U~[}Q1:6P%U#OeLEqaV4yGu,_OXMbNB~g`dX9&&C@K5_bKL5Cvcv!OB?JcVMmKa_' );
define( 'NONCE_KEY',        '[ ^Cz{wx,#kl4.)Z{@VSH.|SiP28onT@rM3o4EOTyS3h1{Q{iJ4<S&trH|f.<E`/' );
define( 'AUTH_SALT',        '`mWjL)Uvh98f:1DE=[vj%Kna32I)`O-9`x1R:?pfo2aB]mW<zM_aU7V*.R&)%P@M' );
define( 'SECURE_AUTH_SALT', '>yv8Mx0`cHD4JVe0e%}u}1[<e82]$JECL9hI@(-8,ADdOK[`KaLQQ.?@.CBcPC?Z' );
define( 'LOGGED_IN_SALT',   ':VO(JM%^a78/>]COgiC&,s&Qt|bQ}V)2]J.jOqoUN9x[kRSWcrw@tu)HbUEV e6V' );
define( 'NONCE_SALT',       '0>84S.-F-mW^5Zdor*2J@y8`&dgQ>4*Fo[`4xQK)X17=U,@B))O@GT&$DL7`![OB' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ct_092022';

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
