<h1>初回のみやること</h1>

このリポジトリ(徳永のアカウントにあるリポジトリ)を自身のアカウントにフォークして課題を進めること。

<h2>フォーク手順</h2>

1. https://github.com/daichi-tokunaga/kadai-app-7/fork にアクセス

1. Ownerが自分のアカウント、Repository nameがkadai-appになっていることを確認

1. 画面下のCreate fork(緑のボタン)を押下

1. 自身のアカウントにコピーされるので以降、そこに作ったものをpushしていく


<h1>環境構築</h1>

<h2>1. 準備</h2>

1. 自身のgithubアカウントからリポジトリをcloneしVSCodeで開く

1. VSCode上で[ctrl + @]でターミナルを開く(以降コマンドはここで入力する)(コマンドプロンプトでも可)

<h2>2. プロジェクトのアップデート</h2>

コマンドを実行

```
composer update --ignore-platform-req=ext-fileinfo
```

<h2>3. データベースの構築</h2>

1. xammpのコントロールパネルからapacheとMySQLを起動

1. xammpのコントロールパネル -> MySQLのAdminを押下しPHPMyAdminを起動

1. PHPMyAdminで　kadai-app　という名前のDBを作成

1. データベースのマイグレートコマンドを実行

```
php artisan migrate
```

1. データベースに初期データを挿入
```
php artisan db:seed
```

<h2>4. アプリケーションの起動</h2>

<h3>起動</h3>

```
php artisan serve
```

<h3>アクセスURL</h3>

```
localhost:8000
```

<h3>ログイン</h3>

```
e-mail: oca@email.com
password: oca
```

- - -

<h1>課題</h1>

- - -

<h2>問題1</h2>

以下の５つのバグを修正しなさい。

- - -

<h3>Bug1</h3>

>内容: ユーザーを押下してユーザー画面に遷移しても別のユーザーの画面に遷移してしまう。  
修正: 正しいユーザーの情報が表示されること。

- - -

<h3>Bug2</h3>

>内容: 投稿詳細画面( /post/detail/{id} )での右下の削除ボタンを押下しても投稿が削除されずに残っている。  
修正: 削除した投稿がタイムライン等に表示されないようにすること。

- - -

<h3>Bug3</h3>


>内容: 画面右上のログアウトボタンを押下しログアウトしてもログイン情報が残ってしまっている。  
修正: ログアウトするとログイン情報がブラウザから削除されること。

- - -

<h3>Bug4</h3>

>内容: 投稿画面( /post )で投稿する際、内容が0文字または140字より多い場合エラーが発生する。  
修正: 文字数が1～140文字の場合のみ投稿処理を行うようバリデーションを追加すること
>>備考1: バリデーションはJavaScriptとLaravel(○○Controller内)の両方で実装すること
備考2: JavaScriptのバリデーションではアラートを表示し、Laravelのバリデーションでは投稿ボタン下部にエラーメッセージを表示すること

- - -

<h3>Bug5</h3>

> 内容: 投稿詳細画面( /post/detail/{id} )でログインしているユーザー以外の投稿(他人の投稿)も編集できてしまう。  
修正1: 編集処理のContolloerで対象の投稿が他人のものでないか確認し、他人のものであった場合はホーム画面にリダイレクトすること  
修正2: 他人の投稿詳細画面では「編集」「削除」のボタンは表示しないこと  

- - -
- - -

<h2>問題2</h2>

<h3>新規登録画面を実装すること</h3>

- - -

>ログインしていない状態ではヘッダーに新規登録ボタンが表示されている。
ボタンを押下すると新規登録画面に遷移するのでそこに新たに新規登録機能を実装すること。

- - -


**新規登録画面要件**

>画面には以下のパーツが存在する。
> * メールアドレス入力フォーム
> * パスワード入力フォーム
>* 新規登録ボタン

※実装や画面レイアウトはログイン画面を参考にするとよい。

- - -

**機能概要**

>メールアドレス、パスワードを入力した状態で「新規登録」ボタンを押下すると登録処理が開始する。  
登録処理が成功した場合は、そのアカウントにログインしたうえでホーム画面にリダイレクトする。
>>【注意】 メールアドレスはほかのユーザーとかぶってはならないため、データベースに登録する前にすでに存在していないかチェックすること。すでに登録されているアドレスの場合は「新規登録」ボタン上部に「このメールアドレスはすでに使用されています」と表示すること。

- - -

**バリデーション**

>下記ルールにしたがってバリデーションを実装すること
JavascriptとLaravel(○○Controller内)の両方で同じバリデーションを設けること

**メールアドレス**
> * ●●●@×××の形式になっていること
> * 半角英数、記号のみを許容すること

**パスワード**

> * 半角英数、記号のみを許容すること
> * 8文字以上であること

- - -
