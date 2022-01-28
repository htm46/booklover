<?php
require_once(ROOT_PATH .'/Models/Db.php');

class Board extends Db {
  private $table = 'book_club';
  public function __construct($dbh = null) {
    parent::__construct($dbh);
  }

  //post.phpで掲示板に投稿
  public function insertBoard(){
    $user_id = $_SESSION['id'];
    try {
      $sql = 'INSERT INTO book_club (user_id, board) VALUE (:user_id, :board)';
      $sth = $this->dbh->prepare($sql);
      $sth->bindParam(":user_id", $user_id, PDO::PARAM_STR);
      $sth->bindParam(":board",    $_SESSION['board'], PDO::PARAM_STR);
      $sth->execute();
  } catch (PDOException $e) {
      print('接続失敗:' . $e->getMessage());
      die();
  }
}







}
?>
