<?php
session_start();
require_once(ROOT_PATH.'Controllers/AdminController.php');
require('validation.php');
$bookInfo = new AdminController();
$params = $bookInfo->view();
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
    <div class="admin-logo">
      <a href="/index.php"><img src="/img/logo.png" alto="logo"></a>
    </div>
  </header>

    <div class="adminEdit-container">
      <h1>管理者ページ<br>書籍編集</h1>
      <p><span>*</span>は必須項目です。<br /><br />
        <?php
          if($error){
           echo implode('<br>', $error );
          }
        ?></p>
      <?php if( $mode === 'input' ){?>

      <div class="form">
        <form name="form" action="" method="post" enctype="multipart/form-data">
          <div class="input-item">
            <label>書籍名<span>*</span></label>
            <input id="title" type="text" name="title" value="<?php echo $params['bookInfo']['title'] ?>">
          </div>

          <div class="input-item">
            <label>著者<span>*</span></label>
            <input id="author" type="text" name="author" value="<?php echo $params['bookInfo']['author'] ?>">
          </div>

          <div class="input-item">
            <label for="description">概要<span>*</span></label>
            <textarea id="description" type="text" name="description" style="height: 100px;" rows="30" cols="30"><?php echo $params['bookInfo']['description'] ?></textarea>
          </div>

          <div class="input-item">
            <label>レベル<span>*</span></label>
            <input id="level" type="text" name="level" value="<?php echo $params['bookInfo']['level'] ?>">
          </div>

          <div class="input-file">
            <lavel>画像<span>*</span></lavel>
            <input id="image" type="file" name="image" value="" accept="image/*">
          </div>

          <div class="submit">
            <input class="confirm-button" type="submit" name="submit" value="更  新">
          </div>
        <?php }elseif( $mode === 'update' ){?>
        <?php require_once('update.php'); }?>
        </form>
      </div><!-- form -->
    </div><!-- adminEdit-container -->
  <footer>
    <div class="admin-logo">
      <a href="/index.php"><img src="/img/logo.png" alto="logo"></a>
    </div>
  </footer>
</body>
<script>
  $('.confirm-button').on( "click",function(){
    if(!confirm('以上でよろしいですか？')){
      return false;
    }
  });
</script>
</html>
