<?php
require_once(ROOT_PATH .'/Models/Db.php');

class Review extends Db {
  //private $table = 'books';
  public function __construct($dbh = null) {
    parent::__construct($dbh);
  }

  //【review.php】で書籍名を取得
  public function findTitle():Array {
    $sql = 'SELECT * FROM books';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  //新規レビューを追加
  public function insertReview(){
    $user_id = $_SESSION['id'];
    try {
      $sql = 'INSERT INTO reviews (comment, user_id, title) VALUE (:comment, :user_id, :title)';
      $sth = $this->dbh->prepare($sql);
      $sth->bindParam(":comment", $_SESSION['comment'], PDO::PARAM_STR);
      $sth->bindParam(":user_id", $user_id, PDO::PARAM_STR);
      //$sth->bindParam(":book_id", $_SESSION['book_id'], PDO::PARAM_STR);
      $sth->bindParam(":title",   $_SESSION['title'], PDO::PARAM_STR);
      $sth->execute();
  } catch (PDOException $e) {
      print('接続失敗:' . $e->getMessage());
      die();
  }
}

  

}
?>
