<?php
require_once(ROOT_PATH .'/Models/Users.php');
require_once(ROOT_PATH .'/Models/Review.php');
require_once(ROOT_PATH .'/Models/Board.php');

if(isset($_GET['email'])) {
  $email = htmlspecialchars($_GET["email"], ENT_QUOTES, "UTF-8");
  $password = htmlspecialchars($_GET["password"], ENT_QUOTES, "UTF-8");
}

class UserController {
  private $request;
  private $user;
  private $review;
  private $board;

  public function __construct() {
  //リクエストパラメータの取得
  $this->request['GET'] = $_GET;
  $this->request['POST'] = $_POST;
  //モデルオブジェクトの生成
  $this->User   = new User();
  $this->Review = new Review();
  $this->Board  = new Board();
  //別モデルと連携
  $dbh = $this->User->get_db_handler();
  $dbh = $this->Review->get_db_handler();
  $dbh = $this->Board->get_db_handler();
}

  //会員登録で新規ユーザーを追加
  public function insert() {
      $insert = $this->User->insertData();
      return $insert;
  }

  //ログイン機能
  public function login() {
    if(!empty($this->request['GET']['email'])) {
      $this->User->Users($this->request['GET']['email']);
    }
  }

  //ヘッダーのユーザー権限による表示or非表示
  public function role(){
    $user = $this->User->role($_SESSION['email']);
    $users = [
      'user' => $user
    ];
    return $users;
  }

  //ユーザー情報を変更
  public function updateUser() {
    $updateUser = $this->User->updateUser($_SESSION['id']);
    return $updateUser;
  }

  //review.phpで書籍名を呼び出す
  public function index() {
    $review = $this->Review->findTitle();
    $params = [
       'review' => $review,
    ];
    return $params;
  }

  //review.phpでレビューを追加
  public function insertReview() {
      $insert = $this->Review->insertReview();
      return $insert;
  }

  //post.phpで掲示板に投稿
  public function insertPost() {
      $insert = $this->Board->insertBoard();
      return $insert;
  }



}
?>
