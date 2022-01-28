<?php
session_start();
$user_id   = $_SESSION['id'];
$error= [];
$mode='input';

if(isset($_POST['submit']) && $_POST['submit']){
  if($_POST['board'] == ''){
    $error[]="投稿内容を入力してください。";
  }
  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
  }
  $_SESSION['board']   = h($_POST['board']);
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
    <h1 class="reviewtext">投稿する</h1>
    <p><span>*</span>は必須項目です。<br /><br />
      <?php
        if($error){
         echo implode('<br>', $error );
        }
      ?>
    </p>
    <?php if( $mode === 'input' ){?>
    <form action="" method="post">
      <div class="input-item">
        <label for="description">内容<span>*</span></label>
        <textarea id="board" type="text" name="board" style="height: 100px;" rows="10" cols="30"></textarea>
      </div>

      <div class="button-panel">
        <input type="submit" name="submit" class="btn" title="post" value="送 信"></input>
      </div>
      <?php }elseif( $mode === 'update' ){?>
      <?php require_once('posted.php'); }?>
    </form>
  </div><!-- adminEdit-container -->
  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
</body>
</html>
