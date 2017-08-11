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

