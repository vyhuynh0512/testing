<?php
define('WP_CACHE', false);
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'db_scodeweb' );

/** Username của database */
define( 'DB_USER', 'urs_scodeweb' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'scodeweb.com' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Le]?$&(^^ym=#sI5~Z66{3THpt,I,?5O6{C#?5%=dkeEpjyMmYW45f4I2>(0r8Sg');
define('SECURE_AUTH_KEY',  '5NcA]~fnAB2 zVZ=B9r+id L{5;Q28`R;*:f2AK1>c|yN1~vVs0L[e`Y8EC?80*v');
define('LOGGED_IN_KEY',    ':,NLVD|IR b+%36Q+6QRjI|Eq|;v(I7y:9QriW`0Fmd}%ebXFWY_Jp<N#Z!&!<v7');
define('NONCE_KEY',        'FEf1-@h|Ucv=_pmZC*53=+O7jw4aY&eg{?Pg0:$8yZH8r<a/0$.UVxl0auj9m[;g');
define('AUTH_SALT',        ';+mmRK5nd8b00$HdD-_AP^Z%6#LL$FjoTS)xi*E_}.,q{iW%E!}(-CX{#[igjMn#');
define('SECURE_AUTH_SALT', 'vXnf4{z)Bp&dR*]1w6j7GrM|km^cEVd`a]:gDfED_x!Byx2,?;>ME^.:[}15RU!q');
define('LOGGED_IN_SALT',   'bc*Q(Z3<I<7re@3)TO!:?r!t|w<&Y1bD pkXN}6:$XO)2%Oc0TaYB/df~kq`FwN1');
define('NONCE_SALT',       'QP;q5t^aa]oT[JCUpO3P+[:=ns;r*6Rwag*4|S_K,)ldxSLWKDw/`;%HAZ_Pu;WZ');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'bz_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
