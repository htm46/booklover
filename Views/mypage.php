<?php
session_start();
 if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
   $name = $_SESSION['name'];
 }
 else {
   header('Location: login.php');
   exit();
 }
 $name = $_SESSION['name'];
 $id   = $_SESSION['id'];
?>

<!DOCTYPE html>

<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script type="text/javascript" src="js/action.js"></script>
  <title>BookLover</title>
</head>

<body class="img">
  <header>
    <?php include('_inc/header.php'); ?>
  </header>
    <div class="mypage-container">
      <h1>マイページ</h1>
      <p>ようこそ <?php echo $name; ?> さん</p>

      <div class="contents">
        <div class="contents-item">
          <a href="review.php" class="btn">レビューを投稿する</a>
        </div>

        <div class="contents-item">
          <a href="edit.php" class="btn">登録情報を変更する</a>
        </div>

        <div class="contents-item">
          <a href="logout.php" class="btn">ログアウト</a>
        </div>
      </div><!-- contents -->
    </div><!-- mypage-container -->
  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
</body>
</html>
