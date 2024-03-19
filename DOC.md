
**LOGIN CREDENTIALS (username/password):

- User: user@gmail.com / 123456
- Moderator: moderator@gmail.com / 123456
- Admin: admin@gmail.com / 123456

**INSTALLATION

You can run it locally by following these steps:
1.  Download and install Xampp (choose the version with PHP 8.1): https://www.apachefriends.org/download.html (for MacOS, use MAMP)
2.  Download and install Composer: https://getcomposer.org/
3.  Open Xampp and start Apache & MySQL
4.  In your browser, visit http://localhost/phpmyadmin and create a new database with  collation utf8mb4_unicode_ci, then import the attached .sql file (optional)
5.  Download the source code and open it on your IDE (such as PHPStorm)
6.  Install dependencies: composer install
7.  Create env file: cp .env.example .env
8.  Update database credentials in .env file
9.  Run migration if you have not imported the sql file: php artisan migrate:fresh --seed
10.  Generate app key: php artisan key:generate
11.  Start the development server: php artisan serve
12.  You can now access the server at http://localhost:8000

**COMPOSER


1. composer require bensampo/laravel-enum
2. composer require realrashid/sweet-alert
3. composer require tymon/jwt-auth   
   i. Note: *******  php artisan jwt:secret  *******
4. composer require laravel/socialite
5. composer require patrickschur/language-detection
6. composer require stichoza/google-translate-php

** MÔ TẢ 

1. Cài Đặt Trang Chủ gồm:

- Cài đặt header.

  phần này sẽ cài giờ vào ra, ngày nghỉ, và link cái mạng xã hội có trong phần header

- Công ty vận tải

  phần này gồm có tiêu đề, mô tả
  tiêu đề dịch vụ, mô tả dịch vụ
  tiêu đề giải thưởng, mô tả giải thưởng

- Tại sao chọn chúng tôi

  phần này sẽ có tiêu đề và mô tả

- Đánh giá của khách hàng.

    + thêm mới:
      gồm tên khách hàng, ảnh đại diện, số sao đánh giá, nội dụng đánh giá và có chứ vụ là khách hàng hay là thành viên trong công ty,....

    + sửa:
      như trên,

    + xóa:
      ấn là xóa.

2. Cài đặt giới thiệu về chúng tôi:
    - About us gồm:
      tiêu đề: ở đây là chữ About us siêu to ở giữa màn hình,
      ảnh: ảnh mô tả ở bên phải.
      mô tả: mô tả bên trái của about us

    - Công ty gồm: đây là phần cuối của trang
      tên công ty:
      mô tả công ty:
3. Dịch vụ:
  - Tạo mới: ở đây sẽ chia ra 2 phần là nwuar trên và nửa dưới.
    + nửa trên là mô tả dịch vụ.
    + nửa dưới thì mô tả thêm về dịch vụ của chúng tôi
  
  - sửa, xóa

4. Blog:
  - Tạo mới: tương tự dịch vụ
  - sửa, xóa







