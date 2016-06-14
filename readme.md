# これはLaravelのベースプロジェクトです

## 初期設定
- アプリケーションキーの生成

```
$ php artisan key:generate
```
- .gitignoreの編集

```.gitignore
### Composer ###
composer.phar
/vendor

### PHP Coding Standards Fixer ###
.php_cs.cache

### Node ###
/node_modules

## Laravel ##
.env

## Laravel Homestead ##
/.vagrant
Homestead.yaml
Homestead.json
```

- .gitattributesの編集

```.gitattributes
* text=auto
*.min.js binary
*.min.css binary
*.css linguist-vendored
*.scss linguist-vendored
/public/js/**/* binary
/public/css/**/* binary
/public/build/**/* binary
/public/vendor/**/* binary
```

## gulpの使用方法

#### case1
`gulpfile`を編集して`gulp`コマンドを叩く

#### case2
`gulp watch`コマンドを叩いて`resources->assets`の中にあるファイルを編集

## エラーやメッセージを表示する flash の使い方

```
flash()->info('Message')
flash()->success('Message')
flash()->error('Message')
flash()->warning('Message')
flash()->overlay('Modal Message', 'Modal Title')
```
これをroute.phpまたはcontrollerに書く。
リダイレクト先のメッセージを出したい場所で
```
@include('flash::message')
```
