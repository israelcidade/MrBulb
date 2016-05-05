<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mrbulb');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U8I.~tiv+G2%@i)=X_8Z(>SB ^Kk<Ek%F%F$@Li;Mq1f+l%+84s.qXicoD u^{#O');
define('SECURE_AUTH_KEY',  '}%YVrGg>tUH;~!LUhB)rNTxMq )^@s-kMrC43j#PiwfS%e[Y*x-U;y-Ns2Mg&z)K');
define('LOGGED_IN_KEY',    '9s~Y`ihHJ>@hTzGJ,fO8pOS%SZTl*`H#U,&CLQUR;Yq2r23rIM4COZ^{i]E6/Rv[');
define('NONCE_KEY',        'l Zo@+|+8M-+R(20!ZJKE%XrD_0;YJRBb:4]55ZDWk+|`LJ-1D|4x3xKx0UYC?>g');
define('AUTH_SALT',        '!^c`j{5JRhprlUDH^b+vP |4k>KZza;-y(+-e`M#s/Lqyk^)IAWI6 69dwd+WRWq');
define('SECURE_AUTH_SALT', ',#LYS|3.E=$wAc?WjVy Ra% PHTP--I0xJuK:QJbGTkAd|R)+G!MhO+8EjQSz|nY');
define('LOGGED_IN_SALT',   'zMcm/e8;6H+APPRHX@ETOjr|ucb.0YRblCsF^&2HsA,^Fsu9-l4%oxiBoI4fK}Ac');
define('NONCE_SALT',       '-1%?k7VxPjdM#93wFEw~d) IRAp<QYSfOto.0=!qdK{|XI!1.3?#J26%x{AeYEXq');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
