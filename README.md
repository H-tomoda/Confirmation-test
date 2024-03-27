＃お問合せフォーム＃

環境構築

Dockerビルド

1．git clone リンク

   https://github.com/H-tomoda/Confirmation-test.git
   
2．docker-compose up -d --build

※Myselは、OSによって起動しない場合があるのでそれぞれのPCに合わせて

Docker-compose.ymlファイルを編集してください。

Laravel環境構築

1．docker-compose exec php bash

2．composer install

3．.env.exampleファイルから.envを作成し、環境変数を変更

4．php aritisan key:generate

5．php aritisan migrate

6．php artisan db:seed

使用技術

・PHP　8.3.2

・Laravel Framework 8.83.27

・MYSQL　8.0

URL

・開発環境：http://localhost/

・phpMyadmin: http://localhost:8080/
