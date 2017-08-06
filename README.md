# FuelPHP (1.7)
PHPのフレームワーク FuelPHP を使ってみる。

* Version: 1.7.2
* [Website](http://fuelphp.com/)
* [Release Documentation](http://docs.fuelphp.com)
* [Release API browser](http://api.fuelphp.com)
* [Development branch Documentation](http://dev-docs.fuelphp.com)
* [Development branch API browser](http://dev-api.fuelphp.com)
* [Support Forum](http://fuelphp.com/forums) for comments, discussion and community support

## FuelPHPをインストールする

GitBucketからコードをクローンし、composerを使ってFuelPHP本体と各種ライブラリを配置します。

※ core, packages, vendorフォルダ内にインストールされます。

```
$ git clone https://github.com/reflet/app-fuelphp1.7.git .
$ composer install
```

## FuelPHPをインストールする（Dockerコンテナ版）

dockerでPHP-fpmなどを使っている場合、コンテナ内でないとPHPが使えないので、

下記のようにコンテナに接続してinstallコマンドを実行する

### コンテナに接続する（www-dataユーザーでログイン）
```
$ docker exec -it -u 'www-data' php bash
```

### コンテナ内でcomposerインストール
```
$ cd www.example.com/
$ composer install
Loading composer repositories with package information
Installing dependencies (including require-dev) from lock file
Package operations: 20 installs, 0 updates, 0 removals
  - Installing composer/installers (v1.3.0): Downloading (100%)         
  - Installing fuel/auth (dev-1.7/master aa9bd2e): Cloning aa9bd2e510
  - Installing fuel/core (dev-1.7/master f614b30): Cloning f614b30e1f
  - Installing fuel/docs (dev-1.7/master 473174d): Cloning 473174da2c
  - Installing fuel/email (dev-1.7/master 8fbf378): Cloning 8fbf378d74
  - Installing fuel/oil (dev-1.7/master ea37c3a): Cloning ea37c3a7fe
  - Installing fuel/orm (dev-1.7/master 5e05c30): Cloning 5e05c30685
  - Installing fuel/parser (dev-1.7/master 0cacd10): Cloning 0cacd10d7b
  - Installing fuelphp/upload (2.0.2): Loading from cache
  - Installing michelf/php-markdown (1.4.0): Loading from cache
  - Installing psr/log (1.0.2): Loading from cache
  - Installing monolog/monolog (1.5.0): Loading from cache
  - Installing phpunit/php-token-stream (1.2.2): Loading from cache
  - Installing symfony/yaml (v2.8.22): Loading from cache
  - Installing phpunit/php-text-template (1.2.1): Loading from cache
  - Installing phpunit/phpunit-mock-objects (1.2.3): Loading from cache
  - Installing phpunit/php-timer (1.0.9): Loading from cache
  - Installing phpunit/php-file-iterator (1.4.2): Loading from cache
  - Installing phpunit/php-code-coverage (1.2.18): Loading from cache
  - Installing phpunit/phpunit (3.7.38): Loading from cache
monolog/monolog suggests installing doctrine/couchdb (Allow sending log messages to a CouchDB server)
monolog/monolog suggests installing ext-amqp (Allow sending log messages to an AMQP server (1.0+ required))
monolog/monolog suggests installing ext-mongo (Allow sending log messages to a MongoDB server)
monolog/monolog suggests installing mlehner/gelf-php (Allow sending log messages to a GrayLog2 server)
monolog/monolog suggests installing raven/raven (Allow sending log messages to a Sentry server)
phpunit/php-code-coverage suggests installing ext-xdebug (>=2.0.5)
phpunit/phpunit suggests installing phpunit/php-invoker (~1.1)
Generating autoload files
> php oil r install
	Made writable: /var/www/www.example.com/fuel/app/cache
	Made writable: /var/www/www.example.com/fuel/app/logs
	Made writable: /var/www/www.example.com/fuel/app/tmp
	Made writable: /var/www/www.example.com/fuel/app/config
```

### install/update時にtokenを聞かれた場合

GitHub APIのレート制限でトークンを聞かれる時があります。

- [tokenを聞かれFuelPHP 1.7.3がうまくインストールできない場合](http://blog.a-way-out.net/blog/2015/06/26/fuelphp-1-7-3-installation-trouble/)

その場合は、独自でgithubのトークンを作成して利用ください

- [GitHubのPersonalAccessTokensの設定方法](http://qiita.com/kz800/items/497ec70bff3e555dacd0)

```
Could not fetch https://api.github.com/repos/fuel/email/commits/1.9%2Fdevelop, please create a GitHub OAuth token to go over the API rate limit
Head to https://github.com/settings/tokens/new?scopes=repo&description=Composer+on+bb8b0edd0911+2017-08-06+1704
to retrieve a token. It will be stored in "/var/www/.composer/auth.json" for future use by Composer.
Token (hidden): 
Token stored successfully.
```

