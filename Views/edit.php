<?php
session_start();
require_once(ROOT_PATH.'Controllers/UsersController.php');
$user = new UserController();

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];

$error= [];
$mode='input';

if(isset($_POST['submit']) && $_POST['submit']){
  if($_POST['name'] == ''){
    $error[] = "ユーザーネームを入力してください。";
  }
  if($_POST['email'] == ''){
    $error[] = "メールアドレスを入力してください。";
  }
  if($_POST['password'] == ''){
    $error[] = "パスワードを入力してください。";
  }

  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
  }
  $_SESSION['name']     = h($_POST['name']);
  $_SESSION['email']    = h($_POST['email']);
  $_SESSION['password'] = h($_POST['password']);

  if(empty($error)){
    $mode = 'update';
  }else {
    $mode = 'input';
  }
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

  <div class="adminEdit-container">
    <h1 class="reviewtext">パスワード変更</h1>
    <p>
      <?php
        if($error){
         echo implode('<br>', $error );
        }
      ?>
    </p>
    <?php if( $mode === 'input' ){?>

    <form action="" method="POST">
      <div class="form-item">
        <label for="email">ユーザーネーム</label>
        <input type="text" name="name" value="<?php echo $name ?>"></input>
      </div>

      <div class="form-item">
        <label for="email">メールアドレス</label>
        <input type="text" name="email" value="<?php echo $email ?>"></input>
      </div>

      <div class="form-item">
        <label for="password">パスワード</label>
        <input type="password" name="password" value=""></input>
      </div>

      <div class="button-panel">
        <input type="submit" name="submit" class="btn" title="edit" value="変更する"></input>
      </div>
      <?php }elseif( $mode === 'update' ){?>
      <?php require('edited.php'); }?>
    </form>
  </div><!-- adminEdit-container -->
  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
</body>
</html>
