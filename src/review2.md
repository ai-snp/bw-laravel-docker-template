# Laravel Lesson レビュー②

## Todo編集機能
### @method('PUT')を記述した行に何が出力されているか
上書きされた新しい内容が出力
### findメソッドの引数に指定しているIDは何のIDか
todosテーブルのレコードID
### findメソッドで実行しているSQLは何か
SELECT * FROM todos WHERE id = ? LIMIT 1;
### findメソッドで取得できる値は何か
Todoモデルのインスタンス
### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
idが存在するかどうか（id）が存在するかどうか
## Todo論理削除
### traitとclassの違いとは
class → 具体的なオブジェクトを作るための設計図
trait → いろんなclassに共通の機能を追加できる
### traitを使用するメリットとは
コードの再利用が簡単になる

## その他
### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか
コントローラーのインスタンスが作られたとき
### RequestクラスからFormRequestクラスに変更した理由
バリデーションルールをまとめて書けるようにするため
### $errorsのhasメソッドの引数・返り値は何か
引数：入力欄のname
返り値：その欄にバリデーションエラーがあるかどうか（true/false）
### $errorsのfirstメソッドの引数・返り値は何か
引数：入力欄の name
返り値：最初のエラーメッセージ文字列
### フレームワークとは何か
プログラムを書く土台。
### MVCはどういったアーキテクチャか
M（Model）：データ操作
V（View）：画面表示
C（Controller）：操作の仲介役（Model と View をつなぐ）
### ORMとは何か、またLaravelが使用しているORMは何か
データベースの行(レコード)をPHPのオブジェクトとして扱える
### composer.json, composer.lockとは何か
composer.json → 「どのライブラリを使いたいか」を宣言するファイル
composer.lock → 「どのバージョンを実際にインストールしたか」を固定するファイル
### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
vendorディレクトリに格納