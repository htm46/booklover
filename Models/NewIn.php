<?php
require_once(ROOT_PATH .'/Models/Db.php');

class NewIn extends Db {
  private $table = 'books';
  public function __construct($dbh = null) {
    parent::__construct($dbh);
  }

  //【booksテーブル】idが3の倍数のデータを取得
  public function findNewIn():Array {
    $sql = 'SELECT * FROM books WHERE ((id % 4)=0)';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }


}
?>
