<?php
session_start();
require_once(ROOT_PATH .'/Models/Db.php');
require_once(ROOT_PATH .'Controllers/UsersController.php');
$user = new UserController();
$user->login();
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
    <h1>Sign In！</h1>

    <form action="" method="GET">
      <div class="form-item">
        <label for="email"></label>
        <input type="text" name="email" value="<?php echo $email; ?>" placeholder=" Email" required></input>
      <?php if ($error != '') : ?>
    <p><font color="red"><?php echo $error; ?></font></p>
    <?php endif; ?>
      </div>

      <div class="form-item">
        <label for="password"></label>
        <input type="password" name="password" value="<?php echo $password; ?>" placeholder=" Password" required></input>
      </div>

      <div class="button-panel">
        <input type="submit" name="login" class="button" value="ログインする">
      </div>
    </form>

    <div class="form-footer">
      <a href="signup.php">アカウントを作成する</a>
    </div>
  </div>

  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
</body>
</html>
