<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'novashipyard' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}%C9DUM~pmCO HHIe52#c9.e|2#JH|rO[5pJ3PF$`:-%r5l[cIFA8|:3qtfAC.:T' );
define( 'SECURE_AUTH_KEY',  'mr[%#R&o6x>bMS:] +gU#xY=|sPzsTnUWB@^+HvtGjDlh$v!g$:3N tg{8d0NL6o' );
define( 'LOGGED_IN_KEY',    '^ p{?@vI1n$UGylXjm(pzU.2yBh^L+KhQnQrV$OIW3Dotmk&GFX-Dkg/d0N(nYfw' );
define( 'NONCE_KEY',        'zy7+2aL3Fa*_uvF>`7ZJ ,^WGNz/&9PvBtQca_uj2[:MLJA;Igdj0)7;:oF#qQ!~' );
define( 'AUTH_SALT',        '0dpfPKK]1&R*^dr}$qg_1+=_qv;?9{`AxKAG scq5KK28|]l1%ORlS]!mF*0 H0*' );
define( 'SECURE_AUTH_SALT', '+;(i)=4-WeBZ,siX7+f(}C:ceQd&Oy7Ig_0<}LgW?Rz&:sk{X<EH=u wRZ)^!0F(' );
define( 'LOGGED_IN_SALT',   '3`1O-d{<rZ,+>4,Cxpj*)Q<MWRxGhT^B&r,.3Xs]PgBR03wevJd).G>iYNGmp)%Q' );
define( 'NONCE_SALT',       '*Be]r$gKE{S<zv]MrbZQ&? $@Vw7pbx{+}nl|.#`;8MWk3lFiV-}!59,<n1zGyKp' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';