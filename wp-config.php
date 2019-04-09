<?php
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
define('DB_NAME', 'vape_zestix');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'mZ5- Gs94Hdiz!z5 Rs,PV=X7RE|o:3r><:+Fwh$^ VKZs`oM)Eg[e%oTz(8XIZJ');
define('SECURE_AUTH_KEY',  '?1$Fq!.7|$.2|/08:e8D&zPD{jx`N*;.TR~8dp)F5{rJd<SoS5]:PQnP+CX*3[N8');
define('LOGGED_IN_KEY',    'YI;@?(S~ 9k~= 9#q[0i$T8.$j1WD:EnlF=D;};jS;R)ScW4C2&W2Al.wU9n2==B');
define('NONCE_KEY',        'W#dn%/,{aTzX.AN]*}__ov:N;l]xS8oDhoFA/q;a)O-1N>@&rQ!pU.O?~?^#`d3(');
define('AUTH_SALT',        'rn:<o# oyTV<Xuhan.a70v#(F2.$e,nvvd<#dn~*jXHla(L7@K8{$kdZxEVI$`qb');
define('SECURE_AUTH_SALT', '?;0(b`IZ0m.ZjVq~s`GED`Pa6s3):tA6:BN[{9K}K2OgIab5)O)Qp~H)C3C[x>pA');
define('LOGGED_IN_SALT',   '/Cj$^=,>%9=XbGX`XTLc<%sU=yf:a,ADf8rnY! 3AfvHKO]KFwNQL(@ FQgu! @i');
define('NONCE_SALT',       'vZi[?wUN7W_)W])<**=vdNJ;eiW`k|xNU$AryN]Y#`+tv@#1#h[~&[.lp+m1J.6t');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'vp_';

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
