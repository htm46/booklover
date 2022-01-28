<?php
require_once(ROOT_PATH .'/Models/Db.php');

class ReviewInfo extends Db {
  private $table = 'reviews';
  public function __construct($dbh = null) {
    parent::__construct($dbh);
  }

  //【reviewsテーブル】全てのデータを取得
  public function findReview():Array {
    $book = $_GET['id'];
    $sql = 'SELECT r.id AS id, r.comment AS comment, r.user_id AS user_id, u.name AS name, b.id AS book_id, r.title AS title, r.created_at AS created_at
            FROM reviews r
            JOIN books b ON b.title=r.title
            JOIN users u ON r.user_id=u.id WHERE b.id = (int)$book';
    $sql .= ' WHERE r.user_id=$book';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  //【reviewsテーブル】データ削除
  public function deleteById($id = 0) {
    $sql ='DELETE FROM reviews WHERE id = :id';
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->execute();
  }

  //reviewsテーブルから全データ数を取得
  public function countAll():Int {
    $sql = 'SELECT count(*) as count FROM reviews';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $count = $sth->fetchColumn();
    return $count;
  }

  //【reviewsテーブル】全てのデータを取得
  public function findAll($page = 0):Array {
    $sql = 'SELECT r.id AS id, r.comment AS comment, r.user_id AS user_id, u.name AS name, b.id AS book_id, r.title AS title, r.created_at AS created_at
            FROM reviews r
            JOIN books b ON b.title=r.title
            JOIN users u ON r.user_id=u.id';
    $sql .= ' LIMIT 10 OFFSET '.(10 * $page);
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  //レビュー内容を書籍別に表示
  public function findReviews($id = 0):Array {
    $sql = 'SELECT r.id AS id, r.comment AS comment, r.user_id AS user_id, u.name AS name, b.id AS book_id, r.title AS title, r.created_at AS created_at
            FROM reviews r
            JOIN books b ON b.title=r.title
            JOIN users u ON r.user_id=u.id WHERE b.id = :id ORDER BY created_at desc';
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  //各レビューのデータを取得
  public function findReviewPages($page = 0):Array {
    $sql = 'SELECT r.id AS id, r.comment AS comment, r.user_id AS user_id, u.name AS name, b.id AS book_id, r.title AS title, r.created_at AS created_at
            FROM reviews r
            JOIN books b ON b.title=r.title
            JOIN users u ON r.user_id=u.id WHERE b.id = :id';
    $sql .= ' LIMIT 10 OFFSET '.(10 * $page);
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  //各レビューの全データ数を取得
  public function countAllreviews():Int {
    $sql = 'SELECT count(*) as count FROM reviews r
    JOIN books b ON b.title=r.title
    JOIN users u ON r.user_id=u.id WHERE b.id = :id';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $count = $sth->fetchColumn();
    return $count;
  }


}
?>
