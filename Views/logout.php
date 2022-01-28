<?php
session_start();
$_SESSION = array();
session_destroy();
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
      <h1>ログアウトしました</h1>

      <div class="contents">
        <div class="contents-item">
          <a href="index.php" class="btn">トップへ</a>
        </div>

        <div class="contents-item">
          <a href="login.php" class="btn">ログインする</a>
        </div>
      </div><!-- contents -->
    </div><!-- mypage-container -->
  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
</body>
</html>
