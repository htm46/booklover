<?php
require_once(ROOT_PATH .'/Models/Db.php');

class Adv extends Db {
  private $table = 'books';
  public function __construct($dbh = null) {
    parent::__construct($dbh);
  }

  //【booksテーブル】初級のデータを取得
  public function findAdv():Array {
    $sql = 'SELECT * FROM books WHERE level = "上級"';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}
?>
