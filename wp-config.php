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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '12345678' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '/j86k%cFf&~,*.z~kf:JF.|,dQ2<[(+W_myheIO@5,^2$5| yx-dsT1U.-A+nO#z' );
define( 'SECURE_AUTH_KEY',  '~3q:_JMbin`|jB3Ceg6A@wc!qrt8JSr,]`fg!C}$jnlq9&+_SN:SV4[$iV+Bo9N,' );
define( 'LOGGED_IN_KEY',    ')#B<*SY?Mcc+,o3lnhIzksaqAPzR@v%i6tJ0ux|bu+N-;dI.FQ3Nd<Fz;cy@JL>3' );
define( 'NONCE_KEY',        'UG7Zr5AU~MP9ZgJ>tQi9bTwb+gs4Z^3K_]|PmLN VUOU)T^[taiKJP1}umg^uJdY' );
define( 'AUTH_SALT',        'v]cs6l-VS9%8CT%Qq)[-=80zm8?hL8gj!`r^q[1*ct*-)eJ_xthB*}{sG+J/(T]/' );
define( 'SECURE_AUTH_SALT', 'G+yR:$ I,uW$j>j3!sx8vI[RV qw3y]nOSS!~}i+=hWo,|yAAtcp!)Ul|WmPe&|E' );
define( 'LOGGED_IN_SALT',   ',~A/?.42[A~]M/ Az3,O7-irJrt+WoJsxqcsmZ`~=f_)1=7l22;GnH%5lrL4RlxC' );
define( 'NONCE_SALT',       'nqP}._|ZFf[u6.2n[}Pm{bCt<:9!9?LE8;^! K+TC~:xai- oy/<v5|geuO/,yu^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
