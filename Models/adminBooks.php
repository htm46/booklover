<?php
require_once(ROOT_PATH .'/Models/Db.php');

class BookInfo extends Db {
  private $table = 'books';
  public function __construct($dbh = null) {
    parent::__construct($dbh);
  }

  //【booksテーブル】全てのデータを取得
  public function findBook():Array {
    $sql = 'SELECT * FROM books';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  //【booksテーブル】データ削除
  public function deleteById($id = 0) {
    $sql ='DELETE FROM books WHERE id = :id';
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->execute();
  }

  //【booksテーブル】から全データ数を取得
  public function countAll():Int {
    $sql = 'SELECT count(*) as count FROM books';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $count = $sth->fetchColumn();
    return $count;
  }

  //【booksテーブル】から指定idに一致するデータを取得
  public function findAll($page = 0):Array {
    $sql = 'SELECT * FROM books';
    $sql .= ' LIMIT 10 OFFSET '.(10 * $page);
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  //booksテーブルから指定idに一致するデータを取得
  public function findById($id = 0):Array {
    $sql = 'SELECT * FROM books';
    $sql .= ' WHERE id = :id';
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  //【booksテーブル】データをアップデート
  public function updateData($id = 0){
    // try {
    //   $sql  = "UPDATE books SET title = :title, author = :author, description = :description, level = :level, picture = :picture
    //            WHERE id = :id";
    //   $sth = $this->dbh->prepare($sql);
    //   $sth->bindParam(':title',       $_SESSION['title'], PDO::PARAM_STR);
    //   $sth->bindParam(':author',      $_SESSION['author'], PDO::PARAM_STR);
    //   $sth->bindParam(':description', $_SESSION['description'], PDO::PARAM_STR);
    //   $sth->bindParam(':level',       $_SESSION['level'], PDO::PARAM_STR);
    //   $sth->bindParam(':image',       $image, PDO::PARAM_STR);
    //   $sth->bindParam(':id',          $id, PDO::PARAM_INT);
    //
    //   $sth->execute();
    // } catch (PDOException $e) {
    //     print('接続失敗:' . $e->getMessage());
    //     die();
    // }
    if (isset($_POST['submit'])) {//送信ボタンが押された場合
        $image = uniqid(mt_rand(), true);//ファイル名をユニーク化
        $image .= '.' . substr(strrchr($_FILES['image']['name'], '.'), 1);//アップロードされたファイルの拡張子を取得
        $file = "img/images/$image";
        $sql  = "UPDATE books SET title = :title, author = :author, description = :description, level = :level, picture = :image
                 WHERE id = :id";
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':title',       $_SESSION['title'], PDO::PARAM_STR);
        $sth->bindParam(':author',      $_SESSION['author'], PDO::PARAM_STR);
        $sth->bindParam(':description', $_SESSION['description'], PDO::PARAM_STR);
        $sth->bindParam(':level',       $_SESSION['level'], PDO::PARAM_STR);
        $sth->bindParam(':image',       $image, PDO::PARAM_STR);
        $sth->bindParam(':id',          $id, PDO::PARAM_INT);
        if (!empty($_FILES['image']['name'])) {//ファイルが選択されていれば$imageにファイル名を代入
          move_uploaded_file($_FILES['image']['tmp_name'], 'img/images/' . $image);//imagesディレクトリにファイル保存
            //if (exif_imagetype($file)) {//画像ファイルかのチェック
              //  $message = '画像をアップロードしました';
               $sth->execute();
           //} else {
              // $message = '画像ファイルではありません';
            //}
        }
    }



  }



}
?>
