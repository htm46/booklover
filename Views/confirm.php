<?php
session_start();
if (!isset($_SESSION['join'])) {
	header('Location: signup.php');
	exit();
}
require_once(ROOT_PATH .'Controllers/UsersController.php');
$user = new UserController();
$user->insert();
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

<body>
  <header>
    <?php include('_inc/header.php'); ?>
  </header>

  <div class="login-wrapper">
    <h1>Join Us！</h1>
    <form name="form" action="mypage.php" method="post">
      <input type="hidden" name="action" value="submit">
      <p>下記の内容をご確認の上、<br>送信ボタンを押してください。</p>

      <div class="form-item">
        <h3>【ユーザーネーム】</h3>
        <?php print(htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES)); ?>
      </div>

      <div class="form-item">
        <h3>【メールアドレス】</h3>
        <?php print(htmlspecialchars($_SESSION['join']['email'], ENT_QUOTES)); ?>
      </div>

      <div class="form-item">
        <h3>【パスワード】</h3>
        <?php
        $password = $_SESSION['join']['password'];
        for ($i = 0; $i < strlen($password); $i++) {
          echo '*';
        }
        ?>
      </div>

      <div class="button-panel">
        <input type="submit" class="button" title="Sign In" value="アカウントを作成する">
      </div>
    </form>

    <div class="form-footer">
      <a href="signup.php?action=rewrite">&laquo;&nbsp;訂正する</a>
    </div>
  </div>

  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
</body>
</html>
