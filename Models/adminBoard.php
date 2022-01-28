<?php
require_once(ROOT_PATH .'/Models/Db.php');

class Posts extends Db {
  private $table = 'book_club';
  public function __construct($dbh = null) {
    parent::__construct($dbh);
  }

  //【book_clubテーブル】全てのデータを取得
  public function findPosts():Array {
    $sql = 'SELECT * FROM book_club';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  //【book_clubテーブル】データ削除
  public function deleteById($id = 0) {
    $sql ='DELETE FROM book_club WHERE id = :id';
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->execute();
  }

  //【book_clubテーブル】から全データ数を取得
  public function countAll():Int {
    $sql = 'SELECT count(*) as count FROM book_club';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $count = $sth->fetchColumn();
    return $count;
  }

  //book_clubテーブル】から指定idに一致するデータを取得
  public function findAll($page = 0):Array {
    $sql = 'SELECT b.id AS id, b.user_id AS user_id, u.name AS name, b.board AS board, b.created_at AS created_at
            FROM book_club b, users u
            WHERE b.user_id=u.id ORDER BY id desc';
    $sql .= ' LIMIT 10 OFFSET '.(10 * $page);
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

}
?>
