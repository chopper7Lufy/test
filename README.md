# アプリケーション名
  お問い合わせフォーム
## 環境構築
  Dockerビルド
  1.git clone https://github.com/chopper7Lufy/test
  2.docker-compose up -d --build
  Laravel環境構築
  1.docker-compose exec php bash
  2.composer install
  3..envファイル作成
  4.php artisan make:migration create_contacts_table
  5.php artisan make:migration create_categories_table
  6.php artisan make:migration create_users_table
  7.php artisan migrate
  8.php artisan db:seed
## 使用技術（実行環境）
  ・Laravel 8.83.27
  ・PHP 7.4.9
  ・MySQL 8.0.26
## URL
・開発環境：https://localhost/login
・phpMyAdmin:http://localhost:8080/index.php?route=/database/structure&db=laravel_db
