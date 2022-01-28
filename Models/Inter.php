<?php
require_once(ROOT_PATH .'/Models/Db.php');

class Inter extends Db {
  private $table = 'books';
  public function __construct($dbh = null) {
    parent::__construct($dbh);
  }

  //【booksテーブル】初級のデータを取得
  public function findInter():Array {
    $sql = 'SELECT * FROM books WHERE level = "中級"';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  //booksテーブルから指定idに一致するデータを取得
  // public function findById($id = 0):Array {
  //   $sql = 'SELECT * FROM books';
  //   $sql .= ' WHERE id = :id';
  //   $sth = $this->dbh->prepare($sql);
  //   $sth->bindParam(':id', $id, PDO::PARAM_INT);
  //   $sth->execute();
  //   $result = $sth->fetch(PDO::FETCH_ASSOC);
  //   return $result;
  // }

}
?>
