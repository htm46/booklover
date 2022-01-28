<?php
require_once(ROOT_PATH .'/Models/Db.php');

class User extends Db {
  private $table = 'users';
  public function __construct($dbh = null) {
    parent::__construct($dbh);
  }

  //会員登録で新規ユーザーを追加
  public function insertData(){
    $hash_pass = password_hash($_SESSION['join']['password'], PASSWORD_DEFAULT);
    try {
      $sql = 'INSERT INTO users (name, email, password) VALUE (:name, :email, :password)';
      $sth = $this->dbh->prepare($sql);
      $sth->bindParam(":name",     $_SESSION['join']['name'], PDO::PARAM_STR);
      $sth->bindParam(":email",    $_SESSION['join']['email'], PDO::PARAM_STR);
      $sth->bindParam(":password", $hash_pass, PDO::PARAM_STR);
      $sth->execute();
  } catch (PDOException $e) {
      print('接続失敗:' . $e->getMessage());
      die();
  }
}

  //ログイン機能
  public function Users() {
    global $id, $name, $email, $password;

     if(isset($_GET['email'])) {
      try {
        $sql = 'SELECT * FROM users WHERE email=:email';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':email', $email);
        $sth->execute();
        $rows = $sth->fetch();

        if(password_verify($password, $rows['password'])) {
          $_SESSION['id'] = $rows['id'];
          $_SESSION['name'] = $rows['name'];
          $_SESSION['email'] = $rows['email'];
          header('Location: mypage.php');
          exit();
        }else {
          $error = "ユーザー名また、パスワードが違います。";
          return false;
        }
      } catch(PDOException $e) {
        echo "接続失敗:" . $e->getMessage();
        exit();
        }
     }
  }

  //ヘッダーのユーザー権限による表示or非表示
  public function role($email) {
    try {
      $sql = 'SELECT * FROM users WHERE email=:email';
      $sth = $this->dbh->prepare($sql);
      $sth->bindParam(':email', $email, PDO::PARAM_STR);
      $sth->execute();
      $result = $sth->fetch(PDO::FETCH_ASSOC);
      return $result;
    }catch(PDOException $e) {
      echo "接続失敗:" . $e->getMessage();
      exit();
    }
  }

  //ユーザー情報をアップデート
  public function updateUser($id = 0){
    //$id = $_SESSION['id'];
    $hash_pass = password_hash($_SESSION['password'], PASSWORD_DEFAULT);
    try {
      $sql  = "UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id";
      $sth = $this->dbh->prepare($sql);
      $sth->bindParam(':name',     $_SESSION['name'], PDO::PARAM_STR);
      $sth->bindParam(':email',    $_SESSION['email'], PDO::PARAM_STR);
      $sth->bindParam(':password', $hash_pass, PDO::PARAM_STR);
      $sth->bindParam(':id',       $id, PDO::PARAM_INT);
      $sth->execute();
    } catch (PDOException $e) {
        print('接続失敗:' . $e->getMessage());
        die();
    }
  }

  //post.phpで掲示板に投稿
  public function insertBoard(){
    try {
      $sql = 'INSERT INTO book_club (user_id, post) VALUE (:user_id, :post)';
      $sth = $this->dbh->prepare($sql);
      $sth->bindParam(":user_id", $_SESSION['user_id'], PDO::PARAM_STR);
      $sth->bindParam(":post",    $_SESSION['post'], PDO::PARAM_STR);
      $sth->execute();
  } catch (PDOException $e) {
      print('接続失敗:' . $e->getMessage());
      die();
  }
}



}
?>
