<?php
require_once(ROOT_PATH .'/Models/adminUsers.php');
require_once(ROOT_PATH .'/Models/adminBooks.php');
require_once(ROOT_PATH .'/Models/adminBoard.php');
require_once(ROOT_PATH .'/Models/adminReview.php');

class AdminController {
  private $request;
  private $userInfo;
  private $bookInfo;
  private $posts;
  private $reviewInfo;

  public function __construct() {
    //リクエストパラメータの取得
    $this->request['get'] = $_GET;
    $this->request['post'] = $_POST;
    //モデルオブジェクトの生成
    $this->UserInfo   = new UserInfo();
    $this->BookInfo   = new BookInfo();
    $this->Posts      = new Posts();
    $this->ReviewInfo = new ReviewInfo();
    //別モデルと連携
    $dbh = $this->UserInfo->get_db_handler();
    $dbh = $this->BookInfo->get_db_handler();
    $dbh = $this->Posts->get_db_handler();
    $dbh = $this->ReviewInfo->get_db_handler();
  }

  //該当テーブルのデータを呼び出す
  public function index() {
    $userInfo   = $this->UserInfo->findUser();
    $bookInfo   = $this->BookInfo->findBook();
    $posts      = $this->Posts->findPosts();
    $reviewInfo = $this->ReviewInfo->findReview();
    $params = [
       'userInfo'   => $userInfo,
       'bookInfo'   => $bookInfo,
       'posts'      => $posts,
       'reviewInfo' => $reviewInfo
    ];
    return $params;
  }

  //booksの各ID情報を取得
  public function view() {
    if(empty($this->request['get']['id'])) {
      echo '指定のパラメータが不正です。このページを表示できません。';
      exit;
    }
    $bookInfo = $this->BookInfo->findById($this->request['get']['id']);
    $params = [
      'bookInfo'   => $bookInfo,
    ];
    return $params;
  }

  //該当テーブルのデータを削除
  public function delete() {
    if(empty($this->request['get']['id'])) {
      echo '指定のパラメーターが不正です。このページを表示できません。';
      exit;
    }
    $delete = $this->UserInfo->deleteById($this->request['get']['id']);
    $delete = $this->BookInfo->deleteById($this->request['get']['id']);
    $delete = $this->Posts->deleteById($this->request['get']['id']);
    $delete = $this->ReviewInfo->deleteById($this->request['get']['id']);
    return $delete;
  }

  //usersテーブルのページネーション
  public function usersIndex() {
    $page = 0;
    if(isset($this->request['get']['page'])) {
      $page = $this->request['get']['page'];
    }
    $userInfo = $this->UserInfo->findAll($page);
    $users_count = $this->UserInfo->countAll();
    $params = [
       'userInfo' => $userInfo,
       'pages' => $users_count / 10
    ];
    return $params;
  }

  //booksテーブルのページネーション
  public function booksIndex() {
    $page = 0;
    if(isset($this->request['get']['page'])) {
      $page = $this->request['get']['page'];
    }
    $bookInfo = $this->BookInfo->findAll($page);
    $books_count = $this->BookInfo->countAll();
    $params = [
       'bookInfo' => $bookInfo,
       'pages' => $books_count / 10
    ];
    return $params;
  }

  //booksテーブルのデータを編集
  public function update() {
    if(empty($this->request['get']['id'])) {
      echo '指定のパラメーターが不正です。このページを表示できません。';
      exit();
    }
    $update = $this->BookInfo->updateData($this->request['get']['id']);
    return $update;
  }

  //book_clubテーブルのページネーション
  public function postsIndex() {
    $page = 0;
    if(isset($this->request['get']['page'])) {
      $page = $this->request['get']['page'];
    }
    $posts = $this->Posts->findAll($page);
    $posts_count = $this->Posts->countAll();
    $params = [
       'posts' => $posts,
       'pages' => $posts_count / 10
    ];
    return $params;
  }

  //reviewsテーブルのページネーション
  public function reviewInfoIndex() {
    $page = 0;
    if(isset($this->request['get']['page'])) {
      $page = $this->request['get']['page'];
    }
    $reviewInfo = $this->ReviewInfo->findAll($page);
    $count = $this->ReviewInfo->countAll();
    $params = [
       'reviewInfo' => $reviewInfo,
       'pages' => $count / 10
    ];
    return $params;
  }

  //レビュー内容を書籍別に表示
  public function viewReview() {
    if(empty($this->request['get']['id'])) {
      echo '指定のパラメータが不正です。このページを表示できません。';
      exit;
    }
    $reviewInfo = $this->ReviewInfo->findReviews($this->request['get']['id']);
    $params = [
      'reviewInfo'  => $reviewInfo,
    ];
    return $params;
    }

    //レビュー内容のページネーション
    public function reviewPages() {
      $page = 0;
      if(isset($this->request['get']['page'])) {
        $page = $this->request['get']['page'];
      }
      $reviewInfo = $this->ReviewInfo->findReviewPages($page);
      $count = $this->ReviewInfo->countAllreviews();
      $params = [
         'reviewInfo' => $reviewInfo,
         'pages' => $count / 10
      ];
      return $params;
    }

}

?>
