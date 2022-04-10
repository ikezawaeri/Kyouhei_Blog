<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp01db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'twilight8430' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F}4eIf3LXfr=r13`?mf(S FY8geNM o#R5/y*_r=i%VJD6evDZxT1@?P)bdK+$MY' );
define( 'SECURE_AUTH_KEY',  '~7M/Ys} 4d:Mz;<hCVa~@k4o{*i(5xwpF?+W>,OS#/+x_i.0,B/ ^pg/l^1xJ>AH' );
define( 'LOGGED_IN_KEY',    ')GRtM!s)m`cT`Fm20_*z&;$%Y@>8xUtzekl}SFBea9nHXS/-=yOK/PYdD1KCL%,D' );
define( 'NONCE_KEY',        ':%zWcc/CI~@<9]qV0A;{p|aJ`U(dL<CHDF74Qrp_VG/LtQi}g0=2P3U@HR/0AFXU' );
define( 'AUTH_SALT',        'FpcL?+{gE@FY}XSu(SV)1m)k&eDKjf[m}Qv-]k4F6K($q(^g7Fb{vM_$#ky#8j32' );
define( 'SECURE_AUTH_SALT', 'U$@UF_No]X0erH{VmOAX_:ay(f/LvKzQlb),N+iAt{`[x@Qz^|o_LMcy6jckHK^o' );
define( 'LOGGED_IN_SALT',   'Zxof1c_t3Q77vLl,Im_zI-$=T}cZjKvt# MpnId369rz8G}Vj(O@qle^jX?I][tJ' );
define( 'NONCE_SALT',       '>E} ncD^fV1OGC p/^w^c(r<6 v[{,C0NMITAmvvn3(si VTr+-#tjF1uD{r9 L-' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
