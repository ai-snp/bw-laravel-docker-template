# Laravel Lesson レビュー①

## Todo一覧機能
### Todoモデルのallメソッドで実行しているSQLは何か
"select * from `todos`"
### Todoモデルのallメソッドの返り値は何か
Illuminate\Database\Eloquent\Collection"
### 配列の代わりにCollectionクラスを使用するメリットは
便利なメソッドが多く配列やデータセットを簡単に操作できるため
### view関数の第1・第2引数の指定と何をしているか
第一引数で指定したbladeを読み込み第二引数で指定したデータを変数にする
### index.blade.phpの$todos・$todoに代入されているものは何か
＄todoに代入されているのは＄todosの1レコード
＄todosに代入されているのはtodosのテーブルのすべてのレコード

### Todo作成機能
### Requestクラスのallメソッドは何をしているか
requestで送られた値全てを連想配列で返す
### fillメソッドは何をしているか
$inputs 配列の中で、モデルの $fillable に書かれたカラムだけを取り出して、
自動でモデルのプロパティにセットする
### $fillableは何のために設定しているか
許可されたカラムだけを代入するため
### saveメソッドで実行しているSQLは何か
DBにINSERTを実行
### redirect()->route()は何をしているか
ルート名に対応するURLを生成してリダイレクトする

## その他
### テーブル構成をマイグレーションファイルで管理するメリット
現在のデータベースの状態を他の開発者に共有することができる
### マイグレーションファイルのup()、down()は何のコマンドを実行した時に呼び出されるのか
up() php artisan migrate
down() php artisan migrate:rollback
### Seederクラスの役割は何か
テーブルデータの投入
### route関数の引数・返り値・使用するメリット
URLを直接書き込む必要がないため管理が楽になり
環境が変わっても修正が不要になる。可読性が高くなる。
### @extends・@section・@yieldの関係性とbladeを分割するメリット
@extendsで他のBladeファイルを継承できる
@sectionで囲った部分を継承して@yieldの箇所に差し込まれる

コードの重複を減らせることができ保守性を高めることができる。
### @csrfは何のための記述か
フォームにトークンを埋め込むため
### {{ }}とは何の省略系か
PHPで画面に値を出力する echoの省略形
