<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'wordpress');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');



/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vK&9C$DWf`&!|>$5vh^jl($]<|<<cje/a ehx$Ajn,U!YcB4c!/KF2Z{n~qeNb`A');
define('SECURE_AUTH_KEY',  'm%]z@J K[DjGU=M+iC..b-ojOD5&U_=rTl|u2!/G`l@-+THsy+c?r%7|4KsYhD:-');
define('LOGGED_IN_KEY',    '&#spFP|&g{3-XLyiFiGC!tc]p4C)(Y3;<NA#`f c5y|9T2^oKp!|]Ws!w9OH&BYB');
define('NONCE_KEY',        '^=@ZHp]91D26jfp)((X5^k|8J}vQxPHu<t-dd^nv6R6FOwZWdr0ZMySGaY,?@8,`');
define('AUTH_SALT',        'o|96ZYl`D/M-}+LD+#V~G!Xt}2*Pvyi$RYE0h/YY++lW&fR9UR>@wtiqlk0E6:dj');
define('SECURE_AUTH_SALT', 'aOEJ`Jw!-+<1*j@)Z?0;C8GPC/cRM*(VsVNV#lZ3HI/1lusB17r+@BT~|49pr-+O');
define('LOGGED_IN_SALT',   'R7;YT+}~js,H$Oafbgp[Cy]Jp$IW M v0/$%%H;!$<mw[~/{G6;$*|n/w4!N=}>c');
define('NONCE_SALT',       'rUMXL6wS}VJ6R0x$T~/I<O_R5*!ld7iYM6CNFV|E]yB{-?aWWfce4-=[6YCS)}oz');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');