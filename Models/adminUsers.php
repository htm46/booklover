<?php
require_once(ROOT_PATH .'/Models/Db.php');

class UserInfo extends Db {
  private $table = 'users';
  public function __construct($dbh = null) {
    parent::__construct($dbh);
  }

  //【usersテーブル】全てのデータを取得
  public function findUser():Array {
    $sql = 'SELECT * FROM users';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  //【usersテーブル】データ削除
  public function deleteById($id = 0) {
    $sql ='DELETE FROM users WHERE id = :id';
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->execute();
  }

  //【usersテーブル】から全データ数を取得
  public function countAll():Int {
    $sql = 'SELECT count(*) as count FROM users';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $count = $sth->fetchColumn();
    return $count;
  }

  //【usersテーブル】から指定idに一致するデータを取得
  public function findAll($page = 0):Array {
    $sql = 'SELECT * FROM users';
    $sql .= ' LIMIT 10 OFFSET '.(10 * $page);
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

}
?>
