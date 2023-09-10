<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'pizzaria' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6%;CgK*H-T0Yf^*+{ne(|C0>Z&;etLfz=mA`r2ueA{<2^!+d8T?7NdZx^j~4{rMI' );
define( 'SECURE_AUTH_KEY',  'c<8yg(*~FdaI+p@|28T?Ka3k.suJqhK`B#py&0oH&2aTTBPAj`dG`RLIms_5-QLg' );
define( 'LOGGED_IN_KEY',    'eRtKU8|u-!hMtPF]BDitz!Rv~+6 Uq;PWns_JjqH=xddj03|9bw^9N$a}o&p&vzZ' );
define( 'NONCE_KEY',        'iOzvnSKK[Pu0H;H#23Pn)rJLFO;c-. =5$qo%S}^.s.6^wu=3h2lN5s!tI`=|7T6' );
define( 'AUTH_SALT',        '[/&(hneZKX9r0r3C_}0z7<,[~|jT 0NSgq|qbAukW*`#3Ldb_lf%eb!yvgTQ h7B' );
define( 'SECURE_AUTH_SALT', 'PqqFLO2 yJ|pEfn,P)MwS*9Ew7TY`T~xFI49biDo6OPvz,99Zc<b|U=~P]~!%-J_' );
define( 'LOGGED_IN_SALT',   '_SLd~.9|3n=Gt!u19Uwe5]mLW65,8rJ[6Rv`M,#|WC0n?6ci/7oZ6VdKQ>M.~jW[' );
define( 'NONCE_SALT',       'nH~3&&#CIC8grbV8Dr))*Hq&5wOG4S>T:F!h(=GQae/Qu^!^OM6[NyXoLgHZ!B2z' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
