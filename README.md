# Laravelプロジェクトの作成方法
## 1. Docker構成ファイルを複製する

Laravelプロジェクトを構築するDocker構成ファイルをローカル環境に複製するため、以下のコマンドを実行する。

```shell
git clone https://github.com/aoi998/php-nginx-mariadb.git
```

## 2. Dockerコンテナを起動する

ローカル環境に複製したDocker構成ファイルを使用してDockerコンテナを起動するため、以下のコマンドを実行する。

```shell
docker compose up -d
```

## 3. PHPコンテナにアクセスする

起動したPHPコンテナにアクセスするため、以下のコマンドを実行する。

```shell
docker exec -it app-php bash
```

## 4. Laravelをインストールする

PHPコンテナにLaravelをインストールするため、以下のコマンドを実行する。

```shell
composer create-project --prefer-dist laravel/laravel app "12.x"
```

## 5. PHPコンテナとのアクセスを終了する

PHPコンテナとのアクセスを終了するため、以下のコマンドを実行する。

```shell
exit
```

## 6. LaravelプロジェクトをDockerコンテナにマウントする

LaravelプロジェクトをDockerコンテナにマウントするため、`compose.yml`ファイルを以下のように編集する。

```YAML
web:

    volumes:
-        - .:/var/www/
+        - ./app:/var/www

nginx:

    volumes:
-        - .:/var/www
+        - ./app:/var/www
```

## 7. Dockerコンテナを更新する

変更した`compose.yml`ファイルの設定を反映するため、Dockerコンテナを更新する。
Dockerコンテナを更新するため、以下のコマンドを実行する。

```shell
docker compose up -d
```
