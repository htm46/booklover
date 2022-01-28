<?php
//if(!isset($_SESSION)){
session_start();
//}
require_once(ROOT_PATH .'Controllers/UsersController.php');
$user = new UserController();
$users = $user->role();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/action.js"></script>
  <title>BookLover</title>
</head>

<header>
  <div class="header-container">
    <div class="menu-item">
      <a href="index.php"><img src="/img/logo.png" alto="logo"></a>
    </div>

    <div class="menu-item">
      <a href="index.php">Home</a>
    </div>

    <div class="menu-item">
      <a href="about.php">BookLoverとは</a>
    </div>

    <div class="menu-item">
      <li class="dropdown"><a href="#">本を選ぶ</a>
        <ul class="dropdown-second">
          <li class="dropdown-item"><a href="detailBeginner.php">初級</a></li>
          <li class="dropdown-item"><a href="detailInter.php">中級</a></li>
          <li class="dropdown-item"><a href="detailAdv.php">上級</a></li>
        </ul>
      </li>
    </div>

    <?php if($users['user']['role'] === '0' || $users['user']['role'] === '1'):?>
    <div class="menu-item">
      <a href="board.php">ブッククラブ</a>
    </div>
    <?php endif;?>

    <?php if($users['user']['role'] === '0' || $users['user']['role'] === '1'):?>
    <?php else: ?>
      <div class="menu-item">
        <a href="login.php">ログイン</a>
      </div>
    <?php endif;?>

    <?php if($users['user']['role'] === '0' || $users['user']['role'] === '1'):?>
    <?php else: ?>
    <div class="menu-item">
      <a href="signup.php">新規登録</a>
    </div>
    <?php endif;?>

    <?php if($users['user']['role'] === '0' || $users['user']['role'] === '1'):?>
    <div class="menu-item">
      <a href="mypage.php">マイページ</a>
    </div>
    <?php endif;?>

    <?php if($users['user']['role'] === '1'):?>
    <div class="menu-item">
      <li class="admindropdown"><a href="#">管理者</a>
        <ul class="admindropdown-second">
          <li class="admindropdown-item"><a href="admin/adminUser.php">ユーザー</a></li>
          <li class="admindropdown-item"><a href="admin/adminReview.php">レビュー</a></li>
          <li class="admindropdown-item"><a href="admin/adminBook.php">書籍</a></li>
          <li class="admindropdown-item"><a href="admin/adminPost.php">掲示板投稿</a></li>
        </ul>
      </li>
    </div>
    <?php endif;?>

    <div class="menu-item">
      <form id="form" action="https://google.com/" method="GET">
        <input id="sbox" name="s" type="search" placeholder="Search..." />
        <button id="sbtn" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div><!-- header-container -->
</header>
</html>
