<?php
session_start();
require_once(ROOT_PATH .'Controllers/UsersController.php');
$review = new UserController();
$params = $review->index();
$user_id   = $_SESSION['id'];
$error= [];
$mode='input';

if(isset($_POST['submit']) && $_POST['submit']){
  if($_POST['comment'] == ''){
    $error[]="レビューを入力してください。";
  }
  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
  }
  $_SESSION['title'] = h($_POST['title']);
  $_SESSION['comment'] = h($_POST['comment']);
  if(empty($error)) {
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
    <h1 class="reviewtext">レビューを投稿する</h1>
    <p><span>*</span>は必須項目です。<br /><br />
      <?php
        if($error){
         echo implode('<br>', $error );
        }
      ?>
    </p>

    <?php if( $mode === 'input' ){?>
    <div class="form">
      <form name="form" action="" method="post">
        <div class="input-item">
          <label>書籍名</label>
          <select name="title">
            <?php foreach($params['review'] as $review): ?>
              <option><?=$review['title'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="input-item">
          <label for="description">内容<span>*</span></label>
          <textarea id="comment" type="text" name="comment" style="height: 100px;" placeholder="内容" rows="10" cols="30"></textarea>
        </div>

        <div class="submit">
          <input class="confirm-button" type="submit" name="submit" value="投 稿">
        </div>
      <?php }elseif( $mode === 'update' ){?>
      <?php require_once('posted.php'); }?>
      </form>
    </div><!-- form -->
  </div><!-- adminEdit-container -->
  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
</body>
</html>
