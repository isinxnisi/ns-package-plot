

# Getting Started

<br>

## 1. リポジトリの追加

<br>

### Composer
```
composer config repositories.nsr/ns-package-plot vcs https://github.com/isinxnisi/ns-package-plot
```

```
composer require nsr/ns-package-plot
```

<br>


### ※GitHub　の場合
```
C:\works\projects\00_nsr\02_traning\ns-job-1\cake>composer require nsr/ns-package-plot
Your GitHub credentials are required to fetch private repository metadata (https://github.com/isixnisi/ns-package-plot)
Head to https://github.com/settings/tokens/new?scopes=repo&description=Composer+on+LAPTOP-CGP5AM3P+2021-04-01+1513
to retrieve a token. It will be stored in "C:/Users/nishr/AppData/Roaming/Composer/auth.json" for future use by Composer.
Token (hidden):

```
### トークン入力

```
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
```

<br>

### または設定

```
composer config -g github-oauth.github.com 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
```
### 認証ファイル　→　困ったら一旦消す

```
C:\Users\Username\AppData\Roaming\Composer\auth.json
```

<br>
<br>
<br>

## 2. CakePHP

<br>

bootstrap.php
```
require ROOT . DS . 'vendor' . DS  . 'nsr' . DS . 'ns-package-plot' . DS . 'class_loader.php';
```
<br>

テーブル、コントローラー
```
use Nsr\NsPackagePlot\NsPackagePlot;
...
NsPackagePlot::hello();
```

<br>
<br>
<br>

## 参考

<br>

### Composer パッケージ追加

https://scrapbox.io/namaozi/composer%E3%81%A7GitHub%E3%81%AE%E3%83%AA%E3%83%9D%E3%82%B8%E3%83%88%E3%83%AA%E3%81%8B%E3%82%89%E3%83%91%E3%83%83%E3%82%B1%E3%83%BC%E3%82%B8%E8%BF%BD%E5%8A%A0%E3%81%99%E3%82%8B%E6%96%B9%E6%B3%95

https://qiita.com/busyoumono99/items/5c328e48ea3b5469ac58

http://qpleple.com/understand-composer-versions/

### GitHubアクセストークン

https://note.kiriukun.com/entry/20190814-how-to-install-composer-package-from-github-private-repos
https://docs.github.com/ja/github/authenticating-to-github/creating-a-personal-access-token
https://docs.github.com/en/developers/apps/scopes-for-oauth-apps


<br>
<br>
<br>

# How to use

<br>


