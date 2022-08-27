# Thread Center
## 概要
Laravelを用いて開発した、簡単な掲示板アプリ。スレッドやコメントを作成・閲覧できる。

## スクリーンショット
<img width="1440" alt="スクリーンショット 2022-08-28 5 43 33" src="https://user-images.githubusercontent.com/65577595/187047470-523fcf08-2bef-47a3-81b1-53262cace93b.png">
<img width="1440" alt="スクリーンショット 2022-08-28 5 43 45" src="https://user-images.githubusercontent.com/65577595/187047475-daeace29-7ef2-44fa-9c12-dc81caa07d93.png">
<img width="1440" alt="スクリーンショット 2022-08-28 5 46 44" src="https://user-images.githubusercontent.com/65577595/187047476-699cedbe-6606-4ece-a3ed-07d85be22487.png">
<img width="1440" alt="スクリーンショット 2022-08-28 5 46 51" src="https://user-images.githubusercontent.com/65577595/187047479-93936ae1-2a20-46af-b193-9f259ca8da69.png">


## 使用技術
- PHP 8.1.8
- Laravel 9.22.1
- MySQL 8.0.30

## 環境構築
1. PHP・Laravel・MySQLがインストールされていることを確認
```
$ php -v
PHP 8.1.8 (cli) (built: Jul  8 2022 10:46:35) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.8, Copyright (c) Zend Technologies
with Zend OPcache v8.1.8, Copyright (c), by Zend Technologies
```

```
$ php artisan -v
Laravel Framework 9.22.1
```

```
$ mysql --version
mysql  Ver 8.0.30 for macos12.4 on arm64 (Homebrew)
```

2. MySQLにデータベースを作成する
```
$ mysql -u root -p
Enter password:
mysql> create database ThreadCenter;
```

3. `.env`ファイルを編集する
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=HelloLaravel # 作成したデータベース名
DB_USERNAME=root
DB_PASSWORD=secret # 設定したパスワード
```

```
$ php artisan cache:clear
```

4. Migrationを実行し、必要なテーブルを作成する
```
$ php artisan migrate
```

5. テストデータを入れたいならSeedingを実行する(任意)
```
$ php artisan db:seed
```

6. 開発サーバーを起動して動作確認
```
$ php artisan serve
```
