<?php
session_start();
error_reporting(0);
require_once(ROOT_PATH .'Controllers/UsersController.php');

if (!empty($_POST)) {
  if ($_POST['name'] === '') {
      $error['name'] = 'blank';
  }
  $pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
  if(!preg_match($pattern, $_POST['email']) || $_POST['email'] === '') {
      $error['email'] = 'blank';
  }
  if ($_POST['password'] === '') {
      $error['password'] = 'blank';
  }
  if (empty($error)) {
    $_SESSION['join'] = $_POST;
    header('Location: confirm.php');
    exit();
  }
}
if ($_REQUEST['action'] == 'rewrite' && isset($_SESSION['join'])) {
  $_POST = $_SESSION['join'];
}
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
    <form name="form" method="post">
      <div class="form-item">
        <label for="name"></label>
        <input id="name" type="text" name="name" maxlength="10" placeholder=" ユーザーネーム"
         value="<?php print(htmlspecialchars($_POST['name'], ENT_QUOTES)); ?>">
        <?php if ($error['name'] === 'blank'): ?>
         <p class="error">*氏名を入力してください</p>
        <?php endif; ?>
      </div>

      <div class="form-item">
        <label for="email"></label>
        <input id="email" type="text" name="email" placeholder=" Email"
         value="<?php print(htmlspecialchars($_POST['email'], ENT_QUOTES)); ?>">
        <?php if ($error['email'] === 'blank'): ?>
          <p class="error">※メールアドレスは***@***の形式でご記入下さい</p>
        <?php endif; ?>
      </div>

      <div class="form-item">
        <label for="password"></label>
        <input id="password" type="password" name="password" placeholder=" Password"
          value="<?php print(htmlspecialchars($_POST['password'], ENT_QUOTES)); ?>">
        <?php if ($error['password'] === 'blank'): ?>
          <p class="error">※パスワードを入力して下さい</p>
        <?php endif; ?>
      </div>

      <div class="button-panel">
        <input type="submit" class="button" title="Sign In" value="確認する"></input>
      </div>
    </form>

    <div class="form-footer">
      <p>すでにアカウントをお持ちですか？</p>
      <a href="login.php">ログインする</a>
    </div>
  </div>

  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
</body>
</html>
